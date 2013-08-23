<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $panel_style = ($panel_style === TRUE) 
				? 'well hero-unit unstyled' : 'dropdown-menu scrollable pull-right min-width-20';?>
<ul class="<?php echo $panel_style; ?>">
    	<li class="row-fluid navbar">
    		<div class="navbar-inverse">
<?php if (isset($team)):?>
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
			'class'		=> 'btn btn-mini active',
			'tabindex' 	=> '-1'
		)
	);?>
    			</span>
    			<span class="divider-vertical"></span>
<?php endif;?>
    			<span>
    				<a class="btn btn-mini" href="" >user panel</a>
    			</span>
    		</div>
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