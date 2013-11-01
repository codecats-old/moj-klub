<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="row-fluid">
	<div class="span12">
	<!-- User scope -->
		<?php
			if (isset($users)) : 
		?>
			<ul class="thumbnails well well-large">
				<li class="round-bottom-corner">
					<h3>
				<?php echo __('Training time from last') . ' ' . 
						Manager_Training::STATISTICS_INTERVAL_DAY . ' ' . __('days');?>
					</h3>
				</li>
			<?php 
				foreach ($users as $user) :
			?>
				<li class="thumbnail span10">
					<?php echo View::factory('Component/Statistics/User',
							array('user' => $user)
					);?>
				</li>
			<?php 
				endforeach;
			?>
			</ul>
		<?php 
			endif;
		?>
	<!-- >User scope -->
	
	
	
	
	<!-- Team scope -->
		<?php 
			if (isset($teams)) :
		?>
		<ul class="thumbnails well well-large">
		<?php 
			echo HTML::image($teams->current()->path,
					array('class' => 'img-circle img-back rot-45 index-down')
			);
		?>
			<?php 
				foreach ($teams as $team):
			?>
			<li class="thumbnail span9 offset2 index-up well well-dark round-top-corners">
				<?php echo View::factory('Component/Statistics/Team',
						array('team' => $team)
				);?>
			</li>
			<?php
				endforeach;
			?>
		</ul>
		<?php 
			endif;
		?>
	<!-- >Team scope -->
	</div>
</div>