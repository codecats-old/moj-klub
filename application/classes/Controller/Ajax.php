<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * @author t
 *
 * respond for XHR only
 */
class Controller_Ajax extends Controller{
	
	public function before()
	{
		if( ! $this->request->is_ajax())
		{
			HTTP::redirect();
		}
	}
	public function action_index()
	{
		echo 'Hello world';
	}
	
	public function action_roles()
	{
		if(Auth::instance()->logged_in() === TRUE)
		{
			$roles=Auth::instance()->get_user()->roles->find_all();
			$cookie=implode(',', $roles->as_array());
			Cookie::set('roles', $cookie);
		}
		else
		{
			Cookie::set('roles', '-1');
		}
		echo 'setted';
	}
}
