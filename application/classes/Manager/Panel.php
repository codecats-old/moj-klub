<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Panel extends Manager_Data{
	
	private $team = NULL;
	
	private $component_request_menu = NULL;
	
	protected $_values = array();
	
	public function __construct($object)
	{
		
		parent::__construct($object);
		
		$user = $this->object;
		
		if($user)
		{
			/*
			 * Initialize notificator
			 */
			$team = NULL;
			
			if ($user !== NULL AND $user->has('roles', ORM::factory('Role', array('name' => 'manager'))))
			{
				$team = $user->team;
			}
			
			$notificator = new Notificator($user, $team);
			
			if (
					$team !== NULL AND 
					$notificator->active == FALSE AND 
					$notificator->is_team_unread_messages()
			) 
			{
				$notificator->start_blink();
			}
	
			if (
					$team === NULL AND 
					$notificator->active == FALSE AND
					$notificator->is_user_unread_messages()
			) 
			{
				$notificator->start_blink();
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
	public function get_view($model_name = NULL)
	{
	//	Message::instance()->set(Message::ERROR, NULL, array('views' => $this->view_content));
		//save Content to messages to return by ajax
		return $this->view_content;
		switch ($model_name) {
			case 'team' :
				break;
				
			case 'user' :
				break;
				
			default :
				return $this->component_request_menu;
				break;
		}
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
			//creating the menu master is and user
			$menu = Menu::factory('Request', $properties['master']);
			$menu->deny_permissions($request);
		
			$single = View::factory('Component/Request/Single');
			$single->status = $menu->get_resource_by_user($properties['master'], NULL);
			$single->request = $request->as_array();
			$single->user = ORM::factory('User', $request->user_id)->as_array();
			array_push($this->component_request_menu->requests_views, $single);
		}
		$this->view_content = $this->component_request_menu->requests_views;
		
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
	
	/**
	 * Save last opened subwindow of component
	 * 
	 * @param unknown $value
	 * @return Manager_Panel
	 */
	protected function set_status($value)
	{
		//Cookie::set('panel', $value);
		Session::instance()->set(__CLASS__.'panel', $value);
		return $this;
	}
	
	public function get_status()
	{
		return Session::instance()->get(__CLASS__.'panel');
		//return Cookie::get('panel', NULL);
	}
}