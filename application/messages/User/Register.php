<?php defined('SYSPATH') or die('No direct script access.');
return array(
	'email'=>array(
		'Validation_User::is_unique'=>':field must be unique',
	),
	'username'=>array(
		'Validation_User::is_unique'=>':field must be unique',
	),
	'captcha'=>array(
		'Captcha::valid'=>'incorrect code'
	)
);