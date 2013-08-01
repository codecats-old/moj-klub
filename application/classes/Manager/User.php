<?php defined('SYSPATH') OR die('No direct script access.');

/**
 *
 * @author t
 *
 * Manipulate with views and object data - work like controller with low level staff
*/
class Manager_User extends Manager{

	public function set_view_details($view)
	{
		$user = $this->object;
		$team=$user->team;

		$view_details=$this->get_view_details();

		$view_component_about_user=View::factory('Component/About/User')
		->set('team', $team->as_array());
		$view
		->set('view_component_about_user', $view_component_about_user)
		->set('view_details', $view_details);
	}

	public function set_data($data)
	{
		return $this->set_post_user_data($this->object, $data);
	}

	public function set_data_info($data)
	{
		$info = $this->object->info;
		return $this->set_post_info_data($info, $data);
	}
	/**
	 *
	 * @param unknown $user
	 * @param unknown $post
	 * @return unknown
	 */
	private function set_post_user_data($user, $post)
	{
		//if(isset($post['email']))$user->set('email', $post['email']);
		$this->set_if_isset($user, $post, 'email');
		$this->set_if_isset($user, $post, 'username');
		$this->set_if_isset($user, $post, 'password');
		return $user;
	}
	private function set_post_info_data($info, $post)
	{
		$this->set_if_isset($info, $post, 'name');
		$this->set_if_isset($info, $post, 'surname');
		$this->set_if_isset($info, $post, 'phone');
		$info->set('show_phone', ( (isset($post['show_phone']) === TRUE) ? TRUE : FALSE) );
		$info->set('show_email', ( (isset($post['show_email']) === TRUE) ? TRUE : FALSE) );
		return $info;
	}
	private function set_if_isset($orm, $arr, $field)
	{
		if (isset($arr[$field]))$orm->set($field, $arr[$field]);
	}

	private function get_view_details()
	{
		$user=$this->object;

		$info = $user->info;
		$info_popover['show_phone'] = $this->set_view_popver($info->show_phone);
		$info_popover['show_email'] = $this->set_view_popver($info->show_email);

		$roles = $user->roles->find_all();

		$avatar=$user->avatar;
		$team = $user->team;
		$roles_view = $this->get_team_roles($roles);
		$roles_view = implode(', ', $roles_view);
		$view_details = View::factory('Component/Menu/User/Details')
		->set('info', $info->as_array())
		->set('avatar', $avatar->as_array())
		->set('team', $team->as_array())
		->set('roles_view',$roles_view)
		->set('info_popover', $info_popover);
		return $view_details;
	}
	private function get_team_roles($roles)
	{
		$team_roles=array();
		$item=0;
		foreach ($roles->as_array() as $role)
		{
			if ($role->name!='login' AND $role->name!='admin')$team_roles[$item++]=$role->name;
		}
		return $team_roles;
	}
	private function set_view_popver($show)
	{
		$view_popover=null;
		$component_path='Component/Info/Popover/Visable/';
		if (isset($show) AND $show === '1')$view_popover = View::factory($component_path.'Public');
		else $view_popover = View::factory($component_path.'Private');
		return $view_popover;
	}
}
