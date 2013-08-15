<?php defined('SYSPATH') or die('No direct script access.');?>
<h3>Dane drużyny</h3>
<div>
	<label class="label">Pełna nazwa</label>
	<span class="text-info pull-right">
<?php echo Arr::get($team, 'full_name');?>
	</span>
</div>
<div class="well">
	<article class="text-info">
		<label class="label">opis</label>
		<p>
<?php echo Arr::get($team, 'description');?>	
		</p>
		<label class="label">największe sukesy</label>
		<p>
<?php echo Arr::get($team, 'success');?>		
		</p>
		<label class="label">treningi</label>
		<p>
<?php echo Arr::get($team, 'training');?>
		</p>
	</article>
<?php if ($photos_count > 0):?>
	<div>
	<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' => 'gallery',
				'action'	 =>	'team',
				'id'		 => Coder::instance()->to_url($team['id'])
			)
		),
		'Photos count: '.$photos_count,
		array(
			'class' => 'btn btn-info'
		)
	)?>
	<a></a>
	</div>
<?php endif;?>
</div>