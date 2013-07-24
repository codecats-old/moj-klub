<?php defined('SYSPATH') or die('No direct script access.');
class Model_User extends Model_Auth_User{
	protected $_has_many=array(
		'roles'=>array(
			'through'=>'role_users'
		)
	);
	protected $_has_one=array(
		'info'=>array(
			'foreign_key'=>'id'
		)
	);
	protected $_belongs_to=array(
		'avatar'=>array(
			'model'=>'avatar',
			'foreign_key'=>'avatar_id'
		),
		'team'=>array(
				'model'=>'Team',
				'foreign_key'=>'team_id'
		)
	);
	public function validate_register($post)
	{
		$validation=new Validation_User($post);
		return $validation->register();
	}
	public function validate_login($post)
	{
		$validation=new Validation_User($post);
		return $validation->login();
	}
	public function validate_change_data($post)
	{
		$validation=new Validation_User($post);
		return $validation->change_data();
	}
	public function validate_change_password($post)
	{
		$validation=new Validation_User($post);
		return $validation->change_password();
	}
}
