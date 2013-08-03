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
	
	/**
	 * (non-PHPdoc)
	 * @see Kohana_Interface_Manager::get_views_result()
	 */
	public function get_views_result($name)
	{
		$view='view_'.$name;
		return $this->$view;
	}
	
	/**
	 * Create popover view
	 * 
	 * @param boolean $show
	 * @return Ambigous <NULL, View>
	 */
	protected final function set_view_popver($show)
	{
		$view_popover=null;
		$component_path='Component/Info/Popover/Visable/';
		if (isset($show) AND $show === '1')$view_popover = View::factory($component_path.'Public');
		else $view_popover = View::factory($component_path.'Private');
		return $view_popover;
	}
	
	/**
	 * Specific object field put to array
	 * 
	 * @param ORM $object
	 * @param string $field
	 * @return string
	 */
	protected function to_array($object, $field)
	{
		$arr=array();
		
		foreach ($object->as_array() as $obj)
		{
			array_push($arr, $obj->$field);
		}
		return $arr;
	}
	
	/**
	 * Set value from array to object if is set
	 * 
	 * @param ORM $orm
	 * @param array $arr
	 * @param string $field
	 */
	protected final function set_if_isset($orm, $arr, $field)
	{
		if (isset($arr[$field]))$orm->set($field, $arr[$field]);
	}
	
	/**
	 * Set value from array to object if is not empty
	 * 
	 * @param ORM $orm
	 * @param array $arr
	 * @param string $field
	 */
	protected final function set_if_not_empty($orm, $arr, $field)
	{
		if(empty($arr[$field])===FALSE)$orm->set($field, $arr[$field]);
	}
}