<?php defined('SYSPATH') or die('No direct script access.');?>
<ul class="thumbnails">

<?php foreach ($teams as $team):?>
	<?php 
		echo View::factory('Component/Thumbnails/Thumbnail/Team')
			->set('id', 	$team->id)
			->set('team', 	$team->as_array());
	?>
<?php endforeach;?>

<?php //empty thumbnails ?>
<?php if (empty($teams)):?>
	<?php for ($i =0; $i < 3; $i++):?>
		<?php echo View::factory('Component/Thumbnails/Thumbnail/Team')->set('id', $i);?>
	<?php endfor;?>
<?php endif;?>
</ul>
