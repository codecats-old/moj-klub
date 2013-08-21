<?php defined('SYSPATH') OR die('No direct script acccess.');

class Menu_Header extends Menu_General{

	
	/**
	 * (non-PHPdoc)
	 * @see Kohana_Interface_Menu::prepare_resources()
	 */
	public function prepare_resources()
	{
		//Buttons to see user and logout
		$resource = Zend_Acl::get_generic_resource('loged');
		$this->add_resource($resource);
		
		//Buttons to registrate and login
		$resource = Menu::get_generic_resource('access');
		$this->add_resource($resource);
		
		//Management button
		$resource = Menu::get_generic_resource('management');
		$this->add_resource($resource);

		return $this;
	}
	
	/**
	 * Prepare permissions, also for not logged in user
	 * @see Kohana_Interface_Menu::prepare_permissions()
	 */
	public function prepare_permissions($user)
	{
		$this->
			add_role('login')
			->allow('login', 'loged')
			->allow('login', 'management');
		
		$this->
			add_role('guest')
			->allow('guest', 'access');
		
		if ( $user AND ( ! $user->loaded()))
		{
			$user->username = 'guest';
		}
		return parent::prepare_permissions($user);
	}
}
