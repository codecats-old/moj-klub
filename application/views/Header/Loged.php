<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="pull-right">

	<span class="divider-vertical"></span>
	<?php echo HTML::anchor(Route::get('default')
			->uri(array('controller'=>'user')),
			Arr::get($user, 'username').'<span class="icon-user icon-white"></span>',
			array('class' => 'btn btn-mini btn-inverse', 'rel'=>'user_index')
	);?>
	
	<span class="divider-vertical"></span>

	<?php echo HTML::anchor(Route::get('default')
			->uri(
				array(
					'controller'=>'user', 
					'action'=>'logout',
					'id' => bin2hex(Encrypt::instance()->encode(Auth::instance()->get_user('id')))
				)
			),
			ucfirst(__('logout')).'<span class="icon-off icon-white"></span>',
			array('class' => 'btn btn-mini btn-inverse','rel'=>'logout'));?>
		

</div>