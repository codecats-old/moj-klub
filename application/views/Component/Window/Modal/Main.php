<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $error=(isset($error)?$error:null);?>
<?php $title=(isset($title)?$title:null);?>
<?php $component=(isset($component)?$component:null);?>
<button type="button" data-toggle="modal" data-target="#AccessModal">Launch modal</button>
<div id="AccessModal" class="modal hide fade" tabindex="-1" 
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="myModalLabel"><?php echo __($title);?></h3>
    </div>

    <div id="ContentModal">
    
<?php echo $component;?>
	</div>
</div>