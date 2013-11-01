<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $controller = strtolower(Request::current()->controller() );?>
<?php // $active = array($controller => 'active');?>

<h3 class="label label-info"><?php echo __('Browse');?></h3>

<?php if (Arr::get($menu,	'user')):?>
<p>
	<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller'=>'user',
			)
		), 
		__('My profile<label>options<label>'),
		array(
			'class' 	=>'btn btn-large btn-info btn-block, ' //.Arr::get($active, 'user')
		)
	);?>
</p>
<?php endif;?>

<?php if (Arr::get($menu,	'team')):?>
<p>
	<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller'=>'team',
			)
		), 
		__('Your club<label>informations, important events<label>'),
		array(
			'class' 	=> 'btn btn-large btn-info btn-block', //.Arr::get($active, 'team'),
			'rel' 		=> 'team_index'
		)
	);?>
	</p>
	<?php endif;?>

<?php if (Arr::get($menu, 'gallery')):?>
<p>
	<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' => 'gallery',
				'action' =>  'team',
				'id' => Coder::instance()->short_url(Arr::get($team, 'id'))
			)
		), 
		__('Gallery<label>pictures from team</label>'),
		array(
			'class' 	=> 'btn btn-block btn-info', //.Arr::get($active, 'gallery'),
			'rel'		=> 'gallery_index'
		)
	);?>
</p>
<?php endif;?>

<!-- <a href="#" class="btn btn-large btn-info btn-block">Twój klub<label>informacje, ważniejse wydarzenia</label></a> -->
<!-- 
<p>
	<a href="#" class="btn btn-large btn-info btn-block">Panel<label>statystyki, treningi ect.</label></a>
</p>
<p>
	<a href="#" class="btn btn-large btn-info btn-block">Twój profil<label>widoczny dla innych</label></a>
</p>
 -->