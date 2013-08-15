<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $user_form = (isset($user_form) ? $user_form : null);?>
<?php $team = (isset($team) ? $team :NULL);?>
            <div class="row-fluid">
	            <section class="span3">
<?php echo View::factory('Component/Menu/User/Visit')
	->set('menu', $menu_visit)
	->set('team', $team);?>
				</section>
                <section class="span5">
             		<div rel="user_form">
<?php echo $user_form;?>
					</div>
<?php echo $view_component_about_user;?>
                </section>
                <section class="span4">
<?php echo $view_details;?>
                </section>

            </div>