<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $user_form = (isset($user_form) ? $user_form : null);?>
<?php $team = (isset($team) ? $team :NULL);?>
            <div class="row-fluid">
<!-- LEFT MENU -->
	            <section class="span3">
<?php echo View::factory('Component/Menu/User/Visit')
	->set('menu', $menu_visit)
	->set('team', $team);?>
				</section>
<!-- >LEFT MENU -->
                <section class="span5">
<!-- FORM -->	
             	 	<div class="span12" rel="user_form">
<?php echo $user_form;?>
					</div>
<!-- >FORM -->
<!-- ABOUT USER -->
<?php echo $view_component_about_user;?>
<!-- >ABOUT USER -->

<!-- TRAININGS -->
					<div class="well span12">
<?php if ( isset($trainings) AND $trainings->count() > 0) :?>
						<h4>User's Trainings:</h4>
<?php else: ?>
						<h6>Statistics unavalaible.</h6>
<?php endif;?>
						<div rel="user_trainings">
<?php 
	foreach ($trainings as $training):
		$view = View::factory('Show/Training');
		$view->training = $training;
		echo $view;
	endforeach;
?>
						</div>
					</div>	
<!-- >TRAININGS -->
                </section>
<!-- ABOUT USER -->
                <section class="span4">
<?php echo $view_details;?>
                </section>
<!-- >ABOUT USER -->
            </div>