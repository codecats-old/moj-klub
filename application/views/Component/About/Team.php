<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $photos_count = isset($photos_count) ? $photos_count : 0;?>
<div class="well row-fluid  span12">
	<ul class="thumbnails">
		<li class="thumbnail span12">
<?php echo View::factory('Component/Info/Team/Details')
	->set('team', $team)
	->set('photos_count', $photos_count);

?>
		</li>
		<li class="thumbnail span12">
<?php echo View::factory('Component/Info/Team/Members')
	->set('players', $players)
	->set('staff', $staff)
	->set('manager', $manager)
	->set('coach', $coach)
	->set('capitan', $capitan);
?>	
		</li>
	</ul>
</div>