<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-21 08:07:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-21 08:07:36 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('request')
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(72): Kohana_ORM->__get('request')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-21 08:10:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Request::current() ~ APPPATH/classes/Controller/Administration.php [ 73 ] in :
2013-08-21 08:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 08:11:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Request::current() ~ APPPATH/classes/Controller/Administration.php [ 73 ] in :
2013-08-21 08:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 08:15:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tema_id ~ APPPATH/classes/Controller/Administration.php [ 62 ] in /home/t/www/moj-klub/application/classes/Controller/Administration.php:62
2013-08-21 08:15:30 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Administration.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 62, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Administration.php:62
2013-08-21 09:10:17 --- EMERGENCY: ReflectionException [ 0 ]: Trying to invoke protected method Validation_Request::check_field() from scope ReflectionMethod ~ SYSPATH/classes/Kohana/Validation.php [ 410 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-21 09:10:17 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(66): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-21 09:14:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/classes/Validation/Request.php [ 27 ] in :
2013-08-21 09:14:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 09:38:31 --- EMERGENCY: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/Administration.php [ 82 ] in :
2013-08-21 09:38:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/home/t/www/moj...', 82, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Administration.php(82): date()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join_cancel()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-08-21 09:50:07 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Controller/Administration.php [ 82 ] in :
2013-08-21 09:50:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 10:17:10 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '18-19' for key 'user_id_UNIQUE' [ INSERT INTO `requests` (`team_id`, `user_id`, `active`) VALUES ('19', '18', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 10:17:10 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(35): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 13:29:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request_canceled ~ APPPATH/classes/Manager/Team.php [ 99 ] in /home/t/www/moj-klub/application/classes/Manager/Team.php:99
2013-08-21 13:29:56 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Team.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 99, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(54): Manager_Team->show()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Manager/Team.php:99
2013-08-21 13:30:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request_canceled ~ APPPATH/classes/Manager/Team.php [ 99 ] in /home/t/www/moj-klub/application/classes/Manager/Team.php:99
2013-08-21 13:30:12 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Team.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 99, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(54): Manager_Team->show()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_show()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Manager/Team.php:99
2013-08-21 14:01:16 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '18-19' for key 'user_id_UNIQUE' [ INSERT INTO `requests` (`team_id`, `user_id`) VALUES ('19', '18') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:01:16 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(39): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:03:43 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '18-19' for key 'user_id_UNIQUE' [ INSERT INTO `requests` (`team_id`, `user_id`) VALUES ('19', '18') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:03:43 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(46): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:03:45 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '18-19' for key 'user_id_UNIQUE' [ INSERT INTO `requests` (`team_id`, `user_id`) VALUES ('19', '18') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:03:45 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(46): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:07:27 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`my_club`.`requests`, CONSTRAINT `fk_requests_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION) [ INSERT INTO `requests` () VALUES () ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:07:27 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(47): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:09:12 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`my_club`.`requests`, CONSTRAINT `fk_requests_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION) [ INSERT INTO `requests` () VALUES () ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:09:12 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `re...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Administration.php(48): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_join()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-21 14:56:57 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: requests_views ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /home/t/www/moj-klub/application/classes/Controller/Administration.php:20
2013-08-21 14:56:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Administration.php(20): Kohana_View->__get('requests_views')
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Administration->action_requests()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Administration.php:20
2013-08-21 15:06:34 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Component/Request/Menu.php [ 10 ] in /home/t/www/moj-klub/application/views/Component/Request/Menu.php:10
2013-08-21 15:06:34 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Request/Menu.php(10): Kohana_Core::error_handler(8, 'Array to string...', '/home/t/www/moj...', 10, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(40): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Component/Request/Menu.php:10
2013-08-21 15:08:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/Component/Request/Menu.php [ 10 ] in :
2013-08-21 15:08:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 15:11:38 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/Component/Request/Single.php [ 3 ] in /home/t/www/moj-klub/application/views/Component/Request/Single.php:3
2013-08-21 15:11:38 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Request/Single.php(3): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 3, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/application/views/Component/Request/Menu.php(10): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/t/www/moj-klub/application/views/Template.php(40): Kohana_View->__toString()
#12 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#14 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Controller_Template->after()
#16 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#21 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#22 {main} in /home/t/www/moj-klub/application/views/Component/Request/Single.php:3
2013-08-21 15:46:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH/classes/Manager/User.php [ 547 ] in :
2013-08-21 15:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 15:53:35 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-21 15:53:35 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-21 17:19:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Request::count() ~ APPPATH/classes/Controller/Administration.php [ 15 ] in :
2013-08-21 17:19:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-21 20:18:33 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-21 20:18:33 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Administration))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125