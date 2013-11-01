<?php defined('SYSPATH') or die('No direct script access');?>
<?php $user=isset($user)?$user:array();?>
<div>
            <div class="well">
                <h4><?php echo __('Welcome back!');?><div><small><?php echo __('You can go to panel.')?></small></div></h4>
                <div class="row-fluid">
                    <div class="span12">						
						<div><span class="label">login: </span><?php echo Arr::get($user, 'username');?></div>

                    </div>
                </div>
			<div class="modal-footer">
			
<?php echo HTML::anchor(
		Route::get('default')->uri(array('controller'=>'panel',)),
		__('user panel'), 
		array('class'=>'btn btn-primary')
		);?>
        	</div>
		</div>
</div>