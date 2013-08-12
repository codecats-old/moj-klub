<?php defined('SYSPATH') or die('No direct script access');?>
<footer>
	<nav class="navbar navbar-inverse">
		<div class="navbar-inner">2013 &COPY; by CodeCats</div>
	</nav>
</footer>

<?php echo HTML::script('assets/script/Js/jquery-2.0.2.min.js');?>
<?php echo HTML::script('assets/vendor/jquery.cookie.js');?>
<?php echo HTML::script('assets/script/Js/bootstrap.min.js');?>

<!-- AJAX -->
<?php echo HTML::script('assets/script/Js/Ajax/Core.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/Node/NodeBasicAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/Node/NodePermissionAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/Node/NodeAction.class.js');?>

<?php echo HTML::script('assets/script/Js/Ajax/Menu/Anchor/Anchor.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/GetForm.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Submit.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Registrate/GetFormRegistrate.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Registrate/SubmitRegistrate.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Change/GetFormChange.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Change/SubmitChange.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Confirm/GetConfirm.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Confirm/DoAction.class.js');?>

<?php echo HTML::script('assets/script/Js/Ajax/Menu/Index.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/User/UserIndex.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Team/TeamIndex.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Gallery/GalleryIndex.js');?>

<?php echo HTML::script('assets/script/Js/Ajax/Controller/Guest.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Login.js');?>

<?php echo HTML::script('assets/script/Js/Ajax/ACL/Control.js');?>
<!-- >AJAX -->

<?php echo HTML::script('assets/script/Js/Components/Initializator/Component.js');?>

<?php echo HTML::script('assets/vendor/toasts/toasts.min.js');?>
<?php echo HTML::script('assets/vendor/gallery/js/gallery.min.js');?>
<script>
	if(typeof(Storage)!=="undefined")
	{
		$('button[data-target=#quick_access]').click(function(){
			localStorage.showQuickMenu=(!$('div#quick_access').hasClass('in'))?'true':'false';
		});
		if(localStorage.showQuickMenu==='false'){
			$('div#quick_access').removeClass('in');
		}

	    $(document).ready(function(){
	        $('#gallery-container').sGallery({
	          fullScreenEnabled: true
	        });
	      });
	}
	else
	{
	// Sorry! No web storage support..
	}
</script>
<?php echo HTML::script('assets/script/Js/main.js');?>