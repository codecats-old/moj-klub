<?php defined('SYSPATH') or die('No direct script access.');?>
	<div class="row-fluid">
		<div class="span9">
<?php echo View::factory('Component/Carousel');?>
		</div>
		<div class="span3">
<?php echo View::factory('Component/Access/Quick');?>
		</div>
	</div>
	<div class="row-fluid">
<?php echo View::factory('Component/Thumbnails/Team');?>
	</div>

<?php echo View::factory('Component/Window/Modal/Registrate');?>