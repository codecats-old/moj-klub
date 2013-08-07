<?php defined('SYSPATH') OR die('No direct script access');?>

<div class="row-fluid">
	<div class="span12">
<?php echo View::factory('Component/Form/Address')
	->set('address', $team)
	->set('error', $error)->render();
?>
	</div>
</div>
