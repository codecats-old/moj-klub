<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="row-fluid">
	<div class="span12">
		<label for="description">
		<?php echo __('description')?>:
		</label>
<?php echo Form::textarea('description', Arr::get($team, 'description'),
		array('class'=>'span12', 'rows'=>'4', 'placeholder'=>__('description')));?>
		<span class="label label-warning"><?php echo Arr::get($error, 'description');?></span>
	</div>
</div>