<?php defined('SYSPATH') OR die('No direct script access.');

class Validation_Training_User extends Validation_General{
	
	protected $rules_add = array(
		'timer' 		=> array(
			//07:59:59 or 59:59 or 59
			//array('regex', array(':value', '/^(([0][0-7]:)?[0-5][0-9]:)?[0-5][0-9]$/'))
			//07:59:59 or 59:59 or 10:00
			array('regex', array(':value', '/^(([0][0-7]:)?[0-5][0-9]:)?[0-5][0-9]$/')),
			array(
				'Validation_Training_User::timer_range', 
				array(
					':value',
					Manager_Training::TIME_LIMIT_MIN,
					Manager_Training::TIME_LIMIT_MAX
				)
			)
		),
			
		'type' 			=> array(
			array('regex', array(':value', '/^[\pL\pN\pZ\p{Pc}\p{Pd}\p{Po}\s]++$/uD')),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 25))
		),
			
		'description' 	=> array(
			array('regex', array(':value', '/^[\pL\pN\pZ\p{Pc}\p{Pd}\p{Po}\s]++$/uD')),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 150))
		),
			
		'start_date' 	=> array(
			array('not_empty'),
			array('date')
		),
			
		'start_time' 	=> array(
			array('not_empty'),
			//24 hour format: 23:39, 12:59
			array('regex', array(':value', '/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/'))
		),
			
		'duration' 		=> array(
			array('digit'),
			//7*60 [h]*[m] => 8 hours
			array(
				'range', 
				array(
					':value', 
					Manager_Training::TIME_LIMIT_MIN, 
					Manager_Training::TIME_LIMIT_MAX
				)
			)
		),
		
		'last_training' => array(
				array('Validation_Training_User::allowed_interval', array(':value', ':start_date'))
		),
		
		'choose_input' 	=> array(
			array('Validation_Training_User::is_input_to_choose', array(':timer', ':duration'))
		)
	);
	

	public static function allowed_interval($last_training, $start_date)
	{
		if ($last_training === NULL OR is_array($last_training) === FALSE) return TRUE;
		
		if ( strtotime($last_training['finish']) < strtotime($start_date)) return TRUE;

		return FALSE;
	}
	
	public static function timer_range($timer, $from, $to)
	{
		if ($timer === '00') return TRUE;
		$manager = Manager::factory('Training', NULL);
		$time = $manager->timer_to_timestamp($timer);
		$time = $manager->timestamp_to_duration($time);
		
		return Valid::range($time, $from, $to);
	}
	
	public static function is_input_to_choose($timer, $duration)
	{
		if (isset($timer) AND $timer > 0)
		{
			return TRUE;
		}
		elseif (isset($duration) AND $duration > 0)
		{
			return TRUE;
		}	
		else 
		{
			return FALSE;
		}
	}
	
	public function add()
	{
		$arr = $this->data();
		/**
		 * empty (not used) field to run the rule from difference scope.
		 * Scope is associated with both fields: timer and description and
		 * the validation is more readable in difference rule.
		 */
		$arr['choose_input'] = array(
				'timer' 		=> $arr['timer'],
				'description' 	=> $arr['description']
		);
		$object = Validation::factory($arr);
		
		$object
			->bind(':timer', 		$arr['timer'])
			->bind(':duration', 	$arr['duration'])
			->bind(':start_date', 	$arr['start_date'])
			->bind(':start_time', 	$arr['start_time'])
		;
		
		$object
			->rules('timer', 			$this->rules_add['timer'])
			->rules('type', 			$this->rules_add['type'])
			->rules('description', 		$this->rules_add['description'])
			->rules('start_date', 		$this->rules_add['start_date'])
			->rules('start_time', 		$this->rules_add['start_time'])
			->rules('duration', 		$this->rules_add['duration'])
			->rules('last_training', 	$this->rules_add['last_training'])
			->rules('choose_input', 	$this->rules_add['choose_input'])
		;
		
		return $object;
	}
}
