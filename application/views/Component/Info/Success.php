<?php defined('SYSPATH') or die('No direct script access');?>
<?php $info=(isset($info)?$info:null);?>
<div>
	<div class="well">
    	<div>     	
        	<h4>
           		<span class="badge badge-success">
           			<strong class="lead">&#10162;</strong>
           		</span>
<?php echo Arr::get($messages, 'message');?>
           	</h4>
        </div>
<?php if($info):?>
        <div class="row-fluid">
           	<div class="span12">						
<?php echo $info;?>
             </div>
        </div>
<?php endif;?>
		<div class="modal-footer">
<?php echo HTML::anchor(
		Route::get('default')->uri(array('controller'=>lcfirst(Request::initial()->controller()))),
		__('close'), 
		array('class'=>'btn', 'data-dismiss'=>'modal', 'aria-hidden'=>true, 'rel'=>'form_close')
);?>
        </div>
	</div>
</div>