<?php defined('SYSPATH') or die('No direct script access.');?>
<form>
	<div class="well">
		<h5><?php echo __('Change your data');?></h5>
		<div class="row-fluid">
			<div class="span12">
				<label for="email">
					e-mail:
					<label class="checkbox">zawsze widoczny
<?php echo Form::input('show_email', '', array( 'type'=>'checkbox'));?>
					</label>
				</label>
<?php echo Form::input('email', Arr::get($user, 'email'), 
		array('type'=>'email','class'=>'span8', 'placeholder'=>'email'));?>
				<span class="label label-warning"><?php // echo Arr::get($error, 'email');?></span>              
			</div>
		</div>
		<hr>
<?php echo Form::submit('submit', 'zapisz', array('class'=>'btn btn-success'));?>
	</div>
</form>