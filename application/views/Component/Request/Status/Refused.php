<?php defined('SYSPATH') OR die('No direct script access.');?>
	<div>
		<small class="muted pull-right"> type: <?php echo $type;?></small>
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
				was refused 
				<?php echo Date::fuzzy_span(strtotime($request['read']), time());?></small>
		</div>
	</div>

