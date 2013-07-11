<?php defined('SYSPATH') or die('No direct script access.');?>
	<div class="row-fluid">
		<section class="span9">
<?php echo View::factory('Component/Carousel');?>
		</section>
		<section class="span3">
<?php echo View::factory('Component/Access/Quick');?>
		</section>
	</div>
	<section class="row-fluid">
<?php echo View::factory('Component/Thumbnails/Team');?>
	</section>

<?php echo View::factory('Component/Window/Modal/Main');?>