<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $error = isset($error) ? $error : array();?> 
<?php
echo Form::open(Route::get('default')
		->uri(array(
				'controller' => 'team', 
				'action' => 'change',
				'id' => $id
		)),
		array('class'=>'form-horizontal'));?>
		
	<div class="modal-body">
			<div class="well">
				<h5><?php echo __('Change Data');?></h5>
				
	<?php if( ! empty($error)):?>
	<p>
		<span class="label label-warning"><?php echo ucfirst(__('please correct your data'));?></span>
	</p>
	<?php endif;?>	
	
	
	<?php foreach ($fields as $field):?>
		<?php echo View::factory('Component/Form/Team/Field/'.$field, 
				array('team' => $team, 'error' => $error));
		?>
	<?php endforeach;?>
				
            </div>
        </div>
        <div class="modal-footer">
	        
	<?php echo HTML::anchor(Route::get('default')->uri(), 
			__('Close'), array('class'=>'btn', 'data-dismiss'=>'modal', 'aria-hidden' => TRUE));?>
			
	<?php echo Form::submit('submit', __('Update'), 
			array('class'=>'btn btn-primary', 'rel'=>'change_form', 'data-loading-text' => 'please wait...'));?>
        </div>
<?php echo Form::close();?>