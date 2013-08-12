<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Image extends Controller_Automatic{
	public function action_index()
	{

		echo '<hr><hr><hr>';
		echo 'test';
	/*	$team = Auth::instance()->get_user()->team;
		$photo = ORM::factory('Photo');
		$photo->address = 'www2';
		$photo->team = $team;
		$photo->save();*/
		
	}
	public function action_show_user_avatar()
	{
		$id = $this->request->param('id');
		$width = (int) $this->request->param('width');
		$height = (int) $this->request->param('height');
		$ext = $this->request->param('ext');
		$render_success = FALSE;
		if ($id AND $width AND $height)
		{
			$this->auto_render = FALSE;
			$filename = DOCROOT.'upload/avatars/users/'.$id.'.'.$ext;
			if (is_file($filename))
			{
				$this->render_image($filename, $width, $height);
				$render_success = TRUE;
				
			}
		}
		if($render_success === FALSE)
		{
			$this->response->status(404);
		}
		else
		{
			$this->page_title = '( '.$width.' ) x ( '.$height.' )';
		}
	}
	public function action_delete_team_photo()
	{
		$delete_success = FALSE;
		$team = Auth::instance()->get_user()->team;
		$photo = $team->photo;
		//decode photo id
	//	$id = Encrypt::instance()->decode(hex2bin($this->request->param('id')));
		$id = Coder::instance()->from_url($this->request->param('id'));
	
		/**
		 * Every team photo is needed to find out photo id belongs to right team
		 *
		*/

	
		//$ids_photo = array_map(function ($p){return $p->id;}, $photo->find_all()->as_array());
	
		//photos is cloned because validation chceck if id exists in photos
		$validator = $photo->validate_delete(
				array('delete_photo' => $id, 'photos' => clone $photo)
		);
	
		if ($validator->check())
		{
			$p = $photo->where('id', '=', $id)->find();
				
			//CAN'T USE ORM - KOHANA 3.3 ORM NOT SUPPORT TRANSACTIONs
			$db = Database::instance();
			$db->begin();
			try
			{
				//save path to variable before delete from DB
				$file_path = $p->address;
	
				DB::delete('photos')->where('id', '=', $id)->execute();
	
				//chceck if path is file and can be unlink if not database get wrong data
				if (is_file(DOCROOT.$file_path) === TRUE AND unlink(DOCROOT.$file_path) === TRUE)
				{
					$db->commit();
					$delete_success = TRUE;
				}
				else
				{
					$db->rollback();
					throw new ErrorException('Can\'t unlink file path: '.DOCROOT.$file_path);
				}
			}
			catch (ErrorException $ex)
			{
				Message::instance()->set(Message::ERROR, $ex->getMessage());
				$this->content = print_r($ex->getMessage(), TRUE);
				echo $this->content;
				$this->error = array('Exception' => $ex->getMessage());
			}
			catch (Database_Exception $db_ex)
			{
				Message::instance()->set(Message::ERROR, $db_ex->getMessage());
				$this->content = print_r($db_ex->getMessage(), TRUE);
				echo $this->content;
			}
		}
		else
		{
			$this->error = $validator->errors('Image/Photo');
		}
	
		if ($delete_success === FALSE)
		{
			Message::instance()->set(Message::WARNING);
	
			$form_upload = Message::instance()->get_view('Component/Info/Warning')
			->set('info', 'The operation failed')
			->set('errors', $this->error);
			$this->view_content = $form_upload;
	
	
	
		}
		else
		{
			Message::instance()->set(Message::SUCCESS);
	
			$view_success = Message::instance()->get_view('Component/Info/Success')
			->set('info', 'zmiana będzie widoczna do 5 min');
			$this->view_content = $view_success;
	
	
		}
	}

	public function action_add_team_photo()
	{
		$upload_success = FALSE;
		$post = $this->request->post();
		$files = $_FILES;
		
		$team = Auth::instance()->get_user()->team;
		
		if ($post)
		{
			$photo = ORM::factory('Photo');
			
			$validator = $photo->validate_add($files);
			if ($validator->check())
			{
				$save_dir = 'gallery/teams/'.$team->id;
				$this->make_dir_if_not_exists($save_dir);
				
				$file_path = $this->save_image($files['add_photo'], $save_dir,
					array(
						'name' => (new DateTime)->getTimestamp(),
						'width' => 1024,
						'height' => 800
					)
				);
				try
				{
					$photo->address = $file_path;
					$photo->team = $team;
					$photo->save();
					$upload_success = TRUE;
				}
				catch (Database_Exception $dbex)
				{
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content = print_r($dbex, TRUE);
				}
			}
			else
			{
				$this->error = $validator->errors('Image/Photo');
			}
		}
		
		if ($upload_success === FALSE)
		{
			Message::instance()->set(Message::WARNING);
				
//			$form_upload = $this->get_view_upload('Photo')->set('error', $this->error);
			$form_upload = Message::instance()
				->get_view('Component/Form/Change/Photo')
				->set('error', $this->error);
			$this->view_content = $form_upload;
		
				
		
		}
		else
		{
			Message::instance()->set(Message::SUCCESS);
				
			$view_success = Message::instance()->get_view('Component/Info/Success')
			->set('info', 'new photo has been added');
			$this->view_content = $view_success;
				
		
		}
	}
	public function action_change_team_avatar()
	{
		$upload_success = FALSE;
		$post = $this->request->post();
		$files = $_FILES;
		
		
		$team = Auth::instance()->get_user()->team;
		$avatar = $team->avatar;//ORM::factory('Avatar');
		
		if ($post)
		{
			$validator = $avatar->validate_team_avatar($files);
			if ($validator->check())
			{
				$file_path = $this->save_image($files['avatar'], 'avatars/teams', 
					array(
						'name' => $team->id,
						'width' => 80,
						'height' => 80
					)
				);
				try
				{
					
					//Save new avatar if not exists
					if ($avatar->loaded() === FALSE)
					{	
						$avatar->path = $file_path;
						$avatar->save();
					}
					//Update avatar - in real nothing was changed (path for the club still the same
					$team->avatar = $avatar;
					$team->save();
					$upload_success = TRUE;
				}
				catch (Database_Exception $dbex)
				{
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content = print_r($dbex, TRUE);
				}
			}
			else
			{
				$this->error = $validator->errors('Image/Avatar');
			}
		}
		
		if ($upload_success === FALSE)
		{
			Message::instance()->set(Message::WARNING);
			
			$form_upload = $this->get_view_upload('Avatar')->set('error', $this->error);
			
			$this->view_content = $form_upload;
				
			
		
		}
		else
		{
			Message::instance()->set(Message::SUCCESS);
			
			$view_success = Message::instance()->get_view('Component/Info/Success')
			->set('info', 'zmiana będzie widoczna do 5 min');
			$this->view_content = $view_success;
			
		
		}
	}
	public function action_change_user_avatar()
	{
		if ($this->request->is_initial())HTTP::redirect(Route::get('default')->uri());
		$this->redirect_user(FALSE);
		$upload_success = FALSE;
		$post = $this->request->post();
		$files = $_FILES;
		
		$avatar = ORM::factory('Avatar');
		$user = Auth::instance()->get_user();
		
		if ($post)
		{
			$validator = $avatar->validate_user_avatar($files);
			if ($validator->check())
			{
				$file_path = $this->save_image($files['avatar'], 'avatars/users',
					array(
						'name' => Auth::instance()->get_user()->id,
						'width' => 80,
						'height' => 80
					)
				);
				$avatar->find();
				try
				{
					//Save new avatar if not exists
					if ($avatar->loaded() === FALSE)
					{
						$avatar->path = $file_path;
						$avatar->save();
					}
					//Update avatar
					$user->avatar = $avatar;
					$user->save();
					$upload_success = TRUE;
				}
				catch (Database_Exception $dbex)
				{
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content = print_r($dbex, TRUE);
				}		
			}
			else
			{
				$this->error = $validator->errors('Image/Avatar');
			}
		}
		if ($upload_success === FALSE)
		{
			Message::instance()->set(Message::WARNING);
			$form_upload = $this->get_view_upload('Avatar')->set('error', $this->error);
			$this->view_content = $form_upload;
			
		

		}
		else
		{			
			Message::instance()->set(Message::SUCCESS);
			$view_success = Message::instance()->get_view('Component/Info/Success');
			$view_success
				->set('info', 'zmiana będzie widoczna do 5 min');
			$this->view_content = $view_success;
		

		}

	}
	public function get_view_upload($form_name)
	{
		return View::factory('Component/Form/Change/'.$form_name);
	}
	protected function save_image($image, $dir, $properties)
	{
		$directory = DOCROOT.'upload/'.$dir.'/';
		if ($file = Upload::save($image, null, $directory))
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
	protected function make_dir_if_not_exists($dir)
	{
		$dir = DOCROOT.'upload/'.$dir.'/';
		if ( ! is_dir($dir))
		{
			// Create the directory
			mkdir($dir, 0777, TRUE);
		
			// Set permissions (must be manually set to fix umask issues)
		//	chmod($dir, 0777);
		}
	}
}