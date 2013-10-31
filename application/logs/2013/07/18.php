<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-18 10:08:15 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-18 10:08:15 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-07-18 10:20:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::reload() ~ APPPATH/classes/Controller/User.php [ 74 ] in :
2013-07-18 10:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 10:48:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Automatic.php [ 59 ] in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:59
2013-07-18 10:48:09 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(59): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/t/www/moj...', 59, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(82): Controller_Automatic->set_status_message('Warning', 'Correct your da...')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_data()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:59
2013-07-18 13:41:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/views/Component/Menu/User/Details.php [ 12 ] in :
2013-07-18 13:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 14:13:53 --- EMERGENCY: ReflectionException [ 0 ]: Class Controller_Image does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 94 ] in /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php:94
2013-07-18 14:13:53 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#3 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#4 {main} in /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php:94
2013-07-18 14:17:12 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /home/t/www/moj-klub/application/classes/Controller/User.php on line 16 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:43
2013-07-18 14:17:12 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/t/www/moj...', 43, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(16): Kohana_Controller->__construct()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_avatar()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:43
2013-07-18 14:39:25 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-18 14:39:25 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-07-18 15:20:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH/classes/Controller/Image.php [ 12 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:12
2013-07-18 15:20:49 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:12
2013-07-18 15:33:25 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant image - assumed 'image' ~ APPPATH/classes/Controller/Image.php [ 26 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-18 15:33:25 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(26): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 26, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(13): Controller_Image::save_image(Array, 'Avatar', '1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:26
2013-07-18 15:33:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/upload/Avatar/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:33
2013-07-18 15:33:58 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(33): Kohana_Upload::save(Array, NULL, '/home/t/www/moj...')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(13): Controller_Image::save_image(Array, 'Avatar', '1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:33
2013-07-18 15:35:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/upload/Avatar/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:33
2013-07-18 15:35:24 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(33): Kohana_Upload::save(Array, NULL, '/home/t/www/moj...')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(13): Controller_Image::save_image(Array, 'Avatar', '1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:33
2013-07-18 15:35:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/upload/Avatar/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:33
2013-07-18 15:35:48 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(33): Kohana_Upload::save(Array, NULL, '/home/t/www/moj...')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(13): Controller_Image::save_image(Array, 'Avatar', '1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:33
2013-07-18 15:40:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/upload/Avatar/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:35
2013-07-18 15:40:45 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(35): Kohana_Upload::save(Array, NULL, '/home/t/www/moj...')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(14): Controller_Image::save_image(Array, 'Avatar', '1')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:35
2013-07-18 16:39:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Image::get_view_upload(), called in /home/t/www/moj-klub/application/classes/Controller/Image.php on line 35 and defined ~ APPPATH/classes/Controller/Image.php [ 37 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:37
2013-07-18 16:39:21 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(37): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 37, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(35): Controller_Image::get_view_upload()
#2 /home/t/www/moj-klub/application/classes/Controller/Image.php(6): Controller_Image::upload_avatar()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:37
2013-07-18 16:40:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Image::upload_avatar() ~ APPPATH/classes/Controller/Image.php [ 6 ] in :
2013-07-18 16:40:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 20:38:59 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 133169152 bytes) ~ SYSPATH/classes/Kohana/Request.php [ 140 ] in :
2013-07-18 20:38:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 20:39:17 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 133169152 bytes) ~ SYSPATH/classes/Kohana/Request.php [ 140 ] in :
2013-07-18 20:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 20:39:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload/Avatar/51e8365e4a10dinit.php ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/t/www/moj-klub/modules/image/classes/Kohana/Image/GD.php:91
2013-07-18 20:39:26 --- DEBUG: #0 /home/t/www/moj-klub/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/t/www/moj...')
#1 /home/t/www/moj-klub/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home/t/www/moj...')
#2 /home/t/www/moj-klub/application/classes/Controller/Image.php(59): Kohana_Image::factory('/home/t/www/moj...')
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(28): Controller_Image::save_image(Array, 'Avatar', Array)
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload_avatar()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/image/classes/Kohana/Image/GD.php:91
2013-07-18 20:53:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view Component/Form/Change/User could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-18 20:53:20 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Component/Form/...')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('Component/Form/...', NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(100): Kohana_View::factory('Component/Form/...')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_data()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-18 20:55:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 18 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:18
2013-07-18 20:55:54 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 18, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:18
2013-07-18 21:05:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Image.php [ 42 ] in :
2013-07-18 21:05:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 21:14:26 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::size() must be of the type array, string given ~ SYSPATH/classes/Kohana/Upload.php [ 169 ] in /home/t/www/moj-klub/system/classes/Kohana/Upload.php:169
2013-07-18 21:14:26 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Upload.php(169): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/t/www/moj...', 169, Array)
#1 [internal function]: Kohana_Upload::size('100K')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(23): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_upload_avatar()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Upload.php:169
2013-07-18 21:29:51 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-18 21:29:51 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-07-18 21:33:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/Component/Form/Change/Avatar.php [ 13 ] in /home/t/www/moj-klub/application/views/Component/Form/Change/Avatar.php:13
2013-07-18 21:33:21 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Change/Avatar.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 13, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/User/Main.php(9): Kohana_View->__toString()
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
#23 {main} in /home/t/www/moj-klub/application/views/Component/Form/Change/Avatar.php:13
2013-07-18 21:53:39 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `avatars` (`path`, `id`) VALUES ('/home/t/www/moj-klub/upload/avatars/users/1.jpeg', '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-18 21:53:39 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `av...', false, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /home/t/www/moj-klub/application/classes/Controller/Image.php(37): Kohana_ORM->save()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-07-18 21:55:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update avatar model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1354 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:40
2013-07-18 21:55:33 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(40): Kohana_ORM->update()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:40
2013-07-18 21:57:03 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update avatar model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1354 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:43
2013-07-18 21:57:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(43): Kohana_ORM->update()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:43
2013-07-18 21:57:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update avatar model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1354 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:43
2013-07-18 21:57:12 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(43): Kohana_ORM->update()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:43
2013-07-18 21:58:40 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update avatar model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1354 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:44
2013-07-18 21:58:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(44): Kohana_ORM->update()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:44
2013-07-18 21:59:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update avatar model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1354 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:44
2013-07-18 21:59:55 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(44): Kohana_ORM->update()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:44
2013-07-18 22:12:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Image.php [ 14 ] in /home/t/www/moj-klub/application/classes/Controller/Image.php:14
2013-07-18 22:12:37 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Image.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Image.php:14
2013-07-18 22:28:03 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Avatar::validate_user_avatar(), called in /home/t/www/moj-klub/application/classes/Controller/Image.php on line 30 and defined ~ APPPATH/classes/Model/Avatar.php [ 11 ] in /home/t/www/moj-klub/application/classes/Model/Avatar.php:11
2013-07-18 22:28:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Model/Avatar.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 11, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(30): Model_Avatar->validate_user_avatar()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_change_user_avatar()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Model/Avatar.php:11
2013-07-18 22:28:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function avatar() on a non-object ~ APPPATH/classes/Model/Avatar.php [ 14 ] in :
2013-07-18 22:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 22:30:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The avatar property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-18 22:30:02 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('avatar')
#1 /home/t/www/moj-klub/application/classes/Controller/Image.php(14): Kohana_ORM->__get('avatar')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Image->action_show_user_avatar()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Image))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600