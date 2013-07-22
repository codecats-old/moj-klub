<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $ask_view=(isset($ask_view)?$ask_view:null);?>
<?php if(isset($ask_view)):?>
<section class="row-fluid">
	<div class="span12">
	<?php echo $ask_view;?>
	</div>
</section>
<?php endif;?>
<?php echo View::factory('Component/Window/Modal/Main')->set('title', 'registry club');?>