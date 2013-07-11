<?php defined('SYSPATH') or die('No direct script access.');?>
                    <div class="pull-right">
<span class="divider-vertical"></span>
<?php echo HTML::anchor(Route::get('default')
		->uri(array('controller'=>'user')),Arr::get($user, 'username'),
		array('rel'=>'user_index'));?>
<span class="divider-vertical"></span>
<?php echo HTML::anchor(Route::get('default')
		->uri(array('controller'=>'user', 'action'=>'logout')),ucfirst(__('logout')),
		array('rel'=>'logout'));?>
<span class="divider-vertical"></span>
                    </div>