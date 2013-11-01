<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $error=(isset($error)?$error:null);?>
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo ucfirst(__('login'));?></h3>
    </div>
<?php echo View::factory('Component/Form/Login')
				->set('style', array('class'=>'modal-body'))
				->set('error', $error)
				->set('info', array('show_email'=>TRUE, 'show_phone'=>TRUE));?>
</div>