<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Management extends Controller_Automatic{
	
	public function action_index()
	{
		
	}
	public function action_consider_join()
	{
		echo '<br><br><br><br><br><br><br><br><br><br>';
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

		$result = $manager->consider_result($result);
		
		/**
		 * Redirect if no permitted to do consideration of join user to team
		 */
		if ($result === FALSE)
		{
			HTTP::redirect();
		}

		$this->view_container 	= $manager->get_views_result('container');
		$this->view_content 	= $manager->get_views_result('content');
	}
	
	public function action_requests()
	{
		$team_id = Coder::instance()->from_url($this->request->param('id'));

		$master = Auth::instance()->get_user();
		
		$team = ORM::factory('Team', $team_id);
		$count = $team->request->order_by('date', 'DESC')->count_all();

		
		$pagination=Pagination::factory(array(
			'total_items'=>$count
		));
		$requests = $team->request->order_by('date', 'DESC')
			->limit($pagination->items_per_page)
			->offset($pagination->offset)->find_all();
	
	
		$this->view_container = View::factory('Component/Request/Menu', 
				array(
					'panel_style' 	=> TRUE,
					'pagination' 	=> $pagination
				)
		);
		
		$this->view_container->set('team', $team->as_array());
		$this->view_container->requests_views = array();
		foreach ($requests as $request)
		{
			//creating the menu
			$menu = Menu::factory('Request', $master);
			$menu->deny_permissions($request);
			
			$single = View::factory('Component/Request/Single');
			$single->status = $menu->get_resource_by_user($master, NULL);
			$single->request = $request->as_array();
			$single->user = ORM::factory('User', $request->user_id)->as_array();
			array_push($this->view_container->requests_views, $single);
		}
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
		//$request = ORM::factory('Request');
		$validator = $request->validate_join_cancel($user->id, $team_id);
		

		
		if ($validator->check())
		{
		//	$request->find();
			
			/**
			 * If request loaded it then cancel it
			 */
			if ($request->loaded())
			{
				/**
				 * 
				 */
				$request->delete();
				
			}
		}
		else
		{
			$this->error = $validator->errors('Request/Join/Cancel');
		}
		
		print_r($this->error);
		/**
		 * are you sure?
		 */
	}
}
