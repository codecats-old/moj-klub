<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $label_empty = 'not set yet.';?>
<?php $avatar = (isset($avatar)) ? $avatar : array('path' => 'upload/default/avatar/user.jpeg')?>
<div class="well">
	<div class="row-fluid">
		<div class="span9">

				<label class="label label-info">name:</label>
<?php if ($info):?>
				<h4><?php echo Arr::get($info, 'name') ? : $label_empty;?></h4>
<?php else:?>
				<h4><?php echo $label_empty;?></h4>
<?php endif;?>

				<label class="label label-info">surname:</label>
<?php if ($info):?>
				<h4><?php echo Arr::get($info, 'surname') ? : $label_empty;?></h4>
<?php else:?>
				<h4><?php echo $label_empty;?></h4>
<?php endif;?>
			
			
		</div>
		<div class="span3">
			<p>
<?php echo HTML::image(Arr::get($avatar, 'path'), array('alt' => 'avatar', 'class' => 'img-polaroid'));?>
			</p>
			<p class="text-center">
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller'	=> 'user',
			'action'		=> 'show',
			'id'			=> Coder::instance()->short_url(Arr::get($user, 'id'))
		)
	),
	Arr::get($user, 'username'),
	array(
		'class'	=> 'btn btn-info'
	)
);?>
			</p>
		</div>
	</div>
	<hr>
	<div class="row-fluid">
		<div class="span12">
			<p>
<?php if (Arr::get($info, 'show_email')):?>
				<label class="label label-info">email:</label>
	<?php echo HTML::mailto(
			Arr::get($user, 'email'), 
			'e-mail <span class="icon-envelope"></span>', 
			array('class' => 'btn')
	);?>
<?php endif;?>
			</p>
			<p>
<?php if (Arr::get($info, 'show_phone')):?>
			
			<abbr title="Phone"><span class="label label-info">P:</span>
	<?php echo preg_replace('/^(\d{3})(\d{3})(\d{3})$/', '$1 $2 $3', Arr::get($info, 'phone'));?>
			</abbr>
<?php endif;?>
			</p>
<?php if ($team):?>
			<div class="well">
				<label class="text-center alert alert-success">team</label>
				<h2>
	<?php echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'team',
				'action' 		=> 'show',
				'id' 			=> Coder::instance()->short_url(Arr::get($team, 'id'))
			)		
		),
		Arr::get($team, 'short_name')
	);?>
				</h2>
				<h4>
	<?php echo Arr::get($team, 'full_name');?>
				</h4>
	<?php if ($roles):?>
				<label class="label">user's role: </label>
		<?php foreach ($roles as $role):?>
			<?php echo $role->name.', ';?>
		<?php endforeach;?>
	<?php else:?>
				<label class="label">user has no role yet.</label>
	<?php endif;?>
			</div>
<?php endif;?>
			<p class="pull-right">
				<small>
					<label class="label label-info">last seen:</label>
<?php echo Date::fuzzy_span(Arr::get($user, 'last_login'));?>
				</small>
			</p>
		</div>
	</div>
</div>