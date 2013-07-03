<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Automatic extends Controller_Template{
	public function before()
	{
		if($this->request->is_ajax()===TRUE)$this->auto_render=FALSE;
		parent::before();
		View::bind_global('page_title', $this->page_title);
		View::bind_global('view_container', $this->view_container);
		$this->view_container==View::factory('Container/Main');
		$this->page_title=$this->request->controller();
		
	}
	public function after(){
		parent::after();
		if($this->auto_render===FALSE)
		{
			echo $this->view_container;
		}
	}
	public $template='Template';
	public $page_title;
	public $view_container;
}
