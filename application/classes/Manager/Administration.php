<?php defined('SYSPATH') OR die('No direct script access.');

/**
 *
 * @author t
 *
 * Manipulate with views and object data - work like controller with low level staff,
 * actions of managers called always from controller so MVC architecture is not broken.
 * To see hows it work with typhical action go to 'change_password'
 */
class Manager_Administration extends Manager_Data{
	/**
	 * Default view details
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{
	

	
		return $this;
	}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{

	}
}
