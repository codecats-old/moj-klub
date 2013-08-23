<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Panel extends Manager_Data{
	
	private $team = NULL;
	
	private $component_request_menu = NULL;
	
	protected $_values = array();
	
	public function __construct($object)
	{
		
		parent::__construct($object);
		
		if($this->object)
		{
			$notificator = new Notificator($this->object, $this->object->team);
		
		
			if ( $notificator->is_user_unread_messages())
			{
		//		throw new Exception();
			}
			
			if ( $notificator->is_team_unread_messages())
			{
				
			}
		}
	}
	
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
	

	/**
	 * Check what menu user had last time, based on session.
	 * 
	 * @param unknown $full_site_view
	 * @return Manager_Panel
	 */
	public function display($full_site_view)
	{
		switch ($this->get_status())
		{
			case 'team' :
				$this->team($full_site_view);
				break;
				
			case 'user' :
				$this->user($full_site_view);
				break;
				
			default :
				$this->user($full_site_view);
				break;
		}
		
		return $this;
	}
	
	public function index($template) 
	{

	}
	
	public function team($full_site_view)
	{
		$team = $this->team;
		
		if ( ! $team) return;
		
		$master = $this->object;
		
		return $this->set_view($team,
			array(
				'order_by' 			=> 'date',
				'direction'			=> 'DESC',
				'column'			=> 'request',
				'full_site_view' 	=> $full_site_view,
				'team'				=> $team->as_array(),
				'master'			=> $master 
			),
			__FUNCTION__
		);

	}
	public function user($full_site_view)
	{
		$master = $this->object;
		
		if ( ! $master) return;
		
		$team = isset($this->team) ? $this->team->as_array() : NULL;
		
		return $this->set_view($master,
			array(
				'order_by' 			=> 'date',
				'direction'			=> 'DESC',
				'column'			=> 'request',
				'full_site_view' 	=> $full_site_view,
				'team'				=> $team,
				'master'			=> $master
			),
			__FUNCTION__
		);
	}
	
	public function set_view(ORM $model, array $properties = array(), $status = NULL)
	{
		$column = $properties['column'];
		$count = $model->$column->count_all();
		
		$pagination = Pagination::factory(array(
				'total_items'=>$count
		));
		
		$requests = $model->$column->order_by($properties['order_by'], $properties['direction'])
			->limit($pagination->items_per_page)
			->offset($pagination->offset)->find_all();
		
		$this->component_request_menu = View::factory('Component/Request/Menu',
				array(
						'panel_style'	=> $properties['full_site_view'],
						'pagination' 	=> $pagination,
						'team'			=> (isset($properties['team']) ? $properties['team'] : NULL)
				)
		);
		
		$this->component_request_menu->requests_views = array();
		
		foreach ($requests as $request)
		{
			//creating the menu
			$menu = Menu::factory('Request', $properties['master']);
			$menu->deny_permissions($request);
		
			$single = View::factory('Component/Request/Single');
			$single->status = $menu->get_resource_by_user($properties['master'], NULL);
			$single->request = $request->as_array();
			$single->user = ORM::factory('User', $request->user_id)->as_array();
			array_push($this->component_request_menu->requests_views, $single);
		}
		
		$this->set_status($status);
		
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
	
	protected function set_status($value)
	{
		//Cookie::set('panel', $value);
		Session::instance()->set(__CLASS__.'panel', $value);
		return $this;
	}
	
	protected function get_status()
	{
		return Session::instance()->get(__CLASS__.'panel');
		//return Cookie::get('panel', NULL);
	}
}