<?php defined('SYSPATH') or die('No direct script access.');?>
            <div class="row-fluid">
	            <section class="span3">
<?php echo View::factory('Component/Menu/User/Visit');?>
				</section>
                <section class="span5">
<?php echo View::factory('Component/About/User');?>
                </section>
                <section class="span4">
<?php echo $view_details;?>
                </section>

            </div>