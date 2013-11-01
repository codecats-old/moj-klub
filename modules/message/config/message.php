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
				'Success'	=>	__('Success operation'),
				'Error'		=>	__('System error'),
				'Warning'	=>	__('Incorrect data'),
				'Notice'	=>	__('Updated'),
			),
			'view' => array(
				'path' => 'Message/Basic'
			)
		)
);