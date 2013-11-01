<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $style=(isset($style)?$style:null);?>
<?php $user=isset($user)?$user:array();?>
<?php $info=isset($info)?$info:array();?>
<?php $info['show_email']=((empty($info['show_email'])===FALSE)?'checked':'');?>
<?php $info['show_phone']=((empty($info['show_phone'])===FALSE)?'checked':'');?>
<?php $captcha=(isset($captcha)?$captcha:Captcha::instance());?>
<?php $error=isset($error)?$error:array();?>
<?php echo Form::open(Route::get('default')
		->uri(array('controller'=>'user', 'action'=>'registrate')),$style);?>
		<div class="modal-body">
			<div class="well">
				<h5><?php echo __('Needed data');?></h5>
				<div class="row-fluid">
					<div class="span12">
						<label for="email">
							e-mail:
							<label class="checkbox"><?php echo __('always visable');?>
<?php echo Form::input('show_email', Arr::get($info, 'show_email'), array(Arr::get($info, 'show_email'), 'type'=>'checkbox'));?>
							</label>
						</label>
<?php echo Form::input('email', Arr::get($user, 'email'), 
		array('type'=>'email','class'=>'span8', 'placeholder'=>'email'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'email');?></span>              
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="username">
							<?php echo __('username');?>:
						</label>
<?php echo Form::input('username', Arr::get($user, __('username')), 
		array('class'=>'span8', 'placeholder'=>'username'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'username');?></span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="pasword">
							<?php echo __('password');?>:
						</label>
<?php echo Form::input('password', '', 
		array('type'=>'password', 'class'=>'span8', 'placeholder'=>'password'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'password');?></span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="pasword_confirm">
							<?php echo __('password') . ' ' . __('confirm');?>:
						</label>
<?php echo Form::input('password_confirm', '', 
		array('type'=>'password', 'class'=>'span8', 'placeholder'=>__('confirm')));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'password_confirm');?></span>
					</div>
				</div>
				<hr>
                <h5><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#extra_info">Dane dodatkowe <b class="caret"></b></button></h5>
                <div id="extra_info" class="collapse out">
	                <div class="row-fluid">
	                    <div class="span12">
	                        <label for="name"><?php echo __('name');?>:</label>
<?php echo Form::input('name', Arr::get($info, 'name'), 
		array('class'=>'span8', 'placeholder'=>__('name')));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'name');?></span>
	                    </div>
	                </div>
	                <div class="row-fluid">
	                    <div class="span12">
	                        <label for="surname"><?php echo __('surname');?>:</label>
<?php echo Form::input('surname', Arr::get($info, 'surname'), 
		array('class'=>'span8', 'placeholder'=>__('surname')));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'surname');?></span>             
	                    </div>
	                </div>
	                <div class="row-fluid">
	                    <div class="span12">
	                        <label for="phone">
	                            <?php echo __('phone number');?>:
	                            <label class="checkbox"><?php echo __('always visable');?>
<?php echo Form::input('show_phone', Arr::get($info, 'show_phone'), array(Arr::get($info, 'show_phone'), 'type'=>'checkbox'));?>
	                            </label>
	                        </label>
<?php echo Form::input('phone', Arr::get($info, 'phone'), 
		array('class'=>'span8', 'placeholder'=>__('phone number')));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'phone');?></span>                          
	                    </div>
	                </div>
                </div><!-- collapse -->
                <div class="row-fluid">
                	<div class="span12">
                		<label for="captcha"><?php echo __('captcha');?></label>
                		<div><?php echo $captcha;?></div>
<?php echo Form::input('captcha', '', array('class'=>'span8', 'placeholder'=>__('captcha')));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'captcha');?></span>  
                	</div>
                
                </div>
            </div>
        </div>
        <div class="modal-footer">
<?php echo HTML::anchor(Route::get('default')->uri(), 
		__('Close'), array('class'=>'btn', 'data-dismiss'=>'modal', 'aria-hidden'=>true));?>
<?php echo Form::submit('submit', __('Join now').'!', 
		array('class'=>'btn btn-primary', 'rel'=>'registrate_form', 'data-loading-text'=>'please wait...'));?>
        </div>
<?php echo Form::close();?>

