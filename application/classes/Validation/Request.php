<?php defined('SYSPATH') OR die('No direct script access.');

class Validation_Request extends Validation_General{
	
	protected $rules_join = array(
		'user_id' => array(
			array('not_empty'),
			array('is_numeric')
		),
		'team_id' => array(
			array('not_empty'),
			array('is_numeric')
		),
		'request' => array(
			array('Validation_Request::can_join')
		)
	);
	
	protected $rules_join_cancel = array(
		'user_id' => array(
			array('not_empty'),
			array('is_numeric')
		),
		'team_id' => array(
			array('not_empty'),
			array('is_numeric')
		),
		'request' => array(
			array('Validation_Request::is_loaded', array(':value', TRUE)),
			array('Validation_Request::is_active'),
			array('Validation_Request::status_refused')
		)
	);
	
	public static function check_field($request, $field_name, $field_value)
	{
		if ( ! $request->loaded()) $request->find();
		
		return ($request->$field_name == $field_value) ? TRUE : FALSE;
	}
	
	public static function is_active($request)
	{
		return self::check_field($request, 'active', TRUE);
	}
	
	
	public static function is_inactive($request)
	{
		return self::check_field($request, 'active', FALSE);
	}
	
	
	public static function status_null($request)
	{
		return self::check_field($request, 'status', NULL);
	}
	
	
	public static function status_refused($request)
	{
		return self::check_field($request, 'status', FALSE);
	}
	
	
	public static function can_join($request)
	{
		if (self::is_loaded($request, FALSE))
		{
			return TRUE;
		}
		
		if (self::is_active($request))
		{
			if (self::status_refused($request) OR self::status_null($request))
			{
				return TRUE;
			}
		}
		return FALSE;
	}
	
	public function join()
	{
		$object = Validation::factory($this->_data);
		$object ->rules('user_id', $this->rules_join['user_id'])
				->rules('team_id', $this->rules_join['team_id']);
		return $object;
	}
	
	public function join_cancel()
	{
		$object = Validation::factory($this->_data);
		
		$object ->rules('user_id', $this->rules_join_cancel['user_id'])
				->rules('team_id', $this->rules_join_cancel['team_id'])
				->rules('request', $this->rules_join_cancel['request']);
		return $object;		
	}
}
