<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $roles_view=empty($roles_view)?'(empty)':$roles_view;?>
<?php $info['name']=empty($info['name'])?'(empty)':$info['name'];?>
<?php $info['surname']=empty($info['surname'])?'(empty)':$info['surname'];?>
<?php $info['phone']=empty($info['phone'])?'(empty)':$info['phone'];?>
<?php $team=empty($team)?array():$team;?>

<div class="well row-fluid  span12">
	<ul class="thumbnails">
       	<li class="thumbnail span12">
	       	<div class="well well-dark span12">
	       		<div class="span6">
            		<h4 class="label label-success top-text"><?php echo ucfirst(__('yours data'));?></h4>
            	
<?php echo HTML::anchor(
	Route::get('default')->uri(array('controller'=>'user')),
	HTML::image(Arr::get($avatar, 'path'), 
		array('class'=>'bg-img', 'alt'=>'avatar', 'rel'=>'user_index')
	)
);?>
				</div>
				<div class="span6">
					<button class="pull-right btn btn-mini" data-toggle="collapse" data-target=".collapse">
						<?php echo ucfirst(__('edit'));?>
					</button>
					<div class="divider"></div>
					<div class="pull-right collapse in">
<?php echo HTML::anchor(
	Route::get('default')->uri(array('controller'=>'user', 'action'=>'change-user-avatar')),
	ucfirst(__('change avatar')),
	array('rel'=>'user_change-avatar_get')
);?>
					</div>
				<!-- 	<div class="divider"></div>
					<div class="pull-right collapse in">more data here</div> -->
				</div>
			</div>
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
		    <div><label class="label">Drużyna:</label>
		    	<span class="text-info pull-right">
<?php if (Arr::get($team, 'id')):?>
	<?php echo HTML::anchor(Route::get('default')->uri(
				array(
					'controller' 	=> 'team',
					'action' 		=> 'show',
					'id' 			=> Coder::instance()->to_url($team['id'])
				)
			),
			Arr::get($team, 'short_name')
	);?>
<?php endif;?>
		    	</span>
		    </div>
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
	<div class="row-fluid collapse in">
<?php echo HTML::anchor(Route::get('default')->uri(
		array('controller'=>'user', 'action'=>'change-data')),
		ucfirst(__('Edit your data')),
		array('class'=>'btn btn-link btn-mini', 'rel'=>'user_change-data_get'));?>
		
<?php echo HTML::anchor(Route::get('default')->uri(
		array('controller'=>'user', 'action'=>'change-password')),
		ucfirst(__('change password')),
		array('class'=>'btn btn-link btn-mini', 'rel'=>'user_change-password_get'));?>
		
<?php echo HTML::anchor(Route::get('default')->uri(
		array('controller'=>'user', 'action'=>'logout')),
		ucfirst(__('logout')),
		array('class'=>'btn btn-link btn-mini pull-right', 'rel'=>'logout'));?>
	</div>
</div>