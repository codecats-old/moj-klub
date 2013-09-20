<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Training_User extends ORM{
	protected $_belongs_to = array(
			'user' => array(
					'model' => 'User'
			)
	);
	
	public function validate_add($post, $last_training)
	{
		$post['last_training'] = $last_training;
		$validation = new Validation_Training_User($post);
		return $validation->add();
	}
}
