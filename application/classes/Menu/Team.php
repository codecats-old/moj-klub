<?php defined('SYSPATH') OR die('No direct script acccess.');

class Menu_Team extends Menu_General{

	public function prepare_resources()
	{
		$resource = Zend_Acl::get_generic_resource('edit');
		$this->add_resource($resource)
			->add_resource(Menu::get_generic_resource('description'), $resource)
			->addResource(Menu::get_generic_resource('training'), $resource)
			->addResource(Menu::get_generic_resource('success'), $resource)
			->addResource(Menu::get_generic_resource('contact'), $resource)
			->addResource(Menu::get_generic_resource('address'), $resource)
			->addResource(Menu::get_generic_resource('name'), $resource);

		/*CONTACT*/
		$this->add_resource('phone', 'contact')
			->add_resource('email', 'contact');
		/*ADDRESS*/
		$this->add_resource('city', 'address')
			->add_resource('street', 'address')
			->add_resource('street_no', 'address')
			->add_resource('zip_code', 'address')
			->add_resource('zip_code2', 'address');
		/*NAME*/
		$this->add_resource('full_name', 'name')
			->add_resource('short_name', 'name');
		
		$resource = Menu::get_generic_resource('manage');
		$this->add_resource($resource)
			->addResource(Menu::get_generic_resource('players'), $resource)
			->addResource(Menu::get_generic_resource('staff'), $resource)
			->addResource(Menu::get_generic_resource('management'), $resource)
			->addResource(Menu::get_generic_resource('leave'), $resource);
		
		//id of role from database
		$this
			->add_resource('3', 'players')//3 - player
			->add_resource('4', 'staff')//4 - staff
			->add_resource('8', 'staff')//8 - capitan
			->add_resource('5', 'management')//5 - accountant
			->add_resource('6', 'management')//6 - manager
			->add_resource('7', 'management')//7 - coach
			
		;
		
		$resource = Menu::get_generic_resource('avatar');
		$this->add_resource($resource);
		

		
		
		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
		->add_role('guest')
		
		->add_role('player', 'guest')
		//player
		->allow('player', 'leave')
		//capitan
		->add_role('capitan', 'player')
		->allow('capitan', 'training')
		->allow('capitan', 'players')
		//coach
		->add_role('coach', 'capitan')
		->allow('coach', 'success')
		->allow('coach', 'staff')
		//manager
		->add_role('manager', 'coach')
		->allow('manager', array('description', 'contact', 'address', 'name'))
		->allow('manager', 'management')
		->allow('manager', 'avatar')
		//admin
		->add_role('admin', 'manager');
		
		return parent::prepare_permissions($user);
	}
	
	/**
	 * Deny access if user is not belongs to specific team
	 * 
	 * @param unknown $resource
	 * @param unknown $resource_owner
	 */
	public function deny_permissions($resource, $resource_owner)
	{
		/**
		 * Resource can be null
		 */
		if ($resource_owner !== NULL)
		{
			/**
			 * Resource is not null so set context
			 */
			$resource_owner = $resource_owner->team;
			
			/**
			 * Deny only if resource_owner not equal view resource
			 */
			if ($resource->id !== $resource_owner->id)
			{
				$role = ($this->user !== NULL) ? $this->user->username : NULL;
				$this->deny($role, array('avatar', 'edit', 'manage'));
			}
		}
		return $this;
	}
}
