<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Gallery extends Manager_Data{

	/**
	 * Logged in user
	 *
	 * @var ORM
	 */
	protected $user;
	
	/**
	 * Helps manipulate teams action on logged in user
	 * 
	 * @param ORM $user
	 */
	public function set_user($user)
	{
		$this->user = $user;
	}
	/*ACTIONS*/
	

	public function add_photo($post)
	{
		$json_pack=Request::factory(
				Route::get('default')->uri(
						array('controller'=>'image', 'action'=>'add-team-photo')
				)
		)
		->post($post)
		->execute();
		$json_pack=json_decode($json_pack);
		
		$this->set_add_photo_result($json_pack);
	}
	
	public function set_add_photo_result($pack)
	{
		$team_id = Auth::instance()->get_user()->team->id;
		$this->set_gallery_result($team_id);
		
		$this->view_content=unserialize($pack->View);
		
		
		
		if ( Message::instance()->get('state') === Message::SUCCESS)
		{
			//show success and reload
			Message::instance()->set(
				$pack->status->state, 
				$pack->status->message, 
				//jquery not ajax support files so redirect by header
				array(
					'reload' => TRUE
				)
			);
			HTTP::redirect(Route::get('default')->uri(
				array(
					'controller' 	=> 'gallery',
					'id'			=> Coder::instance()->to_url($team_id)							
				))
			);
			
			$this->view_container->set('info_content', $this->view_content);
			
		}
		else
		{
			//show Warning in view_top place
			$this->view_container->set('view_top', $this->view_content);
		}
		
	}
	public function delete_photo($id, $confirm)
	{
		
		$id = Coder::instance()->from_url($id);
		
		//confirm is a string with true or nothing
		if ($confirm == TRUE)
		{
			$json_pack=Request::factory(
					Route::get('default')->uri(
							array(
								'controller'=>'image', 
								'action'=>'delete-team-photo',
								'id' => Coder::instance()->to_url($id)
							)
					)
			)
			->execute();
			$json_pack=json_decode($json_pack);
			
			$this->set_delete_photo_result($json_pack);
		}
		else
		{
			$photo = ORM::factory('Photo', $id);
			
			$this->set_gallery_result(Auth::instance()->get_user()->team->id);
			
			$confirm_view = View::factory('Component/Info/Gallery/Confirm')
				->set('photo', $photo->as_array());
			//content of modal window
			$this->view_container->set('info_content', $confirm_view);
			$this->view_content = $confirm_view;
		}
	}
	public function set_delete_photo_result($pack)
	{
		$this->view_content=unserialize($pack->View);
		
		Message::instance()->set($pack->status->state, $pack->status->message);
	}
	/**
	 * 
	 * @param int $id - team_id
	 */
	public function gallery($id)
	{
		$id = Coder::instance()->from_url($id);
		$this->set_gallery_result($id);
	}
	public function set_gallery_result($id)
	{
		$user = $this->user;
		
		$menu = Menu::factory('Team', $user);
		$submenu = $menu->get_resource_by_user($user->username, 'gallery');
		
		$this->view_container = View::factory('Container/Gallery/Main')
		->set('modal_title', 'confirm');
		$component_gallery = View::factory('Component/Gallery')
		->set('menu', $submenu)
		->set('photos', ORM::factory('Photo')->get_team_photos($id)->find_all()->as_array());
		
		//
		$this->set_view_details($this->view_container);
		$this->view_container
		->set('active', array('gallery' => 'active'))
			->set('view_component_about', $component_gallery)
				->set('view_details', NULL);
	}

	/**
	 * Default view details
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{
		$team = $this->object;
		
		$view_details=$this->get_view_user_details($this->object);
		$view_about=$this->get_view_about();

		$view
		->set('view_details', $view_details)
		->set('view_component_about', $view_about);
		
		if ($team->loaded() === TRUE)
		{
			$this->view_container->set('team', $team->as_array());
		}
		return $this;
	}

	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{
		$team = $this->object;
		if(key_exists('submit', $data))unset($data['submit']);
		
		$zip = null;
		if(empty($data['zip_code']) === FALSE)
		{
			$zip=implode('-', array($data['zip_code'], $data['zip_code2']));
		}
		foreach($data as $key => $val)
		{
			if($key !== 'zip_code' AND $key !== 'zip_code2')
			{
				$this->set_if_not_empty($team, $data, $key);
			}
			else
			{
				if($key === 'zip_code' AND empty($zip) === FALSE)
				{
					$team->set($key, $zip);
				}
			}
		}
	}

	protected function get_view_about()
	{
		$team = $this->object;

		$view = View::factory('Component/About/Team');
		$players = $team->get_players();
		$capitan = $team->get_capitan();
		$staff = $team->get_staff();
		$manager = $team->get_manager();
		$coach = $team->get_coach();
		$view->set('team', $team->as_array())
		->set('players', $players->as_array())
		->set('capitan', $capitan->as_array())
		->set('staff', $staff->as_array())
		->set('manager', $manager->as_array())
		->set('coach', $coach->as_array());
		return $view;
	}

	protected function get_view_user_details()
	{
		$team = $this->object;
		$user = $this->user;
		$avatar = $team->avatar;
		
		$view=View::factory('Component/Menu/Team/Details');
		$view_team_change_details = View::factory('Component/Menu/Team/Change/Details');
		$view_team_change_manage = View::factory('Component/Menu/Team/Change/Manage');
		$view_team_change_avatar = View::factory('Component/Menu/Team/Change/Avatar');

		$menu = Menu::factory('Team', $user);

		$view_team_change_details->set('options',
				$menu->get_resource_by_user($user->username, 'edit'));
		$view_team_change_manage->set('options',
				$menu->get_resource_by_user($user->username, 'manage'));
		$view_team_change_avatar->set('options',
				$menu->get_resource_by_user($user->username, 'avatar'));
		
		$view->set('view_team_change_avatar', $view_team_change_avatar)
		->set('view_team_change_details', $view_team_change_details)
		->set('view_team_change_manage', $view_team_change_manage)
		->set('avatar', $avatar->as_array());

		$manager = $team->get_manager();
		$coach = $team->get_coach();
		$capitan = $team->get_capitan();
		$view->set('user', $user->as_array())
		->set('team',$team->as_array())
		->set('manager', $manager->as_array())
		->set('capitan', $capitan->as_array())
		->set('coach', $coach->as_array());
		return $view;
	}
}