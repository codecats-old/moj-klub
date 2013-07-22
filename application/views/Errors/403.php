<?php defined('SYSPATH') or die('No direct script access.');?>
<h1><?php echo __('You have to re-login');?></h1>
<?php echo HTML::anchor(Route::get('default')->uri(),__('login'));?>
