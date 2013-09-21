<?php defined('SYSPATH') OR die('No direct script access.');?>
<!-- RUNNER -->
<?php if ( ! empty($error)):?>
<label class="label label-warning">some errors while adding the training.</label>
<label class="text text-error"><?php echo Arr::get($error, 'choose_input');?></label>
<label class="text text-error"><?php echo Arr::get($error, 'last_training');?></label>
<?php endif;?>
<div class="well text-center runner borders">
	<h6>Live Training</h6>
	
	<noscript>Live training unavalaible. Your web browser not support javascript. 
	Manually complete the data please.
	</noscript>
	<input class="span8" type="text" id="timer" name="timer" value="" readyonly="true" ><br />
	<div class="row-fluid text-center">
		<div class="main-btn">
			<button id="timerStart" class="btn btn-large"><i class="icon-play gray"></i> Start</button>
		</div>
		<div class="control-btn">
			<button id="timerStop" class="btn btn-small blocks">
				<i class="icon-pause gray"></i> Pause
			</button>
			<button id="timerReset" class="btn btn-small btn-danger blocks">
				<i class="icon-stop gray"></i> Reset
			</button>
		</div>
	</div>
	<p>
		<i class="muted"><small>After the training don't forget send the form.</small></i>
	</p>
	<div class="text text-error"><?php echo Arr::get($error, 'timer');?></div>
	<div class="close-button pull-right">
		<button rel="runner-fullscreen" class="btn btn-link"><i class="icon-fullscreen"></i> </button>
	</div>
</div>
<!-- >RUNNER -->
<h6>Training Data</h6>
<!-- TYPE -->
<div class="row-fluid">
	<label class="label label-info">Type of training:</label>
	<div class="span12">
<?php 
echo Form::input(
	'type', 
	Arr::get($training, 'type'), 
	array(
		'class' 		=> 'span12',
		'placeholder' 	=> 'type of training'
	)
);
?>
	</div>
	<div class="pull-right text text-error"><?php echo Arr::get($error, 'type');?></div>
</div>
<!-- >TYPE -->
<!-- DESCRIPTION -->
<div class="row-fluid">
	<label class="label label-info">Description:</label>
	<div class="span12">
<?php
echo Form::textarea(
	'description', 
	Arr::get($training, 'description'), 
	array(
		'rows' 			=> '3', 
		'class' 		=> 'span12',
		'placeholder' 	=> 'description'
	)
);
?>
	</div>
	<div class="pull-right text text-error"><?php echo Arr::get($error, 'description');?></div>
</div>
<!-- >DESCRIPTION -->
<h6><abbr title="complete if you don't use live training" class="initialism">Time of training</abbr></h6>
<!-- DATE -->
<div class="row-fluid">
<!-- DATE START -->
	<label class="label label-info">Date start [yyyy-mm-dd], [hh:mm]:</label>
	<div class="span12">
		<div class="span6">
<?php echo Form::input(
		'start_date', 
		Arr::get($training, 'start_date'), 
		array(
			'type' 	=> 'date', 
			'class' => 'span12 text-center'
		)
);?>
			<div class="text text-error span12"><?php echo Arr::get($error, 'start_date');?></div>
		</div>
		<div class="span6">
<?php echo Form::input(
		'start_time', 
		Arr::get($training, 'start_time'), 
		array(
			'type' 	=> 'time', 
			'class' => 'span12 text-center'
		)
);?>
			<div class="text text-error span12"><?php echo Arr::get($error, 'start_time');?></div>
		</div>
	</div>
<!-- >DATE START -->
<!-- DURATION -->
	<div class="span12">
		<label class="label label-info">Duration [minutes]:</label>
<?php echo Form::input(
		'duration', 
		Arr::get($training, 'duration'), 
		array(
			'type' 		=> 'text', 
			'class' 	=> 'span6 text-center'
		)
);?>
		<div class="text text-error"><?php echo Arr::get($error, 'duration');?></div>
	</div>
<!-- >DURATION -->
</div>
<!-- >DATE -->