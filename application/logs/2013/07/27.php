<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-27 23:50:57 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Team.php [ 51 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:51
2013-07-27 23:50:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(51): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 51, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:51
2013-07-27 23:59:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/Team.php [ 52 ] in :
2013-07-27 23:59:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :