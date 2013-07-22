<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Automatic{
	/*
	 * if user has no team let him find or create new team
	 */
	public function action_index()
	{
		$user=Auth::instance()->get_user();
		$team=$avatar=ORM::factory('Team', array('id'=>$user->team_id));
		if($team->loaded())
		{
			echo '<hr><hr><hr><hr><hr><hr>has';
			
		}
		else
		{
			$ask_view=View::factory('Component/Info/Team/Ask');
			$this->view_container=View::factory('Container/Team/Main')
				->set('ask_view', $ask_view);
		}
	}
	public function action_create()
	{
		$this->redirect_user(FALSE);
		$create_success=FALSE;
		$post=$this->request->post();
		if($post)
		{
			$team=ORM::factory('Team');
			$validator=$team->validate_create($post);
			if($validator->check())
			{
				
			}
			else
			{
				$this->error=$validator->errors('Team/Create');
			}
		}
		if($create_success===FALSE)
		{
			$form_create=View::factory('Component/Form/Create/Team')->set('error', $this->error);
			$this->view_content=$form_create;
			$this->set_status_message('Error', 'popraw dane');
		}
		else 
		{
			$this->view_content=View::factory('Component/Info/Success')
				->set('info', 'zarządzaj klubem');
			$this->set_status_message('Error', 'popraw dane', array('reload'=>true));
		}		
	}
}
