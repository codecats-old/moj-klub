<?php defined('SYSPATH') or die('No direct script access.');
class Model_Team extends ORM{
	protected $_has_many=array(
		'user'=>array(
			'model'=>'user',
			'foreign_key'=>'team_id'
		)
	);
	public function validate_create($post)
	{
		$validation=new Validation_Team($post);
		return $validation->create();
	}
}
