<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Automatic extends Controller_Template{
	public function before()
	{
		if($this->request->is_ajax()===TRUE)$this->auto_render=FALSE;
		parent::before();
		View::bind_global('page_title', $this->page_title);
//		View::bind_global('view_container', $this->view_container);
//		$this->view_container=View::factory('Container/Main');
		$this->page_title=$this->request->controller();
		
	}
	public function after(){
		if($this->auto_render===FALSE)
		{
			$output=$this->view_content->render();
			echo $output;
		}
		else
		{
			if(isset($this->view_container)===FALSE)$this->view_container=$this->view_content;
			$view_main=View::factory('Container/Main')->set('view', $this->view_container);
			View::set_global('view_container', $view_main);
		}
		parent::after();
	}
	public $template='Template';
	public $page_title;
	public $view_container;
	public $view_content;
}
