<?php defined('SYSPATH') OR die('No direct script access.');?>
	<div>
		<small class="muted pull-right"> <?php echo __('type');?>: <?php echo __($type);?></small>
		<div class="well">
			<small class="muted">
				<strong>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' => 'user',
			'action' 	 => 'show',
			'id' 		 => Coder::instance()->to_url($user['id'])
		)
	),
	(Arr::get($status, 'owner') === FALSE) ?'<strong>'.$user['username'].'</strong>' : __('you'),
	array('class' => 'btn btn-link btn-tiny')
	
);?>
				</strong> 
				<?php echo __('asked to join the club');?>
				<?php echo __(Date::fuzzy_span(strtotime($request['date']), time()));?></small>
			<div>


<?php if (Arr::get($status, 'modification')):?>
	<?php if(Arr::get($status, 'management') AND Arr::get($status, 'status_unread')):?>
		<?php echo View::factory('Component/Request/Controls/Management',
			array(
				'user'	=> $user
			)
		);?>
		
		
	<?php endif;?>
<?php endif;?>

<?php  if (Arr::get($status, 'owner')):?>
	<?php echo View::factory('Component/Request/Controls/Owner', array('request' => $request));?>
<?php endif;?>
			</div>
		</div>
	</div>

