<?php defined('SYSPATH') or die('No direct script access.');
class Model_User extends Model_Auth_User{
	protected $_has_many=array(
		'roles'=>array(
			'through'=>'role_users'
		)
	);
}
