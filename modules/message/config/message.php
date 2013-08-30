<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package message
 *
 * Avalaible work types: 
 * 	override - work as stack but has no buffor effect
 *  list - work as lifo
 *  
*/
return array(
		'default' => array(
			'messages' => array(
				'Success'	=>	'Success operation',
				'Error'		=>	'System error',
				'Warning'	=>	'Incorrect data',
				'Notice'	=>	'Updated',
			),
			'view' => array(
				'path' => 'Message/Basic'
			)
		)
);