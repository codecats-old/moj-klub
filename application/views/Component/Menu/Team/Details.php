<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $avatar = isset($avatar['path']) ? $avatar : array('path' => 'upload/default/avatar/team.png');?>
<label class="label label-info">details</label>
<div class="well row-fluid  span12">
	<ul class="thumbnails">
       	<li class="thumbnail span12">
	       	<div class="well well-dark span12">
	       		<div class="span6">
            		<h4 class="label label-success top-text"><?php echo Arr::get($team, 'short_name');?></h4>
            	
<?php echo HTML::anchor(
	Route::get('default')->uri(array('controller'=>'team')),
	HTML::image(Arr::get($avatar, 'path'), 
		array('class'=>'bg-img', 'alt'=>'avatar', 'rel'=>'team_index')
	)
);?>
            		
            	</div>
<?php if(isset($view_team_change_avatar)) echo $view_team_change_avatar;?>
			</div>
		</li>
		<li class="thumbnail span12">
			<div class="row-fluid">
				<label class="label">skrócona nazwa:</label>
				<span class="text-info pull-right">
<?php echo Arr::get($team, 'short_name');?>
				</span>
			</div>
<?php if(Arr::get($team, 'phone')):?>
		    <div class="row-fluid">
		    	<label class="label">tel</label>
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
		    	<label class="label">Miasto:</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'city');?>
				</span>
		    </div>
<?php endif;?>
<?php if(Arr::get($team, 'street')):?>
		    <div class="row-fluid">
		    	<label class="label">ul.</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'street').' '.'no.'.Arr::get($team, 'street_no');?>
				</span>
				    	
		    </div>
<?php endif;?>
		    <div class="row-fluid">
		    	<label class="label">manager:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($manager, 'username');?>
				</span>		    	
		    </div>
		    <div class="row-fluid">
		    	<label class="label">coach:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($coach, 'username');?>
				</span>				    	
		    </div>
		    <div class="row-fluid">
		    	<label class="label">capitan:</label>
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