<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $attributes = (isset($attributes)) ? $attributes : NULL;?>
<?php $action = (isset($action)) ? $action : Request::current()->uri();?>
<?php 
	echo Form::open($action, $attributes);
?>
	<div class="modal-body well">
<?php 
	echo $content;
?>	
	</div>
	<div class="modal-footer">
	<?php 
		echo HTML::anchor(
			Route::get('default')->uri(),
			__('Close'), 
			array(
				'class' 		=> 'btn', 
				'data-dismiss' 	=> 'modal', 
				'aria-hidden' 	=> TRUE
			)
		);
	?>
	<?php 
		echo Form::submit(
			'submit', 
			__('send'), 
			array(
				'class'	=> 'btn btn-primary', 
				'rel' 	=> 'registrate_form', 
			)
		);
	?>
	        </div>
<?php
	echo Form::close();
?>
