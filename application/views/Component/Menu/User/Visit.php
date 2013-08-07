<?php defined('SYSPATH') or die('No direct script access.');?>
<h3>Przeglądaj</h3>
<p>

<?php echo HTML::anchor(
	Route::get('default')->uri(
		array(
			'controller'=>'team',
		)
	), 
	'Twój klub<label>informacje, ważniejse wydarzenia<label>',
	array('class'=>'btn btn-large btn-info btn-block')
);?>
</p>

<?php if (isset($team)):?>
<p>
	<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' => 'team',
				'action' => 'gallery',
				'id' => Encrypt::instance()->encode($team['id'])
			)
		), 
		'Gallery',
		array('class'=>'btn btn-block btn-inverse')
	);?>
</p>
<?php endif;?>

<!-- <a href="#" class="btn btn-large btn-info btn-block">Twój klub<label>informacje, ważniejse wydarzenia</label></a> -->
<p>
	<a href="#" class="btn btn-large btn-info btn-block">Panel<label>statystyki, treningi ect.</label></a>
</p>
<p>
	<a href="#" class="btn btn-large btn-info btn-block">Twój profil<label>widoczny dla innych</label></a>
</p>