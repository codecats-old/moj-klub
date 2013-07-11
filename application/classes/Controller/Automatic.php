<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Automatic extends Controller_Template{
	public function before()
	{
		if($this->request->is_ajax()===TRUE)$this->auto_render=FALSE;
		parent::before();
		View::bind_global('page_title', $this->page_title);
		$this->page_title=$this->request->controller();
		if(Auth::instance()->logged_in()===TRUE)
		{
			View::set_global('user', Auth::instance()->get_user()->as_array());
		}
	}
	public function after(){
		if($this->auto_render===FALSE)
		{
			echo json_encode(
				array(
					'View'=>$this->view_content->render(),
					'status'=>$this->status
				)
			);
		}
		else
		{
			if(isset($this->view_container)===FALSE)$this->view_container=$this->view_content;
			$view_main=View::factory('Container/Main')->set('view', $this->view_container);
			View::set_global('view_container', $view_main);
			$header_menu_access=new Controller_Header_Menu_Access();
			$this->template->set('header_menu_access',$header_menu_access->get_menu());
			if(Auth::instance()->logged_in()===TRUE)
			{
				View::set_global('user', Auth::instance()->get_user()->as_array());
				$roles=Auth::instance()->get_user()->roles->find_all();
				$cookie=implode(',', $roles->as_array());
				Cookie::set('roles', $cookie);
			}
			else
			{
				Cookie::set('roles', '-1');
			}
		}
		parent::after();
	}
	public function redirect_user($logged_in=TRUE)
	{
		if(Auth::instance()->logged_in()===$logged_in)
		{
			HTTP::redirect(Route::get('default')->uri());			
		}
	}
	public $template='Template';
	public $page_title;
	public $view_container;
	public $view_content;
	public $status;
}
