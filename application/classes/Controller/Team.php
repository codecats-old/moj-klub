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
	/**
	 * Change team details (possible to change specific field f.ex. teams.short_name)
	 */
	public function action_change()
	{
		if (Auth::instance()->logged_in('admin') === FALSE) $this->redirect_team_member(FALSE);
		
		$change_success = FALSE;
		$user = Auth::instance()->get_user();
		$fields=$this->acl->get_resource_by_user($user->username, 'edit');
		$field_to_change = $this->request->param('id');


		$post = $this->request->post();
		if ($post AND key_exists($field_to_change, $fields, TRUE))
		{
			//change field on given id description training success
		}
		if ($change_success === FALSE)
		{
			$form_change=View::factory('Component/Form/Create/Team')
				->set('team', $post)
				->set('error', $this->error);
			$this->view_content=$form_change;
			$this->view_container=View::factory('Container/Team/Main');
			$this->view_container->set('view_top', $form_change);
			Message::instance()->set(Message::WARNING);
		}
		else
		{
			
		}
		$this->view_container->set('modal_title', 'are you sure?');
		$this->show_details = TRUE;
		
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
