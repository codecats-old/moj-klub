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
	public function after()
	{
		if ($this->show_details === TRUE)
		{
			$user=Auth::instance()->get_user();
			$team=$user->team;
			$view_details=$this->get_view_details($user, $team);
			$view_about=$this->get_view_about($team);
			$this->view_container
				->set('view_details', $view_details)
				->set('view_component_about', $view_about);
		}
		

		
		parent::after();
	}
	public function action_index()
	{
		$this->redirect_user(FALSE);
		$user=Auth::instance()->get_user();
		$team=$user->team;
		if ($team->loaded())
		{
			$this->view_container=View::factory('Container/Team/Main')
				->set('modal_title', 'confirm');
			$this->show_details = TRUE;
		}
		else
		{
			$ask_view=View::factory('Component/Info/Team/Ask');
			$this->view_container=View::factory('Container/Team/Main')
				->set('view_top', $ask_view)
				->set('modal_title', 'registrate')
				->set('view_details', null)
				->set('view_component_about', null);
		}
	}
	/**
	 * Change team details (possible to change specific field f.ex. teams.short_name)
	 */
	public function action_change()
	{

		$this->redirect_user(FALSE);
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
		$this->redirect_user(FALSE);
		$this->redirect_team_member(FALSE);
		$create_success = FALSE;
		$post=$this->request->post();
		$team=ORM::factory('Team');
		$user=Auth::instance()->get_user();
		if($post)
		{
			$validator=$team->validate_create($post);
			if($validator->check())
			{
				$this->set_post_team_data($team, $post);
				try{
					$team->save();
					$user->team=$team;
					$user->save();
					Controller_User::add_role($user, 'manager');
					$create_success = TRUE;
				}catch(Database_Exception $dbex){
					Message::instance()->set(Message::ERROR, 'Probably database is busy. Try again in a while');

					$this->content=print_r($dbex, TRUE);
				}
			}
			else
			{
				$this->error=$validator->errors('Team/Create');
			}
		}
		if ($create_success === FALSE)
		{
			$form_create=View::factory('Component/Form/Create/Team')
				->set('team', $post)
				->set('error', $this->error);
			$this->view_content=$form_create;
			
			Message::instance()->set(Message::WARNING);
		}
		else 
		{
			$this->view_content=View::factory('Component/Info/Success')
				->set('info', 'zarządzaj klubem');
			
			Message::instance()->set(Message::SUCCESS, NULL, 
				array(
					'reload' => TRUE
				)
			);
		}		
	}
	private function set_post_team_data($team, $post)
	{
		$zip=null;
		if(empty($post['zip_code'])===FALSE)
		{
			$zip=implode('-', array($post['zip_code'], $post['zip_code2']));
		}
		foreach($post as $key=>$val)
		{
			if($key!=='zip_code' AND $key!=='zip_code2')
			{
				$this->set_if_not_empty($team, $post, $key);
			}
			else
			{
				if($key==='zip_code' AND empty($zip)===FALSE)
				{
					$team->set($key, $zip);
				}
			}
		}	
	}
	private function set_if_not_empty($orm, $arr, $field)
	{
		if(empty($arr[$field])===FALSE)$orm->set($field, $arr[$field]);
	}
	private function redirect_team_member($is_member=TRUE)
	{
		$user=Auth::instance()->get_user();
		$team=$user->team;

		if($team->loaded()===$is_member)
			HTTP::redirect(Route::get('default')->uri(array('controller'=>'team')));

	}
	private function get_view_about($team)
	{
		$view=View::factory('Component/About/Team');
		$players=$team->get_players();
		$capitan=$team->get_capitan();
		$staff=$team->get_staff();
		$manager=$team->get_manager();
		$coach=$team->get_coach();
		$view->set('team', $team->as_array())
			->set('players', $players->as_array())
			->set('capitan', $capitan->as_array())
			->set('staff', $staff->as_array())
			->set('manager', $manager->as_array())
			->set('coach', $coach->as_array());
		return $view;
	}
	private function get_view_details($user, $team)
	{
		$view=View::factory('Component/Menu/Team/Details');
		$view_team_change_details=View::factory('Component/Menu/Team/Change/Details');
		$view_team_change_manage=View::factory('Component/Menu/Team/Change/Manage');
		$view_team_change_avatar=View::factory('Component/Menu/Team/Change/Avatar');

		$menu = Menu::factory('Team', $user);
		
		$view_team_change_details->set('options',
				$menu->get_resource_by_user($user->username, 'edit'));
		$view_team_change_manage->set('options',
				$menu->get_resource_by_user($user->username, 'manage'));
		$view_team_change_avatar->set('options',
				$menu->get_resource_by_user($user->username, 'avatar'));
		
	/*	$view_team_change_details->set('options',
				$this->acl->get_resource_by_user($user->username, 'edit'));
		$view_team_change_manage->set('options',
				$this->acl->get_resource_by_user($user->username, 'manage'));
		$view_team_change_avatar->set('options',
				$this->acl->get_resource_by_user($user->username, 'avatar'));
		*/
		$view->set('view_team_change_avatar', $view_team_change_avatar)
			->set('view_team_change_details', $view_team_change_details)
			->set('view_team_change_manage', $view_team_change_manage);

		$manager=$team->get_manager();
		$coach=$team->get_coach();
		$capitan=$team->get_capitan();
		$view->set('user', $user->as_array())
			->set('team',$team->as_array())
			->set('manager', $manager->as_array())
			->set('capitan', $capitan->as_array())
			->set('coach', $coach->as_array());
		return $view;
	}
	protected $show_details=FALSE;
}
