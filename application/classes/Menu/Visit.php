<?php defined('SYSPATH') OR die('No direct script acccess.');

class Menu_Visit extends Menu_General{
/*	
	public function __construct($user)
	{
		parent::__construct($user);
	}
*/
	public function prepare_relations()
	{
		//set active menu gallery
		$active_menu = array('gallery' => 'active');
		
		//if user is null he can own club so deactive some menu
		if ($user === NULL)
		{
			$active_menu['show'] = '';
			$active_menu['team_id'] = $id;
			$active_menu['team'] = FALSE;
		}
		//if user's team id is difference than gallery id
		else
		{
			if ($id !== $team->id)
			{
				$active_menu['show'] = '';
				$active_menu['team_id'] = $id;
				$active_menu['team'] = '';
			}
			else
			{
				$active_menu['show'] = FALSE;
				$active_menu['team_id'] = $id;
				$active_menu['team'] = '';
			}
		}
	}
	public function prepare_resources()
	{	

		$resource = Menu::get_generic_resource('team');
		$this->add_resource($resource);
		
		$resource = Menu::get_generic_resource('gallery');
		$this->add_resource($resource);
		
		
		
		//manipulate gallery
		$this->add_resource('team_show', 'team')
			->add_resource('team_index', 'team');
		
		
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

		
		return parent::prepare_permissions($user);
	}
}
