<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * @author t
 * 
 * Guide for access, based on rolest to specific resources.
 *
 */
interface Kohana_Interface_Menu{
	
	/**
	 * Create existing resources
	 */
	public function prepare_resources();
	
	/**
	 * Prepare permissions for existing resources
	 * 
	 * @param ORM $user
	 */
	public function prepare_permissions($user);
	
	/**
	 * Instance of Generic Resource object
	 * 
	 * @param string $name
	 */
	public static function get_generic_resource($name);
}
