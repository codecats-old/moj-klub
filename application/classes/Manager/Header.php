<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Header extends Manager_Data{
	
	private $team = NULL;
	
	private $component_request_menu = NULL;
	
	public function __construct($object)
	{
		if (Auth::instance()->logged_in() === TRUE)
		{
			$object = Auth::instance()->get_user();
			
			if ($object->loaded())
			{
				$this->team = $object->team;
			}
		}
		parent::__construct($object);
	}
	
	public function index($template) 
	{
		$user = $this->object;
	//	$team = ($user !== NULL) ? $user->team->as_array() : NULL;
	//	$this->create_panel();
	
		$panel = Manager::factory('Panel', $user);
		$panel->set_data(
			array(
				'team' 	=> $this->team
			)
		);
		
		$panel->create_panel(FALSE);
		
		$menu = Menu::factory('Header', $user);
		$template
			->set('header_menu_access', $menu->get_resource_by_user($user, NULL))
			->set('component_request_menu', $panel);
	}
	

	
	/**----------------------------------------------------------------------------------*/
	public function set_view_details($view){}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data){}
}