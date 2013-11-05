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
			//PHP 5.4
			if (function_exists('hex2bin') === TRUE) 
			{
				return Encrypt::instance()->decode(hex2bin($val));
			}
			else 
			{
				return Encrypt::instance()->decode($this->hex2bin($val));
			}
			
		}
		catch(ErrorException $e)
		{
	//		throw $e;
			return NULL;			
		}
	}
	
	/**
	 * Convert integer to shorter representation (better works with big integers)
	 * if value is not a number then function converts it back to integer.
	 * Zero is not allowed.
	 * 
	 * If decode is true then convert value to string
	 * 
	 * @param mixed $val
	 * @param boolean $decode
	 * @return string|number
	 */
	public function short_url($val, $decode = false)
	{
		//if decode is false the make short url
		if (is_numeric($val) AND $val != 0 AND $decode === false)
		{
			return base_convert($val, 10, 36);	
		}
		else 
		{
			$val = intval(base_convert($val,36,10));
			return ($val !== 0) ? $val : FALSE;
		}
	}
	private function hex2bin($hexstr)
	{
		$n = strlen($hexstr);
		$sbin = '';
		$i = 0;
		while ($i < $n)
		{
			$a = substr($hexstr,$i,2);
			$c = pack('H*',$a);
			if ($i == 0)
			{
				$sbin = $c;
			}
			else 
			{
				$sbin .= $c;
			}
			$i += 2;
		}
		return $sbin;
	}
	
}