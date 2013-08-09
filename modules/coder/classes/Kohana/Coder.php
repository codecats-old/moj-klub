<?php 

defined('SYSPATH') OR die('No direct script access.');


//require_once Kohana::find_file('./modules/coder/classes/ShorUrl', 'Token');

class Kohana_Coder implements Kohana_Interface_Coder{
	
	protected static $instance;

	/**
	 * @return Kohana_Interface_Coder
	 */
	public static function instance()
	{
		if (self::$instance === NULL)
		{
			$class = get_called_class();
			self::$instance = new $class;
		}
		return self::$instance;
	}
	
	public function to_url($val)
	{
		if ($val === NULL) return NULL;
		
		return bin2hex(Encrypt::instance()->encode($val));
	}
	public function from_url($val)
	{
		//check if value is code if not exception will be thrown
		try
		{	
			return Encrypt::instance()->decode(hex2bin($val));
		}
		catch(ErrorException $e)
		{
	//		throw $e;
			return NULL;			
		}
	}
	
	
}