<?php defined('SYSPATH') or die('No direct script access.');?>
                    <div class="pull-right">
<?php echo HTML::anchor(Route::get('default')
		->uri(array('Controller'=>'Welcome', 'action'=>'registrate')),ucfirst(__('Registrate')),
		array('rel'=>'registrate'));?>
	                    <a href="#">Logowanie</a>
                    </div>
