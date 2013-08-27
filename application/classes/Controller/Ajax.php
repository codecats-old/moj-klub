<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * Controller manipulate techical Cookies
 * 
 * @author t
 *
 * respond for XHR or not initial only
 */
class Controller_Ajax extends Controller{
	
	/**
	 * Cookie file name with roles
	 * 
	 * @const string
	 */
	const COOKIE_NAME = 'roles';
	
	public function before()
	{
		/**
		 * Redirect only if request is initial or not XHR
		 */
		if(($this->request->is_ajax() === FALSE) AND ($this->request->is_initial() === TRUE))
		{
			HTTP::redirect();
		}
	}

	/**
	 * Save techical (control) cookies by AJAX or not initial request
	 */
	public function action_roles()
	{
		if(Auth::instance()->logged_in() === TRUE)
		{
			/**
			 * Save user roles to cookie
			 */
			$roles=Auth::instance()->get_user()->roles->find_all();
			$cookie=implode(',', $roles->as_array());
			Cookie::set(self::COOKIE_NAME, $cookie);
		}
		else
		{
			//default guest role
			Cookie::set(self::COOKIE_NAME, '-1');
		}
	}
	
	/**
	 * Default action on logout
	 */
	public function action_logout()
	{
		Cookie::set(self::COOKIE_NAME, '-1');
	}
	
	/**
	 * When roles are changed delete cookie
	 */
	public function action_clear()
	{
		Cookie::delete(self::COOKIE_NAME);
	}
	public function action_notification()
	{
		echo serialize(Notificator::get_status());
		
	}
	public function action_notification_config()
	{
		echo serialize(
				array(
						'duration' => Notificator::DURATION
				)
		);
	}
}
