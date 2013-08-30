<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<?php $style_for_panel = ($panel_style === TRUE) 
				? 'well hero-unit unstyled' : 'dropdown-menu scrollable pull-right min-width-20';?>
<ul class="<?php echo $style_for_panel; ?> notification-panel" rel="notification-menu">
    	<li class="row-fluid navbar">
    		<div class="navbar-inverse">
    			<div class="divider"></div>
    			<span class="pull-right btn-large">
    				<button class="close" type="button">×</button>
    			</span>
    			
<?php if (isset($team) AND Arr::get($team, 'id')):?>
    			<span>
	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'management',
				'action' 		=> 'requests',
				'id'			=> Coder::instance()->to_url(Arr::get($team, 'id'))
			)
		),
		'team panel',
		array(
			'class'		=> 'btn btn-mini',
			'tabindex' 	=> '-1'
		)
	);?>
    			</span>
    			<span class="divider-vertical"></span>
<?php endif;?>
    			<span>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'messages',
			'id'			=> Coder::instance()->to_url(Arr::get($user, 'id'))
		)
	),
	'user panel',
	array(
		'class'		=> 'btn btn-mini',
		'tabindex' 	=> '-1'
	)
);?>
    			</span>
    		</div>
    	</li>
		<li class="divider"></li>
	
	
		<li>
<!-- messages -->
<?php if (isset($requests_views) AND ! empty($requests_views)):?>
			<ul class="unstyled" rel="notification-messages">
	<?php 
	foreach ($requests_views as $request_view):
		echo $request_view->render();
	endforeach;
	?>
			</ul>
<?php else :?>
			<div class="text-center">
				<i class="label label-info">no important data.</i>
			</div>
<?php endif;?>
<!-- >messages -->
		</li>

		<li class="divider"></li>
		<li>
<?php
if ($panel_style === TRUE):
	echo $pagination;
else :
?>
			<div class="">
				<button 
						class="btn btn-block btn-small" 
						rel="notification-featch-more">
					<i class="icon-forward"></i>
				</button>
			</div>
<?php 
endif;
?>
		</li>
</ul>

