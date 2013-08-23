<?php defined('SYSPATH') OR die('No direct script access.');?>
<header>	
<?php echo View::factory('Header/Menu/Top')
	->set('header_menu_access', $header_menu_access)
	->set('component_request_menu', $component_request_menu)
	->set('header_management_icon', $header_management_icon);

?>
</header>