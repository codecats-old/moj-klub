<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active btn-mini">
			<a data-toggle="tab" href="#tab1"><?php echo __('players');?></a>
		</li>
		
<?php if ( ! empty($staff)):?>
 		<li class="btn-mini">
			<a data-toggle="tab" href="#tab2"><?php echo __('staff');?></a>
		</li>
<?php endif;?>
 
		<li class="btn-mini">
			<a data-toggle="tab" href="#tab3"><?php echo __('management');?></a>
		</li>
	</ul>
	<ul class="tab-content">
		<li id="tab1" class="tab-pane active">
			<ol>
<?php foreach($players as $player): ?>
				<li class="well">
	<?php $path = (empty($player->avatar->path) === FALSE) ? $player->avatar->path : 'upload/default/avatar/user.jpeg'; 
		echo HTML::image($path, 
			array(
				'class' 	=> 'img-polaroid',
				'alt' 		=> 'avatar'
			)
	);?>
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
					<div class="row-fluid">
	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'user',
				'action'		=> 'show',
				'id'			=> Coder::instance()->short_url($player->id)
			)
		),
		__('see the profile'),
		array('class' => 'btn btn-mini btn-info pull-right')
	)?>
					</div>
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
					<a class="btn btn-mini btn-info pull-right" href="#"><?php echo __('go');?></a>
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
		__('see the profile'),
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