<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-19 09:18:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatars property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-19 09:18:27 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatars')
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(263): Kohana_ORM->__get('avatars')
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(8): Controller_User->get_view_details()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-19 09:19:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatars property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-19 09:19:54 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatars')
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(263): Kohana_ORM->__get('avatars')
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(8): Controller_User->get_view_details()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-19 09:20:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/User.php [ 268 ] in :
2013-07-19 09:20:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 09:20:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: avatar ~ APPPATH/views/Component/Menu/User/Details.php [ 13 ] in /home/t/www/moj-klub/application/views/Component/Menu/User/Details.php:13
2013-07-19 09:20:49 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Menu/User/Details.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 13, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/User/Main.php(14): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(43): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Component/Menu/User/Details.php:13
2013-07-19 09:22:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH/views/Component/Menu/User/Details.php [ 13 ] in /home/t/www/moj-klub/application/views/Component/Menu/User/Details.php:13
2013-07-19 09:22:21 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Menu/User/Details.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 13, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/User/Main.php(14): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(43): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Component/Menu/User/Details.php:13
2013-07-19 09:24:06 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 09:24:06 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 10:20:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_avatar' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-07-19 10:20:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 10:22:42 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user' in 'where clause' [ SELECT `avatar`.`id` AS `id`, `avatar`.`path` AS `path` FROM `avatars` AS `avatar` WHERE `user` = '1' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-19 10:22:42 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `avatar`...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(266): Kohana_ORM->find()
#4 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Array)
#5 /home/t/www/moj-klub/application/classes/Controller/User.php(263): Kohana_ORM::factory('Avatar', Array)
#6 /home/t/www/moj-klub/application/classes/Controller/User.php(8): Controller_User->get_view_details()
#7 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#13 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-19 10:25:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Avatar class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:699
2013-07-19 10:25:25 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('user', Object(Model_User))
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(264): Kohana_ORM->__set('user', Object(Model_User))
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(8): Controller_User->get_view_details()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:699
2013-07-19 10:26:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:265
2013-07-19 10:26:23 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(265): Kohana_ORM->find()
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(8): Controller_User->get_view_details()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:265
2013-07-19 11:25:56 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 11:25:56 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 11:26:32 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 11:26:32 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 11:29:51 --- EMERGENCY: ErrorException [ 1 ]: Method Request::__toString() must not throw an exception ~ SYSPATH/classes/Kohana/HTML.php [ 0 ] in :
2013-07-19 11:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 13:52:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 13:52:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 13:53:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 13:53:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 14:05:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Response::$view_content ~ APPPATH/classes/Controller/User.php [ 28 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:28
2013-07-19 14:05:42 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 28, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:28
2013-07-19 14:18:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 14:18:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 14:19:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 14:19:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 14:19:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 14:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 14:19:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 14:19:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 14:19:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 14:19:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:29:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Image.php [ 77 ] in :
2013-07-19 15:29:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:36:40 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Container/User/Main.php [ 9 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:36:40 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(9): Kohana_Core::error_handler(8, 'Array to string...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:37:06 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 20 ] in :
2013-07-19 15:37:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:37:21 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/views/Container/User/Main.php [ 9 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:37:21 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(9): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:38:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/views/Container/User/Main.php [ 9 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:38:00 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(9): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:38:42 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Container/User/Main.php [ 9 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:38:42 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(9): Kohana_Core::error_handler(8, 'Array to string...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:39:13 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 21 ] in :
2013-07-19 15:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:39:31 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH/views/Container/User/Main.php [ 9 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:39:31 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(9): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(19): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:9
2013-07-19 15:41:51 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 26 ] in :
2013-07-19 15:41:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:42:16 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-07-19 15:42:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:44:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:46:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:46:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:48:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 23 ] in :
2013-07-19 15:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:50:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method stdClass::render() ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 15:50:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:53:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/User.php [ 21 ] in :
2013-07-19 15:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:53:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:53:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:54:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:56:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:56:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:56:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:56:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:57:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 22 ] in :
2013-07-19 15:57:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:58:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 25 ] in :
2013-07-19 15:58:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 15:59:28 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 21 ] in :
2013-07-19 15:59:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:00:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Automatic.php [ 23 ] in :
2013-07-19 16:00:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:00:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 23 ] in :
2013-07-19 16:00:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:02:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 23 ] in :
2013-07-19 16:02:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:02:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:03:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 25 ] in :
2013-07-19 16:03:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:03:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:03:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:03:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:03:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:07:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method stdClass::render() ~ APPPATH/classes/Controller/Automatic.php [ 26 ] in :
2013-07-19 16:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:08:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method stdClass::render() ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:09:18 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/Image.php [ 73 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:09:18 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Request->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:09:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 24 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:24
2013-07-19 16:09:18 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 24, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:24
2013-07-19 16:11:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:12:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:12:56 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/Image.php [ 78 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:12:56 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Request->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:12:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 24 ] in :
2013-07-19 16:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:13:24 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/Image.php [ 78 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:13:24 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Request->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:13:24 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:13:24 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:25 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/Image.php [ 81 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:25 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Request->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:25 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:25 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:55 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/Image.php [ 80 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:55 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Request->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:55 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:14:55 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:16:29 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 24 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:16:29 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:17:40 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 24 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:17:40 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:18:27 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:18:27 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:19:39 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:19:39 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:20:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
            
                     	
                	
                		
                			&#10162;
                		Operacja wykonana poprawnie!
                	
                
                
                    						
zmiana będzie widoczna do 5 min                    
                
			
close        	
		
 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-19 16:20:05 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('<div>?         ...')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('<div>?         ...', NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_View::factory('<div>?         ...')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-19 16:20:29 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:20:29 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:22:03 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:22:03 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:23:31 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:23:31 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:23:49 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:23:49 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:25:05 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:25:05 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:25:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function deserialize() ~ APPPATH/classes/Controller/User.php [ 24 ] in :
2013-07-19 16:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 16:26:34 --- EMERGENCY: Exception [ 0 ]: 444 ~ APPPATH/classes/Controller/User.php [ 25 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:26:34 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-19 16:35:34 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 16:35:34 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:09:02 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:09:02 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:34:43 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant width - assumed 'width' ~ APPPATH/classes/Controller/Image.php [ 17 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:17
2013-07-19 20:34:43 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(17): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 17, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:17
2013-07-19 20:41:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: img ~ APPPATH/classes/Controller/Image.php [ 28 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:28
2013-07-19 20:41:51 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 28, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:28
2013-07-19 20:43:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:43:54 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:54:32 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:54:32 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-19 20:57:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Image.php [ 31 ] in :
2013-07-19 20:57:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 21:00:35 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 128 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:27
2013-07-19 21:00:35 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(27): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:27
2013-07-19 21:02:08 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 128 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:27
2013-07-19 21:02:08 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(27): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:27
2013-07-19 21:03:17 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 127 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-19 21:03:17 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(26): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-19 21:07:39 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 128 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-19 21:07:39 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(26): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-19 21:07:47 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 128 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-19 21:07:47 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(26): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-19 21:08:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 55 ] in :
2013-07-19 21:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-19 21:09:56 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 136 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:34
2013-07-19 21:09:56 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(34): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:34
2013-07-19 21:11:14 --- EMERGENCY: Exception [ 0 ]: 304 ~ APPPATH/classes/Controller/Image.php [ 136 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:34
2013-07-19 21:11:14 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(34): Controller_Image->render_image('/home/t/www/moj...', 300, 200)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:34
2013-07-19 21:33:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view Errors/404 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-19 21:33:46 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Errors/404')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('Errors/404', NULL)
#2 /home/t/www/moj-klub/application/classes/HTTP/Exception/404.php(8): Kohana_View::factory('Errors/404')
#3 /home/t/www/moj-klub/system/classes/Kohana/Request.php(980): HTTP_Exception_404->get_response()
#4 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#5 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-19 21:40:12 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ext - assumed 'ext' ~ APPPATH/classes/Controller/Image.php [ 30 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:30
2013-07-19 21:40:12 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 30, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:30
2013-07-19 22:42:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The team property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-19 22:42:56 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('team')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(10): Kohana_ORM->__get('team')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-19 22:53:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view Info/Team/Ask could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-19 22:53:54 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Info/Team/Ask')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('Info/Team/Ask', NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(18): Kohana_View::factory('Info/Team/Ask')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-19 23:21:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 17 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:17
2013-07-19 23:21:24 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 17, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_visit_team()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:17
2013-07-19 23:22:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 17 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:17
2013-07-19 23:22:37 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 17, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_visit_team()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:17
2013-07-19 23:23:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 18 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:18
2013-07-19 23:23:32 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 18, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_visit_team()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:18
2013-07-19 23:24:14 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:23
2013-07-19 23:24:14 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(23): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 23, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_visit_team()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:23