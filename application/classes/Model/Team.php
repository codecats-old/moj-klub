<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Team Model
 * @author t
 *
 */
class Model_Team extends ORM{
	
	protected $_has_many = array(
			'users' 	=> array(
					//UPDATED 'model' => 'user',
					'model' 		=> 'User',
					'foreign_key' 	=> 'team_id',
			),
			'photo' 	=> array(
					'model' 		=> 'Photo',
					'foreign_key' 	=> 'team_id'
			),
			'request' 	=> array(
					'model' 		=> 'Request'
			)
	);
	protected $_belongs_to = array(
			'avatar' 	=> array(
					'model' 		=> 'Avatar',
					'foreign_key' 	=> 'avatar_id'
			),
	);
	
	/**
	 * Select teams which recently added photos and from this teams
	 * select team which has user more than some count of users
	 * 
	 * @return Ambigous <Database_Result, ORM, Model_Team, object, mixed, number, Database_Result_Cached, multitype:>
	 */
	public function get_most_popular()
	{			
		$photos = DB::select('team_id')
			->from('photos')
			->where('uploaded', '>', DB::expr('(now() - interval 14 day)'))
			->group_by('team_id');

		return $this
			->select(
					'team.id', 'short_name', 'username', 
					array(DB::expr('count(u.id)'), 'counter')
			)
			->join(array('users', 'u'), 'LEFT')
			->on('team.id', '=', 'u.team_id')
			->where('team.id', 'IN', $photos)
			->group_by('team.short_name')
			->having('counter', '>', 0)
			->order_by('counter', 'DESC')
		;
	}
	/**
	 * Return team with biggest count of members
	 * 
	 * @param unsigned int $max_members - count of max members (for precentage counter)
	 * @param unsigned int $omit - omit given id
	 * @return Ambigous <$this, Model_Team>
	 */
	public function get_biggest($max_members = 1, $omit = -1)
	{
		return $this
			->select(
					'team.id', 'team.short_name', 'team.full_name', 'team.description', 'team.success',
					'team.training', 'team.email', 'team.phone', 'team.street', 'team.street_no',
					'team.zip_code', 'team.city', 'team.avatar_id', 'avatar.path', 
					array(DB::expr('count(user.id)'), 'counter'),
					// team member *100 / max_team [%]
					array(DB::expr('count(user.username) * 100 / '.$max_members), 'counter_percent')
			)
			->join(array('users', 'user'), 'LEFT')
			->on('team.id', '=', 'user.team_id')
			->join(array('avatars', 'avatar'), 'LEFT')
			->on('team.avatar_id', '=', 'avatar.id')
			->where('team.id', '<>', $omit)
			->group_by('team.id')
			->having('counter', '>', 0)
			->order_by('counter', 'DESC')
		;
	}
	
	/**
	 * Return team with maximum count of members  
	 * 
	 */
	public function get_max_member_count()
	{
		return $this
			->select(array(DB::expr('count(user.id)'), 'counter'))
			->join(array('users', 'user'))
			->on('team.id', '=', 'user.team_id')
			->group_by('team.id')
			->order_by('counter', 'DESC')
			->limit(1);
	}
	
	public function get_cities()
	{
		return $this
			->select('team.city', array(DB::expr('count(user.id)'), 'counter'))
			->join(array('users', 'user'))
			->on('team.id', '=', 'user.team_id')
			->where('city', '<>', '')
			->group_by('team.id')
			->order_by('counter', 'DESC');
	}
	
	public function get_manager()
	{
		$manager = $this->get_members('manager')->find();
		return $manager;
	}
	public function get_coach()
	{
		$coach = $this->get_members('coach')->find();
		return $coach;
	}
	public function get_capitan()
	{
		$capitan = $this->get_members('capitan')->find();
		return $capitan;
	}
	
	/**
	 * Select all users in scope management
	 * 
	 * query:
	select 
	    u.id, u.username, ru.*, r.name
	from 
	    users u
	left join
	    role_users ru
	on 
	    ru.user_id = u.id
	left join
	    roles r
	on 
	    r.id = ru.role_id
	where 
	    (
	        u.team_id = 19
	        and
	        (
	                r.name = 'player'
	            or 
	                r.name = 'manager'
	        )
	    );
	 */
	public function get_management($limit=10)
	{
		$users = ORM::factory('User');
		$unique_roles = Manager_Role::$unique_roles;
		$users
			->join(array('role_users', 'ru'), 'LEFT')
			->on('ru.user_id', '=', 'user.id')
			->join(array('roles', 'role'), 'LEFT')
			->on('role.id', '=', 'ru.role_id')
			->where('team_id', '=', $this->id)
			->and_where_open();
		
		foreach ($unique_roles as $role)
		{
			$users->or_where('role.name', '=', $role);
		}
		
		$users
			->and_where_close()
			->group_by('id');
		
		return $users->limit($limit)->find_all();
		 
	}
	public function get_staff($limit=10)
	{
		$players = $this->get_members('staff', $limit)->find_all();
		return $players;
	}
	public function get_players($limit=30)
	{
		$players = $this->get_members('player', $limit)->find_all();
		return $players;
	}
	protected function get_members($role_name, $limit=0)
	{
		return ORM::factory('Role', array('name' => $role_name))
			->users
			->where('team_id', '=', $this->id)
			->limit($limit);
		/* NOT ORM METHOD
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
		$validation = new Validation_Team($post);
		return $validation->create();
	}
	public function validate_change($post)
	{
		$validation = new Validation_Team($post);
		return $validation->change();
	}
	public function filters()
	{
		$f = new Filter();
		return $f->get_team();
	}
}