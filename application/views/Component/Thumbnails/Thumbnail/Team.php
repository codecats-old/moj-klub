<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $path = Arr::get($team, 'path') ? Arr::get($team, 'path') : 'upload/default/avatar/team.png' ?>

<li class="span4 btn btn-warning" data-toggle="collapse" data-target="#progress<?php echo $id;?>">
	<div class="ribbon rot-45">
		<p>
			<span>
				<small><?php echo ucfirst(__('joined: '));?></small>
			</span>
			<small class="label">
<?php
	if (Arr::get($team, 'join_date')):
		echo Arr::get($team, 'join_date');
	else:

	echo __('data unavalaible.');

	endif;
?>
			</small>
		</p>
	</div><!-- Ribbon -->
	
	
	<h3 class="head-show"><?php echo Arr::get($team, 'short_name');?></h3>
<?php echo HTML::image($path, array('class' => 'img-polaroid'));?>            
	<p>
<?php echo Arr::get($team, 'description');?> 
	</p>
	                        
	<div id="progress<?php echo $id;?>"  class="collapse out">
<?php if (FALSE):?>
		<div class="row-fluid">
			<div class="span5">Poziom Treningów</div>
			<div class="span7">
				<div class="progress progress-striped active">
					<div class="bar" style="width: 0%;"></div>
				</div>
			</div>
		</div>
<?php endif;?>
		<div class="row-fluid">
			<div class="span5"><?php echo ucfirst(__('popularity'));?></div>
				<div class="span7">
					<div class="progress progress-danger progress-striped active">
						<div class="bar" style="width: <?php echo Arr::get($team, 'counter_percent')?>%;"></div>
					</div>
				</div>
		</div>
	</div>

<?php 
	echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' 	=> 'team',
 				'action' 		=> 'show',
 				'id' 			=> Coder::instance()->short_url($team['id'])
			)
		),
		__('see the club'),
		array(
			'class' => 'btn btn-success'
		)
	);
?>
</li>