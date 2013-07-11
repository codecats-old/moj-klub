<?php defined('SYSPATH') or die('No direct script access');?>
<div>
            <div class="well">
                <h4>Dziekujemy za odwiedziny!<div><small>Zostałeś prawidłowo wylogowany.</small></div></h4>
                <div class="row-fluid">
                    <div class="span12">
						<div></div>
                    </div>
                </div>
			<div class="modal-footer">
<?php echo HTML::anchor(
		Route::get('default')->uri(), 
	__('Close'), 
		array('class'=>'btn', 'data-dismiss'=>'modal', 'aria-hidden'=>true)
		);?>
<?php echo HTML::anchor(
		Route::get('default')->uri(array('controller'=>'user', 'action'=>'login')),
		__('Login'), 
		array('class'=>'btn btn-primary', 'rel'=>'login_form_get')
		);?>
        	</div>
		</div>
</div>