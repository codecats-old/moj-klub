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
				$this->object = isset($object) ? $object : NULL;
				
				$this->team = isset($object) ? $object->team :NULL;
			}
		}
		parent::__construct($object);
	}
	
	public function index($template) 
	{
		$user = $this->object;
	
		$panel = Manager::factory('Panel', $user);
		$panel->set_data(
			array(
				'team' 	=> $this->team
			)
		);
		$panel->display(FALSE);

		$menu = Menu::factory('Header', $user);
		
		/*
		 * check for new notifications
		 */	
		$blink = Notificator::check_blink();
		
		$template
			->set('header_menu_access', $menu->get_resource_by_user($user, NULL))
			->set('component_request_menu', $panel)
			->set('header_management_icon', 
					array(
						'blink' => 	$blink['active']
					)
			);
	}
	
	/**----------------------------------------------------------------------------------*/
	public function set_view_details($view){}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data){}
}