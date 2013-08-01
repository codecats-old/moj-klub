<?php defined('SYSPATH') OR die('No direct script access');

/**
 * 
 * @author t
 *
 * Interface with available options for manipulate like Controller but on low level
 * e.g. $POST['field']=='checked' manager should translate it to suitable format data
 */
interface Kohana_Interface_Manager{
	
	/**
	 * Set data to view
	 * 
	 * @param View $view
	 */
	public function set_view_details($view);
	
	/**
	 * Set data to object
	 * 
	 * @ param array
	 */
	public function set_data($data);
}
