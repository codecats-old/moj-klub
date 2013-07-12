<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $roles_view=empty($roles_view)?'(empty)':$roles_view;?>
<?php $info['name']=empty($info['name'])?'(empty)':$info['name'];?>
<?php $info['surname']=empty($info['surname'])?'(empty)':$info['surname'];?>
<?php $info['phone']=empty($info['phone'])?'(empty)':$info['phone'];?>

<div class="well row-fluid  span12">
	<ul class="thumbnails">
       	<li class="thumbnail span12">
            <h4 class="top-text text-info btn active"><?php echo ucfirst(__('yours data'));?></h4>
<?php echo HTML::image('./upload/Avatar/club-avatar.jpg',array('class'=>'bg-img'));?>              
			<div>
				<label class="label">Imie:</label>
				<span class="text-info pull-right">
<?php echo Arr::get($info, 'name');?>
				</span>
			</div>
		    <div>
		    	<label class="label">Nazwisko:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($info, 'surname');?>
				</span>
			</div>
		    <div><label class="label">Drużyna:</label><span class="text-info pull-right">IKS OGRY</span></div>
		    <div><label class="label">Rola:</label>
		    	<span class="text-info pull-right">
<?php echo $roles_view;?>
		    	</span>
		    </div>
		    <div>
		    	<label class="label">Tel:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($info, 'phone');?>
		    	</span>
				<span>
<?php echo Arr::get($info_popover, 'show_phone');?>
				</span>		    	
		    </div>
		    <div>
		    	<label class="label">E-mail:</label>
		    	<span class="text-info pull-right">
<?php echo Arr::get($user, 'email');?>
				</span>
		    	<span>
<?php echo Arr::get($info_popover, 'show_email');?>
				</span>
		    </div>
		</li>
	</ul>
	<div class="row-fluid">
<?php echo HTML::anchor(Route::get('default')->uri(
		array('controller'=>'user', 'action'=>'change-data')),
		ucfirst(__('Edit your data')),
		array('class'=>'btn btn-link btn-mini', 'rel'=>'user_change-data'));?>
		
<?php echo HTML::anchor(Route::get('default')->uri(
		array('controller'=>'user', 'action'=>'change-password')),
		ucfirst(__('change password')),
		array('class'=>'btn btn-link btn-mini', 'rel'=>'user_change-password'));?>
		
<?php echo HTML::anchor(Route::get('default')->uri(
		array('controller'=>'user', 'action'=>'logout')),
		ucfirst(__('logout')),
		array('class'=>'btn btn-link btn-mini pull-right', 'rel'=>'logout'));?>
	</div>
</div>