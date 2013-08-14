<?php 
//use Zend\Permissions\Acl\Resource\GenericResource;

// use Zend\Permissions\Acl\Role\GenericRole;


defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Automatic{

	public function action_index()
	{		
		/*
		 * Redirect if user is not logged in  
		 */
		if (Auth::instance()->logged_in() === FALSE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		/*
		 * Redirect if user has no team
		 */
		$this->redirect_user(FALSE);
		
		$user = Auth::instance()->get_user();
		$team = $user->team;
		
		//set up manager
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		//make action index for manager Team
		$manager->index();
		
		//get views
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * Prezentation of given club by encoded club id
	 */
	public function action_show()
	{
		/*
		 * Id have to be given encoded
		 */
		$id = Coder::instance()->from_url($this->request->param('id'));
		if (is_numeric($id) === FALSE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		$team = ORM::factory('Team', $id);
		$manager = Manager::factory('Team', $team);
		
		$manager->show();
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * Change team details (possible to change specific field f.ex. teams.short_name)
	 */
	public function action_change()
	{
		if (Auth::instance()->logged_in() === FALSE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		if (Auth::instance()->logged_in('admin') === FALSE) $this->redirect_team_member(FALSE);
		
		//get data to change
		$post = $this->request->post();
		//get field to change
		$id = $this->request->param('id');
		//set up data
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		//make action change id - is field to change, post is data
		$manager->change($post, $id);
		
		//views
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * Change team avatar - only permitted users can change team avatar
	 */
	public function action_change_team_avatar()
	{
		/*
		 * Redirecting
		 */
		if (Auth::instance()->logged_in() === FALSE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		$this->redirect_user(FALSE);
		
		//Set up data
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		//make action change avatar
		$manager->change_team_avatar($this->request->post());
		
		//views
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * Create new team only if user has no team
	 */
	public function action_create()
	{
		/*
		 * Redirect user not logged in
		 */
		if (Auth::instance()->logged_in() === FALSE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		/*
		 * Redirect if user has a team 
		 */
		$this->redirect_user(TRUE);
		
		//set up data
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$post=$this->request->post();
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		//make action create if post is not null and data is correct club will be created
		$manager->create($post);
		
		//views from this action
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * Redirect user if has or has not belongs the club (TRUE / FALSE)
	 * 
	 * @param boolean $is_member
	 */
	private function redirect_team_member($is_member = TRUE)
	{
		$user=Auth::instance()->get_user();
		$team=$user->team;

		if($team->loaded()===$is_member)
			HTTP::redirect(Route::get('default')->uri(array('controller'=>'team')));

	}
}
