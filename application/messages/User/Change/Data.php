<?php defined('SYSPATH') or die('No direct script access.');
return array(
	'password'=>array(
		'Validation_User::is_correct_password'=>':field is incorrect'
	),
	'email'=>array(
		'Validation_User::changable'=>':field has to be unique'
	)
);