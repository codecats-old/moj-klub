<?php defined('SYSPATH') OR die('No direct script access.');?>
<div class="row-fluid">

	<label>Type of training:</label>
	<div class="span12">
<?php echo Form::input('type', $last_training->current()->type, array('class' => 'span12'));?>
	</div>
	<div class="pull-right label label-warning">12 hars only</div>
</div>
<div class="row-fluid">
	<label>Type of training:</label>
	<div class="span12">
<?php echo Form::textarea('description', $last_training->current()->description, array('rows' => '3', 'class' => 'span12'));?>
	</div>
	<div class="pull-right label label-warning">12 hars only</div>
</div>
<div>
<?php echo substr(Date::formatted_time(),0, -3);?>
<?php echo Form::input('start', '1985-04-12T23:20:50.52', array('type' => 'datetime-local'));?>
<div>
</div>
<?php echo Form::input('finish', Date::formatted_time('+60 minutes'), array('type' => 'datetime-local'));?>
</div>

<hr>
<h3>Live Training</h3>

<noscript>Live training unavalaible. Your web browser not support javascript.</noscript>