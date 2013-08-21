<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * @author t
 *
 * Inerface converts urls values to encoded, decoding is also avalaible.
 */
interface Kohana_Interface_Coder{
	
	/**
	 * Convert value to property fromat which can be shown on url address
	 * 
	 * @param <string, int> $value
	 */
	public function to_url($value);
	
	/**
	 * Convert encoded value to decoded. 
	 * 
	 * @param <string> $value encoded
	 */
	public function from_url($value);
	
	/**
	 * Convert integer to shorter string
	 * 
	 * @param mixed $val
	 */
	public function convert_int ($val);
}
