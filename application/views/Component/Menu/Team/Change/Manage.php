<?php defined('SYSPATH') or die('No direct script access.');?>

<?php if(array_filter($options)):// if all options are empty show nothing?>

<div class="btn-group">
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'team',
			'action' 		=> 'manage'
		)
	),
	__('manage'),
	array(
		'class' => 'btn btn-inverse btn-mini',
		'rel' 	=> 'manage_form_get'
	)
);
?>
	<a href="#" class="btn btn-inverse btn-mini dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu pull-right" >
<?php if(Arr::get($options, 'players')):?>
		<li tabindex="-1">
	<?php 
		echo View::factory('Component/Menu/Team/Manage/Anchors/Manage', 
			array(
				'context' 	=> 'players'
			)
		)->render();
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'staff')):?>
		<li tabindex="-1">
	<?php 
		echo View::factory('Component/Menu/Team/Manage/Anchors/Manage', 
			array(
				'context' 	=> 'staff'
			)
		)->render();
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'management')):?>
		<li tabindex="-1">
	<?php 
		echo View::factory('Component/Menu/Team/Manage/Anchors/Manage', 
			array(
				'context' 	=> 'management'
			)
		)->render();
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'leave')):?>
		<li class="divider"></li>
		<li tabindex="-1">
	<?php 
		echo View::factory('Component/Menu/Team/Manage/Anchors/Leave', 
			array(
				'user' 	=> $user
			)
		)->render();
	?>
		</li>
<?php endif;?>

	</ul>
</div>
<?php endif; //empty all?>