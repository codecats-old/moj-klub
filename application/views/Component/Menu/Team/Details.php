<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $avatar = isset($avatar['path']) ? $avatar : array('path' => 'upload/default/avatar/team.png');?>
<label class="label label-info"><?php echo __('details');?></label>
<div class="well row-fluid  span12">
	<ul class="thumbnails">
       	<li class="thumbnail span12">
	       	<div class="well well-dark span12">
	       		<div class="span6">
            	
<?php echo HTML::anchor(
	Route::get('default')->uri(array('controller'=>'team')),
	HTML::image(Arr::get($avatar, 'path'), 
		array('class'=>'img-polaroid', 'alt'=>'avatar', 'rel'=>'team_index')
	)
);?>				
					<h4 class="label">
						<?php echo Arr::get($team, 'short_name');?>
					</h4>
             	
            	</div>
<?php if(isset($view_team_change_avatar)) echo $view_team_change_avatar;?>
			</div>
		</li>
		<li class="thumbnail span12">
			<div class="row-fluid">
				<label class="label"><?php echo __('short name');?>:</label>
				<span class="text-info pull-right">
<?php echo Arr::get($team, 'short_name');?>
				</span>
			</div>
<?php if(Arr::get($team, 'phone')):?>
		    <div class="row-fluid">
		    	<label class="label"><?php echo __('phone');?></label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'phone');?>
				</span>
			</div>
<?php endif;?>
<?php if(Arr::get($team, 'email')):?>
		    <div class="row-fluid">
		    	<label class="label">email:</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'email');?>
		    	</span>
		    </div>
<?php endif;?>
<?php if(Arr::get($team, 'city')):?>
		    <div class="row-fluid">
		    	<label class="label"><?php echo ucfirst(__('city'));?>:</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'city');?>
				</span>
		    </div>
<?php endif;?>
<?php if(Arr::get($team, 'street')):?>
		    <div class="row-fluid">
		    	<label class="label"><?php echo __('street');?></label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'street').' '.'no.'.Arr::get($team, 'street_no');?>
				</span>
				    	
		    </div>
<?php endif;?>
		    <div class="row-fluid">
		    	<label class="label"><?php echo __('manager');?>:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($manager, 'username');?>
				</span>		    	
		    </div>
		    <div class="row-fluid">
		    	<label class="label"><?php echo __('coach');?>:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($coach, 'username');?>
				</span>				    	
		    </div>
		    <div class="row-fluid">
		    	<label class="label"><?php echo __('capitan');?>:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($capitan, 'username');?>
				</span>				    	
		    </div>
		</li>
		<li class="thumbnail span12">
<?php echo View::factory('Component/Info/Address')->set('object', $team);?>
		</li>

	</ul>

<?php if(isset($view_team_change_details)) echo $view_team_change_details;?>
<?php if(isset($view_team_change_manage)) echo $view_team_change_manage;?>
</div>