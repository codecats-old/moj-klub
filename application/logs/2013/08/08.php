<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-08 09:57:45 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 09:57:45 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-08-08 10:23:25 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 10:23:25 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 10:27:44 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 10:27:44 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-08-08 10:54:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Validation/Team.php [ 157 ] in :
2013-08-08 10:54:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:28:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/Controller/Team.php [ 46 ] in :
2013-08-08 11:28:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:29:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/classes/Manager/Team.php [ 72 ] in :
2013-08-08 11:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:30:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/classes/Manager/Team.php [ 72 ] in :
2013-08-08 11:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:31:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/classes/Manager/Team.php [ 72 ] in :
2013-08-08 11:31:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:32:01 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/classes/Manager/Team.php [ 72 ] in :
2013-08-08 11:32:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:32:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH/classes/Manager/Team.php [ 72 ] in :
2013-08-08 11:32:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 11:32:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:32:31 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 242, Array)
#1 /home/t/www/moj-klub/application/classes/Validation/Image.php(47): Kohana_Validation->rules('delete_photo', Array)
#2 /home/t/www/moj-klub/application/classes/Model/Photo.php(20): Validation_Image->delete_photo()
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(51): Model_Photo->validate_delete(Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(72): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(51): Manager_Team->delete_photo('1')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:35:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:35:31 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 242, Array)
#1 /home/t/www/moj-klub/application/classes/Validation/Image.php(47): Kohana_Validation->rules('delete_photo', Array)
#2 /home/t/www/moj-klub/application/classes/Model/Photo.php(20): Validation_Image->delete_photo()
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(51): Model_Photo->validate_delete(Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(51): Manager_Team->delete_photo('1')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:35:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:35:53 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 242, Array)
#1 /home/t/www/moj-klub/application/classes/Validation/Image.php(47): Kohana_Validation->rules('delete_photo', Array)
#2 /home/t/www/moj-klub/application/classes/Model/Photo.php(20): Validation_Image->delete_photo()
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(51): Model_Photo->validate_delete(Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(51): Manager_Team->delete_photo('1')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:36:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:36:15 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 242, Array)
#1 /home/t/www/moj-klub/application/classes/Validation/Image.php(47): Kohana_Validation->rules('delete_photo', Array)
#2 /home/t/www/moj-klub/application/classes/Model/Photo.php(20): Validation_Image->delete_photo()
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(51): Model_Photo->validate_delete(Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(51): Manager_Team->delete_photo('1')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:36:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH/classes/Kohana/Validation.php [ 242 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:36:45 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(242): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/t/www/moj...', 242, Array)
#1 /home/t/www/moj-klub/application/classes/Validation/Image.php(47): Kohana_Validation->rules('delete_photo', Array)
#2 /home/t/www/moj-klub/application/classes/Model/Photo.php(20): Validation_Image->delete_photo()
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(51): Model_Photo->validate_delete(Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:242
2013-08-08 11:37:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 64 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:64
2013-08-08 11:37:41 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 64, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:64
2013-08-08 11:38:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 64 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:64
2013-08-08 11:38:10 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 64, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:64
2013-08-08 11:41:17 --- EMERGENCY: ReflectionException [ 0 ]: Method Validation::is_permitted() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 11:41:17 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('Validation', 'is_permitted')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(52): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 11:41:32 --- EMERGENCY: ReflectionException [ 0 ]: Method Validation_Image::is_permitted() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 11:41:32 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('Validation_Imag...', 'is_permitted')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(52): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 11:41:54 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '1' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Acl.php [ 292 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:731
2013-08-08 11:41:54 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(731): Zend\Permissions\Acl\Acl->getResource('1')
#1 [internal function]: Zend\Permissions\Acl\Acl->isAllowed('tomek11', '1')
#2 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(72): call_user_func_array(Array, Array)
#3 /home/t/www/moj-klub/application/classes/Validation/General.php(8): Zend_Acl->__call('is_allowed', Array)
#4 /home/t/www/moj-klub/application/classes/Validation/General.php(8): Menu_Team->is_allowed('tomek11', '1')
#5 [internal function]: Validation_General::is_permitted('1', 'Team')
#6 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#7 /home/t/www/moj-klub/application/classes/Controller/Image.php(52): Kohana_Validation->check()
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:731
2013-08-08 11:42:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:63
2013-08-08 11:42:21 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 63, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:63
2013-08-08 11:43:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:63
2013-08-08 11:43:37 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 63, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:63
2013-08-08 11:43:47 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 11:43:47 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-08-08 11:43:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:63
2013-08-08 11:43:54 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 63, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:63
2013-08-08 13:49:23 --- EMERGENCY: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ APPPATH/classes/Controller/Image.php [ 50 ] in :
2013-08-08 13:49:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', '/home/t/www/moj...', 50, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(50): array_map(Object(Closure), Object(Model_Photo))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-08-08 13:49:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Image.php [ 50 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:50
2013-08-08 13:49:46 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(50): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 50, Array)
#1 [internal function]: Controller_Image->{closure}(NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Image.php(50): array_map(Object(Closure), Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:50
2013-08-08 13:50:04 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:50:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:50:39 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects at least 2 parameters, 1 given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:50:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(52): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:51:06 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('??J?T???', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(52): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:52:01 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant photo - assumed 'photo' ~ APPPATH/classes/Controller/Image.php [ 50 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:50
2013-08-08 13:52:01 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 50, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:50
2013-08-08 13:52:12 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:52:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('??J?T???', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:52:31 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:52:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('??J?T???', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:52:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::validate_delete() ~ APPPATH/classes/Controller/Image.php [ 51 ] in :
2013-08-08 13:52:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 13:53:26 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:53:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('??J?T???', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:55:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::validate_delete() ~ APPPATH/classes/Controller/Image.php [ 51 ] in :
2013-08-08 13:55:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 13:56:24 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 13:56:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('??J?T???', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in :
2013-08-08 13:56:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_photo' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-08 13:56:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 13:58:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The photos property does not exist in the Model_Team class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 13:58:13 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('photos')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(49): Kohana_ORM->__get('photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 13:58:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Team class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 13:58:45 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('photo')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(49): Kohana_ORM->__get('photo')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 13:58:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_photo' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-08 13:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 13:59:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Team class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 13:59:18 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('photo')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(49): Kohana_ORM->__get('photo')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 13:59:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_photo' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-08 13:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:00:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_photo' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-08 14:00:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:00:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Image.php [ 51 ] in :
2013-08-08 14:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:00:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function validate_delete() on a non-object ~ APPPATH/classes/Controller/Image.php [ 52 ] in :
2013-08-08 14:00:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:03:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_photo' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-08 14:03:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:04:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_photo' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-08 14:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:09:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The nae property does not exist in the Model_Photo class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 14:09:25 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('nae')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): Kohana_ORM->__get('nae')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-08 14:15:31 --- EMERGENCY: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ APPPATH/classes/Controller/Image.php [ 53 ] in :
2013-08-08 14:15:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', '/home/t/www/moj...', 53, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(53): array_map(Object(Closure), Object(Database_MySQL_Result))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-08-08 14:15:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Image.php [ 53 ] in :
2013-08-08 14:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:18:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Image.php [ 56 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:56
2013-08-08 14:18:53 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 56, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:56
2013-08-08 14:28:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Image.php [ 50 ] in :
2013-08-08 14:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 14:28:16 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 14:28:16 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-08-08 14:35:13 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:35:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('5', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(58): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:35:28 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(13, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(58): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:35:49 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:35:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(13, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(58): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:36:33 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:36:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(59): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:38:03 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('delete_photo', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:38:48 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:39:03 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:39:11 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:39:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('5', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:39:19 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array('5', 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:39:39 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:39:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:42:05 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photoss')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:42:37 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 14:42:37 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-08-08 14:42:43 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'Validation_Imag...')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:43:32 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:43:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:43:59 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ SYSPATH/classes/Kohana/Validation.php [ 399 ] in :
2013-08-08 14:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/home/t/www/moj...', 399, Array)
#1 [internal function]: in_array(10, 'photos')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(399): ReflectionFunction->invokeArgs(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in :
2013-08-08 14:46:20 --- EMERGENCY: ReflectionException [ 0 ]: Trying to invoke protected method Validation_Image::ccc() from scope ReflectionMethod ~ SYSPATH/classes/Kohana/Validation.php [ 410 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-08 14:46:20 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-08 14:46:43 --- EMERGENCY: ReflectionException [ 0 ]: Class Validation_Images does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 14:46:43 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('Validation_Imag...', 'ccc')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('6575776d7959694...')
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 14:48:10 --- EMERGENCY: ReflectionException [ 0 ]: Class Validation_Images does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 407 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 14:48:10 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(407): ReflectionMethod->__construct('Validation_Imag...', 'ccc')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:407
2013-08-08 14:48:27 --- EMERGENCY: ReflectionException [ 0 ]: Trying to invoke protected method Validation_Image::ccc() from scope ReflectionMethod ~ SYSPATH/classes/Kohana/Validation.php [ 410 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-08 14:48:27 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-08 14:48:50 --- EMERGENCY: ReflectionException [ 0 ]: Trying to invoke protected method Validation_Image::ccc() from scope ReflectionMethod ~ SYSPATH/classes/Kohana/Validation.php [ 410 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-08 14:48:50 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:410
2013-08-08 14:49:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:49:02 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:49:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:49:31 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:50:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:50:02 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:50:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:50:20 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:50:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:50:52 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:51:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:51:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:51:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:51:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 14:57:12 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::matches() ~ SYSPATH/classes/Kohana/Valid.php [ 546 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:546
2013-08-08 14:57:12 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(546): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 546, Array)
#1 [internal function]: Kohana_Valid::matches('Auth::instance(...')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:546
2013-08-08 14:57:29 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_Valid::matches() ~ SYSPATH/classes/Kohana/Valid.php [ 546 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:546
2013-08-08 14:57:29 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(546): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 546, Array)
#1 [internal function]: Kohana_Valid::matches('Auth::instance(...', '19')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:546
2013-08-08 15:04:20 --- EMERGENCY: ReflectionException [ 0 ]: Function is_member() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:396
2013-08-08 15:04:20 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('is_member')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_Validation->check()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Validation.php:396
2013-08-08 15:04:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 71 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 15:04:39 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 71, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:71
2013-08-08 15:05:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 70 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:05:06 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 70, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:05:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 70 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:05:27 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 70, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:08:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 70 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:08:02 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 70, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:08:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: upload_success ~ APPPATH/classes/Controller/Image.php [ 70 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 15:08:33 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 70, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:70
2013-08-08 16:43:40 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:60
2013-08-08 16:43:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(60): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:60
2013-08-08 16:45:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:61
2013-08-08 16:45:07 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(61): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:61
2013-08-08 20:25:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Image::set_status_message() ~ APPPATH/classes/Controller/Image.php [ 82 ] in :
2013-08-08 20:25:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 20:28:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Image::set_status_message() ~ APPPATH/classes/Controller/Image.php [ 82 ] in :
2013-08-08 20:28:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 20:31:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dbex ~ APPPATH/classes/Controller/Image.php [ 88 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:31:09 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 88, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:32:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dbex ~ APPPATH/classes/Controller/Image.php [ 88 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:32:00 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 88, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:33:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dbex ~ APPPATH/classes/Controller/Image.php [ 88 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:33:12 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 88, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:37:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dbex ~ APPPATH/classes/Controller/Image.php [ 83 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:83
2013-08-08 20:37:18 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 83, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('4d48782f2b77767...')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:83
2013-08-08 20:38:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dbex ~ APPPATH/classes/Controller/Image.php [ 88 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:38:56 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 88, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:88
2013-08-08 20:52:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: dbex ~ APPPATH/classes/Controller/Image.php [ 89 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:89
2013-08-08 20:52:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 89, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/application/classes/Manager/Team.php(76): Kohana_Request->execute()
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(50): Manager_Team->delete_photo('4d48782f2b77767...')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Team->action_delete_photo()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:89
2013-08-08 20:59:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 89 ] in :
2013-08-08 20:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:00:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:00:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:01:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:02:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:02:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:03:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:03:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:03:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:03:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:04:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:04:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:04:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:05:43 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 91 ] in :
2013-08-08 21:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:06:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getMessage() on a non-object ~ APPPATH/classes/Controller/Image.php [ 89 ] in :
2013-08-08 21:06:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:09:57 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 21:09:57 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-08-08 21:12:03 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:12:03 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:12:59 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:12:59 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:13:16 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:13:16 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:13:36 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 63 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:13:36 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:15:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete photo model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1431 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-08 21:15:06 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(69): Kohana_ORM->delete()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:69
2013-08-08 21:16:34 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 62 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:16:34 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:17:28 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 62 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:17:28 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:17:40 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 62 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:17:40 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:18:30 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 62 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:18:30 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:18:47 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 62 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:18:47 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:19:44 --- EMERGENCY: ErrorException [ 0 ]:  ~ APPPATH/classes/Controller/Image.php [ 62 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:19:44 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_delete_team_photo()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#5 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#6 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:84
2013-08-08 21:21:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/classes/Controller/Image.php [ 85 ] in :
2013-08-08 21:21:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 21:47:05 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-08 21:47:05 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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