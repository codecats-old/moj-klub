<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-30 14:10:19 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/t/www/moj-klub/system/classes/Kohana/Cookie.php:67
2013-06-30 14:10:19 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /home/t/www/moj-klub/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/t/www/moj-klub/system/classes/Kohana/Cookie.php:67
2013-06-30 14:18:15 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/t/www/moj-klub/system/classes/Kohana/Cookie.php:67
2013-06-30 14:18:15 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /home/t/www/moj-klub/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/t/www/moj-klub/system/classes/Kohana/Cookie.php:67