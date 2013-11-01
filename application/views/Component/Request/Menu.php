<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<?php 
$main_menu = array(
	'style' => array(
		$status => 'disabled'
	),
	'rel' 	=> array(
		'user' => 'notification-switch-user',
		'team' => 'notification-switch-team'
	)
);
// No JS needed on panel style
if ($panel_style === TRUE):
	$main_menu['rel'] = array();
endif;
?>

<?php if ($panel_style === TRUE):?>
<ul class="well hero-unit unstyled notification-panel">
<?php else:?>
<ul class="dropdown-menu scrollable pull-right min-width-20 notification-panel" rel="notification-menu">
<?php endif;?>



	
    	<li class="row-fluid navbar">
    		<div class="navbar-inverse">
    			<div class="divider"></div>

	<?php if ($panel_style === FALSE): ?>
    			
    			<span class="pull-right btn-large">
    				<button class="close" type="button" tabindex="-1">×</button>
    			</span>
	<?php endif;?>
    			
    			
	<?php 
	/**
	 * Team anchor
	 */
	if (isset($team) AND Arr::get($team, 'id')):?>
    			<span>
		<?php echo HTML::anchor(Route::get('default')->uri(
				array(
					'controller' 	=> 'management',
					'action' 		=> 'requests',
					'id'			=> Coder::instance()->to_url(Arr::get($team, 'id'))
				)
			),
			__('team panel'),
			array(
				'class'		=> 'btn btn-mini '.Arr::get($main_menu['style'], 'team'),
				'tabindex' 	=> '-1',
				'rel' 		=> Arr::get($main_menu['rel'], 'team')
			)
		);?>
    			</span>
    			<span class="divider-vertical"></span>
	<?php endif;?>
    			<span>
	<?php 
	/**
	 * User anchor
	 */
	echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'management',
				'action' 		=> 'messages',
				'id'			=> Coder::instance()->to_url(Arr::get($user, 'id'))
			)
		),
		__('user panel'),
		array(
			'class'		=> 'btn btn-mini '.Arr::get($main_menu['style'], 'user'),
			'tabindex' 	=> '-1',
			'rel' 		=> Arr::get($main_menu['rel'], 'user')
		)
	);?>
    			</span>
    		</div>
    	</li>
		<li class="divider"></li>
	
	
		<li>
<!-- messages -->
	<?php 
		if (isset($requests_views) AND ! empty($requests_views)):
	?>
		<?php if ($panel_style === TRUE):?>
			<ul class="unstyled">
		<?php else: ?>
			<ul class="unstyled" rel="notification-messages">
		<?php endif;?>
				
		<?php 
		foreach ($requests_views as $request_view):
			echo $request_view->render();
		endforeach;
		?>
		
		
		<?php if ($panel_style === TRUE): //eclipse PDT needs this kind of closing DOM tag ?>
			</ul>
		<?php else: ?>
			</ul>
		<?php endif;?>
			
	<?php 
		else :
	?>
			<ul class="unstyled" rel="notification-messages">
				<li class="text-center" sender="-1">
					<i class="label label-info"><?php echo __('no important data.');?></i>
				</li>
			</ul>
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
			<div>
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

		
		
	<?php if ($panel_style === TRUE): //eclipse PDT needs this kind of closing DOM tag?>
</ul>
	<?php else:?>
</ul>
	<?php endif;?>
