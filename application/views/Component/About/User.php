<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="well row-fluid  span12">
	<ul class="thumbnails">
		<li class="thumbnail span12">
			<h3>Dane użytkownika</h3>
			 <div>
			 	<label class="label">Klub</label>
			 	<span class="text-info pull-right">
	
<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'team',
				'action' 		=> 'show',
				'id' 			=> Coder::instance()->short_url($team['id'])
			)
		),
		Arr::get($team, 'short_name')
);?>
			 	</span>
			 </div>
<?php if(Arr::get($team, 'city')):?>
			 <div>
			 	<label class="label">Miejscowość</label>
			 	<span class="text-info pull-right"><?php echo Arr::get($team, 'city');?></span>
			 </div>
<?php endif;?>
			 <div>
			 	<label class="label">Poziom ćwiczeń</label>
			 	<span class="text-info pull-right">30 min/tyg</span>
			 </div>
		</li>
	</ul>
</div>