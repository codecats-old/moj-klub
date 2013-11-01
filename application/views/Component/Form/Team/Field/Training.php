<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="row-fluid">
	<div class="span12">
		<label for="description">
		<?php echo __('training');?>:
		</label>
<?php echo Form::textarea('training', Arr::get($team, 'training'),
		array('class'=>'span8', 'rows'=>'5', 'placeholder' => __('training')));?>
		<span class="label label-warning"><?php echo Arr::get($error, 'training');?></span>
	</div>
</div>