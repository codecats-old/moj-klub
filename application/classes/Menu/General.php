<?php defined('SYSPATH') OR die('No direct script acccess.');

abstract class Menu_General extends Menu{

	/**
	 * User can be not logged - NULL original module need user is ORM so overload is needed
	 * @see Zend_Acl::get_resource_by_user()
	 */
	public function get_resource_by_user($user, $parent_resource)
	{
		$role = 'guest';
		if ($user) $role = $user->username;
		return parent::get_resource_by_user($role, $parent_resource);
	}
	
	
	/**
	 * Prepare permissions, also for not logged in user
	 * @see Kohana_Interface_Menu::prepare_permissions()
	 */
	public function prepare_permissions($user)
	{
		$roles = NULL;
		$child = NULL;
		
		if ($user)
		{
			$roles = $user->roles->find_all()->as_array();
			$child = $user->username;
		}
		
		if ($roles !== NULL)$this->add_user_role($roles, $child);
		
		return $this;
	}
}
