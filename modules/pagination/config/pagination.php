<?php defined('SYSPATH') or die('No direct script access.');

return array(

	// Application defaults
	'default' 	=> array(
		'current_page'      => array('source' => 'query_string', 'key' => 'page'), // source: "query_string" or "route"
		'total_items'       => 0,
		'items_per_page'    => 1,
		'view'              => 'pagination/twitterbootstrap',
		'auto_hide'         => TRUE,
		'first_page_in_url' => FALSE,
	),
	'panel' 	=> array(
		'current_page'      => array('source' => 'query_string', 'key' => 'page'),
		'total_items'       => 0,
		'items_per_page'    => 5,
		'view'              => 'pagination/twitterbootstrap',
		'auto_hide'         => TRUE,
		'first_page_in_url' => FALSE,
	),
	'gallery' 	=> array(
		'current_page'      => array('source' => 'query_string', 'key' => 'page'),
		'total_items'       => 0,
		'items_per_page'    => 15,
		'view'              => 'pagination/twitterbootstrap',
		'auto_hide'         => TRUE,
		'first_page_in_url' => FALSE,
	)
);
