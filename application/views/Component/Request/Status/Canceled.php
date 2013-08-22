<?php defined('SYSPATH') OR die('No direct script access.');?>
	<div>
		<small class="muted pull-right"> type: <?php echo $type;?></small>
		<div class="well">
			<small class="muted">
				<strong>
				<?php echo $user['username'];?>
				</strong> 
				asked to join the club 
				<?php echo Date::fuzzy_span(strtotime($request['date']), time());?></small>
			<div>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' => 'user',
			'action' 	 => 'show',
			'id' 		 => Coder::instance()->to_url($user['id'])
		)
	),
	'<strong>'.$user['username'].'</strong>',
	array('class' => 'btn btn-block', 'tabindex' => '-1')
	
);?>

<?php if (Arr::get($status, 'modification')):?>
	<?php if(Arr::get($status, 'management') AND Arr::get($status, 'status_unread')):?>
		<?php echo View::factory('Component/Request/Controls/Management',
			array(
				'user'	=> $user
			)
		);?>
		
		
	<?php endif;?>
<?php endif;?>
			</div>
		</div>
	</div>

