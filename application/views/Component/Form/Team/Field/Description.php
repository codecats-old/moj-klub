<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="row-fluid">
	<div class="span12">
		<label for="description">
		description:
		</label>
<?php echo Form::textarea('description', Arr::get($team, 'description'),
		array('class'=>'span12', 'rows'=>'4', 'placeholder'=>'description'));?>
		<span class="label label-warning"><?php echo Arr::get($error, 'description');?></span>
	</div>
</div>