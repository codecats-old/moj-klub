<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Statistics extends Controller_Automatic{
	public function action_index() 
	{
	}
	/**
	 * User train ranking
	 */
	public function action_ranking() 
	{
		
	}
	/**
	 * Team popularity and training users in it
	 */
	public function action_popularity() 
	{
		$teams = ORM::factory('Team')->get_biggest(15)->find_all();
		
		
		foreach ($teams as $team)
		{
			var_dump($team->full_name, $team->counter);
		}
		
		$users = ORM::factory('User')->get_training_time()->find_all();
		
		foreach ($users as $user)
		{
			var_dump($user->id, $user->total);
		}
	}
}