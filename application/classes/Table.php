<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Table creator
 * 
 * @author t
 *
 */
class Table {
	
	/**
	 * Default view
	 * @var string
	 */
	protected $view = 'Component/Grid/Table/Node';
	
	/**
	 * container
	 * @var array
	 */
	protected $_data = array();
	
	/**
	 * 
	 * @param Model $roles
	 * @param Model $users
	 */
	public function __construct($roles, $users, array $errors = NULL)
	{
		$this->roles = 	$roles;
		$this->users = 	$users;
		$this->errors = $errors;
		$this->_initialize();
	}
	
	/**
	 * Initialize content for table
	 */
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
		
		$view->errors = $this->errors;
		
		return $view->render();
	}
}
