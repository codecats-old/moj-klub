<?php defined('SYSPATH') OR die('No direct script acccess.');

class Menu_Team extends Menu{

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
		
		$resource = Menu::get_generic_resource('avatar');
		$this->add_resource($resource);
		
		//gallery has the same roles as avatar
//		$resource = Menu::get_generic_resource('gallery');
//		$this->add_resource($resource);
		
		//manipulate gallery
//		$this->add_resource('add_photo', 'gallery')
//			->add_resource('delete_photo', 'gallery');
		
		
		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
		->add_role('player')
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
	//	->allow('manager', array('avatar', 'gallery'))
		->allow('manager', 'avatar')
		//admin
		->add_role('admin', 'manager');
		
		if ($user !== NULL)
		{
			$urs_roles = $user->roles->find_all()->as_array();
			$this->add_user_role($urs_roles, $user->username);
		}
		
		return $this;
	}
}
