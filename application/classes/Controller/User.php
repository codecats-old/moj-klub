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
		$this->redirect_user(FALSE, array('controller' => 'user', 'action' => 'registrate'));

		// view main site
		$this->view_container = View::factory('Container/User/Main');
		// view form specific action
		$this->view_content = $this->view_container;

		$user = Auth::instance()->get_user();
		
		// set details views for main site
		Manager::factory('User', $user)->set_view_details($this->view_container);
	}
	
	public function action_train()
	{
		$this->redirect_user(FALSE);
		
		$user = Auth::instance()->get_user();
		$manager = Manager::factory('User', $user);
		
		$manager->train($this->request->post());
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	/**
	 * Avatar change, request for Controller_Image to change avatar, 
	 * content is and answer serialized JSON
	 */
	public function action_change_user_avatar()
	{
		$this->redirect_user(FALSE);

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
	 * Action is CSRF attack protected:
	 * Link is encrypted (SYSPATH/config/encrypt) so user see only hash, 
	 * so put pig is almost impossible to put:
	 * echo '<img src="user/logout/1">pig</img>'
	 * 
	 * If user breaks the Security it means he can decode hash he konw session id 
	 * and the salt
	 */
	public function action_logout()
	{
		$this->redirect_user(FALSE);
		
		$id = Coder::instance()->from_url($this->request->param('id'));
		
		/**
		 * if CSFR attack redirect from this action
		 */
		if ($id != Auth::instance()->get_user('id'))
		{
			$this->redirect_user(TRUE);
		}
		
		$manager = Manager::factory('User', NULL);
		
		$manager->logout();
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
		
	/**
	 * Registrate
	 */
	public function action_registrate()
	{
		//redirect if user is logged in
		$this->redirect_user();
		
		$post = $this->request->post();
		$user = ORM::factory('User');
		$manager = Manager::factory('User', $user);
		
		$manager->registrate($post);
		
		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
	
	/**
	 * Show present user to other
	 */
	public function action_show()
	{
		$id = Coder::instance()->short_url($this->request->param('id'), TRUE);

		if (is_numeric($id) === FALSE)
		{
			HTTP::redirect(Route::get('default')->uri());
		}
		
		$user = ORM::factory('User', $id);
		$manager = Manager::factory('User', $user);
		
		$manager->show();

		$this->view_container = $manager->get_views_result('container');
		$this->view_content = $manager->get_views_result('content');
	}
}
