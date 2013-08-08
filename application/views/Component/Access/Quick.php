<?php defined('SYSPATH') or die('No direct script access.');?>
<button 
	class="btn btn-inverse span12 visible-desktop" 
	type="button" 
	data-toggle="collapse" 
	data-target="#quick_access">
<span class="icon-file icon-white"></span>
</button>
<div class="well collapse in visible-desktop" id="quick_access">
	<h4><?php echo ucfirst(__('quick access'));?></h4>
	<div>
	<?php echo View::factory('Component/Form/Login')
		->set('rel','quick_login_form');?>
	</div>
	<div class="pull-right">
	<?php echo HTML::anchor(Route::get('default')
		->uri(array('controller'=>'user', 'action'=>'registrate')),ucfirst(__('Registrate')),
		array('rel'=>'registrate_form_get'));?>
	</div>
</div>
