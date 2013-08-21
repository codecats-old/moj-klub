<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $type = ($request['active'] == FALSE) ? 'information' : 'request';?>

<li class="row-fluid">
	<div>
		<small class="muted pull-right"> type: <?php echo $type;?></small>
		<div class="well">
			<small class="muted">
				<strong>
				<?php echo $user['username'];?>
				</strong> 
				asked to join the club 
				<?php echo Date::fuzzy_span(strtotime($request['date']), time());?></small>
			<div>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' => 'user',
			'action' 	 => 'show',
			'id' 		 => Coder::instance()->to_url($user['id'])
		)
	),
	'<strong>'.$user['username'].'</strong>',
	array('class' => 'btn btn-block', 'tabindex' => '-1')
	
);?>
<!-- management buttons -->
				<div class="btn-group">
<?php echo HTML::anchor(Route::get('consider')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'consider-join',
			'id'			=> Coder::instance()->to_url(Arr::get($user, 'id') ),
			'result' 		=> 'accept'
		)
	),
	'Accept',
	array('class' => 'btn btn-mini btn-success', 'tabindex' => '-1')
	
);?>

<?php echo HTML::anchor(Route::get('consider')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'consider-join',
			'id'			=> Coder::instance()->to_url(Arr::get($user, 'id') ),
			'result' 		=> 'refuse'
		)
	),
	'Refuse',
	array('class' => 'btn btn-mini btn-danger', 'tabindex' => '-1')
	
);?>

<?php echo HTML::anchor(Route::get('consider')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'consider-join',
			'id'			=> Coder::instance()->to_url(Arr::get($user, 'id') ),
			'result' 		=> 'cancel'
		)
	),
	'Cancel',
	array('class' => 'btn btn-mini', 'tabindex' => '-1')
	
);?>
				</div>
<!-- >management buttons -->
			</div>
		</div>
	</div>
</li>