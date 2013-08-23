<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Panel extends Manager_Data{
	
	private $team = NULL;
	
	private $component_request_menu = NULL;
	
	protected $_values = array();
	
	public function __set($key, $value)
	{
		$this->_values[$key] = $value;
	}
	public function __get($key)
	{
		return $this->_values[$key];
	}
	
	public function __toString()
	{
		return $this->component_request_menu->render();
	}
	
	public function index($template) 
	{
		$user = $this->object;
	//	$team = ($user !== NULL) ? $user->team->as_array() : NULL;
		$this->create_panel();
		$menu = Menu::factory('Header', $user);
		$template
			->set('header_menu_access', $menu->get_resource_by_user($user, NULL))
			->set('component_request_menu', $this->component_request_menu);
	}
	
	public function create_panel($full_site_view)
	{
		
		$team = $this->team;
		$master = $this->object;
		
		$count = $team->request->order_by('date', 'DESC')->count_all();
		
		
		$pagination = Pagination::factory(array(
				'total_items'=>$count
		));
		$requests = $team->request->order_by('date', 'DESC')
		->limit($pagination->items_per_page)
		->offset($pagination->offset)->find_all();
		
		
		$this->component_request_menu = View::factory('Component/Request/Menu',
				array(
						'panel_style'	=> $full_site_view,
						'pagination' 	=> $pagination,
						'team'			=> $team->as_array()
				)
		);
		

		$this->component_request_menu->requests_views = array();
		foreach ($requests as $request)
		{
			//creating the menu
			$menu = Menu::factory('Request', $master);
			$menu->deny_permissions($request);
				
			$single = View::factory('Component/Request/Single');
			$single->status = $menu->get_resource_by_user($master, NULL);
			$single->request = $request->as_array();
			$single->user = ORM::factory('User', $request->user_id)->as_array();
			array_push($this->component_request_menu->requests_views, $single);
		}
		
		return $this;
	}
	
	/**----------------------------------------------------------------------------------*/
	public function set_view_details($view){}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */

	public function set_data($data)
	{
		foreach ($data as $key => $field)
		{
			$this->$key = $field;
		}
	}
}