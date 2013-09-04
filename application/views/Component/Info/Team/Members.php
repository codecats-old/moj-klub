<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active btn-mini">
			<a data-toggle="tab" href="#tab1">Members</a>
		</li>
<!-- STAFF SECTION
 		<li class="btn-mini">
			<a data-toggle="tab" href="#tab2">Staff</a>
		</li>
 -->
		<li class="btn-mini">
			<a data-toggle="tab" href="#tab3">management</a>
		</li>
	</ul>
	<ul class="tab-content">
		<li id="tab1" class="tab-pane active">
			<ol>
<?php foreach($players as $player): ?>
				<li class="well">
					<strong>
	<?php echo Arr::get($player->as_array(), 'username');?>
					</strong>
	
	<?php if ($player->info->name):?>
		<?php echo $player->info->name;?>
	<?php endif;?>
					
	<?php if ($player->info->surname):?>
		<?php echo $player->info->surname;?>
	<?php endif;?>
	
	<?php if ($player->id === Arr::get($capitan, 'id')) echo ' <i class="icon-star-empty"></i>';?>
	
	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'user',
				'action'		=> 'show',
				'id'			=> Coder::instance()->short_url($player->id)
			)
		),
		'see the profile',
		array('class' => 'btn btn-mini btn-info pull-right')
	)?>

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
					<strong>
<?php echo Arr::get($manager, 'username');?>
					</strong>


<?php if (Arr::get($manager, 'name')):?>
	<?php echo Arr::get($manager, 'name');?>
<?php endif;?>
				
<?php if (Arr::get($manager, 'surname')):?>
	<?php echo Arr::get($manager, 'surname');?>
<?php endif;?>
	

	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'user',
				'action'		=> 'show',
				'id'			=> Coder::instance()->short_url(Arr::get($manager, 'id'))
			)
		),
		'see the profile',
		array('class' => 'btn btn-mini btn-info pull-right')
	)?>
				</li>
				<li class="well">
<?php echo Arr::get($coach, 'username');?>
				</li>
			</ul>
		</li>
	</ul>
</div>