<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Photo extends ORM{
	
	protected $_belongs_to = array(
		'team' => array(
			'model' => 'Team',
			'foreign_key' => 'team_id',
		)
	);
	
	public function validate_add($files)
	{
		$validator = new Validation_Image($files);
		return $validator->add_photo();
	}
	public function validate_delete($fields)
	{
		$validator = new Validation_Image($fields);
		return $validator->delete_photo();
	}
}
