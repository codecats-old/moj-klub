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

	public function get_training_time()
	{
		return $this->select(
					'user.id',
					array(
							DB::expr(
									'sec_to_time(
										sum(
											time_to_sec(
												timediff( 
													time.`finish`, time.`start`
												)
											)
										)
									)'
							), 
							'total'
					)
				)
				->join(array('training_users', 'time'), 'LEFT')
				->on('user_id', '=', 'user.id')
				->where('time.finish', '>', DB::expr('NOW() - INTERVAL 90 DAY'))
				->group_by('user.id')
				->order_by('total', 'DESC')
		;

		
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
