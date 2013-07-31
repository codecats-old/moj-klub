<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * @package
 * @author t
 * @copyright (c) 2013
 */
class Controller_Automatic extends Controller_Template{
	/**
	 * @var View Default Template view
	 */
	public $template='Template';
	
	/**
	 * @var string Page title bind global in all views
	 */
	public $page_title;
	
	/**
	 * @var View represents the main content of HTML section after header tag and before footer tag. 
	 * Sets in after method to Template view as variable view_container
	 */
	public $view_container;
	
	/**
	 * @var View represents the main action content, its the response for async request or/and not initial request
	 */
	public $view_content;
	
	/**
	 * @var array status (Success, Error, Warning ect.) for some operation
	 */
	public $status;
	
	/**
	 * @var array validation errors
	 */
	protected $error;
	
	/**
	 * Checks request type and binds variable/s
	 * @see Kohana_Controller::before()
	 */
	public function before()
	{
		if (($this->request->is_ajax() === TRUE) OR ($this->request->is_initial()===FALSE))
			$this->auto_render=FALSE;

		parent::before();
		
		View::bind_global('page_title', $this->page_title);
		
		/*
		 * page title will be controler name (its bined as global)
		 */
		$this->page_title=$this->request->controller();
	/*	if (Auth::instance()->logged_in() === TRUE)
		{
			View::set_global('user', Auth::instance()->get_user()->as_array());
		}*/
	}
	
	/**
	 * Prepares answer for specific request type
	 * @see Kohana_Controller::after()
	 */
	public function after()
	{
		if ($this->auto_render === FALSE)
		{
			//Prepare JSON pack for ajax or result for HMVC request
			$json_array=array(
				'View'=>$this->view_content,
				'status'=>$this->status
			);
			
			//return suitable format for request
			if ($this->request->is_ajax())
			{
				$json_array['View']=$json_array['View']->render();
				echo json_encode($json_array);
			}
			elseif ($this->request->is_initial() === FALSE)
			{
				$json_array['View']=serialize($json_array['View']);
				$this->response->body(json_encode($json_array));
			}
		}
		else
		{
			//when no container sets request content as container
			if (isset($this->view_container) === FALSE)
			{
				$this->view_container=$this->view_content;
			}
			
			//sets main view
			$view_main=View::factory('Container/Main')->set('view', $this->view_container);
			$this->template->set('view_container', $view_main);
			
			/**
			 * create header menu TODO: Zend_ACL menu method
			 */
			$header_menu_access=new Controller_Header_Menu_Access;
			$this->template->set('header_menu_access',$header_menu_access->get_menu());
			
			if(Auth::instance()->logged_in() === TRUE)
			{
				View::set_global('user', Auth::instance()->get_user()->as_array());
				$roles=Auth::instance()->get_user()->roles->find_all();
				$cookie=implode(',', $roles->as_array());
				Cookie::set('roles', $cookie);
			}
			else
			{
				//TODO: set cookie to difference action executed by AJAX call
				Cookie::set('roles', '-1');
			}
		}
		parent::after();
	}
	
	/**
	 * Redirect user depends on logged in status
	 * @param string $logged_in
	 * @return Controller_Automatic
	 */
	public function redirect_user($logged_in = TRUE)
	{
		if (Auth::instance()->logged_in() === $logged_in)
		{
			HTTP::redirect(Route::get('default')->uri());			
		}
		return $this;
	}
	
	/**
	 * If set status only if status is not set
	 * @param string $state title for message - single word
	 * @param string $msg content of status
	 * @param array $properties
	 * @return Controller_Automatic
	 */
	public function set_status_message($state, $msg=null, $properties=array())
	{
		if ( ! isset($this->status))
		{
			$this->status['state']=$state;
			$this->status['message']=$msg;
			foreach($properties as $prop=>$val)
			{
				$this->status[$prop]=$val;
			}
			
			//sets default data
			if( ! empty($this->status['state']) AND empty($this->status['message']))
			{
				switch($this->status['state'])
				{
					case 'Warning':
						$this->status['message']='Please correct your data';
						break;
					case 'Success':
						$this->status['message']='Operation completed successfully';
						break;
				}
			}
		}
		return $this;
	}
	
	/**
	 * Clear message
	 * @return Controller_Automatic
	 */
	public function clear_status_message()
	{
		if (isset($this->status)) unset($this->status);
		return $this;
	}
}