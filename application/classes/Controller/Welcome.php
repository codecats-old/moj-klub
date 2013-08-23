<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Automatic {

	public function action_index()
	{
		$bigger_team = ORM::factory('Team')->get_biggest()->find();
		
		$main_team = ORM::factory('Team')->get_most_popular()->find();
		$main_team_photos = ORM::factory('Photo', $main_team->id )
		->order_by('uploaded', 'DESC')
		->limit(5)
		->find_all();
		$main_team_avatar = $main_team->avatar;

		$popular_teams = ORM::factory('Team')
			->get_biggest($bigger_team->counter, $main_team->id)->limit(3)->find_all();

	//	$main_team->set('precentage_counter', $percents);
//	echo ORM::factory('Team')->get_max_member_count()->find()->counter;
		
		$component_carousel =  View::factory('Component/Carousel')
			->set('team', 	$main_team->as_array())
			->set('photos', $main_team_photos->as_array())
			->set('avatar', $main_team_avatar->as_array());
		
		$component_access_quick = View::factory('Component/Access/Quick');
		
		$component_thumbnails_team = View::factory('Component/Thumbnails/Team')
			->set('teams', $popular_teams->as_array());
		
		$this->view_content = View::factory('Container/Welcome/Main')
			->set('component_carousel', 		$component_carousel)
			->set('component_thumbnails_team', 	$component_thumbnails_team);
		$this->template->blink = 'elo';
//------------------------------------------------------------------------------------------------
/*
		$user = Auth::instance()->get_user();
		
		$menu = Menu::factory('Visit', $user);
		echo '<pre style="background:white">';
		print_r($menu->get_resource_by_user($user, NULL));
		echo '</pre>';
	*/	
	}

}