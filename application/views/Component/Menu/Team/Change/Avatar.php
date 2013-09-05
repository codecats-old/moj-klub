<?php defined('SYSPATH') or die('No direct script access.');?>
<?php if(Arr::get($options, 'avatar')):?>
<div class="span6">
					<button class="pull-right btn btn-mini" data-toggle="collapse" data-target=".collapse">
						Edit					
					</button>
					<div class="divider"></div>
					<div class="pull-right collapse in">
<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'team',
				'action' 		=> 'change-team-avatar'
			)
		),
		'change avatar',
		array(
			'rel' 	=> 'user_change-avatar_get'
		)
);?>
				</div>
				<!-- 	<div class="divider"></div>
					<div class="pull-right collapse in">more data here</div> -->
</div>
<?php endif;?>