<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * @author t
 *
 * Extending Zend_Acl Resources creator on given roles.
 */
abstract class Kohana_Menu extends Zend_Acl implements Kohana_Interface_Menu{
	
	/**
	 * 
	 * 
	 * @param string $name
	 * @param ORM $user
	 * @return Menu instance
	 */
	public static function factory($name, $user)
	{
		$class = 'Menu_'.$name;
		
		return new $class($user);
	}
	
	/**
	 * Automatic prepare resources and permision to them.
	 * 
	 * @param ORM $user
	 */
	public function __construct($user)
	{
		$this->prepare_resources()->prepare_permissions($user);
	}
	
	/**
	 * Return instance for Generic Resource
	 * 
	 * @param string $name
	 * @return \Zend\Permissions\Acl\Resource\GenericResource
	 */
	public static function get_generic_resource($name)
	{
		return Zend_Acl::get_generic_resource($name);
	}  
}
