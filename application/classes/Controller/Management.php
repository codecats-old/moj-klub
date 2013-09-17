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
		$manager->set_data(
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
		/**
		 * Not logged user cant ask to join the club
		 */
		$this->redirect_user(FALSE);
		
		$team_id = Coder::instance()->from_url($this->request->param('id'));
		/**
		 * If team_id is numeric it means somethig went wrong (client may put random url), 
		 * solution: redirect
		 */
		if (is_numeric($team_id) === FALSE)
		{
			HTTP::redirect();
		}
		
		$user = Auth::instance()->get_user();
		
		$team = ORM::factory('Team', $team_id);
		
		$request = ORM::factory('Request');
		

		
		$manager = Manager::factory('Management', $request);
		$manager->set_data(
			array(
				'master' 	=> $user,
				'team' 		=> $team
			)
		);
		$manager->join_club();
		$this->view_container 	= $manager->get_views_result('container');
		$this->view_content 	= $manager->get_views_result('content');
	}

	public function action_join_cancel()
	{
		/**
		 * Not logged user cant ask to join the club
		 */
		$this->redirect_user(FALSE);
		
		$team_id = Coder::instance()->from_url($this->request->param('id'));
		/**
		 * If team_id is numeric it means somethig went wrong (client may put random url), 
		 * solution: redirect
		 */
		if (is_numeric($team_id) === FALSE)
		{
			HTTP::redirect();
		}
		$user = Auth::instance()->get_user();
		
		$request = $user->request->where('team_id', '=', $team_id);
		
		$manager = Manager::factory('Management', $request);
		$manager->set_data(
			array(
				'master' 	=> $user,
			)
		);
		$manager->cancel_join_club($team_id);

		$this->view_container 	= $manager->get_views_result('container');
		$this->view_content 	= $manager->get_views_result('content');
	}
	
	public function action_leave()
	{
		$user_id = Coder::instance()->from_url($this->request->param('user_id'));
		
		if ( ! is_numeric($user_id))
		{
			throw new Exception('Redirect here, user_id is not numeric');
		}
		
		$confirm = filter_var($this->request->param('confirm'), FILTER_VALIDATE_BOOLEAN);
		
		$user = ORM::factory('User', $user_id);
		$manager = Manager::factory('Management', $user);

		$success = $manager->leave($confirm);
		
		/**
		 * Some data is not exists or not allowed so redirect
		 */
		if ( ! $success)
		{
			HTTP::redirect(Route::get('default')->uri());	
		}
		
		$this->view_content = $manager->get_views_result('content');
		$this->view_container = $manager->get_views_result('container');
	}

	
	public function action_roles()
	{
		$order = $this->request->param('order');
		$confirm = filter_var(
				Coder::instance()->from_url($this->request->param('confirm')), 
				FILTER_VALIDATE_BOOLEAN);
	
		$post = $this->request->post();
		
		$user = Auth::instance()->get_user();
		$team = $user->team;
		
		$menu = Menu::factory('Team', $user);

		$roles = ORM::factory('Role');
		
		$manager = Manager::factory('Role', $roles);
		$manager->set_data(
			array(
				'user' 	=> $user,
				'team' 	=> $team,
				'menu' 	=> $menu,
				'order' => $order
			)
		);
		
		$success = TRUE;
		if ($confirm === TRUE)
		{
			$success = $manager->change_roles($order, $post);
		}
		else
		{
			$success = $manager->show_roles($order);
		} 
		/**
		 * Some data is not exists or not allowed so redirect
		 */
		if ( ! $success)
		{
			HTTP::redirect(Route::get('default')->uri());	
		}
		
		$this->view_content = $manager->get_views_result('content');
		$this->view_container = $manager->get_views_result('container');
	}

}
