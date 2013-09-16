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
		//	->where('name', '<>', 'player')
		->find_all();
		
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
					$players = $this->get_allowed($this->team, 'staff');
					if ($players === NULL) return FALSE;
					$this->manage($post, $players);

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

		foreach ($all_users as $user)
		{
			//check give user has no stronger role than user want to make changes
			$allowed = TRUE;
			$validator = new Validation_Role(
					array(
						'user' 	=> $this->user,
						'menu' 	=> $this->menu
					)
			);
			
			//if user which want to make changes has weaker role than subject user then disallow changes
			if ( ! $validator->role_allowed($this->scope_manipulate, $user)->check())
			{
				$allowed = FALSE;
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
	
	public function manage($post, $users_change)
	{
		
		$user 	= $this->user;
		$team 	= $this->team;
		$menu 	= $this->menu;
		$roles 	= $this->object;
		
		$this->success = TRUE;
		
		$validator = new Validation_Role(
			array(
				'user' 		=> $this->user,
				'team' 		=> $this->team,
				'menu' 		=> $this->menu,
				'roles' 	=> $this->object,
				'post' 		=> $post
			)
		);

		$this->success = $validator->post()->check();
		
		/**
		 * Check if user can be changed
		 */
		if ($this->success === TRUE)
		{
			foreach ($users_change as $user_change)
			{
				if ($validator->change($user_change, $this->scope_manipulate)->check())
				{
					$this->success = TRUE; 
				}
				else
				{
					$this->success = FALSE;
				}
	
			}
		}	
		/**
		 * If allowed make changes
		 */
		if ($this->success === TRUE)
		{
			echo 'sss';
			foreach ($users_change as $user_change)
			{
				//		$this->set_new_roles($user_change, $post, $roles);
			}
		}
		else
		{
			echo 'err';
			//	$this->error['sto'] = 'changes disallowed';
		}
		
		/**
		 * Table which can be change or was changed set as post table (view is generated by post table)
		 */
		$this->post = $users_change;
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
}