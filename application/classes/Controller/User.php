<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Automatic{
	public function action_index()
	{
		
	}
	public function action_login()
	{
		$login_success=FALSE;
		$post=$this->request->post();
		
		if($post)
		{
			//$login_success=TRUE;
		}
		if($login_success===FALSE)
		{
			$this->view_content=View::factory('Component/Form/Login')
			->set('rel', $this->request->param('id'));
			$this->view_container=View::factory('Component/Access/Login')
			->set('form_login', $this->view_content);
		/*	if($this->request->param('id')==='login_form_get')
			{
				$accessModal=View::factory('Component/Window/Modal/Main')
				->set('title','Login')
				->set('component',$this->view_content);
			}*/
			
		}
		else
		{
			$this->view_content=View::factory('Component/Info/Registrate/Success')
			;//->set('user', $user->as_array());
			$this->view_container=View::factory('Component/Access/Registrate')
			->set('form_registrate', $this->view_content);
			$this->status['state']='Success';
			$this->status['message']='Rejestracja zakończona powodzeniem';
			
		}
	//	$this->view_container=View::factory('Component/Access/Login')
		//	;
		//->set('form_login', $this->view_content);
		//if(!$post)$this->view_content=$this->view_container;
	}
	public function action_quick_login()
	{
		
	}
	public function action_registrate()
	{
		$registrate_success=FALSE;
		$post=$this->request->post();
		
		$user=ORM::factory('User');
		$info=ORM::factory('Info');
		if($post)
		{
			$user->set('email', $post['email']);
			$user->set('username', $post['username']);
			$user->set('password', $post['password']);
			$info->set('name', $post['name']);
			$info->set('surname', $post['surname']);
			$info->set('phone', $post['phone']);
			$info->set('show_phone', ((isset($post['show_phone'])===TRUE)?TRUE:FALSE));
			$info->set('show_email', ((isset($post['show_email'])===TRUE)?TRUE:FALSE));
			$validator=$user->validate_register($post);
			if($validator->check())
			{
				try{
					$user->save();
					$info->user=$user;
					$info->save();
					$this->add_role($user, 'login');
					$registrate_success=TRUE;
				}catch(Exception $ex){
					$this->status['state']='Error';
					$this->status['message']='Probably database is busy. Try again in a while';
					var_dump($ex);
				}
			}
			else
			{	
				$this->error=$validator->errors('User/Register');
			}
		}
		else
		{
			$info->set('show_phone', TRUE);
			$info->set('show_email', TRUE);
		}
		if($registrate_success!==FALSE)
		{
			
			$captcha=Captcha::instance();//reload
			$form=View::factory('Component/Form/Registrate')
				->set('user', $user->as_array())->set('info',$info->as_array())->set('captcha',$captcha)
				->set('error', $this->error);
			/*$accessModal=View::factory('Component/Window/Modal/Main')
				->set('title','registrate')
				->set('component',$form);*/
			$this->view_content=$form;
			$this->view_container=View::factory('Component/Access/Registrate')
				->set('form_registrate', $form);
			
			$this->status['state']='Warning';
			$this->status['message']='Correct your data';
		}
		else 
		{
			$this->view_content=View::factory('Component/Info/Registrate/Success')
				->set('user', $user->as_array());
			$this->view_container=View::factory('Component/Access/Registrate')
				->set('form_registrate', $this->view_content);
			$this->status['state']='Success';
			$this->status['message']='Rejestracja zakończona powodzeniem';
		}
	}
	protected function add_role($user, $role_name)
	{
		$role=ORM::factory('Role', array('name'=>$role_name));
		$user->add('roles', $role);
	}
	protected $error;
}
