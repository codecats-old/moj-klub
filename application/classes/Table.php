<?php defined('SYSPATH') OR die('No direct script access.');

class Table {
	protected $view = 'Component/Grid/Table/Node';
	
	protected $_data = array();
	public function __construct($roles, $users)
	{
		$this->roles = $roles;
		$this->users = $users;
		$this->_initialize();
	}
	protected function _initialize()
	{
		$this->heads = $this->roles;
		$this->head_field = 'name';
		
		$rows = array();
		$body_title_field = 'username';
		foreach ($this->users as $user)
		{
			$arr['row'] = $user->{$body_title_field};
			
			foreach($this->roles as $role)
			{
				$arr['content'][$role->id] = ($user->has('roles', $role)) ? TRUE : FALSE;
			}
			array_push($rows, $arr);
		}
		$this->body = $rows;
	}
	public function __set($name, $value)
	{
		$this->_data[$name] = $value;
		return $this;
	}
	public function __get($name)
	{
		return $this->_data[$name];
	}
	public function __toString()
	{
		$view = View::factory($this->view);
		$view->title = 'roles';
		$view->heads = $this->heads;
		$view->head_field = $this->head_field;
		
		$view->bodies = $this->body;
		
		return $view->render();
	}
}
