<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Show only the view after login, with prepared account
 * 
 * @author t
 */
class Controller_Presentation extends Controller_Automatic{

	/**
	 * Execute the login action,
	 * 
	 * @see Kohana_Controller::before()
	 */
	public function before()
	{
		$this->redirect_user(TRUE);
		

		/**
		 * Execute the controller action (it also sends technical
		 * 	cookies for client API)
		 */
		Request::factory(
				Route::get('default')->uri(
						array(
								'controller'	=> 'user',
								'action' 		=>'login'
						)
				)
		)
		->post(
				array(
						'login_identificator' 	=> 'tomek11',
						'password' 			 	=> ''
				)
		)
		->execute();
		
		parent::before();
	}
	
	/**
	 * After view render logout user form this account
	 * @see Kohana_Controller::after()
	 */
	public function after()
	{	
		parent::after();
		$id = Auth::instance()->get_user()->id;
		$id = Coder::instance()->to_url($id);
		Request::factory(
				Route::get('default')->uri(
						array(
								'controller' 	=> 'user', 
								'action' 		=> 'logout',
								'id' 			=> $id
						)
				)
		)
		->execute();
		
	}
	
	/**
	 * Gets the demo main view afer login
	 */
	public function action_index() 
	{

		/**
		 * Put some standars elements from site
		 */
		$bigger_team = ORM::factory('Team')->get_biggest()->find();

		$main_team = ORM::factory('Team')->get_most_popular()->find();
		$main_team_photos = ORM::factory('Photo')
			->order_by('uploaded', 'DESC')
			->where('team_id', '=', $main_team->id)
			->limit(5)
			->find_all();
		$main_team_avatar = $main_team->avatar;

		$popular_teams = ORM::factory('Team')
			->get_biggest($bigger_team->counter, $main_team->id)->limit(3)->find_all();
		
		$component_carousel =  View::factory('Component/Carousel')
			->set('team', 	$main_team->as_array())
			->set('photos', $main_team_photos->as_array())
			->set('avatar', $main_team_avatar->as_array());
		
		$component_access_quick = View::factory('Component/Access/Quick');
		
		$component_thumbnails_team = View::factory('Component/Thumbnails/Team')
			->set('teams', $popular_teams->as_array());
		
		$this->view_container = $this->view_content = View::factory('Container/Welcome/Main')
			->set('user', Auth::instance()->get_user())
			->set('component_carousel', 		$component_carousel)
			->set('component_thumbnails_team', 	$component_thumbnails_team);
		
		
		/**
		 * View presentation
		 */
		$this->view_container->container_statistics = View::factory('Presentation');
	}
	
}
