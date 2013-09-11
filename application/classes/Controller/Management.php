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
		
		
		if ($confirm === FALSE)
		{
			$info_confirm = View::factory('Component/Info/Confirm');
			$info_confirm->title = 'action leave';
			$info_confirm->content = 'You want leave the club, are you sure?';
			$this->view_container = $info_confirm;
		}
		else 
		{
			$master = Auth::instance()->get_user();
			$team = $master->team;
			
			if ( ! $team->loaded())
			{
				throw new ErrorException('redirect user without team');
			}
			
			/**
			 * If manager want to leave the team coach takes the role manager, if no coach and
			 * the club is not empty manager can't leave the club, if the club is empty
			 * it will be deleted
			 */
			if ($master->has('roles', ORM::factory('Role', array('name' => 'manager'))))
			{
				if ($team->users->where('id', '<>', $master->id)->count_all() > 0)
				{
					$new_manager = $team->get_coach();
					if ($new_manager->loaded())
					{
						//add role manager to new_manager, leave manager
						throw new Exception('coach to manager');
					}
					else 
					{
						//cant leave until coach is empty
						throw new Exception('cant leave the club because team without manager');
					}
				}
				else
				{
					//delete the team, leave manager
					throw new Exception('delete the empty team');
				}
			}
			else 
			{
				$this->leave_club($master);	
				
				Message::instance()->set(Message::SUCCESS, 'you just leave the club',
					array(
						'redirect' => TRUE
					)
				);
				$component_info_success = Message::instance()->get_view('Component/Info/Success');
				$this->view_container = $component_info_success;
			}
		}
	}

	public function leave_club($user)
	{
		//user has no club
		$user->team_id = NULL;
		$user->update();
		
		//user has no roles
		$roles = array('capitan', 'coach', 'manager');
		
		foreach ($roles as $role) 
		{
			//if user has roles remove them
			$user_role = ORM::factory('Role', array('name' => $role));
			if ($user->has('roles', $user_role))
			{
				$user->remove('roles', $user_role);
			}
		}
		
		//find all requests (accepted one, refused and canceled)
		$requests = $user->request->find_all();
		foreach ($requests as $request)
		{
			//delete requests
			$request->delete();
		}
		
		//update session
		Auth::instance()->get_user()->reload();
		/**
		 * refresh technical cookies
		 */
		Request::factory(
			Route::get('default')->uri(
				array(
					'controller' => 'ajax',
					'action' 	 => 'roles'
				)
			)
		)
		->execute();
	}
	public function action_roles()
	{
		
		$order = $this->request->param('id');
	
		$post = $this->request->post();
		
		$user = Auth::instance()->get_user();
		$team = $user->team;
		
		$menu = Menu::factory('Team', $user);

		$roles = ORM::factory('Role')
			->where('name', '<>', 'login')->where('name', '<>', 'admin')->find_all();
		
		$manager = Manager::factory('Role', $roles);
		$manager->set_data(
			array(
				'user' 	=> $user,
				'team' 	=> $team,
				'menu' 	=> $menu
			)
		);
		$manager->change_roles($order, $post);
		
		$this->view_content = $manager->get_views_result('content');
		$this->view_container = $manager->get_views_result('container');
		
	/*	$data = array(
			'user' 		=> $user,
			'team' 		=> $team,
			'menu' 		=> $menu,
			'post' 		=> $post,
			'roles' 	=> $roles
		);
		
		switch ($order)
		{
			case 'management' 	:
				$this->manage_management($data);
				break;
				
			case 'staff' 		:
				$this->manage_staff($data);
				break;
				
			case 'players' 		:
				$this->manage_players($data);
				break;
		}
	*/	
	}
	public function manage_management($data)
	{
		
	}
	public function manage_staff($data)
	{
		
	}
	public function manage_players($data)
	{
		$user 	= $data['user'];
		$team 	= $data['team'];
		$menu 	= $data['menu'];
		$post 	= $data['post'];
		$roles 	= $data['roles'];

		$players = $team->get_players();
		$error = [];
		$table = new Table($roles, $players, NULL);
		echo $table;	
		
		echo '<pre>';
var_dump($post);
		
		foreach ($players as $player)
		{
			$status = ' '.$player->username;
			if (
					empty($post) === FALSE AND 
					key_exists($player->username, $post) AND
					$this->changes_allowed($user, $post[$player->username], $menu))
			{
				$allow_changes = TRUE;
				
				if ($this->is_role($player, 'players'))
				{
					if ($menu->is_allowed($user->username, 'players') === FALSE)
					{
						$allow_changes = FALSE;
					}
				}
				
				if ($allow_changes AND $this->is_role($player, 'staff'))
				{
					if ($menu->is_allowed($user->username, 'staff') === FALSE)
					{
						$allow_changes = FALSE;
					}
				}
				
				if ($allow_changes AND $this->is_role($player, 'management'))
				{
					if ($menu->is_allowed($user->username, 'management') === FALSE)
					{
						$allow_changes = FALSE;
					}
				}
				
		
				
				if ($allow_changes)
				{
					$status ='change'.$status;
				}
				else 
				{
					
					$status = 'dal'.$status;
				}
			}
			else
			{
				$error = ['wtf man'];
				$status = 'dissallow change'.$status;
			}
			echo $status.'<br>';
		}
		
		foreach ($players as $player)
		{
			echo 'management'.$user->username.': '.$menu->is_allowed($user->username, 'management').', ';
			echo 'management'.$player->username.': '.$this->is_role($player, 'management').'<br>';
			
			echo 'staff'.$user->username.': '.$menu->is_allowed($user->username, 'staff').', ';
			echo 'staff'.$player->username.': '.$this->is_role($player, 'staff').'<br>';
			
			echo 'players'.$user->username.': '.$menu->is_allowed($user->username, 'players').', ';
			echo 'players'.$player->username.': '.$this->is_role($player, 'players').'<br>';
		}
	//	$this->set_new_roles($players, $post, $roles);

		var_dump($post);
		var_dump($menu->get_resource_by_user($user, 'players'));

		
		echo '</pre>';
		
		$table = new Table($roles, $players, $error);
		$component_grid_roles = View::factory('Component/Form/Node');
		$component_grid_roles->content = $table;
		$this->view_container = $component_grid_roles;
	}
	protected function is_unique($member, $post)
	{
		
	}
	protected function changes_allowed($user, $roles, $menu)
	{
		$allowed = TRUE;

		foreach ($roles as $id)
		{	
			if ( ! $menu->is_allowed($user->username, $id))
			{
				$allowed = FALSE;	
			}
		}
		return $allowed;
	}
	protected function is_role($user, $role_name)
	{
		$menu = Menu::factory('Team', $user);
		return $menu->is_allowed($user->username, $role_name);
	}

	protected function set_new_roles($user, $post, $roles)
	{
			echo $user->username.'-'.'remove force all team roles<br>';
			foreach ($roles as $role)
			{
				$user->remove('roles', $role);
			}
	
			foreach ($post as $name => $arr_roles)
			{
				if ($user->username === $name)
				{
					//add roles
					foreach($arr_roles as $id_role)
					{
						echo $user->username.'+'.$role->name.'<br>';
						$role = ORM::factory('Role', $id_role);
						$user->add('roles', $role);
					}
				}
			}

	}
}
