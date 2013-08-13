<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-12 09:38:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Manager/Gallery.php [ 95 ] in :
2013-08-12 09:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-12 13:59:39 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/Template.php [ 8 ] in /home/t/www/moj-klub/application/views/Template.php:8
2013-08-12 13:59:39 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 8, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(112): Kohana_Controller_Template->after()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/application/views/Template.php:8
2013-08-12 15:06:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 84 ] in :
2013-08-12 15:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-12 16:41:14 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 16:41:14 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 16:41:21 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 16:41:21 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 20:14:17 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 20:14:17 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 20:16:59 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 20:16:59 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-12 20:38:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Manager/Gallery.php [ 145 ] in /home/t/www/moj-klub/application/classes/Manager/Gallery.php:145
2013-08-12 20:38:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 145, Array)
#1 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(127): Manager_Gallery->set_view_details(NULL)
#2 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(123): Manager_Gallery->set_gallery_result('19')
#3 /home/t/www/moj-klub/application/classes/Controller/Gallery.php(28): Manager_Gallery->gallery('4b6b4e2f6d724f5...')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Gallery->action_team()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Manager/Gallery.php:145
2013-08-12 20:52:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Team as array ~ APPPATH/views/Component/Gallery.php [ 3 ] in :
2013-08-12 20:52:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-12 20:55:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/Container/Gallery/Main.php [ 12 ] in /home/t/www/moj-klub/application/views/Container/Gallery/Main.php:12
2013-08-12 20:55:31 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/Gallery/Main.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(21): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(112): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/Gallery/Main.php:12
2013-08-12 21:00:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/Component/Form/Change/Photo.php [ 26 ] in :
2013-08-12 21:00:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-12 21:13:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Menu/Team.php [ 73 ] in /home/t/www/moj-klub/application/classes/Menu/Team.php:73
2013-08-12 21:13:45 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Menu/Team.php(73): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 73, Array)
#1 /home/t/www/moj-klub/modules/menu/classes/Kohana/Menu.php(32): Menu_Team->prepare_permissions(NULL)
#2 /home/t/www/moj-klub/modules/menu/classes/Kohana/Menu.php(22): Kohana_Menu->__construct(NULL)
#3 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(145): Kohana_Menu::factory('Team', NULL)
#4 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(130): Manager_Gallery->set_view_details(NULL)
#5 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(125): Manager_Gallery->set_gallery_result('???m??_&')
#6 /home/t/www/moj-klub/application/classes/Controller/Gallery.php(35): Manager_Gallery->gallery('514c41707250775...')
#7 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Gallery->action_team()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#13 {main} in /home/t/www/moj-klub/application/classes/Menu/Team.php:73
2013-08-12 21:13:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Menu/Team.php [ 73 ] in /home/t/www/moj-klub/application/classes/Menu/Team.php:73
2013-08-12 21:13:55 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Menu/Team.php(73): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 73, Array)
#1 /home/t/www/moj-klub/modules/menu/classes/Kohana/Menu.php(32): Menu_Team->prepare_permissions(NULL)
#2 /home/t/www/moj-klub/modules/menu/classes/Kohana/Menu.php(22): Kohana_Menu->__construct(NULL)
#3 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(145): Kohana_Menu::factory('Team', NULL)
#4 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(130): Manager_Gallery->set_view_details(NULL)
#5 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(125): Manager_Gallery->set_gallery_result('???m??_&')
#6 /home/t/www/moj-klub/application/classes/Controller/Gallery.php(35): Manager_Gallery->gallery('514c41707250775...')
#7 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Gallery->action_team()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#13 {main} in /home/t/www/moj-klub/application/classes/Menu/Team.php:73