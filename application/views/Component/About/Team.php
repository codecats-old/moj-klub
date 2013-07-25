<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="well row-fluid  span12">
	<ul class="thumbnails">
		<li class="thumbnail span12">
<?php echo View::factory('Component/Info/Team/Details')->set('team', $team);?>
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