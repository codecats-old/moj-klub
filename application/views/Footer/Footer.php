<?php defined('SYSPATH') or die('No direct script access');?>
<footer>
	<nav class="navbar navbar-inverse">
		<div class="navbar-inner">2013 &COPY; by CodeCats</div>
	</nav>
</footer>
<?php echo View::factory('Component/Window/Modal/Registrate');?>
<?php echo HTML::script('assets/script/Js/jquery-2.0.2.min.js');?>
<?php echo HTML::script('assets/script/Js/bootstrap.min.js');?>

<!-- AJAX -->
<?php echo HTML::script('assets/script/Js/Ajax/Core.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/NodeBasicAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/NodeAction.new.class.js');?>
<?php //echo HTML::script('assets/script/Js/Ajax/Class/NodeAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/GetAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/PostAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/ViewGetAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/ViewPostAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/JSONGetAction.class.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Class/JSONPostAction.class.js');?>

<?php echo HTML::script('assets/script/Js/Ajax/Controller/Content.js');?>
<?php echo HTML::script('assets/script/Js/Ajax/Menu/Access.js');?>
<!-- >AJAX -->
<script>
</script>
<?php echo HTML::script('assets/script/Js/main.js');?>