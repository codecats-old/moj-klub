<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="well">
	<h4><?php echo ucfirst(__('quick access'));?></h4>
	<?php echo View::factory('Component/Form/Login');?>
	<div class="pull-right">
		<?php echo HTML::anchor('#registryModal',__('Registrate'), 
				array('role'=>'button', 'data-toggle'=>'modal'));?>
	</div>
</div>
