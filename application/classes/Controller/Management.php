<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Management extends Controller_Automatic{
	
	public function action_index()
	{
		
	}
	public function action_consider_join()
	{
		$this->redirect_user(FALSE);
		
		$user_id = Coder::instance()->from_url($this->request->param('id'));
		$result = $this->request->param('result');
		
		
		$new_member = ORM::factory('User', $user_id);
		$master = Auth::instance()->get_user();
		$team = $master->team;
		$request = $new_member->request->where('team_id', '=', $team->id)->find();

		$manager = Manager::factory('Management', $request);
		$manager->set_objects(
			array(
				'master' 		=> $master,
				'team' 			=> $team,
				'new_member'	=> $new_member
			)
		);

		$operation_status = $manager->consider_operation($result);
		
		/**
		 * Redirect if no permitted to do consideration of join user to team
		 */
		if ($operation_status === FALSE)
		{
			HTTP::redirect();
		}

		$this->view_container 	= $manager->get_views_result('container');
		$this->view_content 	= $manager->get_views_result('content');
	}
	
	public function action_requests()
	{
		$page = $this->request->param('page');
	
		$team_id = Coder::instance()->from_url($this->request->param('id'));

		$master = Auth::instance()->get_user();
		
		$team = ORM::factory('Team', $team_id);

		$panel = Manager::factory('Panel', $master);
		$panel->set_data(
				array(
						'team' 	=> $team,
						'page' 	=> $page
				)
		);		
		$panel->team(TRUE);
		
		/*
		 * Set messages as readed
		*/
		$notificator = new Notificator($master, $team);

		$notificator->stop_blink();
		$notificator->check_blink();
		
		$this->view_container = $panel;
		$this->view_content = $panel->get_views_result('content');
		
	}
	
	public function action_messages()
	{
		$page = $this->request->param('page');
		
		$user_id = Coder::instance()->from_url($this->request->param('id'));
		
		$master = ORM::factory('User', $user_id);

		$panel = Manager::factory('Panel', $master);
		$panel->set_data(
				array(
						'team' 	=> $master->team,
						'page' 	=> $page
				)
		);
		$panel->user(TRUE);
		
		/*
		 * Set messages as readed
		 */
		$notificator = new Notificator($master, NULL);
	
		$notificator->set_user_read_messages();
		$notificator->stop_blink();
		$notificator->check_blink();
		
		$this->view_container = $panel;
		$this->view_content = $panel->get_views_result('content');
	}
	
	public function action_join()
	{
		/**NOT INITIAL*/
		/**
		 * Not logged user cant ask to join the club
		 */
		$this->redirect_user(FALSE);
		
		$team_id = Coder::instance()->from_url($this->request->param('id'));
		/**
		 * If team_id is numeric it means somethig went wrong, solution: redirect
		 */
		
		
		$user = Auth::instance()->get_user();
		
		
		$team = ORM::factory('Team', $team_id);
		
		$request = ORM::factory('Request');
		

		
		$validator = $request->validate_join($user->id, $team_id);
		
		if ($validator->check())
		{
			$request->where('team_id', '=', $team->id)->where('user_id', '=', $user->id)->find();

			if ($request->loaded())
			{
				$request->date = date(Date::$timestamp_format);
				$request->update();
			}
			else
			{
				$request->team = $team;
				$request->user = $user;
				$request->save();
			}
			echo 'ok';
		}

		
		$manager = Manager::factory('Management', '');
	}
	
	public function action_join_cancel()
	{
		/**NOT INITIAL*/
		/**
		 * Not logged user cant ask to join the club
		 */
		$this->redirect_user(FALSE);
		
		$team_id = Coder::instance()->from_url($this->request->param('id'));
		/**
		 * If team_id is numeric it means somethig went wrong, solution: redirect
		 */
		if (is_numeric($team_id) === FALSE)
		{
			echo 'redirect no numeric';
		}
		$user = Auth::instance()->get_user();
		
		$request = $user->request->where('team_id', '=', $team_id);
		$request_id = NULL;

		$validator = $request->validate_join_cancel($user->id, $team_id);
		
		
		
		if ($validator->check())
		{		
			/**
			 * If request loaded it then cancel it
			 */
			if ($request->loaded())
			{
				$request_id = $request->id;
				/**
				 * 
				 */
			//	$request->delete();
				
			}
		}
		else
		{
			$this->error = $validator->errors('Request/Join/Cancel');
		}
		
		Message::instance()->set(Message::SUCCESS);
		
		$view_success = Message::instance()->get_view('Component/Info/Success')
		->set('info', 'Canacel success');
		$this->view_content[$request_id] = $view_success;
		$this->view_container = $view_success;
		
	}
}
