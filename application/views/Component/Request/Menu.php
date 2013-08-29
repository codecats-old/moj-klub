<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<?php $style_for_panel = ($panel_style === TRUE) 
				? 'well hero-unit unstyled' : 'dropdown-menu scrollable pull-right min-width-20';?>
<ul class="<?php echo $style_for_panel; ?>" rel="notification-menu">
    	<li class="row-fluid navbar">
    		<div class="navbar-inverse">
<?php if (isset($team) AND Arr::get($team, 'id')):?>
    			<span class="btn-large">
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
    			<span class="btn-large">
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
    			<span class="pull-right btn-large">
    				<button class="close" type="button">×</button>
    			</span>
    		</div>
    	</li>
		<li class="divider"></li>
	
	
		<li>
<!-- messages -->
<?php if (isset($requests_views)):?>
			<ul class="unstyled" rel="notification-messages">
	<?php foreach ($requests_views as $request_view):?>
		<?php echo $request_view->render();?>
	<?php endforeach;?>
			</ul>
<?php endif;?>
<!-- >messages -->
		</li>

		<li class="divider"></li>
		<li>
<?php echo $pagination;?>
		</li>
</ul>

