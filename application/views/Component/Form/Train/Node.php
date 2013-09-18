<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php
	$training = isset($training) ? $training : array();
	$last_training = ($last_training->count() !== 0) ? $last_training->current() : NULL;
	
	if ($last_training) 
	{
		$training = $last_training->as_array();
	}
?>
<h3>Live Training</h3>

<noscript>Live training unavalaible. Your web browser not support javascript.</noscript>

<!-- RUNNER -->
<div class="well text-center runner">
	<input class="span6" type="text" id="timer" name="timer" value="" readyonly="true"><br />
	<div class="row-fluid text-center">
		<div class="main-btn">
			<button id="timerStart" class="btn btn-large"><i class="icon-play gray"></i> Start</button>
		</div>
		<div class="control-btn">
			<button id="timerStop" class="btn btn-small blocks"><i class="icon-pause gray"></i> Pause</button>
			<button id="timerReset" class="btn btn-small btn-danger blocks"><i class="icon-stop gray"></i> Reset</button>
		</div>
		
	</div>
	<p>
		After training don't forget send the form.
	</p>
</div>

<!-- >RUNNER -->

<!-- TYPE -->
<div class="row-fluid">
	<label class="label label-info">Type of training:</label>
	<div class="span12">
<?php 
echo Form::input(
	'type', 
	Arr::get($training, 'type'), 
	array('class' => 'span12'));
?>
	</div>
	<div class="pull-right label label-warning">12 chars only</div>
</div>
<!-- >TYPE -->
<!-- DESCRIPTION -->
<div class="row-fluid">
	<label class="label label-info">Type of training:</label>
	<div class="span12">
<?php
echo Form::textarea(
	'description', 
	Arr::get($training, 'description'), 
	array('rows' => '3', 'class' => 'span12'));
?>
	</div>
	<div class="pull-right label label-warning">12 chars only</div>
</div>
<!-- >DESCRIPTION -->
<!-- DATE -->
<div class="row-fluid">
<!-- DATE START -->
	<label class="label label-info">Date start [yyyy-mm-dd], [hh:mm]:</label>
	<div class="span12">
		<div class="span6">
<?php echo Form::input('start_date', '1985-04-12', array('type' => 'date', 'class' => 'span12 text-center'));?>
			<div class="label label-warning span12">12 chars only aaaaaaaa aaaaaaaa aaaaaaa</div>
		</div>
		<div class="span6">
<?php echo Form::input('start_date', '1985-04-12', array('type' => 'time', 'class' => 'span12 text-center'));?>
			<div class="label label-warning span12">12 chars only aaaaaaaa aaaaaaaa aaaaaaa</div>
		</div>
	</div>
<!-- >DATE START -->
<!-- DURATION -->
	<div class="span12">
		<label class="label label-info">Duration [minutes]:</label>
<?php echo Form::input('start_date', '1985-04-12', array('type' => 'time', 'class' => 'span6 text-center'));?>
		<div class="label label-warning">12 chars only aaaaaaaa aaaaaaaa aaaaaaa</div>
	</div>
<!-- >DURATION -->
</div>
<!-- >DATE -->