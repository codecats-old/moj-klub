<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @author t
 *
 * Factory Manager
 */
abstract class Kohana_Manager implements Kohana_Interface_Manager {
	
	/**
	 * Object to manage
	 * 
	 * @var ORM element on Manager's manipulations
	 */
	protected $object;
	
	/**
	 * 
	 * @param string $manager name
	 * @param object $object
	 * @return manager insatnce
	 */
	public static function factory ($manager, $object)
	{
		// Set class name
		$manager = 'Manager_'.$manager;
	
		return new $manager($object);
	}
	
	/**
	 * Constructor
	 * 
	 * @param ORM object
	 */
	public function __construct($object) 
	{
		$this->object = $object;
	}
}
