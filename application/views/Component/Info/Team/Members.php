<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active btn-mini">
			<a data-toggle="tab" href="#tab1">Members</a>
		</li>
		<li class="btn-mini">
			<a data-toggle="tab" href="#tab2">Staff</a>
		</li>
		<li class="btn-mini">
			<a data-toggle="tab" href="#tab3">management</a>
		</li>
	</ul>
	<ul class="tab-content">
		<li id="tab1" class="tab-pane active">
			<ol>
<?php foreach($players as $player): ?>
				<li class="well">
	<?php echo Arr::get($player->as_array(), 'username');?>
	<?php if($player->id===Arr::get($capitan, 'id')) echo ' C';?>
					<a class="btn btn-mini btn-info pull-right" href="#">go</a>
		<!-- when training for user will be set
					<div class="progress progress-striped active">
						<div class="bar" style="width: 50%;">training time</div>
					</div>
		 -->
				</li>
<?php endforeach;?>
			</ol>
		</li>
		<li id="tab2" class="tab-pane">
			<ol>
<?php foreach($staff as $person):?>
				<li class="well">
	<?php echo Arr::get($person->as_array(), 'username');?>
					<a class="btn btn-mini btn-info pull-right" href="#">go</a>
				</li>
<?php endforeach;?>
			</ol>
		</li>
		<li id="tab3" class="tab-pane">
			<ul class="unstyled">
				<li class="well hero-unit">
<?php echo Arr::get($manager, 'username');?>
				</li>
				<li class="well">
<?php echo Arr::get($coach, 'username');?>
				</li>
			</ul>
		</li>
	</ul>
</div>