<?php defined('SYSPATH') or die('No direct script access.');
class Validation_User extends Validation{
	public static function is_unique($col, $field)
	{
		$obj=ORM::factory('User', array($col=>$field));
		$unique=!$obj->loaded();
		return $unique;
	}
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
			array('phone')
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