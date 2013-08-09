<?php 
use Zend\Permissions\Acl\Resource\GenericResource;

use Zend\Permissions\Acl\Role\GenericRole;


defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Automatic{

	public function before()
	{
		parent::before();
		$this->redirect_user(FALSE);
	}
	public function action_index()
	{		
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->index();
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_add_photo()
	{
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$post = $this->request->post();
		
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->add_photo($post);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_delete_photo()
	{
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$id = $this->request->param('id') ;
		$confirm = $this->request->param('confirm');
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->delete_photo($id, $confirm);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	/**
	 * Show all photos by team id
	 * 
	 * CSFR protected.
	 */
	public function action_gallery()
	{
		$id = $this->request->param('id') ;
		$user = Auth::instance()->get_user();
		$team = $user->team;
		
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->gallery($id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	/**
	 * Change team details (possible to change specific field f.ex. teams.short_name)
	 */
	public function action_change()
	{
		if (Auth::instance()->logged_in('admin') === FALSE) $this->redirect_team_member(FALSE);
		
		$post = $this->request->post();
		$id = $this->request->param('id');
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->change($post, $id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_change_team_avatar()
	{
		$this->redirect_user(FALSE);
		
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->change_team_avatar($this->request->post());
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_create()
	{
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$post=$this->request->post();
		$manager = Manager::factory('Team', $team);
		$manager->set_user($user);
		
		$manager->create($post);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	private function redirect_team_member($is_member=TRUE)
	{
		$user=Auth::instance()->get_user();
		$team=$user->team;

		if($team->loaded()===$is_member)
			HTTP::redirect(Route::get('default')->uri(array('controller'=>'team')));

	}
}
