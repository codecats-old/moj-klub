<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $style=(isset($style)?$style:null);?>
<?php $error=(isset($error)?$error:null);?>
<?php echo Form::open(Route::get('default')
		->uri(array('Controller'=>'welcome', 'action'=>'registrate')),array(HTML::attributes($style)));?>
		<div>
			<div class="well">
				<h4><?php echo __('Needed data');?></h4>
				<div class="row-fluid">
					<div class="span12">
						<label for="email">
							e-mail:
							<label class="checkbox">zawsze widoczny
<?php echo Form::input('show_email',null, array('checked', 'type'=>'checkbox'));?>
							</label>
						</label>
<?php echo Form::input('email', '', array('type'=>'email','class'=>'span8', 'placeholder'=>'email'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'email');?></span>
                        <hr>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="username">
							username:
						</label>
						<?php echo Form::input('username', '', array('class'=>'span8', 'placeholder'=>'username'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'username');?></span>
                        <hr>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="pasword">
							password:
						</label>
<?php echo Form::input('password', '', array('type'=>'password', 'class'=>'span8', 'placeholder'=>'password'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'password');?></span>
                        <hr>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="pasword_confirm">
							password_confirm:
						</label>
<?php echo Form::input('password_confirm', '', array('type'=>'password', 'class'=>'span8', 'placeholder'=>'_confirm'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'password');?></span>
                        <hr>
					</div>
				</div>
				<hr>
               <hr>
                <h5>Dane dodatkowe:</h5>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="name">imię:</label>
                        <input name="name" type="text" class="span8" placeholder="Twoje imie" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="surname">nazwisko:</label>
                        <input name="surname" type="text" class="span8" placeholder="Twoje nazwisko" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="phone">
                            nr telefonu:
                            <label class="checkbox">
                                <input type="checkbox" checked><small>widoczny publicznie</small>
                            </label>
                        </label>
                        <input name="phone" type="text" class="span8" placeholder="Twoj nr telefonu" />
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</a>
            <a  href="#" class="btn btn-primary">Zarejestruj się</a>
        </div>
<?php echo Form::close();?>

