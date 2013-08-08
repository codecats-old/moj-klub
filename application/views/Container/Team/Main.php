<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $view_top=(isset($view_top)?$view_top:null);?>
<?php $active = isset($active) ? $active :array();?>
<?php $span_view_top = isset($view_details) ? 'span6' : 'span9';?>
<div class="row-fluid">

	<section class="span3">
<?php 
	echo View::factory('Component/Menu/User/Visit')
		->set('team', $team)
		->set('active', $active);
?>
	</section>
	
    <section class="<?php echo $span_view_top?>">             
<?php if(isset($view_top)):?>
		<section class="row-fluid">
			<div class="span12">
	<?php echo $view_top;?>
			</div>
		</section>
<?php endif;?>
<?php echo $view_component_about;?>
    </section>
    
<?php if (isset($view_details)):?>
    <section class="span3">
	<?php  echo $view_details;?>
    </section>
<?php endif;?>

</div>
<?php echo View::factory('Component/Window/Modal/Main')->set('title', $modal_title);?>