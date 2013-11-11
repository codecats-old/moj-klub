<?php defined('SYSPATH') or die('No direct script access');?>
<footer>
	<nav class="navbar navbar-inverse">
		<div class="navbar-inner">
<?php 
	echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'lang',
				'action' 		=> 'en'
			)
		),
		'english',
		array('class' => 'btn btn-large btn-link')
	);
?>	
<?php 
	echo HTML::anchor(Route::get('default')->uri(
			array(
				'controller' 	=> 'lang',
				'action' 		=> 'pl'
			)
		),
		'polski',
		array('class' => 'btn btn-large btn-link')
	);
?>	
		</div>
		<div class="navbar-inner">
		<p class="pull-right">2013 &COPY; by CodeCats</p>
		</div>
	</nav>
</footer>
<?php 
//echo HTML::script('assets/script/Js/Min/min.js');


// LIBS -->
 echo HTML::script('assets/script/Js/jquery-2.0.2.min.js');
 echo HTML::script('assets/vendor/jquery.cookie.js');
 echo HTML::script('assets/script/Js/bootstrap.min.js');
 echo HTML::script('assets/script/Js/jquery-ui-1.10.3.custom.min.js');
// >LIBS -->

// AJAX -->
 echo HTML::script('assets/script/Js/Ajax/min.js');
 /*
// Core -->
 echo HTML::script('assets/script/Js/Ajax/Core.js');
 echo HTML::script('assets/script/Js/Ajax/Class/Node/NodeBasicAction.class.js');
 echo HTML::script('assets/script/Js/Ajax/Class/Node/NodePermissionAction.class.js');
 echo HTML::script('assets/script/Js/Ajax/Class/Node/NodeAction.class.js');

// Components ajax -->
 echo HTML::script('assets/script/Js/Ajax/Menu/Anchor/Anchor.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Form/GetForm.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Form/Submit.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Form/Registrate/GetFormRegistrate.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Form/Registrate/SubmitRegistrate.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Form/Change/GetFormChange.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Form/Change/SubmitChange.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Confirm/GetConfirm.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Confirm/DoAction.class.js');

// Pages -->
 echo HTML::script('assets/script/Js/Ajax/Menu/Index.class.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/User/UserIndex.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Team/TeamIndex.js');
 echo HTML::script('assets/script/Js/Ajax/Menu/Gallery/GalleryIndex.js');

// Controllers Roles -->
 echo HTML::script('assets/script/Js/Ajax/Controller/Guest.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Login.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Admin.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Player.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Staff.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Accountant.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Manager.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Coach.js');
 echo HTML::script('assets/script/Js/Ajax/Controller/Capitan.js');

// Roles -->
	// Manager -->
 echo HTML::script('assets/script/Js/Ajax/Roles/Manager/Gallery.js');
 echo HTML::script('assets/script/Js/Ajax/Roles/Manager/Team.js');
	// Capitan -->
 echo HTML::script('assets/script/Js/Ajax/Roles/Capitan/Team.js');
	// Coach -->
 echo HTML::script('assets/script/Js/Ajax/Roles/Coach/Team.js');
	// Player -->
 echo HTML::script('assets/script/Js/Ajax/Roles/Player/Team.js');
// >Roles -->

// Control list, Control factory -->
 echo HTML::script('assets/script/Js/Ajax/ACL/Control.js');
 echo HTML::script('assets/script/Js/Ajax/ACL/Factory.js');
// >AJAX -->
*/
 
 
//  COMPONENTS -->
 echo HTML::script('assets/script/Js/Components/min.js');
 /*
// Component initializator -->
 echo HTML::script('assets/script/Js/Components/Initializator/Component.js');

// Components -->
	// Save data -->
 echo HTML::script('assets/script/Js/Components/Data/Data.js');	
	// >Save -->
	// Document HTTP Helper -->
 echo HTML::script('assets/script/Js/Components/Http/Http.js');	
	// >Document -->
	// Notificator -->
 echo HTML::script('assets/script/Js/Components/Notificator/Notificator.js');
		// Panel -->
		 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Panel.js');
			 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Get.js');
			 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Continue.js');
				 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/Switch.js');
				 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/Team.js');
				 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/User.js');
				 echo HTML::script('assets/script/Js/Components/Notificator/Panel/Ajax/Menu/Button.js');
		// >Panel -->
	// >Notificator -->
	// QuickAccess -->
 echo HTML::script('assets/script/Js/Components/QuickAccess/QuickAccess.js');
	// >QuickAccess -->
	// Runner -->
 echo HTML::script('assets/script/Js/Components/Runner/Runner.js');
	// >Runner -->
	 
// >COMPONENTS -->
*/

// Vendor libs -->
 echo HTML::script('assets/vendor/toasts/toasts.min.js');
 echo HTML::script('assets/vendor/gallery/js/gallery.min.js');
 echo HTML::script('assets/vendor/switchButton/jquery.switchButton.js');
 echo HTML::script('assets/vendor/runner/jquery.runner.js');

// main -->
 echo HTML::script('assets/script/Js/main.js');
 ?>