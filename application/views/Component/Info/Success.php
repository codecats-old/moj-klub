<?php defined('SYSPATH') or die('No direct script access');?>
<div>
            <div class="well">
                <h4>Operacja wykonana poprawnie!</h4>
                <div class="row-fluid">
                    <div class="span12">						
						

                    </div>
                </div>
			<div class="modal-footer">
<?php echo HTML::anchor(
		Route::get('default')->uri(array('controller'=>lcfirst(Request::current()->controller()))),
		__('close'), 
		array('class'=>'btn btn-primary', 'data-dismiss'=>'modal', 'aria-hidden'=>true)
);?>
        	</div>
		</div>
</div>