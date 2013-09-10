<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-10 09:16:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: requests ~ MODPATH/orm/classes/Kohana/ORM.php [ 1599 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1599
2013-09-10 09:16:54 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1599): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 1599, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Management.php(254): Kohana_ORM->remove('requests')
#2 /home/t/www/moj-klub/application/classes/Controller/Management.php(227): Controller_Management->leave_club_roles(Object(Model_User))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_leave()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1599
2013-09-10 09:17:47 --- EMERGENCY: ErrorException [ 0 ]: redirect user without team ~ APPPATH/classes/Controller/Management.php [ 196 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-09-10 09:17:47 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_leave()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-09-10 09:19:10 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `user_id` = '22' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-09-10 09:19:10 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `` ...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1608): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/application/classes/Controller/Management.php(254): Kohana_ORM->remove('request')
#3 /home/t/www/moj-klub/application/classes/Controller/Management.php(227): Controller_Management->leave_club_roles(Object(Model_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_leave()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-09-10 09:23:12 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `user_id` = '22' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-09-10 09:23:12 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `` ...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1608): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/application/classes/Controller/Management.php(242): Kohana_ORM->remove('request')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_r()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-09-10 09:23:52 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ DELETE FROM `` WHERE `user_id` = '22' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-09-10 09:23:52 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `` ...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1608): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/application/classes/Controller/Management.php(242): Kohana_ORM->remove('requests')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_r()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-09-10 09:31:19 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-09-10 09:31:19 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(63): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-09-10 09:34:27 --- EMERGENCY: Exception [ 0 ]: cant leave the club, u drunk go home ~ APPPATH/classes/Controller/Management.php [ 217 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-09-10 09:34:27 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_leave()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84