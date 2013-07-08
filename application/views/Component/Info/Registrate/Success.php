<?php defined('SYSPATH') or die('No direct script access');?>
<?php $user=isset($user)?$user:array();?>
<div>
            <div class="well">
                <h4>Dziękujemy za rejestrację!<div><small>Teraz możesz przejść do logowania.</small></div></h4>
                <div class="row-fluid">
                    <div class="span12">
						<div>Dane użyte podczas rejestracji</div>

							<div><span class="label">E-mail: </span><?php echo Arr::get($user, 'email');?></div>
							<div><span class="label">login: </span><?php echo Arr::get($user, 'username');?></div>

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
		array('class'=>'btn btn-primary', 'rel'=>'login_form')
		);?>
        	</div>
		</div>
</div>