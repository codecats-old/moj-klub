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
<!-- Core -->
<?php echo HTML::script('assets/script/Js/Ajax/Core.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/Node/NodeBasicAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/Node/NodePermissionAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/Node/NodeAction.class.js');?>

<!-- Components ajax -->
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Anchor/Anchor.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/GetForm.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Submit.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Registrate/GetFormRegistrate.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Registrate/SubmitRegistrate.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Change/GetFormChange.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Form/Change/SubmitChange.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Confirm/GetConfirm.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Confirm/DoAction.class.js');?>

<!-- Pages -->
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Index.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/User/UserIndex.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Team/TeamIndex.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Gallery/GalleryIndex.js');?>

<!-- Controllers Roles -->
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Guest.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Login.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Admin.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Player.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Staff.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Accountant.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Manager.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Coach.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Controller/Capitan.js');?>

<!-- Roles -->
	<!-- Manager -->
<?php echo HTML::script('assets/script/Js/Ajax/Roles/Manager/Gallery.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Roles/Manager/Team.js');?>
	<!-- Capitan -->
<?php echo HTML::script('assets/script/Js/Ajax/Roles/Capitan/Team.js');?>
	<!-- Coach -->
<?php echo HTML::script('assets/script/Js/Ajax/Roles/Coach/Team.js');?>
	<!-- Player -->
<?php echo HTML::script('assets/script/Js/Ajax/Roles/Player/Team.js');?>
<!-- >Roles -->

<!-- Control list, Control factory -->
<?php echo HTML::script('assets/script/Js/Ajax/ACL/Control.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/ACL/Factory.js');?>
<!-- >AJAX -->

<!--  COMPONENTS -->
<!-- Component initializator -->
<?php echo HTML::script('assets/script/Js/Components/Initializator/Component.js');?>

<!-- Components -->
	<!-- Save data -->
<?php echo HTML::script('assets/script/Js/Components/Data/Data.js');?>	
	<!-- >Save -->
	<!-- Notificator -->
<?php echo HTML::script('assets/script/Js/Components/Notificator/Notificator.js');?>
		<!-- Panel -->
		<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Panel.js');?>
			<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Get.js');?>
			<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Continue.js');?>
				<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/Switch.js');?>
				<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/Team.js');?>
				<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/User.js');?>
				<?php echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/Button.js');?>
		<!-- >Panel -->
	<!-- >Notificator -->
<!-- >COMPONENTS -->


<!-- Vendor libs -->
<?php echo HTML::script('assets/vendor/toasts/toasts.min.js');?>
<?php echo HTML::script('assets/vendor/gallery/js/gallery.min.js');?>

<!-- testing -->
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
<!-- main -->
<?php echo HTML::script('assets/script/Js/main.js');?>