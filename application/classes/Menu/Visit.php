<?php defined('SYSPATH') OR die('No direct script acccess.');
/*
 * always : my profile (no logged redirect)
 * always : my club
 * club has gallery : gallery
 * 
 */

class Menu_Visit extends Menu_General{
/*	
	public function __construct($user)
	{
		parent::__construct($user);
	}
*/
	public function prepare_resources()
	{	

		$resource = Menu::get_generic_resource('user');
		$this->add_resource($resource);
		
		$resource = Menu::get_generic_resource('team');
		$this->add_resource($resource);
		
		$resource = Menu::get_generic_resource('gallery');
		$this->add_resource($resource);	
		
		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
		->add_role('guest')
		->allow('guest', 	'user')

	//	->allow('gallery', 	'guest')
		//player
		->add_role('player', 'guest')
		->allow('player', 	 'team')
		//capitan
		->add_role('capitan', 'player')

		//coach
		->add_role('coach', 'capitan')

		//manager
		->add_role('manager', 'coach')
		//admin
		->add_role('admin', 'manager');

		/*Check if user has photos*/
		if ($user)
		{
			$team = ORM::factory('Team', $user->team_id);
			if ($team->loaded())
			{

				$this->allow('player', 'gallery');
			}
		}
		
		return parent::prepare_permissions($user);
	}
}
