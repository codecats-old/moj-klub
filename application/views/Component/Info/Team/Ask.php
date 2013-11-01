<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="row-fluid hero-unit">
	<div class="row-fluid">
	<div class="span12"><h4><?php echo __('You don\'t have any club. What to do?');?></h4></div>
	</div>
	<div class="row-fluid">
		<div class="span6">
<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' 	=> 'team', 
				'action' 		=> 'create'
			)
		),
		__('Stwórz<label>zarządzaj nowym klubem i zaproś członków drużyny</label>'),
		array(
			'class' 	=> 'btn btn-large btn-success btn-block', 
			'rel' 		=> 'create_form_get'
		)
);?>
		</div>
		<!-- 
		<div class="span6">
			<a href="#" class="btn btn-large btn-success btn-block">
				Odszukaj
				<label>znajdź klub do którego należysz</label>
			</a>
		</div>
		 -->
	</div>
	<hr>
	<div class="row-fluid">
<?php echo HTML::anchor(
	Route::get('default')->uri(),
	ucfirst(__('close')),
	array('class'=>'pull-right btn')
);?>
	</div>
</div>