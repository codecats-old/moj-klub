<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $active = isset($active) ? $active :array();?>
<?php $disabled = !isset($team) ? array('gallery' => 'disabled') : array();?>
<?php $team = isset($team) ? $team : array();?>
<h3>Przeglądaj</h3>

<p>
<?php echo HTML::anchor(
	Route::get('default')->uri(
		array(
			'controller'=>'team',
		)
	), 
	'Twój klub<label>informacje, ważniejse wydarzenia<label>',
	array('class'=>'btn btn-large btn-info btn-block '.Arr::get($active, 'team'))
);?>
</p>


<p>
	<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' => empty($team) ? NULL : 'gallery',
				'action' =>  empty($team) ? NULL : 'team',
				'id' => Coder::instance()->to_url(Arr::get($team, 'id'))
			)
		), 
		'Gallery',
		array(
			'class'=>'btn btn-block btn-info '
				.Arr::get($active, 'gallery').' '.Arr::get($disabled, 'gallery')
		)
	);?>
</p>


<!-- <a href="#" class="btn btn-large btn-info btn-block">Twój klub<label>informacje, ważniejse wydarzenia</label></a> -->
<p>
	<a href="#" class="btn btn-large btn-info btn-block">Panel<label>statystyki, treningi ect.</label></a>
</p>
<p>
	<a href="#" class="btn btn-large btn-info btn-block">Twój profil<label>widoczny dla innych</label></a>
</p>