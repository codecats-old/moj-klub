<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php 
	$attributes = isset($style) ? array('class' => $style) : array();
?>

<?php echo HTML::anchor(
	Route::get('manage')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'leave',
			'user_id' 		=> 	Coder::instance()->to_url($user['id']),
			'confirm' 		=> 'false'
		)
	),
	__('leave <i class="offset6 icon-remove"></i>'),
	$attributes
);?>