<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="row-fluid">
	<div class="span12 control-group">
		<label class="control-label" for="email">
			team email:
		</label>
<?php echo Form::input('email', Arr::get($team, 'email'), 
		array('class'=>'span4', 'placeholder'=>'email', 'type'=>'email'));?>
		<span class="label label-warning"><?php echo Arr::get($error, 'email');?></span>
	</div>
</div>
<div class="row-fluid">
	<div class="span12 control-group">
		<label class="control-label" for="phone">
			team phone:
		</label>
<?php echo Form::input('phone', Arr::get($team, 'phone'), 
		array('class'=>'span4', 'placeholder'=>'phone', 'type'=>'tel'));?>
		<span class="label label-warning"><?php echo Arr::get($error, 'phone');?></span>
	</div>
</div>
