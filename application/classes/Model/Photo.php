<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Photo extends ORM{
	
	protected $_has_many = array(
		'team' => array(
			'model' => 'team',
			'foreign_key' => 'team_id',
		)
	);
	
	public function validate_add()
	{
		
	}
	public function validate_delete()
	{
		
	}
}
