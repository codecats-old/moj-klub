<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Manager_Data extends Manager{
	
	/**
	 * Content for Flash messages or Ajax 
	 * @var View
	 */
	protected $view_content;
	
	/**
	 * Content for view site
	 * @var View
	 */
	protected $view_container;
	
	/**
	 * Validation errors
	 * @var unknown
	 */
	protected $error = NULL;
	
	/**
	 * last operation result
	 * @var boolean
	 */
	protected $success = FALSE;
	
	/**
	 * 
	 * @var unknown
	 */
	protected $approve = FALSE;
	
	protected final function set_view_popver($show)
	{
		$view_popover=null;
		$component_path='Component/Info/Popover/Visable/';
		if (isset($show) AND $show === '1')$view_popover = View::factory($component_path.'Public');
		else $view_popover = View::factory($component_path.'Private');
		return $view_popover;
	}
	protected function to_array($object, $field)
	{
		$arr=array();
	//	$roles = $this->object->get_teams_roles();
		
		foreach ($object->as_array() as $obj)
		{
			array_push($arr, $obj->$field);
		}
		return $arr;
	}
	protected final function set_if_isset($orm, $arr, $field)
	{
		if (isset($arr[$field]))$orm->set($field, $arr[$field]);
	}
}