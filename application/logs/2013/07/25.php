<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-25 09:34:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/Header/Loged.php [ 16 ] in :
2013-07-25 09:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 09:34:57 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'token_name' ~ APPPATH/views/Header/Loged.php [ 14 ] in :
2013-07-25 09:34:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 09:40:06 --- EMERGENCY: Exception [ 0 ]:  ~ APPPATH/classes/Controller/User.php [ 220 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-25 09:40:06 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-25 09:59:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 09:59:50 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(6): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:17:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Team.php [ 137 ] in :
2013-07-25 10:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 10:18:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Team.php [ 137 ] in :
2013-07-25 10:18:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 10:23:05 --- EMERGENCY: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/Team.php [ 24 ] in :
2013-07-25 10:23:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/home/t/www/moj...', 24, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(24): print_r()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-25 10:25:31 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php:461
2013-07-25 10:25:31 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 461, Array)
#1 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(271): Kohana_ORM->find()
#7 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(Object(Database_MySQL_Result))
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(24): Kohana_ORM::factory('User', Object(Database_MySQL_Result))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php:461
2013-07-25 10:27:56 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:27:56 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(6): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:35:29 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 508 ] in :
2013-07-25 10:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 508, Array)
#1 /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php(508): str_replace('`', '``', 'Object')
#2 [internal function]: Kohana_Database->quote_column(Array)
#3 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#4 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(24): Kohana_ORM->find_all()
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in :
2013-07-25 10:37:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:29
2013-07-25 10:37:30 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(29): Kohana_ORM->find_all()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:29
2013-07-25 10:47:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:28
2013-07-25 10:47:04 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(28): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:28
2013-07-25 10:54:25 --- EMERGENCY: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/Controller/Team.php [ 28 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:28
2013-07-25 10:54:25 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(28): Kohana_Core::error_handler(8, 'Object of class...', '/home/t/www/moj...', 28, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:28
2013-07-25 10:56:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:56:28 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(6): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:56:31 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/Controller/Team.php [ 29 ] in :
2013-07-25 10:56:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 10:57:03 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:30
2013-07-25 10:57:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(30): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:30
2013-07-25 10:57:37 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:57:37 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(6): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 10:58:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Controller/Team.php [ 33 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 10:58:43 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 33, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 11:03:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::set(), called in /home/t/www/moj-klub/application/classes/Controller/Team.php on line 30 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 711 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:711
2013-07-25 11:03:16 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(711): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 711, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(30): Kohana_ORM->set(Array)
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:711
2013-07-25 11:11:15 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php:461
2013-07-25 11:11:15 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 461, Array)
#1 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#6 /home/t/www/moj-klub/application/classes/Controller/Team.php(33): Kohana_ORM->find()
#7 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#13 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php:461
2013-07-25 11:12:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Team.php [ 33 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 11:12:39 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 33, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 11:12:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Team.php [ 33 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 11:12:53 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 33, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 11:15:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Team.php [ 34 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:34
2013-07-25 11:15:42 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 34, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:34
2013-07-25 11:17:49 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Controller/Team.php [ 33 ] in :
2013-07-25 11:17:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 11:36:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function push() ~ APPPATH/classes/Controller/Team.php [ 14 ] in :
2013-07-25 11:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 14:30:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$user_ids ~ APPPATH/classes/Controller/Team.php [ 222 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:222
2013-07-25 14:30:15 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(222): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 222, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(25): Controller_Team->to_array(Object(Database_MySQL_Result), 'user_ids')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:222
2013-07-25 14:31:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Team.php [ 33 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 14:31:39 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 33, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:33
2013-07-25 14:46:15 --- EMERGENCY: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php:461
2013-07-25 14:46:15 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/home/t/www/moj...', 461, Array)
#1 [internal function]: Kohana_Database->quote(Object(stdClass))
#2 /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php(466): array_map(Array, Array)
#3 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote(Array)
#4 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#7 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(26): Kohana_ORM->find_all()
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database.php:461
2013-07-25 14:55:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Team::get_users() ~ APPPATH/classes/Controller/Team.php [ 37 ] in :
2013-07-25 14:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 14:55:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Team class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-25 14:55:44 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('users')
#1 /home/t/www/moj-klub/application/classes/Model/Team.php(52): Kohana_ORM->__get('users')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(37): Model_Team->get_players()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-25 14:56:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Team class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:52
2013-07-25 14:56:10 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(52): Kohana_ORM->get('users')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(37): Model_Team->get_players()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:52
2013-07-25 14:57:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/Model/Team.php [ 52 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:52
2013-07-25 14:57:52 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(52): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 52, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(37): Model_Team->get_players()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:52
2013-07-25 14:59:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::current() ~ APPPATH/classes/Controller/Team.php [ 37 ] in :
2013-07-25 14:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 14:59:52 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Controller/Team.php [ 38 ] in :
2013-07-25 14:59:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:03:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Team.php [ 38 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:38
2013-07-25 15:03:13 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(38): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 38, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:38
2013-07-25 15:03:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Team.php [ 38 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:38
2013-07-25 15:03:25 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(38): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 38, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:38
2013-07-25 15:07:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:38
2013-07-25 15:07:30 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(38): Kohana_ORM->find('id')
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:38
2013-07-25 15:14:55 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'roles.name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`avatar_id` AS `avatar_id`, `user`.`team_id` AS `team_id` FROM `users` AS `user` WHERE `user`.`team_id` = '19' AND `roles`.`name` = 'manager' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 15:14:55 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(41): Kohana_ORM->find()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 15:20:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/Controller/Team.php [ 41 ] in :
2013-07-25 15:20:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:25:29 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /home/t/www/moj-klub/application/classes/Model/Team.php on line 55 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1846 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1846
2013-07-25 15:25:29 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 1846, Array)
#1 /home/t/www/moj-klub/application/classes/Model/Team.php(55): Kohana_ORM->where('roles', 1)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(41): Model_Team->get_manager()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1846
2013-07-25 15:25:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'roles.id' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`avatar_id` AS `avatar_id`, `user`.`team_id` AS `team_id` FROM `users` AS `user` WHERE `user`.`team_id` = '19' AND `roles`.`id` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 15:25:44 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/t/www/moj-klub/application/classes/Model/Team.php(55): Kohana_ORM->find_all()
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(41): Model_Team->get_manager()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 15:27:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Team.php [ 41 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:41
2013-07-25 15:27:13 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 41, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:41
2013-07-25 15:30:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Team::get_members() ~ APPPATH/classes/Controller/Team.php [ 37 ] in :
2013-07-25 15:30:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:31:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Team.php [ 41 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:41
2013-07-25 15:31:27 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 41, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:41
2013-07-25 15:36:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function select() on a non-object ~ APPPATH/classes/Model/Team.php [ 54 ] in :
2013-07-25 15:36:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:36:40 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function current() on a non-object ~ APPPATH/classes/Model/Team.php [ 55 ] in :
2013-07-25 15:36:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:36:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Team.php [ 215 ] in :
2013-07-25 15:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:43:48 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'roles.name' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`avatar_id` AS `avatar_id`, `user`.`team_id` AS `team_id` FROM `role_users` AS `roles`, `users` AS `user` WHERE `user`.`team_id` = '19' AND `roles`.`name` = 'coach' AND `role_users`.`user_id` = 'user.id' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 15:43:48 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/t/www/moj-klub/application/classes/Model/Team.php(63): Kohana_ORM->find_all()
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(211): Model_Team->get_coach()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 15:45:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Team.php [ 217 ] in :
2013-07-25 15:45:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:51:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Model/Team.php [ 60 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:60
2013-07-25 15:51:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 60, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:60
2013-07-25 15:51:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Model/Team.php [ 60 ] in :
2013-07-25 15:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:52:06 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 60 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:60
2013-07-25 15:52:06 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(60): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 60, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:60
2013-07-25 15:52:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function count_all() on a non-object ~ APPPATH/classes/Model/Team.php [ 60 ] in :
2013-07-25 15:52:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:52:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/Model/Team.php [ 60 ] in :
2013-07-25 15:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:53:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/Model/Team.php [ 60 ] in :
2013-07-25 15:53:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:54:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ APPPATH/classes/Model/Team.php [ 54 ] in :
2013-07-25 15:54:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:54:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::current() ~ APPPATH/classes/Model/Team.php [ 60 ] in :
2013-07-25 15:54:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:55:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::username() ~ APPPATH/classes/Model/Team.php [ 60 ] in :
2013-07-25 15:55:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 15:55:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Model/Team.php [ 60 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:60
2013-07-25 15:55:42 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(60): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 60, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:60
2013-07-25 15:57:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The last_query property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-25 15:57:14 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('last_query')
#1 /home/t/www/moj-klub/application/classes/Model/Team.php(60): Kohana_ORM->__get('last_query')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-25 16:08:05 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /home/t/www/moj-klub/application/classes/Model/Team.php on line 56 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1846 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1846
2013-07-25 16:08:05 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 1846, Array)
#1 /home/t/www/moj-klub/application/classes/Model/Team.php(56): Kohana_ORM->where('role_users.user...', 'user.id')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1846
2013-07-25 16:11:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-07-25 16:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 16:13:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Role class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-25 16:13:45 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('user')
#1 /home/t/www/moj-klub/application/classes/Model/Team.php(59): Kohana_ORM->__get('user')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-25 16:15:10 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 61 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:61
2013-07-25 16:15:10 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:61
2013-07-25 16:16:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 61 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:61
2013-07-25 16:16:45 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(210): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:61
2013-07-25 16:53:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Model/Team.php [ 56 ] in :
2013-07-25 16:53:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 16:53:40 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 16:53:40 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(6): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 16:53:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Model/Team.php [ 55 ] in :
2013-07-25 16:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 16:54:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH/classes/Model/Team.php [ 55 ] in :
2013-07-25 16:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 17:06:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Team.php [ 196 ] in :
2013-07-25 17:06:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:13:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ APPPATH/classes/Model/Team.php [ 61 ] in :
2013-07-25 20:13:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:14:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ APPPATH/classes/Model/Team.php [ 61 ] in :
2013-07-25 20:14:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:14:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ APPPATH/classes/Model/Team.php [ 61 ] in :
2013-07-25 20:14:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:14:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ APPPATH/classes/Model/Team.php [ 61 ] in :
2013-07-25 20:14:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:14:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: managers ~ APPPATH/classes/Model/Team.php [ 71 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:71
2013-07-25 20:14:55 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:71
2013-07-25 20:15:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: managers ~ APPPATH/classes/Model/Team.php [ 72 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:72
2013-07-25 20:15:28 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 72, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:72
2013-07-25 20:16:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::current() ~ APPPATH/classes/Model/Team.php [ 73 ] in :
2013-07-25 20:16:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:18:51 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Model/Team.php [ 74 ] in :
2013-07-25 20:18:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:19:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Model/Team.php [ 74 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:19:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(74): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 74, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:21:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Model/Team.php [ 74 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:21:10 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(74): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 74, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:21:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Model/Team.php [ 74 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:21:46 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(74): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 74, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:22:24 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 74 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:22:24 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(74): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 74, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:74
2013-07-25 20:23:02 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Model/Team.php [ 74 ] in :
2013-07-25 20:23:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:23:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::current() ~ APPPATH/classes/Model/Team.php [ 74 ] in :
2013-07-25 20:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 20:24:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mamber ~ APPPATH/classes/Model/Team.php [ 75 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:24:09 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 75, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:24:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 75 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:24:18 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 75, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:24:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Model/Team.php [ 77 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:77
2013-07-25 20:24:46 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 77, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:77
2013-07-25 20:25:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Model/Team.php [ 77 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:77
2013-07-25 20:25:19 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 77, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:77
2013-07-25 20:30:55 --- EMERGENCY: Database_Exception [ 1066 ]: Not unique table/alias: 'user' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`avatar_id` AS `avatar_id`, `user`.`team_id` AS `team_id` FROM `user`, `role_users`, `roles`, `users` AS `user` WHERE `user`.`team_id` = '19' AND `roles`.`name` = 'player' AND `role_users`.`user_id` = `user`.`id` AND `role_users`.`role_id` = `roles`.`id` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 20:30:55 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/t/www/moj-klub/application/classes/Model/Team.php(66): Kohana_ORM->find_all()
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-25 20:31:33 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 75 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:31:33 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 75, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:31:49 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 75 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:31:49 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 75, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:33:26 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 20:33:26 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(6): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-25 20:33:47 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Team.php [ 75 ] in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 20:33:47 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Team.php(75): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 75, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(191): Model_Team->get_manager()
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Model/Team.php:75
2013-07-25 21:03:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Team.php [ 197 ] in :
2013-07-25 21:03:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 21:04:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Team::get_players_ids() ~ APPPATH/classes/Controller/Team.php [ 137 ] in :
2013-07-25 21:04:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 21:05:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: management ~ APPPATH/classes/Controller/Team.php [ 137 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:137
2013-07-25 21:05:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(137): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 137, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(16): Controller_Team->get_view_about(Object(Model_Team))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:137
2013-07-25 21:13:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ SYSPATH/classes/Kohana/Arr.php [ 277 ] in :
2013-07-25 21:13:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 21:23:46 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/Component/Info/Team/Members.php [ 32 ] in /home/t/www/moj-klub/application/views/Component/Info/Team/Members.php:32
2013-07-25 21:23:46 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Info/Team/Members.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/t/www/moj...', 32, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Component/About/Team.php(9): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Team/Main.php(15): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#16 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#17 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#18 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#19 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#20 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#21 /home/t/www/moj-klub/application/classes/Controller/Team.php(21): Controller_Automatic->after()
#22 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#23 [internal function]: Kohana_Controller->execute()
#24 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#25 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#26 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#27 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#28 {main} in /home/t/www/moj-klub/application/views/Component/Info/Team/Members.php:32
2013-07-25 21:31:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: capitan ~ APPPATH/views/Component/About/Team.php [ 12 ] in /home/t/www/moj-klub/application/views/Component/About/Team.php:12
2013-07-25 21:31:05 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/About/Team.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Team/Main.php(15): Kohana_View->__toString()
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
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/application/classes/Controller/Team.php(21): Controller_Automatic->after()
#18 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#19 [internal function]: Kohana_Controller->execute()
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#22 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#23 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#24 {main} in /home/t/www/moj-klub/application/views/Component/About/Team.php:12
2013-07-25 22:00:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: coach ~ APPPATH/views/Component/Info/Team/Members.php [ 47 ] in /home/t/www/moj-klub/application/views/Component/Info/Team/Members.php:47
2013-07-25 22:00:08 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Info/Team/Members.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 47, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Component/About/Team.php(12): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Team/Main.php(15): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#16 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#17 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#18 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#19 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#20 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#21 /home/t/www/moj-klub/application/classes/Controller/Team.php(21): Controller_Automatic->after()
#22 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#23 [internal function]: Kohana_Controller->execute()
#24 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#25 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#26 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#27 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#28 {main} in /home/t/www/moj-klub/application/views/Component/Info/Team/Members.php:47
2013-07-25 22:00:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/views/Component/About/Team.php [ 13 ] in :
2013-07-25 22:00:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-25 22:48:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Team.php [ 18 ] in :
2013-07-25 22:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :