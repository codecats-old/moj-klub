<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $photos_count = isset($photos_count) ? $photos_count : 0;?>


<div class="well row-fluid  span12">
	<ul class="thumbnails">
		<li class="thumbnail span12">
<?php echo View::factory('Component/Info/Team/Details')
	->set('team', $team)
	->set('photos_count', $photos_count);

?>
		</li>
<?php if ($join_team):?>
		<!-- JOIN SECTION -->
		<li class="well">
			<span>
				<?php echo __('You not belongs to any club, ask for join this one:');?>
			</span>
	<?php if ($join_sent === FALSE):?>
		<?php echo HTML::anchor(Route::get('default')->uri(
				array(
					'controller' 	=> 'management',
					'action'		=> 'join',
					'id'			=> Coder::instance()->to_url(Arr::get($team, 'id'))
				)
			),
			'join team'.'!',
			array('class' => 'btn btn-danger btn-large')
		);?>
	<?php else:?>
			<div class="btn-group">
				<a href="#team" class="btn btn-danger btn-large label disabled">in progress</a>
			<?php echo HTML::anchor(Route::get('default')->uri(
					array(
						'controller' 	=> 'management',
						'action'		=> 'join-cancel',
						'id'			=> Coder::instance()->to_url(Arr::get($team, 'id'))
					)
				),
				'cancel',
				array('class' => 'btn btn-danger btn-large')
			);?>
			</div>
	<?php endif;?>
		</li>
<?php endif;?>
		
<?php if ($popularity):?>
		<li class="thumbnail span12">
			<h4>Popularity:</h4>
			<div class="progress progress-danger progress-striped active">
				<div class="bar" style="width: <?php echo $popularity;?>%;"></div>
			</div>
		</li>
<?php endif;?>
		
		<li class="thumbnail span12">
<?php echo View::factory('Component/Info/Team/Members')
	->set('players', $players)
	->set('staff', $staff)
	->set('manager', $manager)
	->set('coach', $coach)
	->set('capitan', $capitan);
?>	
		</li>
	</ul>
</div>