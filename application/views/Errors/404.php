<?php defined('SYSPATH') or die('No direct script access.');?>


<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $user=(isset($user)?$user:array());?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="trening, klub, drużyna, zawodnicy">
        <meta name="keywords" content="my club, sport, team, training">
		<meta name="author" content="ssstrz">
        <link 
        	href="<?php echo Kohana::$base_url;?>assets/img/favicon.ico" 
        	rel="icon" type="image/x-icon" />
       	<?php // echo HTML::style('assets/style/Css/bootstrap.min.css');?>
       	<?php // echo HTML::style('assets/style/Css/font-awesome.min.css');?>
       	<?php echo HTML::style('assets/style/Css/my.min.css');?>
       	<?php echo HTML::style('assets/style/Css/bootstrap.fix.css');?>
       	<?php echo HTML::style('assets/style/Css/ajax.css');?>
       	<?php echo HTML::style('assets/style/Css/notification.css');?>
       	<?php echo HTML::style('assets/vendor/toasts/toasts.min.css');?>
       	<?php echo HTML::style('assets/vendor/switchButton/jquery.switchButton.css');?>
       	<?php echo HTML::style('assets/vendor/runner/runner.css');?>
       	
       	<?php echo HTML::style('assets/style/less/bootstrap.fix.less', array('rel' => 'stylesheet/less'));?>
     	<?php echo HTML::script('assets/style/less/less-1.4.1.min.js');?>

<?php //Add style gallery when user is on gallery
		if ( !
			strcasecmp(
				Request::$current->controller(), 
				Route::get('default')->uri(array('controller' => 'gallery'))
			)
		):
?>
	<!-- Gallery styles -->
       	<?php echo HTML::style('assets/vendor/gallery/css/styles.css');?>
<?php endif;?>

        <meta name="viewport" content="initial-scale=1.0 , minimum-scale=1 , maximum-scale=1" />
        <title>:O</title>
        
    </head>
    <body>
	
<?php echo View::factory('Header/Header')
	->set('header_menu_access', NULL)
	->set('component_request_menu', NULL)
	->set('header_management_icon', NULL);
?>

<div class="container-fluid">
	<section class="well">
	    <h1>404 Error</h1>
	</section>
</div>
<?php echo View::factory('Footer/Footer');?>
	</body>
</html>