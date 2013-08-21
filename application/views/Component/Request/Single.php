<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $type = ($request['active'] == FALSE) ? 'information' : 'request';?>

<li class="row-fluid">
	<div>
		<small class="muted pull-right"> type: <?php echo $type;?></small>
		<div class="well">
			<small class="muted">
				<?php echo $user['username'];?> asked to join the club 
				<?php echo Date::fuzzy_span($request['date']);?></small>
			<div>	
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' => 'user',
			'action' 	 => 'show',
			'id' 		 => Coder::instance()->to_url($user['id'])
		)
	),
	$user['username'],
	array('class' => 'btn btn-block', 'tabindex' => '-1')
	
);?>
				<div class="btn-group ">
					<a class="btn btn-mini btn-success " href="#" tabindex="-1">Accept</a>
					<a class="btn btn-mini" href="#" tabindex="-1">Reject</a>
					<a class="btn btn-mini btn-danger" href="#" tabindex="-1">Delete</a>
				</div>
			</div>
		</div>
	</div>
</li>