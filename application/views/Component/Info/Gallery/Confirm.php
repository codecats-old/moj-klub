<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $error=(isset($error)?$error:null);?>



<div class="modal-body">
        <div class="well">
                <h4><?php echo __('Delete photo');?></h4>
                <p><small><?php echo __('Are you sure you want delete this photo?');?></small></p>
                <div class="row-fluid">
                    <div class="span12">						
						<div>
<?php echo HTML::image($photo['address'], array('alt' => $photo['address']));?>
						</div>
                    </div>
                </div>
		</div>	
</div>

<div class="modal-footer">
		
<?php echo HTML::anchor(
		Route::get('delete')->uri(
			array(
				'controller'	=> 'gallery',
				'action'		=> 'delete',
				'id'			=> Coder::instance()->to_url($photo['id']),
				'confirm'		=> 'true'
			)
		),
		__('confirm'), 
		array('class'=>'btn btn-primary', 'rel' => 'confirm_action')
);?>
</div>
		
