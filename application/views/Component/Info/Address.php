<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php if (Arr::get($object, 'city') AND Arr::get($object, 'street') AND Arr::get($object, 'zip_code')):?>
	<address>
		<strong><?php echo Arr::get($object, 'full_name')?></strong><br>
	<?php echo Arr::get($object, 'street').' '.Arr::get($object, 'street_no');?><br>
	<?php echo Arr::get($object, 'zip_code');
	?>
	<?php echo Arr::get($object, 'city')?><br>
	
	<?php if (Arr::get($object, 'phone')):?>	
		<abbr title="Phone"><span class="label label-info"><?php echo __('P:');?></span>
	<?php echo preg_replace('/^(\d{3})(\d{3})(\d{3})$/', '$1 $2 $3', Arr::get($object, 'phone'));?>
		</abbr>
		<br>
	<?php endif;?>
	
	
	<?php if (Arr::get($object, 'email')):?>
	<?php echo HTML::mailto(
			Arr::get($object, 'email'), 
			Arr::get($object, 'email').' <span class="icon-envelope"></span>', 
			array('class' => 'btn')
	);?><br>
	<?php endif;?>
</address>
<?php else:?>
	Address not set.
<?php endif;?>