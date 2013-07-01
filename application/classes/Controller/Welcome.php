<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!!');
	}
	public function action_test()
	{
		$user=ORM::factory('User', array('username'=>'tomek11'));
		echo Debug::dump($user);
		$role=ORM::factory('Role', array('name'=>'login'));
		$user->add('roles', $role);
	
	/*	$user->set('email', 'tomek11@gmail.com');
		$user->set('username', 'tomek11');
		$user->set('password', 'tomek11');
		$user->save();*/
	}

} // End Welcome
