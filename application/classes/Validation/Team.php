<?php defined('SYSPATH') or die('No direct script access.');
class Validation_Team extends Validation_General{
	public static function is_exists_both_values($validation, $field1, $field2)
	{
		if( (empty($validation[$field1])===empty($validation[$field2])) )return TRUE;//xor
		else return FALSE;
	}
	public static function is_unique($col, $field, $model='Team')
	{
		return parent::is_unique($col, $field, $model);
	}
	public function create()
	{
		$object=Validation::factory($this->_data);
		$object->rules('short_name', $this->rules_create['short_name'])
			->rules('full_name', $this->rules_create['full_name'])
			->rules('description', $this->rules_create['description'])
			->rules('street', $this->rules_create['street'])
			->rules('street_no', $this->rules_create['street_no'])
			->rules('zip_code', $this->rules_create['zip_code'])
			->rules('zip_code2', $this->rules_create['zip_code2'])
			->rules('city', $this->rules_create['city'])
			->rules('email', $this->rules_create['email'])
			->rules('phone', $this->rules_create['phone'])
			->rules('success', $this->rules_create['success']);
		return $object;
	}
	protected $rules_create=array(
		'short_name'=>array(
			array('not_empty'),
			array('Validation_Team::is_unique', array(':field', ':value')),
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 20)),
			array('regex', array(':value', '/^[\w\. ]++$/iuD'))
		),
		'full_name'=>array(
			array('not_empty'),
			array('Validation_Team::is_unique', array(':field', ':value')),
			array('min_length', array(':value', 5)),
			array('max_length', array(':value', 50)),
			array('regex', array(':value', '/^[\w ]++$/iuD'))
		),
		'description'=>array(
			array('min_length', array(':value', 5)),
			array('max_length', array(':value', 50)),
			array('regex', array(':value', '/^[\pL\pN\pZ\p{Pc}\p{Pd}\p{Po}\s]++$/uD'))
		),
		'street'=>array(
			array('min_length', array(':value', 5)),
			array('max_length', array(':value', 50)),
			array('regex', array(':value', '/^[\w ]++$/iuD'))
		),
		'street_no'=>array(
			array('min_length', array(':value', 1)),
			array('max_length', array(':value', 5)),
			array('regex', array(':value', '/^[\w\d\/]+$/'))
		),
		'zip_code'=>array(
			array('exact_length', array(':value', 2)),
			array('digit'),
			array('Validation_Team::is_exists_both_values', array(':validation', ':field', 'zip_code2'))
		),
		'zip_code2'=>array(
			array('exact_length', array(':value', 3)),
			array('digit'),
			array('Validation_Team::is_exists_both_values', array(':validation', 'zip_code', ':field'))
		),
		'city'=>array(
			array('min_length', array(':value', 3)),
			array('max_length', array(':value', 20)),
			array('regex', array(':value', '/^[\pL\- ]+$/ui'))
		),
		'email'=>array(
			array('email')
		),
		'phone'=>array(
			array('phone', array(':value',array(7,9,10)))
		),
		'success'=>array(
			array('min_length', array(':value', 5)),
			array('max_length', array(':value', 50)),
			array('regex', array(':value', '/^[\pL\pN\pZ\p{Pc}\p{Pd}\p{Po}\s]++$/uD'))
		)
	);
}