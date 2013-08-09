<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-09 00:14:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/Validation/Image.php [ 55 ] in :
2013-08-09 00:14:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 00:14:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Photo::is_loaded() ~ APPPATH/classes/Validation/Image.php [ 56 ] in :
2013-08-09 00:14:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 00:15:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/Validation/Image.php [ 56 ] in :
2013-08-09 00:15:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 00:16:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH/classes/Validation/Image.php [ 55 ] in /home/t/www/moj-klub/application/classes/Validation/Image.php:55
2013-08-09 00:16:13 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Validation/Image.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 55, Array)
#1 [internal function]: Validation_Image::is_exists(':Validation', '??.?????', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(67): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Validation/Image.php:55
2013-08-09 00:16:23 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'photos' ~ APPPATH/classes/Validation/Image.php [ 56 ] in /home/t/www/moj-klub/application/classes/Validation/Image.php:56
2013-08-09 00:16:23 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Validation/Image.php(56): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 56, Array)
#1 [internal function]: Validation_Image::is_exists(':Validation', '??.?????', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(67): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Validation/Image.php:56
2013-08-09 00:18:53 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Validation_Image::is_exists() ~ APPPATH/classes/Validation/Image.php [ 53 ] in /home/t/www/moj-klub/application/classes/Validation/Image.php:53
2013-08-09 00:18:53 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Validation/Image.php(53): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 53, Array)
#1 [internal function]: Validation_Image::is_exists('??.?????', Object(Model_Photo))
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(67): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Validation/Image.php:53
2013-08-09 00:19:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Photo::is_loaded() ~ APPPATH/classes/Validation/Image.php [ 58 ] in :
2013-08-09 00:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 00:20:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:20:20 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(69): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('7a4973385665394...')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:20:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:20:28 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(69): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('7a4973385665394...')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:20:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:20:41 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(69): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:22:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 00:22:39 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(69): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-09 09:21:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 09:21:50 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 09:46:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Photo class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-09 09:46:50 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('find_all')
#1 /home/t/www/moj-klub/application/classes/Manager/Team.php(107): Kohana_ORM->__get('find_all')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(69): Manager_Team->gallery('19')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-09 09:47:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'uploaded DESC' in 'order clause' [ SELECT `photo`.`id` AS `id`, `photo`.`address` AS `address`, `photo`.`team_id` AS `team_id`, `photo`.`uploaded` AS `uploaded` FROM `photos` AS `photo` WHERE `team_id` = 19 ORDER BY `uploaded DESC` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-09 09:47:30 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `photo`....', 'Model_Photo', Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/t/www/moj-klub/application/classes/Manager/Team.php(107): Kohana_ORM->find_all()
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(69): Manager_Team->gallery('19')
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-09 09:48:31 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ APPPATH/classes/Controller/Team.php [ 62 ] in :
2013-08-09 09:48:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 62, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): hex2bin('1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-08-09 09:51:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Manager/Team.php [ 107 ] in :
2013-08-09 09:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 09:51:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/Manager/Team.php [ 107 ] in :
2013-08-09 09:51:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 09:51:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/Component/Gallery.php [ 24 ] in /home/t/www/moj-klub/application/views/Component/Gallery.php:24
2013-08-09 09:51:45 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Gallery.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 24, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Team/Main.php(23): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(112): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Component/Gallery.php:24
2013-08-09 09:52:58 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ APPPATH/classes/Controller/Team.php [ 62 ] in :
2013-08-09 09:52:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 62, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): hex2bin('1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-08-09 10:10:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Coder' not found ~ APPPATH/classes/Controller/Team.php [ 63 ] in :
2013-08-09 10:10:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 10:11:58 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Kohana_Interface_Coder' not found ~ MODPATH/coder/classes/Kohana/Coder.php [ 3 ] in :
2013-08-09 10:11:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 10:12:18 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ MODPATH/coder/classes/Kohana/Coder.php [ 14 ] in :
2013-08-09 10:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 10:14:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''Kohana_'' (T_CONSTANT_ENCAPSED_STRING) ~ MODPATH/coder/classes/Kohana/Coder.php [ 14 ] in :
2013-08-09 10:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 10:14:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/coder/classes/Kohana/Coder.php [ 14 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:14:59 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(63): Kohana_Coder::instance()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:16:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/coder/classes/Kohana/Coder.php [ 14 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:16:37 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(63): Kohana_Coder::instance()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:16:50 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH/coder/classes/Kohana/Coder.php [ 14 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:16:50 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(63): Kohana_Coder::instance()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:17:53 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH/coder/classes/Kohana/Coder.php [ 14 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:17:53 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(63): Kohana_Coder::instance()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:14
2013-08-09 10:18:38 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 26 ] in :
2013-08-09 10:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 26, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(26): hex2bin('1')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(63): Kohana_Coder->from_url('1')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 10:25:18 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 29 ] in :
2013-08-09 10:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(29): hex2bin('1')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('1')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 10:28:31 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Coder::instance(), called in /home/t/www/moj-klub/application/classes/Controller/Team.php on line 62 and defined ~ MODPATH/coder/classes/Kohana/Coder.php [ 10 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:10
2013-08-09 10:28:31 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(10): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 10, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder::instance()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:10
2013-08-09 10:28:39 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 29 ] in :
2013-08-09 10:28:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(29): hex2bin('1')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('1')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 10:39:21 --- EMERGENCY: ErrorException [ 2 ]: mcrypt_get_key_size(): Module initialization failed ~ SYSPATH/classes/Kohana/Encrypt.php [ 101 ] in :
2013-08-09 10:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mcrypt_get_key_...', '/home/t/www/moj...', 101, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Encrypt.php(101): mcrypt_get_key_size('tripledes', '0')
#2 /home/t/www/moj-klub/system/classes/Kohana/Encrypt.php(85): Kohana_Encrypt->__construct('92e60cc71d37546...', 0, 'tripledes')
#3 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(22): Kohana_Encrypt::instance('url')
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder->to_url('1')
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-08-09 10:42:18 --- EMERGENCY: ErrorException [ 2 ]: mcrypt_get_key_size(): Module initialization failed ~ SYSPATH/classes/Kohana/Encrypt.php [ 101 ] in :
2013-08-09 10:42:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mcrypt_get_key_...', '/home/t/www/moj...', 101, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Encrypt.php(101): mcrypt_get_key_size('tripledes', 'stream')
#2 /home/t/www/moj-klub/system/classes/Kohana/Encrypt.php(85): Kohana_Encrypt->__construct('92e60cc71d37546...', 'stream', 'tripledes')
#3 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(22): Kohana_Encrypt::instance('url')
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder->to_url('1')
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-08-09 10:44:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function base_base2base() ~ MODPATH/coder/classes/Kohana/Coder.php [ 23 ] in :
2013-08-09 10:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 10:52:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: enc ~ MODPATH/coder/classes/Kohana/Coder.php [ 24 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:24
2013-08-09 10:52:29 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 24, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder->to_url('1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:24
2013-08-09 10:52:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ MODPATH/coder/classes/Kohana/Coder.php [ 23 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:23
2013-08-09 10:52:42 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 23, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder->to_url('1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:23
2013-08-09 11:00:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 19 ~ MODPATH/coder/classes/Kohana/Coder.php [ 87 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:87
2013-08-09 11:00:28 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(87): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 87, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(24): Kohana_Coder::hash('JOvoCkwigt1aoOX...', 19)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder->to_url('111')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:87
2013-08-09 11:12:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_Coder::hash() ~ MODPATH/coder/classes/Kohana/Coder.php [ 26 ] in :
2013-08-09 11:12:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:12:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_Coder::hash() ~ MODPATH/coder/classes/Kohana/Coder.php [ 26 ] in :
2013-08-09 11:12:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:16:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_Coder::hash() ~ MODPATH/coder/classes/Kohana/Coder.php [ 28 ] in :
2013-08-09 11:16:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:16:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana_Coder::hash() ~ MODPATH/coder/classes/Kohana/Coder.php [ 28 ] in :
2013-08-09 11:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:16:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ MODPATH/coder/classes/Kohana/Coder.php [ 29 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:29
2013-08-09 11:16:51 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(62): Kohana_Coder->to_url('111')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:29
2013-08-09 11:17:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/coder/classes/Kohana/Coder.php [ 29 ] in :
2013-08-09 11:17:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:17:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Token' not found ~ MODPATH/coder/classes/Kohana/Coder.php [ 25 ] in :
2013-08-09 11:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:19:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Token' not found ~ MODPATH/coder/classes/Kohana/Coder.php [ 25 ] in :
2013-08-09 11:19:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:30:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH/coder/classes/Kohana/Coder.php [ 28 ] in :
2013-08-09 11:30:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:32:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Exception\InvalidArgumentException' not found ~ APPPATH/vendor/ShortUrl/Token.php [ 176 ] in :
2013-08-09 11:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:34:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/coder/classes/Kohana/Coder.php [ 47 ] in :
2013-08-09 11:34:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:34:46 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 42 ] in :
2013-08-09 11:34:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 42, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(42): hex2bin('5')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('ydpvp')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:35:35 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 43 ] in :
2013-08-09 11:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 43, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(43): hex2bin('4')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('7pt3n')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:36:04 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 44 ] in :
2013-08-09 11:36:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 44, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(44): hex2bin('58576')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('cxtch')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:37:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ MODPATH/coder/classes/Kohana/Coder.php [ 45 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:45
2013-08-09 11:37:50 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 45, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('7a4a66555051586...')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:45
2013-08-09 11:38:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: value ~ MODPATH/coder/classes/Kohana/Coder.php [ 45 ] in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:45
2013-08-09 11:38:02 --- DEBUG: #0 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 45, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('5658356d6742366...')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php:45
2013-08-09 11:38:48 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 46 ] in :
2013-08-09 11:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 46, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(46): hex2bin('1')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(66): Kohana_Coder->from_url('1')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:42:34 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 47 ] in :
2013-08-09 11:42:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 47, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(47): hex2bin('53485269717')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('w7b4dn3t')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:44:34 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 48 ] in :
2013-08-09 11:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 48, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(48): hex2bin('5')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('xxxxxydpvp')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:44:43 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 48 ] in :
2013-08-09 11:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 48, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(48): hex2bin('36424')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('xxxxxcm27c')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:46:32 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 11:46:32 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 11:46:36 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 49 ] in :
2013-08-09 11:46:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 49, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(49): hex2bin('7')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('m9byw')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:47:07 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 49 ] in :
2013-08-09 11:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 49, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(49): hex2bin('546372514')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('bjg25r')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:47:53 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 49 ] in :
2013-08-09 11:47:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 49, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(49): hex2bin('4')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(64): Kohana_Coder->from_url('7pt3n')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 11:51:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Exception\InvalidArgumentException' not found ~ APPPATH/vendor/ShortUrl/Token.php [ 176 ] in :
2013-08-09 11:51:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:51:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Exception\InvalidArgumentException' not found ~ APPPATH/vendor/ShortUrl/Token.php [ 176 ] in :
2013-08-09 11:51:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:51:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Exception\InvalidArgumentException' not found ~ APPPATH/vendor/ShortUrl/Token.php [ 176 ] in :
2013-08-09 11:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:51:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Oztrov\ShortUrl\Exception\InvalidArgumentException' not found ~ APPPATH/vendor/ShortUrl/Token.php [ 176 ] in :
2013-08-09 11:51:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 11:53:20 --- EMERGENCY: ErrorException [ 2 ]: hex2bin(): Hexadecimal input string must have an even length ~ MODPATH/coder/classes/Kohana/Coder.php [ 35 ] in :
2013-08-09 11:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'hex2bin(): Hexa...', '/home/t/www/moj...', 35, Array)
#1 /home/t/www/moj-klub/modules/coder/classes/Kohana/Coder.php(35): hex2bin('1')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(66): Kohana_Coder->from_url('1')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_gallery()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-09 13:40:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/Component/Gallery.php [ 30 ] in /home/t/www/moj-klub/application/views/Component/Gallery.php:30
2013-08-09 13:40:02 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Gallery.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 30, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Team/Main.php(23): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(112): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Component/Gallery.php:30
2013-08-09 13:46:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/Component/Menu/User/Visit.php [ 25 ] in /home/t/www/moj-klub/application/views/Component/Menu/User/Visit.php:25
2013-08-09 13:46:07 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Menu/User/Visit.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 25, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/User/Main.php(5): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(112): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Component/Menu/User/Visit.php:25
2013-08-09 14:00:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Manager/Team.php [ 71 ] in /home/t/www/moj-klub/application/classes/Manager/Team.php:71
2013-08-09 14:00:43 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Team.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/application/classes/Manager/Team.php(57): Manager_Team->set_add_photo_result(Object(stdClass))
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(37): Manager_Team->add_photo(Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_add_photo()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Manager/Team.php:71
2013-08-09 14:56:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 14:56:28 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 15:15:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view Component/Info/Team/Gallery/Confirms could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-08-09 15:15:12 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Component/Info/...')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('Component/Info/...', NULL)
#2 /home/t/www/moj-klub/application/classes/Manager/Team.php(106): Kohana_View::factory('Component/Info/...')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(51): Manager_Team->delete_photo('786d482b5a30536...', NULL)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-08-09 15:36:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 84 ] in :
2013-08-09 15:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 15:49:23 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 15:49:23 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-09 20:59:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: confirm_view ~ APPPATH/classes/Manager/Gallery.php [ 86 ] in /home/t/www/moj-klub/application/classes/Manager/Gallery.php:86
2013-08-09 20:59:06 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 86, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Gallery.php(43): Manager_Gallery->delete_photo('2f7879665330417...', NULL)
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Gallery->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Manager/Gallery.php:86
2013-08-09 20:59:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'of' (T_STRING) ~ APPPATH/classes/Manager/Gallery.php [ 85 ] in :
2013-08-09 20:59:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-09 21:00:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view Component/Gallery/Confirm could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-08-09 21:00:47 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Component/Galle...')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('Component/Galle...', NULL)
#2 /home/t/www/moj-klub/application/classes/Manager/Gallery.php(84): Kohana_View::factory('Component/Galle...')
#3 /home/t/www/moj-klub/application/classes/Controller/Gallery.php(43): Manager_Gallery->delete_photo('794b6d78702b794...', NULL)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Gallery->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Gallery))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137