<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Automatic{
	public function before()
	{
		parent::before();
	//	$this->redirect_user(FALSE);
	}
	public function after()
	{
		if($this->show_details===TRUE)
		{
			$user=Auth::instance()->get_user();
			$team=$user->team;
			$view_details=$this->get_view_details($user, $team);
			$this->view_container
				->set('view_details', $view_details);
				//->set('view_component_about', null);
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
				->set('modal_title', 'confirm')
				->set('view_component_about', View::factory('Component/About/Team'));
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
	private function get_view_details($user, $team)
	{
		$view=View::factory('Component/Menu/Team/Details');
		$view_team_change_details=View::factory('Component/Menu/Team/Change/Details');
		$view_team_change_manage=View::factory('Component/Menu/Team/Change/Manage');
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
			$view_team_change_details->set('options', array(
				'description'=>TRUE, 'trainings'=>TRUE, 'success'=>TRUE, 
				'contact'=>TRUE, 'address'=>TRUE, 'name'=>TRUE
			));
			$view_team_change_manage->set('options', array(
				'players'=>TRUE, 'staff'=>TRUE, 'management'=>TRUE,
				'leave'=>TRUE
			));
			$view->set('view_team_change_avatar', View::factory('Component/Menu/Team/Change/Avatar'))
				->set('view_team_change_details', $view_team_change_details)
				->set('view_team_change_manage', $view_team_change_manage);
		}
		$manager=ORM::factory('User', array('id'=>$team->get_manager_id()));
		$coach=ORM::factory('User', array('id'=>$team->get_coach_id()));
		$capitan=ORM::factory('User', array('id'=>$team->get_capitan_id()));
		$view->set('user', $user->as_array())
			->set('team',$team->as_array())
			->set('manager', $manager->as_array())
			->set('capitan', $capitan->as_array())
			->set('coach', $coach->as_array());
		return $view;
	}
	protected $show_details=FALSE;
}
