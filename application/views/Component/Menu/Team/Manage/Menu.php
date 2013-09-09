<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="well">
	<h4>Choose option</h4>
	<div class="row-fluid">
	
<?php if (Arr::get($options, 'players')): ?>
		<div class="span6">
			<a href="#" class="btn btn-block btn-large">players</a>
		</div>
<?php endif;?>
<?php if (Arr::get($options, 'staff')): ?>
		<div class="span6">
			<a href="#" class="btn btn-block btn-large">staff</a>
		</div>
<?php endif;?>
	</div>
	<br>
	<div class="row-fluid">
<?php if (Arr::get($options, 'management')): ?>
		<div class="span6">
			<a href="#" class="btn btn-block btn-large">management</a>
		</div>
<?php endif;?>
<?php if (Arr::get($options, 'leave')): ?>
		<div class="span6">
	<?php 
		echo View::factory('Component/Menu/Team/Manage/Anchors/Leave', 
			array(
				'user' 		=> $user,
				'style' 	=> 'btn btn-block btn-large btn-danger'
			)
		)->render();
	?>
		</div>
<?php endif;?>
	</div>
	<br>
	
	<div class="modal-footer">
<?php 
	echo HTML::anchor(
		Route::get('default')->uri(), 
		__('Close'), 
		array(
			'class'=>'btn', 
			'data-dismiss'=>'modal', 
			'aria-hidden' => TRUE
		)
	);
?>
	</div>
</div>