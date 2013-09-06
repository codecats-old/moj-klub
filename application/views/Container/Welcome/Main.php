<?php defined('SYSPATH') or die('No direct script access.');?>
	<div class="row-fluid">
		<section class="span8">
<?php echo $component_carousel;?>
		</section>
		<section class="span4">
<?php echo View::factory('Component/Access/Quick');?>
		</section>
	</div>
	<section class="row-fluid">
<?php echo $component_thumbnails_team;?>
	</section>

<?php echo View::factory('Component/Window/Modal/Main')->set('title', 'access window');?>