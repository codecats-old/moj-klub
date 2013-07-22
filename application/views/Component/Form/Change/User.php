<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $info['phone']=empty($info['phone'])?null:$info['phone'];?>
<?php $info['show_email']=((empty($info['show_email'])===FALSE)?'checked':'');?>
<?php $info['show_phone']=((empty($info['show_phone'])===FALSE)?'checked':'');?>
<?php echo Form::open(Route::get('default')
		->uri(array('controller'=>'user', 'action'=>'change-data')),
		array('class'=>'form-horizontal'));?>
	<div class="well">
		<h5><?php echo __('Change your data');?></h5>
		<div class="row-fluid">
			<div class="span12">
				<label for="email">
					e-mail:
					<label class="checkbox">zawsze widoczny
<?php echo Form::input('show_email', Arr::get($info, 'show_email'), array(Arr::get($info, 'show_email'), 'type'=>'checkbox'));?>
					</label>
				</label>
<?php echo Form::input('email', Arr::get($user, 'email'), 
		array('type'=>'email','class'=>'span8', 'placeholder'=>'email'));?>
				<span class="label label-warning"><?php echo Arr::get($error, 'email');?></span>              
			</div>
			<div class="span12">
				<label for="phone">
					phone:
					<label class="checkbox">zawsze widoczny
<?php echo Form::input('show_phone', Arr::get($info, 'show_phone'), array(Arr::get($info, 'show_phone'), 'type'=>'checkbox'));?>
					</label>
				</label>
<?php echo Form::input('phone', Arr::get($info, 'phone'), 
		array('type'=>'tel','class'=>'span8', 'placeholder'=>'phone'));?>
				<span class="label label-warning"><?php echo Arr::get($error, 'phone');?></span>              
			</div>
			<div class="span12">
				<label for="name">
					name:
				</label>
<?php echo Form::input('name', Arr::get($info, 'name'), 
		array('type'=>'text','class'=>'span8', 'placeholder'=>'name'));?>
				<span class="label label-warning"><?php  echo Arr::get($error, 'name');?></span>              
			</div>
			<div class="span12">
				<label for="surname">
					surname:
				</label>
<?php echo Form::input('surname', Arr::get($info, 'surname'), 
		array('type'=>'text','class'=>'span8', 'placeholder'=>'surname'));?>
				<span class="label label-warning"><?php echo Arr::get($error, 'surname');?></span>              
			</div>
			
			<div class="span12 alert alert-success">
				<label for="password">
					password:
				</label>
<?php echo Form::input('password', '', 
		array('type'=>'password','class'=>'span8', 'placeholder'=>'password'));?>
				<span class="label label-warning"><?php echo Arr::get($error, 'password');?></span>              
			</div>
		</div>
		<hr>
<?php echo Form::submit('submit', 'zapisz', array('class'=>'btn btn-success', 'rel'=>'user_change-data'));?>

<?php echo HTML::anchor(Route::get('default')
		->uri(array('controller'=>'user')),
		ucfirst(__('close')),
		array('class'=>'btn btn-small', 'rel'=>'form_close'));?>
	</div>
<?php echo Form::close();?>