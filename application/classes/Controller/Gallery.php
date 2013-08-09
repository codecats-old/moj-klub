<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Gallery extends Controller_Automatic{
	
	public function action_index()
	{
		$id = $this->request->param('id') ;
		$user = Auth::instance()->get_user();
		$team = $user->team;
		
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->gallery($id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_team()
	{
		$id = $this->request->param('id') ;
		$user = Auth::instance()->get_user();
		$team = $user->team;
		
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->gallery($id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	public function action_delete()
	{
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$id = $this->request->param('id') ;
		$confirm = $this->request->param('confirm');
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->delete_photo($id, $confirm);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_add()
	{
		$user = Auth::instance()->get_user();
		$team = $user->team;
		$post = $this->request->post();
		
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->add_photo($post);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
}
