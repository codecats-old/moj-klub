<?php defined('SYSPATH') or die('No direct script access');?>
<?php $info=(isset($info)?$info:null);?>
<div>
            <div class="well">
                <div>     	
                	<h4>
                		<span class="badge badge-warning">
                			<strong class="lead">!</strong>
                		</span>
<?php echo Arr::get($messages, 'message');?>
                	</h4>
                </div>
<?php if($info):?>
                <div class="row-fluid">
                    <div class="span12">						
	<?php echo $info;?>
	
	<?php if(isset($errors)):?>
						<ul>
		<?php foreach ($errors as $error):?>
							<li>
			<?php echo $error?>
							</li>
		<?php endforeach;?>
	<?php endif;?>
						</ul>
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