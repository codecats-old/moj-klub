<?php defined('SYSPATH') or die('No direct script access.');
class Model_Avatar extends ORM{
	protected $_has_many=array(
		'user'=>array(
			'model'=>'user',
			'foreign_key'=>'avatar_id'
		),
		'teams'=>array(
			'through'=>'team_users'
		)
	);
	public function validate_user_avatar($files)
	{
		$validator=new Validation_Image($files);
		return $validator->avatar();
	}
}
