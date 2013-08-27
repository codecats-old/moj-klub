<?php defined('SYSPATH') OR die('No direct script access');?>
<?php $blink = (Arr::get($header_management_icon, 'blink') === TRUE) ? 'blinking-icon' : '';?>

<div class="dropdown">
<?php echo HTML::anchor(
	Route::get('default')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'messages',
			'id'			=> Coder::instance()->to_url($user['id'])
		)
	),
	__('events').' <i class="icon-envelope icon-white"></i>',
	array(
		'class' 		=> 'btn btn-inverse btn-mini '.$blink.' dropdown-toggle',
	//DEBUG:	'data-toggle'	=> 'dropdown'
	)
);?>

    <!-- Link or button to toggle dropdown -->
    <!-- to do not hide when clicked use: -->
    <!--  $('.scrollable').click(function(e){e.stopPropagation();}); -->
<?php echo $component_request_menu;?>
</div>