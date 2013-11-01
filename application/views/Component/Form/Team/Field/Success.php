<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="row-fluid">
	<div class="span12">
		<label for="success">
		<?php echo __('team success');?>:
		</label>
<?php echo Form::textarea('success', Arr::get($team, 'success'),
		array('class'=>'span8', 'rows'=>'4', 'placeholder'=>__('team success')));?>
		<span class="label label-warning"><?php echo Arr::get($error, 'success');?></span>
	</div>
</div>