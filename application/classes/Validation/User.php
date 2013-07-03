<?php defined('SYSPATH') or die('No direct script access.');
class Validation_User extends Validation{
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
			->rules('show_email', $this->rules_register['show_email']);
		
		return $object;
	}
	protected $rules_register=array(
		'email'=>array(),
		'username'=>array(),
		'password'=>array(),
		'password_confirm'=>array(),
		'name'=>array(),
		'surname'=>array(),
		'phone'=>array(),
		'show_phone'=>array(),
		'show_email'=>array()
	);
}