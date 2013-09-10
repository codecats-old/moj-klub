<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php 
	$attributes = isset($style) ? array('class' => $style) : array();
?>

<?php echo HTML::anchor(
	Route::get('default')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'roles',
			'id' 			=> 	$context
		)
	),
	$context,
	$attributes
);?>