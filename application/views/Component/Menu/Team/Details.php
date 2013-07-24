<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="well row-fluid  span12">
	<ul class="thumbnails">
       	<li class="thumbnail span12">
	       	<div class="well well-dark span12">
	       		<div class="span6">
            		<h4 class="label label-success top-text"><?php echo Arr::get($team, 'short_name');?></h4>
            	
<a href="/moj-klub/index.php/user"><img src="/moj-klub/upload/avatars/users/1.jpeg" rel="user_index" alt="avatar" class="bg-img" /></a>				</div>
<?php if(isset($view_team_change_avatar)) echo $view_team_change_avatar;?>
			</div>
			<div>
				<label class="label">skrócona nazwa:</label>
				<span class="text-info pull-right">
<?php echo Arr::get($team, 'short_name');?>
				</span>
			</div>
<?php if(Arr::get($team, 'phone')):?>
		    <div>
		    	<label class="label">tel</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'phone');?>
				</span>
			</div>
<?php endif;?>
<?php if(Arr::get($team, 'email')):?>
		    <div><label class="label">email:</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'email');?>
		    	</span>
		    </div>
<?php endif;?>
<?php if(Arr::get($team, 'city')):?>
		    <div><label class="label">Miasto:</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'city');?>
				</span>
		    </div>
<?php endif;?>
<?php if(Arr::get($team, 'street')):?>
		    <div>
		    	<label class="label">ul.</label>
		    	<span class="text-info pull-right">
	<?php echo Arr::get($team, 'street').' '.'no.'.Arr::get($team, 'street_no');?>
				</span>
				    	
		    </div>
<?php endif;?>
		    <div>
		    	<label class="label">manager:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($manager, 'username');?>
				</span>		    	
		    </div>
		    <div>
		    	<label class="label">capitan:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($coach, 'username');?>
				</span>				    	
		    </div>
		    <div>
		    	<label class="label">coach:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($capitan, 'username');?>
				</span>				    	
		    </div>
		</li>
	</ul>
<?php if(isset($view_team_change_details)) echo $view_team_change_details;?>
<?php if(isset($view_team_change_manage)) echo $view_team_change_manage;?>
</div>