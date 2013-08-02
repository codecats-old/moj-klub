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
	 * XHR or not initial the view_content is always responded.
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

		$user = Auth::instance()->get_user();
		$manager = Manager::factory('User', $user);
		$manager->change_user_avatar($this->request->post());
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}

	/**
	 * Change password, the user data is stored in Session so the best way to manipulate is make
	 * clone. Manager use that clone to prepare data from post and associate it to user. 
	 * After all manager sets user data to suitable views.
	 */
	
	public function action_change_password()
	{
		$this->redirect_user(FALSE);
		
		$post = $this->request->post();
		$user = clone Auth::instance()->get_user();
		$manager = Manager::factory('User', $user);
		$manager->change_password($post);
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * change data
	 */
	public function action_change_data()
	{
		$this->redirect_user(FALSE);
		
		$post = $this->request->post();
		$user = clone Auth::instance()->get_user();
		$manager = Manager::factory('User', $user);
		$manager->change_data($post);
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * login
	 */
	public function action_login()
	{
		$this->redirect_user();
		$post = $this->request->post();
		$param_id = $this->request->param('id');
		$user = ORM::factory('User');

		$manager = Manager::factory('User', $user);
		$manager->login($post, $param_id);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
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
		
		$manager = Manager::factory('User', $user);
		$manager->registrate($post);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
}
