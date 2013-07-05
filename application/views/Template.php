<?php defined('SYSPATH') or die('No direct script access.');?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="trening, klub, drużyna, zawodnicy">
       	<?php echo HTML::style('assets/style/Css/bootstrap.min.css');?>
       	<?php echo HTML::style('assets/style/Css/bootstrap.fix.css');?>
        <meta name="viewport" content="initial-scale=1.0 , minimum-scale=1 , maximum-scale=1" />
        <title><?php echo $page_title;?></title>
        
    </head>
    <body>
<?php echo View::factory('Header/Header');?>

<?php echo $view_container;?>

<?php echo View::factory('Footer/Footer');?>
	</body>
</html>