<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $path = Arr::get($team, 'path') ? Arr::get($team, 'path') : 'upload/default/avatar/team.png' ?>

<li class="span4 btn btn-warning" data-toggle="collapse" data-target="#progress<?php echo $id;?>">
	<h3><?php echo Arr::get($team, 'short_name');?></h3>
<?php echo HTML::image($path);?>
	                        
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
			<div class="span5">Popularność</div>
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
 				'id' 			=> Coder::instance()->to_url($team['id'])
			)
		), 
		'see the club',
		array(
			'class' => 'btn btn-success'
		)
	);
?>

</li>