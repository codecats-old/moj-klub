<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $view_top=(isset($view_top)?$view_top:null);?>
            <div class="row-fluid">
	            <section class="span3">
<?php echo View::factory('Component/Menu/User/Visit');?>
				</section>
                <section class="span6">             
<?php if(isset($view_top)):?>
<section class="row-fluid">
	<div class="span12">
	<?php echo $view_top;?>
	</div>
</section>
<?php endif;?>
<?php echo $view_component_about;?>
                </section>
                <section class="span3">
<?php echo $view_details;?>
                </section>

            </div>
<?php echo View::factory('Component/Window/Modal/Main')->set('title', $modal_title);?>