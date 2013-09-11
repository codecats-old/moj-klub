<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Roles Manager
 * 
 * @author t
 *
 */
class Manager_Role extends Manager_Data{
	protected $_data;
	
	public function __set($name, $value)
	{
		$this->_data[$name] = $value;
		return $this;
	}
	public function __get($name)
	{
		return $this->_data[$name];
	}
	public function set_view_details($view)
	{
		$roles = $this->object;
		$table = new Table($roles, $this->post, $this->error);
		$component_grid_roles = View::factory('Component/Form/Node');
		$component_grid_roles->content = $table;
		$this->view_container = $component_grid_roles;
	}
	public function set_data($data)
	{
		$this->user = $data['user'];
		$this->team = $data['team'];
		$this->menu = $data['menu'];
	}
	
	public function change_roles($order, $post)
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
				$players = $this->team->get_players();
				$this->manage($post, $players);
				break;
		}
	}
	
	public function manage($post, $users_change)
	{
		$user 	= $this->user;
		$team 	= $this->team;
		$menu 	= $this->menu;
		$roles 	= $this->object;
		$this->success = TRUE;
	var_dump($post);
		/**
		 * Check roles allowed to change and user which on change can be done
		 */
		foreach ($users_change as $user_change)
		{
			$allow_changes = TRUE;

			if (empty($post) === FALSE AND key_exists($user_change->username, $post))
			{
				$allow_changes = $this->changes_allowed($user, $post[$user_change->username], $menu);
				$this->set_error('post error', $allow_changes);
			}
			$objects = array(
				'user' 			=> $user,
				'user_change' 	=> $user_change,
				'menu' 			=> $menu
			);
			$allow_changes = $this->check_role_allowed_changes($objects, 'players', $allow_changes);
			$this->set_error($user_change->username.' players disallowed', $allow_changes);
			
			$allow_changes = $this->check_role_allowed_changes($objects, 'staff', $allow_changes);
			$this->set_error($user_change->username.' staff disallowed', $allow_changes);
			
			$allow_changes = $this->check_role_allowed_changes($objects, 'management', $allow_changes);
			$this->set_error($user_change->username.' management disallowed', $allow_changes);

			if ($this->success !== FALSE) $this->success = $allow_changes;
			
			
		}
		
		if ($this->success === TRUE)
		{
			foreach ($users_change as $user_change)
			{
			//	$this->set_new_roles($user_change, $post, $roles);
			}
		}
		else
		{
		//	$this->error['sto'] = 'changes disallowed';
		}
		

		$this->post = $users_change;
		$this->set_view_details($this->view_container);
	}
	
	

	/**
	 * Check if user with given role is allowed for given user with the same role
	 * 
	 * @param unknown $objects
	 * @param unknown $role_name
	 * @param string $allow_changes
	 * @return Ambigous <string, boolean>
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
		echo $user->username.'-'.'remove force all team roles<br>';
		foreach ($roles as $role)
		{
			$user->remove('roles', $role);
		}
	
		if (key_exists($user->username, $post))
		{
			foreach ($post[$user->username] as $id_role)
			{
				echo $user->username.'+'.$role->name.'<br>';
				$role = ORM::factory('Role', $id_role);
				$user->add('roles', $role);
			}
		}
		/*
		foreach ($post as $name => $arr_roles)
		{
			if ($user->username === $name)
			{
				//add roles
				foreach($arr_roles as $id_role)
				{
					echo $user->username.'+'.$role->name.'<br>';
					$role = ORM::factory('Role', $id_role);
					$user->add('roles', $role);
				}
			}
		}*/
	
	}
	private function set_error($msg, $flag)
	{
		if( ! is_array($this->error)) $this->error = array();
		if ($flag === FALSE) array_push($this->error, $msg);
	}
}