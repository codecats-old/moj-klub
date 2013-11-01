<?php defined('SYSPATH') OR die('No direct script access.');?>
<p>
			<?php echo $team->full_name; ?>
				</p>
				<?php 		
					echo HTML::image($team->path, 
							array('class' => 'img-circle pull-right')
					);
				?>
				<div class="btn-group">
				<?php echo HTML::anchor(
						Route::get('default')->uri(
								array(
									'controller' 	=> 'team',
									'action' 		=> 'show',
									'id' 			=> Coder::instance()->short_url($team->id)
								)
						),
						$team->short_name,
						array('class' => 'btn btn-info')
				);?>
				</div>
				<hr>
				<small><?php echo __('Popularity') . ':';?></small>
				<div class="well progress progress-info progress-striped">
					<div class="bar" style="width: <?php echo $team->counter_percent;?>%">
						<?php echo intval($team->counter_percent);?>%
					</div>
				</div>
				<p class="muted">
					<?php echo $team->description; ?>
				</p>