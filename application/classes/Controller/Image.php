<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Image extends Controller_Automatic{
	public function action_index()
	{

		echo '<hr><hr><hr>';
		echo 'test';

	}
	public function action_show_user_avatar()
	{
		$id=$this->request->param('id');
		$width=(int) $this->request->param('width');
		$height=(int) $this->request->param('height');
		$ext=$this->request->param('ext');
		$render_success=FALSE;
		if($id AND $width AND $height)
		{
			$this->auto_render=FALSE;
			$filename=DOCROOT.'upload/avatars/users/'.$id.'.'.$ext;
			if(is_file($filename))
			{
				$this->render_image($filename, $width, $height);
				$render_success=TRUE;
				
			}
		}
		if($render_success===FALSE)
		{
			$this->response->status(404);
		}
		else
		{
			$this->page_title='( '.$width.' ) x ( '.$height.' )';
		}
	}
	public function action_change_user_avatar()
	{
		if($this->request->is_initial())HTTP::redirect(Route::get('default')->uri());
		$this->redirect_user(FALSE);
		$upload_success=FALSE;
		$post=$this->request->post();
		$files=$_FILES;
		
		$avatar=ORM::factory('Avatar');
		$user=Auth::instance()->get_user();
		
		if($post)
		{
			$validator=$avatar->validate_user_avatar($files);
			if($validator->check())
			{
				$file_path=$this->save_image($files['avatar'], 'avatars/users',
					array(
						'name'=>Auth::instance()->get_user()->id,
						'width'=>80,
						'height'=>80
					)
				);
				$avatar->find();
				try{
					if($avatar->loaded()===FALSE)
					{
						$avatar->path=$file_path;
						$avatar->save();
					}
					$user->avatar=$avatar;
					$user->save();
					$upload_success=TRUE;
				}catch(Database_Exception $dbex){
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex, TRUE);
				}		
			}
			else
			{
				$this->error=$validator->errors('Image/Avatar');
			}
		}
		if($upload_success===FALSE)
		{
			$form_upload=$this->get_view_upload('Avatar')->set('error', $this->error);
			$this->view_content=$form_upload;
			
			Message::instance()->set(Message::WARNING);

		}
		else
		{
			$view_success=View::factory('Component/Info/Success')
				->set('info', 'zmiana będzie widoczna do 5 min');
			$this->view_content=$view_success;
			Message::instance()->set(Message::SUCCESS);

		}

	}
	public function get_view_upload($form_name)
	{
		return View::factory('Component/Form/Change/'.$form_name);
	}
	protected function save_image($image, $dir, $properties)
	{
		$directory=DOCROOT.'upload/'.$dir.'/';
		if($file=Upload::save($image, null, $directory))
		{
			$filename=$properties['name'].'.'.substr(strstr($image['type'], '/'),1);
			Image::factory($file)
				->resize($properties['width'], $properties['height'], Image::AUTO)
				->save($directory.$filename);
			unlink($file);
			return implode('/', array('upload', $dir, $filename));
		}
		return FALSE;
	}
	protected function render_image($filename, $width, $height)
	{
		// Calculate ETag from original file padded with the dimension specs
		$etag_sum = md5(base64_encode(file_get_contents($filename)).$width.','.$height);
		
		// Render as image and cache for 1 hour
		$this->response->headers('Content-Type', 'image/jpeg')
			->headers('Cache-Control', 'max-age='.Date::HOUR.', public, must-revalidate')
			->headers('Expires', gmdate('D, d M Y H:i:s', time() + Date::HOUR).' GMT')
			->headers('Last-Modified', date('r', filemtime($filename)))
			->headers('ETag', $etag_sum);
		if (
			$this->request->headers('if-none-match') AND
			(string) $this->request->headers('if-none-match') === $etag_sum)
		{
	        $this->response->status(304)
                ->headers('Content-Length', '0');
		}
		else
		{
			$result = Image::factory($filename)
				->resize($width, $height, IMAGE::NONE)->render('jpg');
		
		$this->response->body($result);
		}
	}
}