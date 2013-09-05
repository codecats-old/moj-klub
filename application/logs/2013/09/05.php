<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-05 09:54:01 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-09-05 09:54:01 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Ajax.php(70): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_notification()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-09-05 13:39:34 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant routeFa - assumed 'routeFa' ~ APPPATH/routes.php [ 41 ] in /home/t/www/moj-klub/application/routes.php:41
2013-09-05 13:39:34 --- DEBUG: #0 /home/t/www/moj-klub/application/routes.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 41, Array)
#1 /home/t/www/moj-klub/application/bootstrap.php(143): require_once('/home/t/www/moj...')
#2 /home/t/www/moj-klub/index.php(102): require('/home/t/www/moj...')
#3 {main} in /home/t/www/moj-klub/application/routes.php:41
2013-09-05 13:39:44 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant routeF - assumed 'routeF' ~ APPPATH/routes.php [ 41 ] in /home/t/www/moj-klub/application/routes.php:41
2013-09-05 13:39:44 --- DEBUG: #0 /home/t/www/moj-klub/application/routes.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 41, Array)
#1 /home/t/www/moj-klub/application/bootstrap.php(143): require_once('/home/t/www/moj...')
#2 /home/t/www/moj-klub/index.php(102): require('/home/t/www/moj...')
#3 {main} in /home/t/www/moj-klub/application/routes.php:41
2013-09-05 13:40:01 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for routeF(), called in /home/t/www/moj-klub/application/routes.php on line 40 and defined ~ APPPATH/routes.php [ 2 ] in /home/t/www/moj-klub/application/routes.php:2
2013-09-05 13:40:01 --- DEBUG: #0 /home/t/www/moj-klub/application/routes.php(2): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 2, Array)
#1 /home/t/www/moj-klub/application/routes.php(40): routeF()
#2 /home/t/www/moj-klub/application/bootstrap.php(143): require_once('/home/t/www/moj...')
#3 /home/t/www/moj-klub/index.php(102): require('/home/t/www/moj...')
#4 {main} in /home/t/www/moj-klub/application/routes.php:2
2013-09-05 13:40:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: route ~ APPPATH/routes.php [ 40 ] in /home/t/www/moj-klub/application/routes.php:40
2013-09-05 13:40:18 --- DEBUG: #0 /home/t/www/moj-klub/application/routes.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 40, Array)
#1 /home/t/www/moj-klub/application/bootstrap.php(143): require_once('/home/t/www/moj...')
#2 /home/t/www/moj-klub/index.php(102): require('/home/t/www/moj...')
#3 {main} in /home/t/www/moj-klub/application/routes.php:40
2013-09-05 13:42:06 --- EMERGENCY: Exception [ 0 ]: ee ~ APPPATH/routes.php [ 5 ] in :
2013-09-05 13:42:06 --- DEBUG: #0 [internal function]: routeF(Object(Route), Array, Object(Request))
#1 /home/t/www/moj-klub/system/classes/Kohana/Route.php(462): call_user_func('routeF', Object(Route), Array, Object(Request))
#2 /home/t/www/moj-klub/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-09-05 13:45:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 388 ] in /home/t/www/moj-klub/application/routes.php:38
2013-09-05 13:45:01 --- DEBUG: #0 /home/t/www/moj-klub/application/routes.php(38): Kohana_Route->filter('$f->underscope2...')
#1 /home/t/www/moj-klub/application/bootstrap.php(143): require_once('/home/t/www/moj...')
#2 /home/t/www/moj-klub/index.php(102): require('/home/t/www/moj...')
#3 {main} in /home/t/www/moj-klub/application/routes.php:38
2013-09-05 13:47:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Route::filter(), called in /home/t/www/moj-klub/application/routes.php on line 42 and defined ~ SYSPATH/classes/Kohana/Route.php [ 384 ] in /home/t/www/moj-klub/system/classes/Kohana/Route.php:384
2013-09-05 13:47:23 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Route.php(384): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 384, Array)
#1 /home/t/www/moj-klub/application/routes.php(42): Kohana_Route->filter()
#2 /home/t/www/moj-klub/application/bootstrap.php(143): require_once('/home/t/www/moj...')
#3 /home/t/www/moj-klub/index.php(102): require('/home/t/www/moj...')
#4 {main} in /home/t/www/moj-klub/system/classes/Kohana/Route.php:384