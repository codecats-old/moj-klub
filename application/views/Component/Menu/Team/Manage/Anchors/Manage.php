<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php 
	$attributes = isset($style) ? array('class' => $style) : array();
?>

<?php echo HTML::anchor(
	Route::get('roles')->uri(
		array(
			'order'		=> 	$context,
			'confirm' 	=> 'false'
		)
	),
	$context,
	$attributes
);?>