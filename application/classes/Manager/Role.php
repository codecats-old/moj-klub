<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Roles Manager
 * 
 * @author t
 *
 */
class Manager_Role extends Manager_Data{
	
	/**
	 * Data container
	 * @var array
	 */
	protected $_data;
	
	/**
	 * Avalaible content scopes to manipulate
	 * @var array
	 */
	protected $scope_manipulate = array('players', 'staff', 'management');
	
	public function __set($name, $value)
	{
		$this->_data[$name] = $value;
		return $this;
	}
	public function __get($name)
	{
		return $this->_data[$name];
	}
	
	/**
	 * Roles in table view
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{
		$roles = $this->object;

		$table = new Table($roles, $this->post, $this->error);
		$component_grid_roles = View::factory('Component/Form/Node');
		$component_grid_roles->content = $table;
		$component_grid_roles->action = Route::get('roles')->uri(array(
			'controller' 	=> Request::current()->controller(),
			'action' 		=> Request::current()->action(),
			'order' 		=> $this->order,
			'confirm' 		=> 'true'
		));
		$this->view_container = $component_grid_roles;
	}
	
	/**
	 * Data for manipulate roles
	 * 
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{
		$this->user = $data['user'];
		$this->team = $data['team'];
		$this->menu = $data['menu'];
		$this->order = $data['order'];
		
		/**
		 * All roles in given scope
		 */
		$roles_allowed =  $this->object;
		
		/**
		 * Disallow technical roles
		 */
		$roles = $this->object
			->where('name', '<>', 'login')
			->where('name', '<>', 'admin')
			->where('name', '<>', 'player')->find_all();
		
		/**
		 * Flag setted if user is not allowed to manipulate any roles
		 */
		$not_allowed = TRUE;
		
		foreach ($roles as $role)
		{
			/**
			 * If role is allowed construct smaller data range for query
			 */
			if ($this->menu->is_allowed($this->user->username, $role->id))
			{
				//Flag is not active
				$not_allowed = FALSE;
				$roles_allowed->or_where('id', '=', $role->id);
			} 
		}
		
		/**
		 * Allowed roles in object
		 */
		$this->object = $roles_allowed->find_all();
		if ($not_allowed === TRUE) $this->object = NULL;

	}
	
	/**
	 * Show allowed roles
	 * @param string $order
	 * @return boolean
	 */
	public function show_roles($order)
	{
		/**
		 * Check if user is avalaible to any role
		 */
		if($this->object !== NULL)
		{
			/**
			 * post is allowed users
			 */
			$this->post = $this->get_allowed($this->team, $order);
			
			/**
			 * If not users return FALSE
			 */
			if ($this->post === NULL) return FALSE;
			
			/**
			 * Prepare view
			 */
			$this->set_view_details($this->view_container);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Change roles by order on given new one roles in post
	 * 
	 * @param string $order
	 * @param array $post
	 * @return boolean
	 */
	public function change_roles($order, $post)
	{
		/**
		 * Check if user can manipulate objects
		 */
		if($this->object !== NULL)
		{
			switch ($order)
			{
				case 'management' 	:
					$this->manage_management($post);
					break;
			
				case 'staff' 		:
					$this->manage_staff($post);
					break;
			
				case 'players' 		:
					$players = $this->get_allowed($this->team, 'players');
					if ($players === NULL) return FALSE;
					$this->manage($post, $players);
					break;
			}
			$this->set_view_details($this->view_container);
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}
	
	/**
	 * Return allowed users by the scope access
	 * 
	 * @param Model $team
	 * @param string $role_name
	 * @return ORM
	 */
	private function get_allowed($team, $role_name)
	{
		//all users from team by the given role
		$all_users = $team->{'get_'.$role_name}();
		//empty Model
		$allow_users = ORM::factory('User');
		$found_allowed_users = FALSE;
		$objects = array(
				'user' 			=> $this->user,
				'menu' 			=> $this->menu
		);
		foreach ($all_users as $user)
		{
			//check give user has no stronger role than user want to make changes
			$objects['user_change'] = $user;
			$allowed = TRUE;
			//check all scopes
			foreach ($this->scope_manipulate as $scope)
			{
				//if user which want to make changes has weaker role than subject user then disallow changes
				if ( ! $this->check_role_allowed_changes($objects, $scope))
				{
					$allowed = FALSE;
				}
			}
			//If allowed prepare query
			if ($allowed === TRUE)
			{
				$allow_users->or_where('id', '=', $user->id);
				$found_allowed_users = TRUE;
			}
		}

		return ($found_allowed_users === TRUE) ? $allow_users->find_all() : NULL;
	}
	
	/**
	 * Change roles
	 * 
	 * @param unknown $post
	 * @param unknown $users_change
	 */
	public function manage($post, $users_change)
	{
		$user 	= $this->user;
		$team 	= $this->team;
		$menu 	= $this->menu;
		$roles 	= $this->object;
		$this->success = TRUE;

		/**
		 * Check roles allowed to change and user which on change can be done
		 */
		foreach ($users_change as $user_change)
		{
			$allow_changes = TRUE;

			if (empty($post) === FALSE AND key_exists($user_change->username, $post))
			{
				/**
				 * Check if owner is allowed for given role
				 */
				$allow_changes = $this->changes_allowed($user, $post[$user_change->username], $menu);
				$this->set_error('post error', $allow_changes);
			}
			$objects = array(
				'user' 			=> $user,
				'user_change' 	=> $user_change,
				'menu' 			=> $menu
			);
			
			/**
			 * Check if owner is allowed for given scope (block above)
			 */
			$allow_changes = $this->check_role_allowed_changes($objects, 'players', $allow_changes);
			$this->set_error($user_change->username.' players disallowed', $allow_changes);
			
			$allow_changes = $this->check_role_allowed_changes($objects, 'staff', $allow_changes);
			$this->set_error($user_change->username.' staff disallowed', $allow_changes);
			
			$allow_changes = $this->check_role_allowed_changes($objects, 'management', $allow_changes);
			$this->set_error($user_change->username.' management disallowed', $allow_changes);

			if ($this->success !== FALSE) $this->success = $allow_changes;
			
			
		}
		
		/**
		 * If allowed make changes
		 */
		if ($this->success === TRUE)
		{
			foreach ($users_change as $user_change)
			{
				$this->set_new_roles($user_change, $post, $roles);
			}
		}
		else
		{
		//	$this->error['sto'] = 'changes disallowed';
		}
		
		/**
		 * Table which can be change or was changed set as post table (view is generated by post table) 
		 */
		$this->post = $users_change;
	//	$this->set_view_details($this->view_container);
	}

	/**
	 * Check if user with given role is allowed for given user with the same role
	 * 
	 * @param array $objects
	 * @param string $role_name
	 * @param boolean $allow_changes
	 * @return boolean
	 */
	protected function check_role_allowed_changes($objects, $role_name, $allow_changes = TRUE)
	{
		$user = $objects['user'];
		$user_change = $objects['user_change'];
		$menu = $objects['menu'];
		
		if ($allow_changes AND $this->is_role($user_change, $role_name))
		{
			if ($menu->is_allowed($user->username, $role_name) === FALSE)
			{
				$allow_changes = FALSE;
			}
		}
		return $allow_changes;
	}
	protected function is_unique($member, $post)
	{
	
	}
	
	/**
	 * check if user can do change on given roles
	 * 
	 * @param Model $user
	 * @param array $roles
	 * @param Model $menu
	 * @return boolean
	 */
	protected function changes_allowed($user, $roles, $menu)
	{
		$allowed = TRUE;
	
		foreach ($roles as $id)
		{
			if ( ! $menu->is_allowed($user->username, $id))
			{
				$allowed = FALSE;
			}
		}
		return $allowed;
	}
	
	/**
	 * Check is role_name allowed for user
	 * 
	 * @param Model $user
	 * @param string $role_name
	 */
	protected function is_role($user, $role_name)
	{
		$menu = Menu::factory('Team', $user);
		return $menu->is_allowed($user->username, $role_name);
	}
	
	/**
	 * Sets Roles from post to user
	 * 
	 * @param Model $user
	 * @param array $post
	 * @param model $roles
	 */
	protected function set_new_roles($user, $post, $roles)
	{
		/**
		 * Remove all user roles followed in variable roles 
		 */
		foreach ($roles as $role)
		{
			$user->remove('roles', $role);
		}
	
		/**
		 * Check if post have given user
		 */
		if (key_exists($user->username, $post))
		{
			/**
			 * Sets new roles in post table to user
			 */
			foreach ($post[$user->username] as $id_role)
			{	
				$role = ORM::factory('Role', $id_role);
				$user->add('roles', $role);
			}
		}	
	}
	
	/**
	 * Error setter
	 * @param string $msg
	 * @param boolean $flag if flag is FALSE it means that operation before returned FALSE so error can 
	 * 						be setted 
	 */
	private function set_error($msg, $flag)
	{
		if( ! is_array($this->error)) $this->error = array();
		if ($flag === FALSE) array_push($this->error, $msg);
	}
}