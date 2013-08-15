<?php defined('SYSPATH') OR die('No direct script acccess.');

class Menu_Gallery extends Menu_General{

	public function prepare_resources()
	{		
		$resource = Menu::get_generic_resource('gallery');
		$this->add_resource($resource);
		
		//manipulate gallery
		$this->add_resource('add_photo', 'gallery')
			->add_resource('delete_photo', 'gallery');
		
		
		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
		->add_role('guest')
		//player
		->add_role('player', 'guest')
		
		//capitan
		->add_role('capitan', 'player')

		//coach
		->add_role('coach', 'capitan')

		//manager
		->add_role('manager', 'coach')
		->allow('manager', 'gallery')
		//admin
		->add_role('admin', 'manager');
		
		/*if ($user !== NULL)
		{
			$urs_roles = $user->roles->find_all()->as_array();
			$this->add_user_role($urs_roles, $user->username);
		}*/
		
		return parent::prepare_permissions($user);
	}
}
