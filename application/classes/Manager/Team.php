<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Team extends Manager_Data{

	/**
	 * Logged in user
	 *
	 * @var ORM
	 */
	protected $user;
	
	/**
	 * Helps manipulate teams action on logged in user
	 * 
	 * @param ORM $user
	 */
	public function set_user($user)
	{
		$this->user = $user;
	}
	/*ACTIONS*/
	
	/**
	 * 
	 */
	public function index()
	{
		$team = $this->object;
		if ($team->loaded())
		{
			$this->view_container=View::factory('Container/Team/Main')
			->set('modal_title', 'confirm');
			$this->set_view_details($this->view_container);
		}
		else
		{
			$ask_view=View::factory('Component/Info/Team/Ask');
			$this->view_container=View::factory('Container/Team/Main')
			->set('view_top', $ask_view)
			->set('modal_title', 'registrate')
			->set('view_details', null)
			->set('view_component_about', null);
		}
	}
	
	public function create($post)
	{
		$team = $this->object;
		$user = $this->user;
		
		if($post)
		{
			$validator=$team->validate_create($post);
			if($validator->check())
			{
				$this->set_data($post);
				try
				{
					$team->save();
					$user->team=$team;
					$user->save();
					
					Manager::factory('User', $user)->add_role('manager');
					$this->success = TRUE;
				}
				catch(Database_Exception $dbex)
				{
					Message::instance()->set(Message::ERROR, $dbex->getMessage());
					//Message::instance()->set(Message::ERROR, 'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex->getMessage(), TRUE);
				}
			}
			else
			{
				$this->error=$validator->errors('Team/Create');
			}
		}
		$this->set_create_result($post);
	
	}
	public function set_create_result($post)
	{
		if ($this->success === FALSE)
		{
			$form_create=View::factory('Component/Form/Create/Team')
			->set('team', $post)
			->set('error', $this->error);
			$this->view_content=$form_create;
		
			Message::instance()->set(Message::WARNING);
		}
		else
		{
			Message::instance()->set(Message::SUCCESS, NULL,
			array(
			'reload' => TRUE
			)
			);
			
			$this->view_content=Message::instance()->get_view('Component/Info/Success')
			->set('info', 'zarządzaj klubem');
		}
	}
	
	public function set_view_details($view)
	{
		$view_details=$this->get_view_user_details($this->object);
		$view_about=$this->get_view_about();

		$view
		->set('view_details', $view_details)
		->set('view_component_about', $view_about);
		return $this;
	}


	public function set_data($data)
	{
		$team = $this->object;

		$zip = null;
		if(empty($data['zip_code']) === FALSE)
		{
			$zip=implode('-', array($data['zip_code'], $data['zip_code2']));
		}
		foreach($data as $key => $val)
		{
			if($key !== 'zip_code' AND $key !== 'zip_code2')
			{
				$this->set_if_not_empty($team, $data, $key);
			}
			else
			{
				if($key === 'zip_code' AND empty($zip) === FALSE)
				{
					$team->set($key, $zip);
				}
			}
		}
	}

	protected function get_view_about()
	{
		$team = $this->object;

		$view = View::factory('Component/About/Team');
		$players = $team->get_players();
		$capitan = $team->get_capitan();
		$staff = $team->get_staff();
		$manager = $team->get_manager();
		$coach = $team->get_coach();
		$view->set('team', $team->as_array())
		->set('players', $players->as_array())
		->set('capitan', $capitan->as_array())
		->set('staff', $staff->as_array())
		->set('manager', $manager->as_array())
		->set('coach', $coach->as_array());
		return $view;
	}

	protected function get_view_user_details()
	{
		$team = $this->object;
		$user = $this->user;
		
		$view=View::factory('Component/Menu/Team/Details');
		$view_team_change_details = View::factory('Component/Menu/Team/Change/Details');
		$view_team_change_manage = View::factory('Component/Menu/Team/Change/Manage');
		$view_team_change_avatar = View::factory('Component/Menu/Team/Change/Avatar');

		$menu = Menu::factory('Team', $user);

		$view_team_change_details->set('options',
				$menu->get_resource_by_user($user->username, 'edit'));
		$view_team_change_manage->set('options',
				$menu->get_resource_by_user($user->username, 'manage'));
		$view_team_change_avatar->set('options',
				$menu->get_resource_by_user($user->username, 'avatar'));

		$view->set('view_team_change_avatar', $view_team_change_avatar)
		->set('view_team_change_details', $view_team_change_details)
		->set('view_team_change_manage', $view_team_change_manage);

		$manager = $team->get_manager();
		$coach = $team->get_coach();
		$capitan = $team->get_capitan();
		$view->set('user', $user->as_array())
		->set('team',$team->as_array())
		->set('manager', $manager->as_array())
		->set('capitan', $capitan->as_array())
		->set('coach', $coach->as_array());
		return $view;
	}
}