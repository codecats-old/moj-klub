<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Automatic {

	public function action_index()
	{
		$this->view_content=View::factory('Container/Welcome/Main');
	/*	$this->view_container=View::factory('Container/Main')
			->set('view', $view);
*/
	}
	public function action_registrate()
	{
	//	$accessView=View::factory('Component/Access/Registrate');
			//->set('user', null)->set('info', null)->set('error', null);
	/*	$this->view_container=View::factory('Container/Main')
			->set('view', $accessView);*/
	}
	public function action_test()
	{
		$user=ORM::factory('User', 2);
		$info=ORM::factory('Info');
		$info->user=$user;
		$info->set('name', 'Tomek');
		$info->save();
	echo $user->info->name;
	echo '<hr>';
		//view
		echo '<pre>';
		echo Debug::dump($info);
		echo '</pre>';
		
		echo '<pre>';
		echo Debug::dump($user);
		echo '</pre>';
		
		
	/*	$role=ORM::factory('Role', array('name'=>'login'));
		echo '<pre>';
		echo Debug::dump($role);
		echo '</pre>';
		$user->add('roles', $role);*/
//		$user->add('roles', $role);
	
	/*	$user->set('email', 'tomek11@gmail.com');
		$user->set('username', 'tomek11');
		$user->set('password', 'tomek11');
		$user->save();*/
	}

} // End Welcome
