<?php defined('SYSPATH') or die('No direct script access.');?>
<ul class="thumbnails">

<?php 
foreach ($teams as $team):
		echo View::factory('Component/Thumbnails/Thumbnail/Team')
			->set('id', 	$team->id)
			->set('team', 	$team->as_array());
	
endforeach;
?>
<?php 
//empty thumbnails
if (empty($teams)):
	for ($i = 0; $i < 3; $i++):
		echo View::factory('Component/Thumbnails/Thumbnail/Team')
			->set('id', $i)
			->set('team', array('id' => $i));
	endfor;
endif;
?>
</ul>
