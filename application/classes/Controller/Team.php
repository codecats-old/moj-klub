<?php 
use Zend\Permissions\Acl\Resource\GenericResource;

use Zend\Permissions\Acl\Role\GenericRole;


defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Automatic{

	public function before()
	{
		parent::before();
		
		$user=Auth::instance()->get_user();
		$roles=$user->roles->find_all();
		$this->acl=new Zend_Acl();
		$this->acl->prepare_roles($user->username, array('roles'=>$roles, 'id'=>'name'));
		$this->prepare_resources()->prepare_permissions();
	}
	public function after()
	{
		if($this->show_details===TRUE)
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
		$team=ORM::factory('Team', array('id'=>$user->team_id));
		if($team->loaded())
		{
			$this->view_container=View::factory('Container/Team/Main')
				->set('modal_title', 'confirm');
			//	->set('view_component_about', View::factory('Component/About/Team'));
			$this->show_details=TRUE;
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
	public function action_change()
	{
		$this->redirect_user(FALSE);
		if(Auth::instance()->logged_in('admin')===FALSE)$this->redirect_team_member(FALSE);
		if(Auth::instance()->logged_in());
		$change_success=FALSE;
		$change_fields=$this->request->param('id');
		$post=$this->request->post();
		if($post)
		{
			
		}
		if($change_success===FALSE)
		{
			
		}
		else
		{
			
		}
		$this->view_container=View::factory('Container/Team/Main')
			->set('modal_title', 'are you sure?');
		$this->show_details=TRUE;
		
	}
	public function action_create()
	{
		$this->redirect_user(FALSE);
		$this->redirect_team_member(FALSE);
		$create_success=FALSE;
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
					$create_success=TRUE;
				}catch(Database_Exception $dbex){
					$this->set_status_message('Error', 'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex, true);
				}
			}
			else
			{
				$this->error=$validator->errors('Team/Create');
			}
		}
		if($create_success===FALSE)
		{
			$form_create=View::factory('Component/Form/Create/Team')
				->set('team', $post)
				->set('error', $this->error);
			$this->view_content=$form_create;
			$this->set_status_message('Warning');
		}
		else 
		{
			$this->view_content=View::factory('Component/Info/Success')
				->set('info', 'zarządzaj klubem');
			$this->set_status_message('Success', null, array('reload'=>true));
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
		$team=ORM::factory('Team', array('id'=>$user->team_id));
		if($is_member===TRUE)
		{
			if($team->loaded()===TRUE)
				HTTP::redirect(Route::get('default')->uri(array('controller'=>'team')));
		}
		else 
		{
			if($team->loaded()===TRUE)
				HTTP::redirect(Route::get('default')->uri(array('controller'=>'team')));
		}
	}
	private function get_view_about($team)
	{
		$view=View::factory('Component/About/Team');
		$players=$team->get_players();//=$team->get_players_ids();
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
//		print_r($this->acl->getRole('tomek11')->getResources());

		
		/*if($this->acl(Auth::instance()->get_user()->username)->isAllowed())
		{
			
		}*/
		if(Auth::instance()->logged_in('player'))
		{
			$view_team_change_manage->set('options', array(
				'leave'=>TRUE
			));
			$view->set('view_team_change_manage', $view_team_change_manage);
		}
		if(Auth::instance()->logged_in('capitan'))
		{
			$view_team_change_details->set('options', array(
				'trainings'=>TRUE
			));
			$view_team_change_manage->set('options', array(
				'players'=>TRUE, 'leave'=>TRUE
			));
			$view->set('view_team_change_details', $view_team_change_details)
				->set('view_team_change_manage', $view_team_change_manage);
		}
		if(Auth::instance()->logged_in('coach'))
		{
			$view_team_change_details->set('options', array(
				'trainings'=>TRUE, 'success'=>TRUE,
			));
			$view_team_change_manage->set('options', array(
				'players'=>TRUE, 'staff'=>TRUE,	'leave'=>TRUE
			));
			$view->set('view_team_change_details', $view_team_change_details)
				->set('view_team_change_manage', $view_team_change_manage);
		}
		if(Auth::instance()->logged_in('manager'))
		{			
		/*	$view_team_change_details->set('options', array(
				'description'=>TRUE, 'trainings'=>TRUE, 'success'=>TRUE, 
				'contact'=>TRUE, 'address'=>TRUE, 'name'=>TRUE
			));*/
			$view_team_change_details->set('options', 
					$this->acl->get_resource_by_user($user->username, 'edit'));
			$view_team_change_manage->set('options', array(
				'players'=>TRUE, 'staff'=>TRUE, 'management'=>TRUE,
				'leave'=>TRUE
			));
			$view->set('view_team_change_avatar', View::factory('Component/Menu/Team/Change/Avatar'))
				->set('view_team_change_details', $view_team_change_details)
				->set('view_team_change_manage', $view_team_change_manage);
		}
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

	private function prepare_resources()
	{
		$resource=new GenericResource('edit');
		$this->acl->addResource($resource)
			->addResource(new GenericResource('description'), $resource)
			->addResource(new GenericResource('trainings'), $resource)
			->addResource(new GenericResource('success'), $resource)
			->addResource(new GenericResource('contact'), $resource)
			->addResource(new GenericResource('address'), $resource)
			->addResource(new GenericResource('name'), $resource);

		$resource=new GenericResource('manage');
		$this->acl->addResource($resource)
			->addResource(new GenericResource('players'), $resource)
			->addResource(new GenericResource('staff'), $resource)
			->addResource(new GenericResource('management'), $resource)
			->addResource(new GenericResource('leave'), $resource);
		return $this;
	}
	private function prepare_permissions()
	{
			$this->acl
			//player
				->allow_if_exist('player', 'leave')
			//capitan
				->add_role_if_exist('capitan', 'player')
				->allow_if_exist('capitan', 'trainings')
				->allow_if_exist('capitan', 'players')
				->allow_if_exist('capitan', 'leave')
			//coach
			//
			//admin
				->allow_if_exist('admin');
			$this->acl->remove_role_if_exist('1', '2');
		return $this;
	}
	protected $acl;
	protected $show_details=FALSE;
}
