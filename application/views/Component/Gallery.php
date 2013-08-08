<?php defined('SYSPATH') OR die('No direct script access.');?>

<?php if(Arr::get($menu, 'new_photo')):?>
<div class="row-fluid">
	<ul class="nav navbar">
	  <li class="offset4 span4">
	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' => 'team', 
				'action' => 'add-photo'
			)
		),
		'<span class="icon-upload icon-large"></span>',
		array('class' => 'btn btn-large')
	);?>
	  </li>
	</ul>
</div>
<?php endif;?>
<div>

<?php foreach($photos as $photo):?>
<?php // print_r($photo->address);?>
	<?php echo $photo->address;?>
	<?php if(Arr::get($menu, 'delete_photo')):?>
		<?php echo HTML::anchor(Route::get('default')->uri(
				array(
					'controller' => 'team', 
					'action' => 'delete-photo',
					'id' => bin2hex(Encrypt::instance()->encode($photo->id))
				)
			),
			'<span class="icon-remove icon-white"></span>',
			array('class' => 'btn btn-danger')
		);?>
	<?php endif;?>
	<hr>
<?php endforeach;?>

</div>