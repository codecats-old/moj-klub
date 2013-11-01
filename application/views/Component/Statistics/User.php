<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'user',
			'action' 		=> 'show',
			'id' 			=> Coder::instance()->short_url($user->id)
		)	
	),
	$user->username,
	array('class' => 'btn btn-success well pull-left')
);?>

<p class="pull-left well">
	<label class="muted"><?php echo __('Name');?></label>
	<?php echo $user->name . ' ' . $user->surname;?>
</p>
<p class="pull-left well">
	<label class="muted"><?php echo __('Time spend for training:');?></label>
	<?php echo $user->total;?>
</p>
<p class="pull-left well">
	<label class="muted"><?php echo _('Team');?></label>
	
	<?php 
		if ($user->team_id !== NULL) :
			echo HTML::anchor(Route::get('default')->uri(
					array(
						'controller' 	=> 'team',
						'action' 		=> 'show',
						'id' 			=> Coder::instance()->short_url($user->team_id)
					)	
				),
				$user->team_name,
				array('class' => 'btn btn-info')
			);
		endif;
	?>
</p>
<?php 		
	echo HTML::image($user->path, 
			array('class' => 'img-circle pull-right')
	);
?>