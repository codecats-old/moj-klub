<?php defined('SYSPATH') or die('No direct script access.');
class Model_Team extends ORM{
	protected $_has_many=array(
		'user'=>array(
			'model'=>'user',
			'foreign_key'=>'team_id',
		//	'far_key'=>'id'
		)
	);
	public function get_manager_id()
	{
		$query=$this->get_users_ids('manager', 1);
		$ids=$query->as_object()->execute();
		if($ids->current()==null)return null;
		else return $ids->current()->user_id;
	}
	public function get_capitan_id()
	{
		$query=$this->get_users_ids('capitan', 1);
		$ids=$query->as_object()->execute();
		if($ids->current()==null)return null;
		else return $ids->current()->user_id;
	}
	public function get_coach_id()
	{
		$query=$this->get_users_ids('coach', 1);
		$ids=$query->as_object()->execute();
		if($ids->current()==null)return null;
		else return $ids->current()->user_id;
	}
	private function get_users_ids($role, $limit=null)
	{
		$teams_id=$this->__get('id');
		$query=DB::select('user_id')
			->from('role_users', 'roles', 'users')
			->where('roles.name', '=', $role)
			->where('role_users.role_id', '=', DB::expr('`roles`.`id`'))
			->where('users.id', '=', DB::expr('`role_users`.`user_id`'))
			->where('users.team_id', '=', $teams_id)
			->limit($limit);
		return $query;
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
