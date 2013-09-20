<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Training extends Manager_Data{
	
	const TIME_LIMIT_MIN = 9;//9 minutes
	
	const TIME_LIMIT_MAX = 420;//7*60 [m:ss] => 7 minutes
	
	/**
	 * Timer data to timestamp:
	 *  
	 * 00:10 	=> 10 	(int),
	 * 01:10 	=> 70 	(int) 
	 * OR
	 * 01:01:10 => 3670 (int)
	 * 
	 * @param string ((hh:)mm:)ss $timer
	 * @throws InvalidArgumentException
	 * @return int timestamp
	 */
	public function timer_to_timestamp($timer)
	{
		$time = explode(':', $timer);
		$size = sizeof($time);
			
		switch($size)
		{
			case 1 :
				$sec = $time[0];
				$time = $sec;
				break;
					
			case 2 :
				$sec = $time[1];
				$min = $time[0] * 60;
				$time = $sec + $min;
				break;
					
			case 3 :
				$sec = $time[2];
				$min = $time[1] * 60;
				$hour = $time[0] * 3600;
				$time = $sec + $min + $hour;
				break;
				
			default :
				throw new InvalidArgumentException('Invalid size of array');
				break;
		}
		return $time;
	}
	public function duration_to_timestamp($duration)
	{
		return $duration * 60;//minutes * secounds
	}
	
	/**
	 * Convert secounds to minutes
	 * 
	 * @param unknown $time
	 * @return number
	 */
	public function timestamp_to_duration($time)
	{
		return floor($time / 60);
	}
	public function timestamp_to_finish($time, $start)
	{
		$time += strtotime($start);
		return date(Date::$timestamp_format, $time);
	}
	/**----------------------------------------------------------------------------------*/
	public function set_view_details($view){}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data){}
}
