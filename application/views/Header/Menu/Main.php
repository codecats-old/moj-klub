<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="nav">
	<ul class="nav nav-collapse">
		<!-- Popular -->
		<li>
<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'statistics',
				'action' 		=> 'popularity'
			)
		), 
		__('Popularity')
);?>
		</li>
		
		<!-- >Popular -->
		<!-- Stats -->
		<li>
<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'statistics',
				'action' 		=> 'ranking'
			)
		), 
		__('Statistics')
);?>
		</li>
		<!-- >Stats -->
		<li>
<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'user',
				'action' 		=> 'train'
			)
		), 
		__('Panel')
);?>
	
		</li>
		<li>
<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'team'
			)
		), 
		__('Club')
);?>
		</li>
	</ul>
</div>