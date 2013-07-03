<?php defined('SYSPATH') or die('No direct script access.');?>

<div id="registryModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Szybka rejestracja</h3>
    </div>
<?php echo View::factory('Component/Form/Registrate')->set('style', array('class'=>'modal-body'));?>
</div>