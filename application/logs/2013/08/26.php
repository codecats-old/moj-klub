<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-26 09:10:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/Notificator.php [ 58 ] in /home/t/www/moj-klub/application/classes/Notificator.php:58
2013-08-26 09:10:14 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Notificator.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 58, Array)
#1 /home/t/www/moj-klub/application/classes/Manager/Header.php(38): Notificator::stop_blink()
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Manager_Header->index(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Notificator.php:58
2013-08-26 09:30:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function is_user_unread_messages() on a non-object ~ APPPATH/classes/Manager/Header.php [ 42 ] in :
2013-08-26 09:30:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :