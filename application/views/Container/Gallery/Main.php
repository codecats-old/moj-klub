<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $view_top=(isset($view_top)?$view_top:null);?>
<?php $active = isset($active) ? $active :array();?>

<?php $info_content = isset($info_content) ? $info_content : NULL?>

<div class="row-fluid">

	<section class="span3">
<?php 
	echo View::factory('Component/Menu/User/Visit')
		->set('team', $team)
		->set('active', $active);
?>
	</section>
	
    <section class="span9">             
		<section class="row-fluid">
			<div class="span12"  rel="gallery_form">
<?php if(isset($view_top)):?>
	<?php echo $view_top;?>
<?php endif;?>
			</div>
		</section>

<?php echo $view_component_about;?>
    </section>


</div>
<?php echo View::factory('Component/Window/Modal/Main')
	->set('title', $modal_title)
	->set('component', $info_content);?>