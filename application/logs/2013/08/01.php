<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-01 09:20:07 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:20:07 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:30 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:58 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:58 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:56:07 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/message/classes/Kohana/Message.php [ 47 ] in :
2013-08-01 09:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 09:59:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Message::set_debug() ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-08-01 09:59:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 09:59:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/message/classes/Kohana/Message.php [ 54 ] in :
2013-08-01 09:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 10:00:51 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Message::update_config() should not be called statically ~ MODPATH/message/classes/Kohana/Message.php [ 54 ] in /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php:54
2013-08-01 10:00:51 --- DEBUG: #0 /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php(54): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/t/www/moj...', 54, Array)
#1 /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php(54): Kohana_Message::update_config()
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(28): Kohana_Message::instance()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php:54
2013-08-01 10:53:28 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 60 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:60
2013-08-01 10:53:28 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(60): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 60, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:60