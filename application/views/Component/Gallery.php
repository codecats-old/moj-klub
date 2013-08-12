<?php defined('SYSPATH') OR die('No direct script access.');?>

<?php if(Arr::get($menu, 'new_photo')):?>
<!-- UPLAD PHOTOS -->
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
		array(
			'class' => 'btn btn-large',
			'rel'	=> 'gallery_add_get'
		)
	);?>
	  </li>
	</ul>
</div>
<!-- >UPLAD PHOTOS -->
<?php endif;?>


<div id="gallery-container">
	<ul class="items--small">
<?php $id=0;?>
<?php foreach($photos as $photo):?>
		<li class="item well">
	
	<?php echo HTML::image($photo->address);?>
	
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
				'class' => 'btn btn-danger btn-mini pull-right',
				'rel'	=> 'confirm_get',
				'sender'=> $id++
			)
		);?>
	<?php endif;?>
		</li>
<?php endforeach;?>
	</ul>
	
	<ul class="items--big">
	<?php $id=0;?>
<?php foreach($photos as $photo):?>
		<li class="item--big">
	
	<?php echo HTML::image($photo->address);?>

		</li>
<?php endforeach;?>
	</ul>
	
	
	<div class="controls">
	    <span class="control icon-arrow-left" data-direction="previous"></span> 
	    <span class="control icon-arrow-right" data-direction="next"></span> 
	    <span class="grid icon-grid"></span>
	    <span class="fs-toggle icon-fullscreen"></span>
    </div>
 
</div>