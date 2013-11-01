<?php defined('SYSPATH') OR die('No direct script access.');?>
	<div>
		<small class="muted pull-right"> <?php echo __('type');?>: <?php echo __($type);?></small>
		<div class="well">
			<small class="muted">
				<strong>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' => 'user',
			'action' 	 => 'show',
			'id' 		 => Coder::instance()->to_url($user['id'])
		)
	),
	$user['username'],
	array('class' => 'muted')
);?>
				</strong> 
				<?php echo __('was refused');?>
				<?php echo __(Date::fuzzy_span(strtotime($request['read']), time()));?></small>
		</div>
	</div>

