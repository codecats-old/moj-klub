<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Training extends Manager_Data{
	
	const TIME_LIMIT_MIN = 9;//9 minutes
	
	const TIME_LIMIT_MAX = 420;//7*60 [m:ss] => 7 minutes
	
	protected $post = NULL;
	
	protected $training = NULL;
	
	protected $last_training = NULL;
	
	protected function _save()
	{
		if ($this->success === TRUE)
		{
			try
			{
				$user = $this->object;
				$this->training->user = $user;
				$this->training->save();
				$this->success = TRUE;
			}
			catch(Database_Exception $dbex)
			{
				$this->success = FALSE;
				Message::instance()->set(Message::ERROR, 'Probably database is busy. Try again in a while');
				var_dump($dbex);
			}
		}
		
		return $this->success;
	}
	
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
	public function get_training()
	{
		return is_array($this->training) ? $this->training : $this->training->as_array();
	}
	public function get_error()
	{
		return $this->error;
	}
	public function save()
	{
		if ( $this->post !== NULL)
		{
			$post = $this->post;
			$last_training = $this->last_training;
			$training = $this->training;
			$validator = $training->validate_add($post, $last_training);
			if ($validator->check())
			{
				$training->type = $post['type'];
				$training->description = $post['description'];
				$training->start = $post['start_date'].' '.$post['start_time'];
			
				/**
				 * Check if timer data have to be save
				 * OR
				 * Data from duration  
				 * if ()
				 * elseif (isset($post['duration']) AND $post['duration'] > 0)
				 */
				if (isset($post['timer']) AND $post['timer'] > 0)
				{
					$time = $this->timer_to_timestamp($post['timer']);
					$training->finish = $this->timestamp_to_finish($time, $training->start);
					$this->success = TRUE;
				}
				else
				{
					$time = $this->duration_to_timestamp($post['duration']);//minutes * secounds
					$training->finish = $this->timestamp_to_finish($time, $training->start);
			
					$this->success = TRUE;
				}
				$this->training = $training;
				$this->_save();
			}
			else
			{
				$this->error = $validator->errors('Training/User/Add');
				$this->training = $post;
			}
		}
		
		return $this->success;
	}
	/**----------------------------------------------------------------------------------*/
	public function set_view_details($view){}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{
		$user = $this->object;
		$training = NULL;
		$this->post = ( ! empty($data['post'])) ? $data['post'] : NULL;
		$last_training = $data['last_training'];
		$last_training = ($last_training->count() !== 0) ? $last_training->current()->as_array() : NULL;
		$this->last_training = $last_training;
		
		if ( ! empty($this->post))
		{
			$training = ORM::factory('Training_User');
		}
		else
		{
			$training = $last_training;
			if ($training !== NULL)
			{
				$duration = strtotime($training['finish']) - strtotime($training['start']);
				$training['duration'] = floor($duration / 60);
				$training['duration'] = ($training['duration'] > 0) ? $training['duration'] : NULL;
			}
			else
			{
				$training['duration'] = NULL;
			}
			$date = new DateTime();
			$training['start_date'] = $date->format('Y-m-d');
			$training['start_time'] = $date->format('H:i');
		}	

		
		$this->training = $training;
		
		return $this;
	}
}
