<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 * @author t
 *
 * User authentization, manipulate profil informations
*/
class Controller_User extends Controller_Automatic{

	/**
	 * Main data about logged in user, main view is called view_container, it's site wrapper,
	 * most important information from each action is in view_content, when request is from
	 * XHR or not initial the view_content is alway responded.
	 * 
	 */
	public function action_index()
	{
		// redirect if not logged in
		$this->redirect_user(FALSE);

		// view main site
		$this->view_container=View::factory('Container/User/Main');
		// view form specific action
		$this->view_content=$this->view_container;

		$user=Auth::instance()->get_user();
		// set details views for main site
		Manager::factory('User', $user)->set_view_details($this->view_container);
	}

	/**
	 * Avatar change, request for Controller_Image to change avatar, 
	 * content is and answer serialized JSON
	 */
	public function action_change_user_avatar()
	{
		$this->redirect_user(FALSE);
		$change_success = FALSE;

		$json_pack=Request::factory(
				Route::get('default')->uri(
						array('controller'=>'image', 'action'=>'change-user-avatar')
				)
		)
			->post($this->request->post())
			->execute();
		$json_pack=json_decode($json_pack);
		$this->view_content=unserialize($json_pack->View);

		$this->view_container=View::factory('Container/User/Main')
			->set('user_form', $this->view_content);

		Message::instance()->set($json_pack->status->state, $json_pack->status->message);

		$user = Auth::instance()->get_user();
		Manager::factory('User', $user)->set_view_details($this->view_container);
	}

	/**
	 * Change password, the user data is stored in Session so the best way to manipulate is make
	 * clone. Manager use that clone to prepare data from post and associate it to user. After
	 * validation object is ready to save and update data in session. Good thing is do reaload user,
	 * because we don't need old data in session.
	 * After all manager sets user data to suitable views.
	 * 
	 * Changing password is compatybile with other methods like action_change_, so operations will be
	 * described step by step. In other actions schema is the same.
	 */
	public function action_change_password()
	{
		//redirect not logged in users to default controller
		$this->redirect_user(FALSE);
		
		//flag if operation is success or not
		$change_success = FALSE;

		//main data/objects section
		$post = $this->request->post();
		$user = clone Auth::instance()->get_user();
		$manager = Manager::factory('User', $user);

		if ($post)
		{
			/**
			 * Set data from post to user, but save it only if its validated, when validation fails
			 * this object will be useful to create view and tell user what's wrong 
			 */
			$manager->set_data($post);
			
			//get validation object
			$validator = $user->validate_change_password($post);
				
			//check data
			if ($validator->check())
			{
				//new_password is valid so set it
				$user->set('password', $post['new_password']);
				
				//save section
				try
				{
					$user->save();
					//refresh session
					Auth::instance()->get_user()->reload();
					//set flag to success
					$change_success = TRUE;
				}
				catch(Database_Exception $dbex)
				{
					//error is returned as content because for Debug reason
					Message::instance()->set(Message::ERROR,
					'Probably database is busy. Try again in a while');
					$this->content=print_r($dbex, TRUE);
					echo $this->content;
				}
			}
			else
			{
				//user putted not required data format, let's tell him what's wrong
				$this->error=$validator->errors('User/Change/Password');
			}
		}

		//set main view
		$this->view_container=View::factory('Container/User/Main');

		//read status flag
		if ($change_success === FALSE)
		{
			//it's possible that data is wrong or request wasn't send yet
			Message::instance()->set(Message::WARNING);
				
			//prepare form, error will be setted only if they exists
			$user_form=View::factory('Component/Form/Change/Password')
			->set('error', $this->error);
				
			//conslusion from this action is form, so it is content answer
			$this->view_content=$user_form;
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

		//prepare main view details
		$manager->set_view_details($this->view_container);
	}
	
	/**
	 * change data
	 */
	public function action_change_data()
	{
		$this->redirect_user(FALSE);
		
		$change_success = FALSE;
		$post = $this->request->post();
		$user = clone Auth::instance()->get_user();
		$manager = Manager::factory('User', $user);
		$info = $user->info;
		
		if ($post)
		{
			$manager->set_data($post);
			$manager->set_data_info($post);
				
			$validator=$user->validate_change_data($post);
			
			if($validator->check())
			{
				try{
					$user->save();
					$info->save();
					Auth::instance()->get_user()->reload();
					$change_success = TRUE;
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
		if($change_success === FALSE)
		{
			Message::instance()->set(Message::WARNING);
				
			$user_form=View::factory('Component/Form/Change/User')
				->set('info', $info->as_array())
				->set('user', $user->as_array())
				->set('error', $this->error);
			$this->view_content=$user_form;

			$this->view_container=View::factory('Container/User/Main')
				->set('user_form', $user_form);
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
			$this->view_container=View::factory('Container/User/Main')
			->set('user_form', $view_success);	
		}

		$manager->set_view_details($this->view_container);
	}
	
	/**
	 * login
	 */
	public function action_login()
	{
		$this->redirect_user();
		$login_success = FALSE;
		$post=$this->request->post();
		$user=ORM::factory('User');

		if ($post)
		{
			$validator=$user->validate_login($post);
			if ($validator->check())
			{
				$post['stay_login']=(isset($post['stay_login']) === TRUE) ? TRUE : FALSE;
				if (Auth::instance()->login(
						$post['login_identificator'], $post['password'], $post['stay_login']) === TRUE)
				{
					$login_success = TRUE;
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
		if($login_success === FALSE)
		{
			Message::instance()->set(Message::WARNING);
				
			$this->view_content = View::factory('Component/Form/Login')
				->set('rel', $this->request->param('id'))
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
			
			$this->view_content = Message::instance()->get_view('Component/Info/Login/Success')
				->set('user', Auth::instance()->get_user()->as_array());
			$this->view_container = View::factory('Component/Access/Login')
				->set('form_login', $this->view_content);
		}
	}
	
	/**
	 * Logout
	 * 
	 * TODO: when in this application parser BB will be added it's needed to protect CSRF. 
	 * 			Now it's not required
	 */
	public function action_logout()
	{
		//CSRF	echo '<img src="user/logout">pig</img>'; TODO: prevent it
		//	if(Security::check($this->request->param('id'))){ where id is access token
		// OR
		// $cry=mcrypt_encrypt(MCRYPT_DES, 'k', 'user_id', MCRYPT_MODE_ECB);
		// echo base64_encode($cry);
		//echo mcrypt_ecb (MCRYPT_3DES, 'k', $cry, MCRYPT_DECRYPT);
		// where 'k' is session key with salt hashed by sha2
		$this->redirect_user(FALSE);
		Auth::instance()->logout();
		
		Message::instance()->set(Message::SUCCESS, NULL,
			array(
				'reload' => TRUE
			)
		);
		$this->view_content = Message::instance()->get_view('Component/Info/Logout/Success');
	}
		
	/**
	 * Registrate
	 */
	public function action_registrate()
	{
		//redirect if user is logged in
		$this->redirect_user();
		
		$registrate_success=FALSE;
		$post = $this->request->post();

		$user = ORM::factory('User');
		$info = ORM::factory('Info');

		$manager = Manager::factory('User', $user);

		if ($post)
		{
			$manager->set_data($post);
			$manager->set_data_info($info, $post);

			$validator = $user->validate_register($post);
			if ($validator->check())
			{
				try
				{
					$user->save();
					$info->user = $user;
					$info->save();
					self::add_role($user, 'login');
					self::add_role($user, 'player');
					$registrate_success = TRUE;
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
		
		if ($registrate_success === FALSE)
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
	 * DRY so better call function with adding role sequention
	 * 
	 * @param ORM $user
	 * @param ORM $role_name
	 */
	public static function add_role($user, $role_name)
	{
		$role=ORM::factory('Role', array('name' => $role_name));
		$user->add('roles', $role);
	}
}
