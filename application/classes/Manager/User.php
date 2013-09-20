<?php defined('SYSPATH') OR die('No direct script access.');

/**
 *
 * @author t
 *
 * Manipulate with views and object data - work like controller with low level staff,
 * actions of managers called always from controller so MVC architecture is not broken.
 * To see hows it work with typhical action go to 'change_password'
*/
class Manager_User extends Manager_Data{
	
	public function show()
	{
		/*
		 * Reading data
		 */
		$user = $this->object;
		//global variable for model decorator, local for method
		$team = $this->team = ORM::factory('Team', $this->object->team_id);
		$user_avatar = $user->avatar;
		$user_info 	 = $user->info;
		$user_roles	 = $user->get_teams_roles();
		
		/*
		 * Prepare content views
		 */
		$view_show_user_about 	= View::factory('Show/User/About');
		$view_show_user_details = View::factory('Show/User/Details');
		
		/*
		 * Set data user about (personal info)
		 */
		$view_show_user_about
			->set('user', 	$user->as_array())
			->set('avatar',	$user_avatar->loaded() ? $user_avatar->as_array() : NULL)
			->set('info',	$user_info->loaded() ? $user_info->as_array() : NULL)
			->set('team',	$team->loaded() ? $team->as_array() : NULL)
			->set('roles',	$user_roles ? $user_roles->as_array() : NULL);
		
		/*
		 * set data user details (about team he play)
		 */
		$view_show_user_details
			->set('team', $team->loaded() ? $team->as_array() : NULL);

		
		//main view
		$this->view_container = View::factory('Container/User/Main');
		//decorate main view
		$this->set_view_details($this->view_container);
		
		//set content to main view
		$this->view_container
			->set('view_component_about_user', 	$view_show_user_about)
			->set('view_details',				$view_show_user_details);
	}
	
	/**
	 * Registrate
	 * 
	 * @param array $post
	 */
	public function registrate($post)
	{
		$user = $this->object;
		$info = ORM::factory('Info');

		if ($post)
		{
			$this->set_data($post);
			$this->set_data_info($info, $post);

			$validator = $user->validate_register($post);
			if ($validator->check())
			{
				try
				{
					$user->save();
					$info->user = $user;
					$info->save();
					$this->add_role('login', $user);
					$this->add_role('player', $user);
					$this->success = TRUE;
				}
				catch(Database_Exception $dbex)
				{
					Message::instance()->set(Message::ERROR, 'Probably database is busy. Try again in a while');
					var_dump($dbex);
				}
			}
			else
			{
				$this->error = $validator->errors('User/Register');
			}
		}
		else
		{
			//default fields
			$info->set('show_phone', TRUE);
			$info->set('show_email', TRUE);
		}

		$this->set_registrate_result($user, $info);
	}
	
	/**
	 * 
	 * @param ORM $user
	 * @param ORM $info
	 */
	protected function set_registrate_result($user, $info)
	{
		if ($this->success === FALSE)
		{
			Message::instance()->set(Message::WARNING);

			$captcha = Captcha::instance();
			$form = View::factory('Component/Form/Registrate')
			->set('user', $user->as_array())
			->set('info', $info->as_array())
			->set('captcha',$captcha)
			->set('error', $this->error);
			$this->view_content=$form;
			$this->view_container=View::factory('Component/Access/Registrate')
			->set('form_registrate', $form);
		}
		else
		{
			Message::instance()->set(Message::SUCCESS);

			$this->view_content = Message::instance()->get_view('Component/Info/Registrate/Success')
			->set('user', $user->as_array());
			$this->view_container = View::factory('Component/Access/Registrate')
			->set('form_registrate', $this->view_content);
		}
	}
	/**
	 *
	 * @param array $post
	 * @param int $param_id
	 */
	public function login($post, $param_id)
	{
		$user = $this->object;
		if ($post)
		{
			$validator = $user->validate_login($post);
			if ($validator->check())
			{
				$post['stay_login'] = (isset($post['stay_login']) === TRUE) ? TRUE : FALSE;
				if (Auth::instance()->login(
						$post['login_identificator'], $post['password'], $post['stay_login']) === TRUE)
				{
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
					/*
					 * After login clear notificator
					 */
					Notificator::clear();
					
					$this->success = TRUE;
				}
				else
				{
					$this->error=array('login_identificator'=>__('forget login or password').'?');
				}
			}
			else
			{
				$this->error=$validator->errors('User/Login');
			}
		}
		$this->set_login_result($post, $param_id);
	}

	/**
	 *
	 * @param array $post
	 * @param int $param_id
	 */
	protected function set_login_result($post, $param_id)
	{
		if($this->success === FALSE)
		{
			Message::instance()->set(Message::WARNING);

			$this->view_content = View::factory('Component/Form/Login')
			->set('rel', $param_id)
			->set('post', $post)
			->set('error', $this->error);
			$this->view_container = View::factory('Component/Access/Login')
			->set('form_login', $this->view_content);

		}
		else
		{
			Message::instance()->set(Message::SUCCESS, NULL,
				array(
					'reload' => TRUE
				)
			);
			$user = Auth::instance()->get_user()->as_array();
			//View for header
			View::set_global('user', $user);
			
			$this->view_content = Message::instance()->get_view('Component/Info/Login/Success')
			->set('user', $user);
			$this->view_container = View::factory('Component/Access/Login')
			->set('form_login', $this->view_content);
		}
	}
	
	public function logout()
	{

		Auth::instance()->logout();
		
		/**
		 * refresh technical cookies
		*/
		Request::factory(
			Route::get('default')->uri(
				array(
					'controller' => 'ajax', 
					'action'	 => 'logout'
				)
			)
		)
		->execute();
		
		Message::instance()->set(Message::SUCCESS, NULL,
			array(
				'reload' => TRUE
			)
		);
		$this->view_content = Message::instance()->get_view('Component/Info/Logout/Success');
	}
	/**
	 *
	 * @param array $post
	 */
	public function change_data($post)
	{
		$user = $this->object;
		$info = $user->info;

		if ($post)
		{
			$this->set_data($post);
			$this->set_data_info($info, $post);

			$validator=$user->validate_change_data($post);

			if($validator->check())
			{
				try{
					$user->save();
					$info->save();
					Auth::instance()->get_user()->reload();
					$this->success = TRUE;
				}
				catch(Database_Exception $dbex)
				{
					Message::instance()->set(Message::ERROR, 'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex, TRUE);
					echo $this->content;
				}
			}
			else
			{
				$this->error=$validator->errors('User/Change/Data');
			}
		}
		$this->set_change_data_result($user, $info);
	}

	/**
	 *
	 * @param ORM $user
	 * @param ORM $info
	 */
	protected function set_change_data_result($user, $info)
	{
		$this->view_container=View::factory('Container/User/Main');

		if($this->success === FALSE)
		{
			Message::instance()->set(Message::WARNING);

			$user_form=View::factory('Component/Form/Change/User')
			->set('info', $info->as_array())
			->set('user', $user->as_array())
			->set('error', $this->error);
			$this->view_content=$user_form;

			$this->view_container->set('user_form', $user_form);
		}
		else
		{
			Message::instance()->set(Message::SUCCESS, NULL,
			array(
			'reload' => TRUE //information for client site api
			)
			);

			$view_success = Message::instance()->get_view('Component/Info/Success');

			$this->view_content=$view_success;
			$this->view_container->set('user_form', $view_success);
		}

		$this->set_view_details($this->view_container);
	}
	/**
	 *
	 * @param array $post
	 */
	public function change_user_avatar($post)
	{
		$json_pack=Request::factory(
				Route::get('default')->uri(
						array('controller'=>'image', 'action'=>'change-user-avatar')
				)
		)
		->post($post)
		->execute();
		$json_pack=json_decode($json_pack);

		$this->set_change_user_avatar_result($json_pack);
	}

	/**
	 *
	 * @param object decoded JSON $pack
	 */
	protected function set_change_user_avatar_result($pack)
	{
		$this->view_content=unserialize($pack->View);

		$this->view_container=View::factory('Container/User/Main')
		->set('user_form', $this->view_content);

		Message::instance()->set($pack->status->state, $pack->status->message);

		$this->set_view_details($this->view_container);
	}
	/**
	 * Change user password - After validation object is ready to save and
	 * update data in session. Good thing is do reaload user,
	 * because we don't need old data in session.
	 *
	 * Changing password is compatybile with other methods like action_change_, so operations will be
	 * described step by step. In other actions schema is the same.
	 *
	 * @param array $post
	 */
	public function change_password($post)
	{
		if ($post)
		{
			/**
			 * Set data from post to user, but save it only if its validated, when validation fails
			 * this object will be useful to create view and tell user what's wrong
			 */
			$this->set_data($post);

			$user=$this->object;
			//get validation object
			$validator = $user->validate_change_password($post);

			//check data
			if ($validator->check())
			{
				//new_password is valid so set it
				$this->object->set('password', $post['new_password']);

				//save section
				try
				{
					$this->object->save();
					//refresh session
					Auth::instance()->get_user()->reload();
					//set flag to success
					$this->success = TRUE;
				}
				catch(Database_Exception $dbex)
				{
					//error is returned as content because for Debug reason
					Message::instance()->set(Message::ERROR,
					'Probably database is busy. Try again in a while');
					$this->view_content=print_r($dbex, TRUE);
					echo $this->view_content;
				}
			}
			else
			{
				//user putted not required data format, let's tell him what's wrong
				$this->error = $validator->errors('User/Change/Password');
			}
		}
		$this->set_change_password_result();

		return $this;
	}

	/**
	 * Change password results only logic for view manipulate in this section
	 *
	 * @return $this
	 */
	protected function set_change_password_result()
	{
		//set main view
		$this->view_container=View::factory('Container/User/Main');

		//read status flag
		if ($this->success === FALSE)
		{
			//it's possible that data is wrong or request wasn't send yet
			Message::instance()->set(Message::WARNING);

			//prepare form, error will be setted only if they exists
			$user_form = View::factory('Component/Form/Change/Password')
			->set('error', $this->error);

			//conslusion from this action is form, so it is content answer
			$this->view_content = $user_form;
			//set to main view form
			$this->view_container->set('user_form', $user_form);

		}
		else
		{
			//change success
			Message::instance()->set(Message::SUCCESS);

			//tell about success to user
			$view_success = Message::instance()->get_view('Component/Info/Success');
			//content of action now is success, so it's the answer
			$this->view_content = $view_success;
			//set to main view success information in the same place where was the form
			$this->view_container->set('user_form', $view_success);
		}
		$this->set_view_details($this->view_container);

		return $this;
	}
	public function train($post)
	{
		$user = $this->object;
		
		$manager_training = Manager::factory('Training', $user);
		$manager_training->set_data(
			array(
				'post' 				=> $post,
				'last_training' 	=> $user->get_finished_trainings(1)
			)
		);
		$this->success = $manager_training->save();
		$training = $manager_training->get_training();
		$this->error = $manager_training->get_error();
		$this->set_train_result($training);
	}
	
	protected function set_train_result($training)
	{
		$this->view_container = View::factory('Container/User/Main');
		if ($this->success === FALSE)
		{
			$this->view_content = $user_form = View::factory('Component/Form/Train/Train');
			$user_form->training = $training;
			$user_form->error = $this->error;
			$this->view_container->user_form = $user_form;
		}
		else
		{
			//change success
			Message::instance()->set(Message::SUCCESS);
			
			//tell about success to user
			$view_success = Message::instance()->get_view('Component/Info/Success');
			//content of action now is success, so it's the answer
			$this->view_content = $view_success;
			//set to main view success information in the same place where was the form
			$this->view_container->set('user_form', $view_success);
		}
		$this->set_view_details($this->view_container);
		
		return $this;
	}
	/**
	 * (non-PHPdoc)
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{
		//user to show
		$user = $this->object;
		$team = $user->team;	
		$trainings = $user->get_finished_trainings();

		$menu_visit = Menu::factory('Visit', $user);

		$view_details = $this->get_view_details();

		$view_component_about_user = View::factory('Component/About/User')
		->set('team', $team->as_array());
		$view
		->set('view_component_about_user', $view_component_about_user)
		->set('view_details', $view_details)
		->set('team', $team->as_array())
		->set('menu_visit', $menu_visit->get_resource_by_user($user, NULL))
		->set('trainings', $trainings);

		return $this;
	}

	/**
	 * (non-PHPdoc)
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{
		$this->set_if_isset($this->object, $data, 'email');
		$this->set_if_isset($this->object, $data, 'username');
		$this->set_if_isset($this->object, $data, 'password');

		return $this;
	}

	/**
	 *
	 * @param ORM $info
	 * @param array $data
	 * @return $this
	 */
	public function set_data_info($info, $data)
	{
		$this->set_if_isset($info, $data, 'name');
		$this->set_if_isset($info, $data, 'surname');
		$this->set_if_isset($info, $data, 'phone');
		$info->set('show_phone', ( (isset($data['show_phone']) === TRUE) ? TRUE : FALSE) );
		$info->set('show_email', ( (isset($data['show_email']) === TRUE) ? TRUE : FALSE) );

		return $this;
	}

	/**
	 *
	 * @return Ambigous <$this, View>
	 */
	private function get_view_details()
	{
		$user=$this->object;

		$info = $user->info;
		$info_popover['show_phone'] = $this->set_view_popver($info->show_phone);
		$info_popover['show_email'] = $this->set_view_popver($info->show_email);

		$avatar = $user->avatar;
	//	echo $avatar->path;
		$team = $user->team;
		$roles_view = $user->get_teams_roles();
		$roles = $this->to_array($roles_view, 'name');
		$roles_view = implode(', ', $roles);
		$view_details = View::factory('Component/Menu/User/Details')
		->set('info', $info->as_array())
		->set('avatar', $avatar->as_array())
		->set('team', $team->as_array())
		->set('roles_view',$roles_view)
		->set('info_popover', $info_popover);
		return $view_details;
	}
	/**
	 * DRY so, call function with adding role sequention
	 *
	 * @param ORM $role_name
	 * @param ORM $user
	 */
	public function add_role($role_name, $user = NULL)
	{
		if($user === NULL)$user = $this->object;
		$role = ORM::factory('Role', array('name' => $role_name));
		$user->add('roles', $role);
		
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
}
