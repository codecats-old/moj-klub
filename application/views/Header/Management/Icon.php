<?php defined('SYSPATH') OR die('No direct script access');?>
<?php $blink = (Arr::get($header_management_icon, 'blink') === TRUE) ? 'blinking-icon' : '';?>
<?php $team = Arr::get($header_management_icon, 'team');?>

<?php 
if (Arr::get($header_management_icon, 'menu_status') === 'team') :
	$action = 'requests';
	$id = $team['id'];
elseif (Arr::get($header_management_icon, 'menu_status') === 'user') :
	$action = 'messages';
	$id = $user['id'];
endif;
?>


<div class="dropdown">
<?php echo HTML::anchor(
	Route::get('default')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> $action,
			'id'			=> Coder::instance()->to_url($id)
		)
	),
	__('events').' <i class="icon-envelope icon-white"></i>',
	array(
		'class' 		=> 'btn btn-inverse btn-mini '.$blink.' dropdown-toggle',
		'rel'			=> 'notification-icon'
	)
);?>

<?php echo $component_request_menu;?>
</div>