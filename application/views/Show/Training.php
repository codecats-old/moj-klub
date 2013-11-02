<?php defined('SYSPATH') OR die('No direct script access');?>
<div class="well">
	<h5>
	<label class="muted pull-left"><small>type:</small></label>
<?php if ( ! empty($training->type)):?>
	<?php echo $training->type;?>
<?php else:?>
	Training
<?php endif;?>
	</h5>
<?php if ( ! empty($training->description)):?>
	<p>
		<small>
	<?php echo $training->description;?>
		</small>
	</p>
<?php endif;?>
	<div class="row-fluid">
		<div class="span6">
			<label class="label label-success"><?php echo __('when').':';?></label>
			<p>
<?php echo __(Date::fuzzy_span(strtotime($training->start)));?>
			</p>
		</div>
		
		<div class="span6">
			<label class="label label-success"><?php echo __('duration: ')?></label>
			<p>
<?php
	$limes = 9;
	$duration = Date::span(strtotime($training->start), strtotime($training->finish));
	if ($duration['hours'] > 0) echo $duration['hours'].__(' hours, ').$duration['minutes'].__(' minutes.');
	elseif ($duration['hours'] === 0 AND $duration['minutes'] > $limes) echo $duration['minutes'].__(' minutes.');
	
	if ($duration['hours'] === 0 AND $duration['minutes'] <= $limes) echo __('less than ').($limes + 1).__(' minutes.');
?>
			</p>
		</div>
	</div>
</div>