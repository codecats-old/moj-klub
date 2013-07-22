<?php defined('SYSPATH') or die('No direct script access.');
class Validation_Team extends Validation_General{
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
			array('not_empty')
		),
		'full_name'=>array(
			array('not_empty')
		),
		'description'=>array(
		),
		'street'=>array(
		),
		'street_no'=>array(
		),
		'zip_code'=>array(
		),
		'zip_code2'=>array(
		),
		'city'=>array(
		),
		'email'=>array(
		),
		'phone'=>array(
		),
		'success'=>array(
		)
	);
}