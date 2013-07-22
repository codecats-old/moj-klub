<?php defined('SYSPATH') or die('No direct script access.');
class Validation_User extends Validation{
	public static function changable($col, $field)
	{
		if(self::is_unique($col, $field)===TRUE)return TRUE;
		if(self::is_owner($col, $field)===TRUE)return TRUE;
		return FALSE;
	}
	public static function is_owner($col, $field)
	{
		$user=Auth::instance()->get_user();
		if($user->reload()->$col===$field)return TRUE;
		else return FALSE;
	}
	public static function is_unique($col, $field)
	{
		$obj=ORM::factory('User', array($col=>$field));
		$unique=!$obj->loaded();
		return $unique;
	}
	public static function is_correct_password($val)
	{
		return Auth::instance()->check_password($val);
	}
	public function change_password()
	{
		$object=Validation::factory($this->_data);
		$object->rules('new_password', $this->rules_register['password'])
			->rules('new_password_confirm', $this->rules_change_password['password_confirm'])
			->rules('password', $this->rules_change_data['password']);
		return $object;
	}
	protected $rules_change_password=array(
		'password_confirm'=>array(
			array('matches', array(':validation', ':field', 'new_password'))
		)
	);
	public function change_data()
	{
		$object=Validation::factory($this->_data);
		$object->rules('name', $this->rules_register['name'])
			->rules('surname', $this->rules_register['surname'])
			->rules('phone', $this->rules_register['phone'])
			->rules('show_phone', $this->rules_register['show_phone'])
			->rules('show_email', $this->rules_register['show_email'])
			->rules('email', $this->rules_change_data['email'])
			->rules('password', $this->rules_change_data['password']);
		return $object;
	}
	protected $rules_change_data=array(
		'password'=>array(
			array('not_empty'),
			array('Validation_User::is_correct_password', array(':value'))
		),
		'email'=>array(
			array('not_empty'),
			array('email'),
			array('Validation_User::changable', array(':field', ':value'))
		//	array('Validation_User::is_unique', array(':field', ':value')),
		//	array('Validation_User::is_owner', array(':field', ':value'))
		)
	);
	public function login()
	{
		$object=Validation::factory($this->_data);
		$object->rules('login_identificator', $this->rules_login['login_identificator'])
			->rules('password', $this->rules_login['password']);
		return $object;
	}
	protected $rules_login=array(
		'login_identificator'=>array(
			array('not_empty'),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 15))
		),
		'password'=>array(
			array('not_empty'),
			array('min_length', array(':value', 5)),
			array('max_length', array(':value', 25))
		),
		'stay_login'=>array(
			array('regex', array(':value', '/^(checked)$/'))
		)
	);
	public function register()
	{	
		$object=Validation::factory($this->_data);
		$object->rules('email', $this->rules_register['email'])
			->rules('username', $this->rules_register['username'])
			->rules('password', $this->rules_register['password'])
			->rules('password_confirm', $this->rules_register['password_confirm'])
			->rules('name', $this->rules_register['name'])
			->rules('surname', $this->rules_register['surname'])
			->rules('phone', $this->rules_register['phone'])
			->rules('show_phone', $this->rules_register['show_phone'])
			->rules('show_email', $this->rules_register['show_email'])
			->rules('captcha', $this->rules_register['captcha']);
		return $object;
	}
	protected $rules_register=array(
		'email'=>array(
			array('not_empty'),
			array('email'),
			array('Validation_User::is_unique', array(':field',':value'))
		),
		'username'=>array(
			array('not_empty'),
			array('alpha_dash'),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 15)),
			array('Validation_User::is_unique', array(':field',':value'))
		),
		'password'=>array(
			array('not_empty'),
			array('min_length', array(':value', 5)),
			array('max_length', array(':value', 25))
		),
		'password_confirm'=>array(
			array('matches', array(':validation', ':field', 'password'))
		),
		'name'=>array(
			array('alpha'),
			array('min_length', array(':value', 2)),
			array('max_length', array(':value', 15))
		),
		'surname'=>array(
			array('alpha'),
			array('min_length', array(':value', 2)),
			array('max_length', array(':value', 25))
		),
		'phone'=>array(
			array('phone', array(':value',array(7,9,10)))
		),
		'show_phone'=>array(
		/* checked or nothing*/
			array('regex', array(':value', '/^(checked)$/'))
		),
		'show_email'=>array(
			array('regex', array(':value', '/^(checked)$/'))
		),
		'captcha'=>array(
			array('not_empty'),
			array('Captcha::valid')
		)
	);
}