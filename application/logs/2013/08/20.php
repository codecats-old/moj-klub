<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-20 09:51:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-20 09:51:28 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-20 09:59:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: var ~ MODPATH/coder/classes/Kohana/Coder.php [ 55 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:55
2013-08-20 09:59:13 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 55, Array)
#1 /home/t/www/moj-klub/application/views/Component/About/Team.php(23): Kohana_Coder->convert_int('19')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/t/www/moj-klub/application/views/Container/Team/Main.php(29): Kohana_View->__toString()
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#12 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#13 /home/t/www/moj-klub/application/views/Template.php(39): Kohana_View->__toString()
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#15 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#16 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#17 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Controller_Template->after()
#18 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#19 [internal function]: Kohana_Controller->execute()
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#22 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#23 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#24 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:55
2013-08-20 11:01:19 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-20 11:01:19 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-20 14:55:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The team property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:699
2013-08-20 14:55:34 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('team', Object(Model_Team))
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(32): Kohana_ORM->__set('team', Object(Model_Team))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:699
2013-08-20 15:09:43 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '18-19' for key 'PRIMARY' [ INSERT INTO `requests` (`team_id`, `user_id`) VALUES ('19', '18') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-20 15:09:43 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(34): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-20 16:32:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Administration' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-20 16:32:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 16:52:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Manager/Team.php [ 72 ] in /home/t/www/moj-klub/application/classes/Manager/Team.php:72
2013-08-20 16:52:23 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Team.php(72): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 72, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(54): Manager_Team->show()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Manager/Team.php:72
2013-08-20 16:54:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/classes/Manager/Team.php [ 74 ] in :
2013-08-20 16:54:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 18:39:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::form() ~ APPPATH/classes/Controller/Team.php [ 42 ] in :
2013-08-20 18:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 18:40:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Team.php [ 44 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:44
2013-08-20 18:40:24 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 44, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:44
2013-08-20 20:17:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:17:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:17:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:17:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:18:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:18:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:18:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:18:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:21:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:21:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:22:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in :
2013-08-20 20:22:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:23:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:23:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:23:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:23:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 107 ] in :
2013-08-20 20:23:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 20:24:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view temp could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-08-20 20:24:12 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('temp')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('temp', NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(44): Kohana_View::factory('temp')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_show()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-08-20 20:24:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/Show/User/About.php [ 8 ] in /home/t/www/moj-klub/application/views/Show/User/About.php:8
2013-08-20 20:24:48 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Show/User/About.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 8, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Controller_Template->after()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/application/views/Show/User/About.php:8
2013-08-20 20:25:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/Show/User/About.php [ 8 ] in /home/t/www/moj-klub/application/views/Show/User/About.php:8
2013-08-20 20:25:01 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Show/User/About.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 8, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Controller_Template->after()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/application/views/Show/User/About.php:8
2013-08-20 21:11:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Administration.php [ 56 ] in /home/t/www/moj-klub/application/classes/Controller/Administration.php:56
2013-08-20 21:11:06 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Administration.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 56, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Administration.php:56
2013-08-20 21:11:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Valication_General' not found ~ APPPATH/classes/Validation/Request.php [ 3 ] in :
2013-08-20 21:11:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-20 21:26:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete request model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1431 ] in /home/t/www/moj-klub/application/classes/Controller/Administration.php:74
2013-08-20 21:26:22 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Administration.php(74): Kohana_ORM->delete()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Administration.php:74
2013-08-20 21:30:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Request ~ MODPATH/orm/classes/Kohana/ORM.php [ 1599 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1599
2013-08-20 21:30:07 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1599): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 1599, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(74): Kohana_ORM->remove('Request')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1599
2013-08-20 21:30:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: request ~ MODPATH/orm/classes/Kohana/ORM.php [ 1599 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1599
2013-08-20 21:30:16 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1599): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 1599, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(74): Kohana_ORM->remove('request')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1599
2013-08-20 21:30:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::remove(), called in /home/t/www/moj-klub/application/classes/Controller/Administration.php on line 74 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1595 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1595
2013-08-20 21:30:23 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1595): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 1595, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(74): Kohana_ORM->remove()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1595
2013-08-20 22:04:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Administration.php:69
2013-08-20 22:04:41 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Administration.php(69): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Administration.php:69
2013-08-20 22:21:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Administration.php:70
2013-08-20 22:21:35 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Administration.php(70): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Administration.php:70