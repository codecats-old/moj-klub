<?php use Zend\Permissions\Acl\Acl;

defined('SYSPATH') OR die('No direct script access.');

class Controller_Gallery extends Controller_Automatic{
	
	public function action_index()
	{
		/*
		 * HERE LIST OF TEAMS WHICH RECENTLY UPLOADED PHOTOS
		 */
		$id = $this->request->param('id') ;
		$user = Auth::instance()->get_user();

		//Team by Id, all user can see team's gallery
		$team = ORM::factory('Team', Coder::instance()->from_url($id));
		
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->gallery($id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	public function action_team()
	{
		$id = $this->request->param('id');

		/**
		 * If id is not numeric it means:
		 * - someone putted in url param manually,
		 * - session changed key
		 * - user logged out when he watched gallery
		 */
		if (is_numeric(Coder::instance()->from_url($id)) !== TRUE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		
		$user = Auth::instance()->get_user();

		//Team by Id, all user can see team's gallery
		$team = ORM::factory('Team', Coder::instance()->from_url($id));
		
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->gallery($id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	public function action_delete()
	{
		$user = Auth::instance()->get_user();
		$menu = Menu::factory('Gallery', $user);
		
		if ( ! $menu->is_allowed($user->username, 'delete_photo'))
		{
			HTTP::redirect(Route::get('default')->uri());
		}

		
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
		$menu = Menu::factory('Gallery', $user);//GALLERY MENU!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

		if ( ! $menu->is_allowed($user->username, 'add_photo'))
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		
		
		$team = $user->team;
		$post = $this->request->post();
		
		$manager = Manager::factory('Gallery', $team);
		$manager->set_user($user);
		
		$manager->add_photo($post);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');

	}
}
