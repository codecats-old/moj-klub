<?php defined('SYSPATH') OR die('No direct script access');?>
<div class="well">	
	<h6><?php echo $title; ?></h6>
	<p>
	<?php echo $content; ?>
	</p>
<?php 
	echo HTML::anchor(
		Route::get('manage')->uri(
			array(
				'controller' 	=> Request::current()->controller(),
				'action' 		=> Request::current()->action(),
				'user_id' 		=> Request::current()->param('user_id'),
				'confirm' 		=> 'true'
			)
		),
		'OK',
		array(
			'class' => 'btn btn-success'
		)
	);
?>
	
<?php 
	echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' 	=> Request::initial()->controller(),
				'action' 		=> Request::initial()->action()
			)
		), 
		'close'
	);
?>
</div>