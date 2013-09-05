<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * SEO Friendly links filter
 * 
 * @param unknown $route
 * @param unknown $params
 * @param unknown $request
 * @return mixed
 */
function underscope2dash($route, $params, $request)
{
	$params['action']=str_replace('-', '_', $params['action']);
	return $params;
}

Route::set(
	'image',
	'image/<action>/<id>/<width>/<height>/<ext>',
	array(
		'id' => '[0-9]+', 
		'width' => '[0-9]+', 
		'height' => '[0-9]+', 
		'ext'=> '(jpg|jpeg|png|gif)'
	)
)
->filter('underscope2dash')
->defaults(array(
		'controller' => 'image',
		'action' => 'index'
));

Route::set(
	'management',
	'management/<action>/<id>(/<page>)',
	array(
		'id' 		=> '[0-9 \w]+',
		'page' 		=> '[0-9]+',
		'action'	=> '(messages|requests)'
	)
)
->defaults(array(
'controller' => 'management',
'action'     => 'messages'
		));


Route::set(
	'default', 
	'(<controller>(/<action>(/<id>)))')
->filter('underscope2dash')
->defaults(
	array(
		'controller' => 'welcome',
		'action'     => 'index',
	)
);

Route::set(
	'delete',
	'(<controller>(/<action>(/<id>/<confirm>)))',
	array('confirm' => '(true)')
)
->filter('underscope2dash')
->defaults(
	array(
		'controller' => 'team',
		'action'     => 'gallery',
	)
);

Route::set(
	'consider',
	'management/<action>/<id>/<result>',
	array('result' => '(accept|refuse|cancel)')
)
->filter('underscope2dash')
->defaults(
	array(
		'controller' => 'management',
		'action'     => 'gallery',
	)
);