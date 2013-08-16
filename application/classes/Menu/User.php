<?php defined('SYSPATH') OR die('No direct script acccess.');
/*
 * 
 */

class Menu_User extends Menu_General{

	public function prepare_resources()
	{	

		$resource = Menu::get_generic_resource('join_team');
		$this->add_resource($resource);

		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
		->add_role('guest')
		//login
		->add_role('login', 'guest')
		->allow('login', 'join_team')
		//player
		->add_role('player', 'login')
		//capitan
		->add_role('capitan', 'player')
		//coach
		->add_role('coach', 'capitan')
		//manager
		->add_role('manager', 'coach')
		//admin
		->add_role('admin', 'manager');

		/*Check if user is logged in and has no team already*/
		if ($user)
		{
			if ($user->team_id !== NULL)
			{
				$this->deny('login', 'join_team');
			}
		}
		
		return parent::prepare_permissions($user);
	}
	
	public function is_allowed($user,  $resource)
	{
		$role = 'guest';
		if ($user)
		{
			$role = $user->username;
		}
		return parent::is_allowed($role, $resource);
	}
}
