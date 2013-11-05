<?php defined('SYSPATH') OR die('No direct script access.');?>
<button 
	class="btn btn-inverse span12 visible-desktop" 
	type="button" 
	data-toggle="collapse" 
	data-target="#quick_access">
<span class="icon-briefcase icon-large icon-white color-gray"></span>
</button>
<div class="well collapse in visible-desktop round-corners" id="quick_access">
	<h4><?php echo ucfirst(__('quick access'));?></h4>
	<div>
	<?php if (is_null($user)) :?>
		<?php echo View::factory('Component/Form/Login')
			->set('rel','quick_login_form');?>
	</div>
	<div class="pull-right">
		<?php echo HTML::anchor(
				Route::get('default')->uri(
							array(
								'controller' 	=> 'user', 
								'action' 		=> 'registrate'
							)
				),
				ucfirst(__('registrate')),
				array('rel'=>'registrate_form_get')
		);?>
	<?php else :?>
		<div class="well">
		<?php echo HTML::anchor(
				Route::get('default')->uri(
							array(
								'controller' 	=> 'user',
								'action' 		=> 'train'
							)
				),
				__('Train'),
				array('class' => 'btn btn-danger btn-large span12 ')
				
		);?>
		</div>
		<div class="well">
		<?php echo HTML::anchor(
				Route::get('default')->uri(
							array(
								'controller' 	=> 'user',
								'action' 		=> 'show',
								'id' 			=> Coder::instance()->short_url($user->id)
							)
				),
				ucfirst(__('your profile')),
				array('class' => 'btn btn-danger btn-large span12')
				
		);?>
		</div>
		
		<?php 
			if ($user->team_id !== NULL) :
		?>
		<div class="well">
		<?php 	
				echo HTML::anchor(
						Route::get('default')->uri(
									array(
										'controller' 	=> 'team',
										'action' 		=> 'show',
										'id' 			=> Coder::instance()->short_url($user->team_id)
									)
						),
						ucfirst(__('your team')),
						array('class' => 'btn btn-danger btn-large span12')
						
				);
		?>
		</div>
		<?php 
			endif;
		?>
	
	<?php endif;?>
	</div>
</div>
