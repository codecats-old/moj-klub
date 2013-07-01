<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-01 10:22:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-07-01 10:22:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-01 10:23:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-07-01 10:23:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-01 10:24:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-07-01 10:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-01 10:26:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-07-01 10:26:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-01 10:32:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1564
2013-07-01 10:32:48 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 1564, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(14): Kohana_ORM->add('role', Object(Model_Role))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1564
2013-07-01 10:33:09 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `role_id`) VALUES ('1', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-01 10:33:09 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(14): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-01 10:34:34 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `role_id`) VALUES ('1', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-01 10:34:34 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(14): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-01 10:34:34 --- EMERGENCY: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`user_id`, `role_id`) VALUES ('1', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-01 10:34:34 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(14): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251