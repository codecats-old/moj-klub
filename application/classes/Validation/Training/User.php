<?php defined('SYSPATH') OR die('No direct script access.');

class Validation_Training_User extends Validation_General{
	
	/**
	 * TODO: Validation timer
	 * @var unknown
	 */
	/**
	 * TODO: TRAININGS IN SHORT INTERVALS ARE DISALLOWED
	 * @var unknown
	 */
	protected $rules_add = array(
		'timer' 		=> array(
			//07:59:59 or 59:59 or 59
			//array('regex', array(':value', '/^(([0][0-7]:)?[0-5][0-9]:)?[0-5][0-9]$/'))
			//07:59:59 or 59:59 or 10:00
			array('regex', array(':value', '/^(([0][0-7]:)?[0-5][0-9]:)?[0-5][0-9]$/'))
		),
			
		'type' 			=> array(
			array('regex', array(':value', '/^[\pL\pN\pZ\p{Pc}\p{Pd}\p{Po}\s]++$/uD')),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 25)),
		),
			
		'description' 	=> array(
			array('regex', array(':value', '/^[\pL\pN\pZ\p{Pc}\p{Pd}\p{Po}\s]++$/uD')),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 150)),
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
			array('range', array(':value', 10, 420))
		)
	);
	
	public function add()
	{
		$object = Validation::factory($this->data());
		
		$object
			->rules('timer', 		$this->rules_add['timer'])
			->rules('type', 		$this->rules_add['type'])
			->rules('description', 	$this->rules_add['description'])
			->rules('start_date', 	$this->rules_add['start_date'])
			->rules('start_time', 	$this->rules_add['start_time'])
			->rules('duration', 	$this->rules_add['duration'])
		;
		
		return $object;
	}
}
