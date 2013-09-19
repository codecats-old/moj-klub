<?php defined('SYSPATH') OR die('No direct script access.');

class Model_User extends Model_Auth_User{
	
	protected $_has_many = array(
		'roles' => array(
			'through' => 'role_users'
		),
		'request' => array(
			'model' => 'Request'
		),
		'training_users' => array(
			'model' => 'Training_User'
		)
	);
	protected $_has_one = array(
		'info' => array(
			'foreign_key' => 'id'
		)
	);
	protected $_belongs_to = array(
		'avatar' => array(
			'model' 		=> 'Avatar',
			'foreign_key' 	=> 'avatar_id'
		),
		'team' => array(
				'model' 		=> 'Team',
				'foreign_key' 	=> 'team_id'
		)
	);
	
	public function get_teams_roles()
	{
		return $this->roles
			->where('name', '<>', 'login')
			->where('name', '<>', 'admin')
			->find_all(); 
	}
	
	public function get_finished_trainings($limit = 10)
	{
		return $this->training_users
			->where('finish', 'IS NOT', NULL)
			->order_by('start', 'DESC')
			->limit($limit)
			->find_all();
	}
	
	public function validate_register($post)
	{
		$validation = new Validation_User($post);
		return $validation->register();
	}
	
	public function validate_login($post)
	{
		$validation = new Validation_User($post);
		return $validation->login();
	}
	
	public function validate_change_data($post)
	{
		$validation = new Validation_User($post);
		return $validation->change_data();
	}
	
	public function validate_change_password($post)
	{
		$validation = new Validation_User($post);
		return $validation->change_password();
	}
}
