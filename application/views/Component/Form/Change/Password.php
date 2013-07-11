<?php defined('SYSPATH') or die('No direct script access.');?>
<form>
	<div class="well">
		<h5><?php echo __('Change password');?></h5>
		<div class="row-fluid">
			<div class="span12">
				<label for="new_password">
					new password:
				</label>
				<input type="password" placeholder="hasło" name="new_password" />
				<span class="label label-warning"><?php // echo Arr::get($error, 'email');?></span>              
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<label for="new_password_confirm">
					confirm new password:
				</label>
				<input type="password" placeholder="hasło potwierdź" name="new_password_confirm" />
				<span class="label label-warning"><?php // echo Arr::get($error, 'email');?></span>              
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<label for="password">
					current_password:
				</label>
				<input type="password" placeholder="hasło obecnie" name="password" />
				<span class="label label-warning"><?php // echo Arr::get($error, 'email');?></span>              
			</div>
		</div>
		<hr>
<?php echo Form::submit('submit', 'zapisz', array('class'=>'btn btn-success'));?>
	</div>
</form>