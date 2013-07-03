<?php defined('SYSPATH') or die('No direct script access.');?>
<?php echo Form::open(
		Route::get('default')->uri(
				array('Controller'=>'user', 'action'=>'')),	array('class'=>'well'));?>
<?php echo Form::input('login','',array('class'=>'span12', 'placeholder'=>__('email/login')));?>
<?php echo Form::input('password','',array('type'=>'password','class'=>'span12', 'placeholder'=>__('password')));?>
<?php echo Form::submit('submit', ucfirst(__('login')),array('class'=>'span12 btn btn-success'));?>
<label class="checkbox">
<?php echo Form::input('stayLogin',null, array('checked', 'type'=>'checkbox'));?>
<small><?php echo ucfirst(__('do not log me out'));?></small>
</label>
<?php echo Form::close();?>
