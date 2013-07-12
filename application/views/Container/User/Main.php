<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $user_form=(isset($user_form)?$user_form:null);?>
            <div class="row-fluid">
	            <section class="span3">
<?php echo View::factory('Component/Menu/User/Visit');?>
				</section>
                <section class="span5">
             		<div rel="user_form">
<?php echo $user_form;?>
					</div>
<?php echo View::factory('Component/About/User');?>
                </section>
                <section class="span4">
<?php echo $view_details;?>
                </section>

            </div>