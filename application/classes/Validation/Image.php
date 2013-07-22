<?php defined('SYSPATH') or die('No direct script access.');
class Validation_Image extends Validation{
	public function avatar()
	{
		$object=Validation::factory($this->_data);
		$object->rules('avatar', $this->rules_avatar['avatar']);
		return $object;
	}
	protected $rules_avatar=array(
		'avatar'=>array(
			array('Upload::not_empty'),
			array('Upload::valid'),
			array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
			array('Upload::size', array(':value' ,'100K'))
		)
	);
}