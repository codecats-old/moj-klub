<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-22 10:10:42 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-22 10:10:42 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-07-22 11:12:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/Component/Form/Create/Team.php [ 12 ] in /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php:12
2013-07-22 11:12:57 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php:12
2013-07-22 11:13:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/Component/Form/Create/Team.php [ 15 ] in /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php:15
2013-07-22 11:13:46 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 15, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php:15
2013-07-22 11:14:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/views/Component/Form/Create/Team.php [ 45 ] in /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php:45
2013-07-22 11:14:12 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 45, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php:45
2013-07-22 13:10:26 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-22 13:10:26 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-22 14:47:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/Component/Form/Address.php [ 8 ] in /home/t/www/moj-klub/application/views/Component/Form/Address.php:8
2013-07-22 14:47:56 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Address.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 8, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php(43): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#12 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#14 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#16 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#21 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#22 {main} in /home/t/www/moj-klub/application/views/Component/Form/Address.php:8
2013-07-22 14:48:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/Component/Form/Address.php [ 8 ] in /home/t/www/moj-klub/application/views/Component/Form/Address.php:8
2013-07-22 14:48:33 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Address.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 8, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/application/views/Component/Form/Create/Team.php(43): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#12 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#14 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#16 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#17 [internal function]: Kohana_Controller->execute()
#18 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#21 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#22 {main} in /home/t/www/moj-klub/application/views/Component/Form/Address.php:8
2013-07-22 17:27:52 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-22 17:27:52 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-22 22:15:19 --- EMERGENCY: Exception [ 0 ]: a ~ APPPATH/classes/Controller/Team.php [ 30 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-22 22:15:19 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_create()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-22 22:15:44 --- EMERGENCY: Exception [ 0 ]: a ~ APPPATH/classes/Controller/Team.php [ 31 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-22 22:15:44 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_create()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-07-22 22:56:24 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-22 22:56:24 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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