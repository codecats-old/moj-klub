<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $panel_style = isset($panel_style) 
				? 'well hero-unit unstyled' : 'dropdown-menu scrollable pull-right min-width-20';?>
<ul class="<?php echo $panel_style; ?>">
	<li>
<?php echo HTML::anchor(Route::get('default')->uri(
	array(
			'controller' => 'management',
			'action' 	 => 'requests',
			'id' 		 => Coder::instance()->to_url($team['id'])
		)
	),
	'panel',
	array('class' => '', 'tabindex' => '-1')
);?>
	</li>
	<li class="divider"></li>
	
<!-- messages -->
<?php if (isset($requests_views)):?>
	<?php foreach ($requests_views as $request_view):?>
		<?php echo $request_view->render();?>
	<?php endforeach;?>
<?php endif;?>
<!-- >messages -->

</ul>

<?php echo $pagination;?>