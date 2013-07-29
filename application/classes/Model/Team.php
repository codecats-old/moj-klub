<?php defined('SYSPATH') or die('No direct script access.');
class Model_Team extends ORM{
	protected $_has_many=array(
		'user'=>array(
			'model'=>'user',
			'foreign_key'=>'team_id',
		)
	);
	public function get_manager()
	{
		$manager=$this->get_members('manager')->find();
		return $manager;
	}
	public function get_coach()
	{
		$coach=$this->get_members('coach')->find();
		return $coach;
	}
	public function get_capitan()
	{
		$capitan=$this->get_members('capitan')->find();
		return $capitan;
	}
	public function get_staff($limit=10)
	{
		$players=$this->get_members('staff', $limit)->find_all();
		return $players;
	}
	public function get_players($limit=30)
	{
		$players=$this->get_members('player', $limit)->find_all();
		return $players;
	}
	protected function get_members($role_name, $limit=0)
	{
		return ORM::factory('Role', array('name' => $role_name))
			->users
			->where('team_id', '=', $this->id)
			->limit($limit);
		/*
		$members=$this->get('user');
		return $members
			->from('role_users', 'roles')
			->where('roles.name', '=', $role_name)
			->where('role_users.user_id', '=',DB::expr('`user`.`id`'))
			->where('role_users.role_id', '=',DB::expr('`roles`.`id`'))
			->limit($limit);
		*/
	}
	public function validate_create($post)
	{
		$validation=new Validation_Team($post);
		return $validation->create();
	}
	public function filters()
	{
		$f=new Filter();
		return $f->get_team();
	}
}