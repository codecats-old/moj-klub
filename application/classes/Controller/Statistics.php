<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Statistics extends Controller_Automatic{
	public function action_index() 
	{
		HTTP::redirect();
	}
	/**
	 * User train ranking
	 */
	public function action_ranking() 
	{
		$users = ORM::factory('User')->get_training_time()
			->limit(25)->find_all();
		
		$view = View::factory('Container/Statistics/Main');
		$view->users = $users;
		$this->view_container = $view;
	}
	/**
	 * Team popularity and training users in it
	 */
	public function action_popularity() 
	{
		$bigger_team = ORM::factory('Team')->get_biggest()->find();
		$teams = ORM::factory('Team')->get_biggest($bigger_team->counter)
				->limit(15)->find_all();
		
		$view = View::factory('Container/Statistics/Main');
		$view->teams = $teams;
		$this->view_container = $view;
	}
}