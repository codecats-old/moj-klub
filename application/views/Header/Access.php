<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="pull-right">
                
	<span class="divider-vertical"></span>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'user', 
			'action' 		=> 'registrate'
		)
	),
	ucfirst(__('registrate')).' <span class="icon-home icon-white"></span>',
	array(
		'class' => 'btn btn-mini btn-danger',
		'rel' 	=> 'registrate'
	)
);?>
		
	<span class="divider-vertical"></span>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'user', 
			'action' 		=> 'login'
		)
	),
	ucfirst(__('login')).' <span class="icon-user icon-white"></span>',
	array(
		'class' => 'btn btn-mini btn-inverse', 
		'rel' 	=> 'login'
	)
);?>

</div>
	