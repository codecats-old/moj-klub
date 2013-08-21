<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $view_top=(isset($view_top)?$view_top:null);?>
<?php // $active = isset($active) ? $active :array();?>
<?php $info_content = isset($info_content) ? $info_content : NULL;?>
<?php $team = isset($team) ? $team : NULL;?>
<?php $popularity = isset($popularity) ? $popularity : NULL;?>
<?php $join_team = isset($join_team) ? $join_team : NULL;?>
<?php $join_sent = isset($join_sent) ? $join_sent : FALSE;?>

<div class="row-fluid">

	<section class="span3">
<?php 
	echo View::factory('Component/Menu/User/Visit')
		->set('team', $team)
		->set('menu', $visit_menu);
?>
	</section>
	
    <section class="span6">             

		<section class="row-fluid">
			<div class="span12">
	<?php echo $view_top;?>
			</div>
		</section>
<?php if ($view_component_about !== NULL):?>
	<?php echo $view_component_about
		->set('popularity', $popularity)
		->set('join_team',	$join_team)
		->set('join_sent', 	$join_sent);
	?>
<?php endif;?>
    </section>
    
<?php if (isset($view_details)):?>
    <section class="span3">
	<?php  echo $view_details;?>
    </section>
<?php endif;?>

</div>
<?php echo View::factory('Component/Window/Modal/Main')
	->set('title', $modal_title)
	->set('component', $info_content);?>