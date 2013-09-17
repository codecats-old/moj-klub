<?php defined('SYSPATH') OR die('No direct script access.');

/**
 *
 * @author t
 *
 * Manipulate with views and object data - work like controller with low level staff,
 * actions of managers called always from controller.
 * 
 */
class Manager_Management extends Manager_Data{
	
	/**
	 * Team object context
	 * 
	 * @var Model_Team
	 */
	private $team 		= NULL;
	
	/**
	 * 
	 * @var Model_User
	 */
	private $master 	= NULL;
	
	/**
	 * 
	 * @var Model_User
	 */
	private $new_member = NULL;
	
	/**
	 * @var Menu_Management
	 */
	protected $menu		= NULL;
	
	/**
	 * Initialize default management menu
	 */
	protected function __initialize()
	{
		$this->menu = Menu::factory('Management', $this->master);
		$this->menu->deny_permissions($this->object, $this->master);
	}
	
	/**
	 * Choose the action which client with Management permissions choosen for consider.
	 * 
	 * @param string $operation
	 * @return boolean
	 */
	public function consider_operation($operation)
	{
		if ( ! $this->menu->is_allowed($this->master->username, 'consideration')) return FALSE;
		
		switch ($operation)
		{
			case 'accept' :
				$this->consider_accept();
				break;
				
			case 'refuse' :
				$this->consider_refuse();
				break;
				
			case 'cancel' :
				$this->consider_cancel();
				break;
				
			default :
				break;
		}
		$this->set_consider_operation_result();
		
		return TRUE;
	}
	
	/**
	 * Setting views from consideration action
	 */
	public function set_consider_operation_result()
	{
		$this->view_content = 	$this->get_view_detail_single();
		$this->view_container = current($this->get_view_detail_single());
	}
	
	/**
	 * Sets data for join club action
	 */
	public function join_club()
	{
		$request = 			$this->object;
		$team = 			$this->team;
		$this->new_member = $this->master;

		$validator = $request->validate_join($this->new_member->id, $team->id);
		
		if ($validator->check())
		{
			$request
				->where('team_id', '=', $team->id)
				->where('user_id', '=', $this->new_member->id)
				->find();
		
			if ($request->loaded())
			{
				$request->date = date(Date::$timestamp_format);
				$request->update();
				$this->success = TRUE;
			}
			else
			{
				$request->team = $team;
				$request->user = $this->new_member;
				$request->save();
				$request->reload();
				$this->success = TRUE;
			}
		}
	
		$this->set_join_club_result($request);
	}
	
	/**
	 * 
	 * @param Model_Request $request
	 */
	public function set_join_club_result($request)
	{
		if ($this->success === TRUE)
		{
			$this->set_view_success($request->id, 'Wait some time for accept please.');
		}
		else 
		{
			$this->set_view_warning(NULL);
		}
	}
	
	/**
	 * 
	 * @param int $team_id
	 */
	public function cancel_join_club($team_id)
	{
		$request = 		$this->object;
		$user = 		$this->master;
		$request_id = 	NULL;
		
		$validator = $request->validate_join_cancel($user->id, $team_id);
		
		if ($validator->check())
		{
			/**
			 * If request loaded it then cancel it
			 */
			if ($request->loaded())
			{
				$request_id = $request->id;
				/**
				 *
				 */
				$request->delete();
				$this->success = TRUE;
			}
		}
		else
		{
			$this->error = $validator->errors('Request/Join/Cancel');
		}
		
		$this->set_cancel_join_club_result($request_id);
	}
	
	/**
	 * 
	 * @param int $request_id
	 */
	public function set_cancel_join_club_result($request_id)
	{
		if ($this->success === TRUE)
		{
			$this->set_view_success($request_id, 'Canacel success');
		}
		else
		{
			$this->set_view_warning();
		}
		
	}
	
	public function leave($confirm)
	{
		if ($confirm === TRUE)
		{
			$user = $this->object;
			$team = $user->team;
			
			if ( ! $team->loaded())
			{
				return FALSE;
			}
			
			/**
			 * If manager want to leave the team coach takes the role manager, if no coach and
			 * the club is not empty manager can't leave the club, if the club is empty
			 * it will be deleted
			 */
			$role_manager = ORM::factory('Role', array('name' => 'manager'));
			if ($user->has('roles', $role_manager))
			{
				/**
				 * Check if team is not empty
				 */
				if ($team->users->where('id', '<>', $user->id)->count_all() > 0)
				{
					$new_manager = $team->get_coach();
					if ($new_manager->loaded() AND $new_manager->id !== $user->id)
					{
						//add role manager to new_manager, leave manager
						$new_manager->add('roles', $role_manager);
						$this->leave_club($user);
						$this->success = TRUE;
					}
					else
					{
						$this->success = FALSE;
						$this->error = array('can\'t leave the club because team can\'t stay without manager');
					}
				}
				else
				{
					//delete the empty team, leave manager
					$this->leave_club($user);
					$team->delete();
					$this->success = TRUE;
				}
			}
			else
			{
				$this->leave_club($user);
				$this->success = TRUE;
			
			}
		}
		
		$this->set_leave_result($confirm);
		return TRUE;
	}
	
	/**
	 * Difference success view becauser reload is needed
	 */
	public function set_leave_result($confirm)
	{
		if ($confirm === TRUE)
		{
			if ($this->success)
			{
				Message::instance()->set(Message::SUCCESS, 'you just leave the club',
					array(
						'redirect' => TRUE
					)
				);
				$component_info_success = Message::instance()->get_view('Component/Info/Success');
				$this->view_container = $component_info_success;
			}
			else
			{
				$this->set_view_warning();
			}
		}
		else 
		{
			$info_confirm = View::factory('Component/Info/Confirm');
			$info_confirm->title = 'action leave';
			$info_confirm->content = 'You want leave the club, are you sure?';
			$this->view_container = $info_confirm;
		}
	}
	
	/**
	 * Leave the club by given user. Cleans up the necessary requests and delete unique roles
	 * that user had in team which just leave. Cookies are refreshed because user which quit
	 * the club may be client logged in himself. 
	 * 
	 * @param Model $user
	 */
	protected function leave_club($user)
	{
		//user has no club
		$user->team_id = NULL;
		$user->update();
	
		//user has no roles
		$roles = Manager_Role::$unique_roles;
	
		foreach ($roles as $role)
		{
			//if user has roles remove them
			$user_role = ORM::factory('Role', array('name' => $role));
			if ($user->has('roles', $user_role))
			{
				$user->remove('roles', $user_role);
			}
		}	
		//find all requests (accepted one, refused and canceled)
		$requests = $user->request->find_all();
		foreach ($requests as $request)
		{
			//delete requests
			$request->delete();
		}
	
		//update session
		Auth::instance()->get_user()->reload();
		/**
		 * refresh technical cookies
		*/
		Request::factory(
			Route::get('default')->uri(
					array(
						'controller' => 'ajax',
						'action' 	 => 'roles'
					)
			)
		)
		->execute();
	}
	/**
	 * Accept request
	 */
	protected function consider_accept()
	{
		/**
		 * Set join info: deactive other request from member, 
		 * set status for accepted request
		 */
		$requests = $this->new_member->request->find_all();
		
		
		/**
		 * Deactive other user's requests, sets suitable status for accepted request
		 */
		foreach ($requests as $request)
		{
			/**
			 * Set considered request status
			 */
			if ($request->id === $this->object->id)
			{
				//debug:
				$this->object = $request;
				//
				
				$request->status = TRUE;
	
			}

			$request->active 	= FALSE;
			$request->read 		= Date::formatted_time();
			$request->update();

		}
		/**
		 * Set new team member
		 */
		$this->new_member->team = $this->team;
		$this->new_member->update();

	}
	/**
	 * Set status for current request to null and read time
	 */
	protected function consider_refuse()
	{
	///	$request = $this->new_member->request->where('team_id', '=', $this->team->id)->find();
		$request = 			$this->object;
		$request->active = 	$request->status = FALSE;
		$request->read = 	Date::formatted_time();
		$request->update();
	}
	
	/**
	 * Cancel request
	 */
	protected function consider_cancel()
	{
		///$request = $this->new_member->request->where('team_id', '=', $this->team->id)->find();
		$request = 			$this->object;
		$request->active = 	TRUE;
		$request->status = 	FALSE;
		$request->read = 	Date::formatted_time();
		$request->update();
	}
	/**
	 * Default view details
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{

		return $this;
	}
	/**
	 * Sets view details of single request
	 * 
	 * @param View $view
	 * @param ORM $request
	 */
	public function get_view_detail_single()
	{
		$menu = Menu::factory('Request', $this->master);
		$menu->deny_permissions($this->object);
		
		$view = View::factory('Component/Request/Single',
				array(
					'status' 	=> $menu->get_resource_by_user($this->master, NULL),
					'user' 		=> $this->new_member->as_array(),
					'request'	=> $this->object->as_array(),
					'id' 		=> $this->object->id
				)
		);

		return array(
				$this->object->id 	=> $view 
		);
	}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{
		$this->team 		= isset($data['team']) ? $data['team'] : NULL;
		$this->master 		= isset($data['master']) ? $data['master'] : NULL;
		$this->new_member 	= isset($data['new_member']) ? $data['new_member'] : NULL;
		$this->__initialize();
		
	}
	
	/**
	 * Default success view
	 * 
	 * @param int $request_id
	 * @param string $info_label
	 */
	protected function set_view_success($request_id, $info_label = 'Success operation')
	{
		Message::instance()->set(Message::SUCCESS);
		
		$view_success = Message::instance()
			->get_view('Component/Info/Success')
			->set('info', $info_label);
		
		$this->view_content[$request_id] = 	$view_success;
		$this->view_container = 			$view_success;
	}
	
	/**
	 * Default warning view
	 * 
	 * @param string $info_label
	 */
	protected function set_view_warning($info_label = 'Something went wrong')
	{
		Message::instance()->set(Message::WARNING);
	
		$view_warning = Message::instance()
			->get_view('Component/Info/Warning')
			->set('info', $info_label)
			->set('errors', $this->error);
		
		$this->view_container = $view_warning;
	}
}
