<?php defined('SYSPATH') OR die('No direct script access.');?>

<?php if(Arr::get($menu, 'new_photo')):?>
<div class="row-fluid">
	<ul class="nav navbar">
	  <li class="offset4 span4">
	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' => 'gallery', 
				'action' => 'add'
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
<?php $id=0;?>
<?php foreach($photos as $photo):?>
<?php // print_r($photo->address);?>
	<?php echo $photo->address;?>
	<?php if(Arr::get($menu, 'delete_photo')):?>
		<?php echo HTML::anchor(Route::get('default')->uri(
				array(
					'controller' => 'gallery', 
					'action' => 'delete',
					'id' => Coder::instance()->to_url($photo->id)
				)
			),
			'<span class="icon-remove icon-white"></span>',
			array(
				'class' => 'btn btn-danger',
				'rel'	=> 'confirm_get',
				'sender'=> $id++
			)
		);?>
	<?php endif;?>
	<hr>
<?php endforeach;?>

</div>