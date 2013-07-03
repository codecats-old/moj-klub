<?php defined('SYSPATH') or die('No direct script access.');
class Model_User extends Model_Auth_User{
	protected $_has_many=array(
		'roles'=>array(
			'through'=>'role_users'
		)
	);
	public function validate_register($post)
	{
		$validation=new Validation_User($post);
		return $validation->register();
	}
}
