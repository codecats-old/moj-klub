<?php defined('SYSPATH') or die('No direct script access.');?>
<h3>Przeglądaj</h3>
<?php echo HTML::anchor(
	Route::get('default')->uri(
		array(
			'controller'=>'team',
		)
	), 
	'Twój klub<label>informacje, ważniejse wydarzenia<label>',
	array('class'=>'btn btn-large btn-info btn-block')
);?>
<!-- <a href="#" class="btn btn-large btn-info btn-block">Twój klub<label>informacje, ważniejse wydarzenia</label></a> -->
<a href="#" class="btn btn-large btn-info btn-block">Panel<label>statystyki, treningi ect.</label></a>
<a href="#" class="btn btn-large btn-info btn-block">Twój profil<label>widoczny dla innych</label></a>