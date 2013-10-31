<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-01 09:20:07 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:20:07 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:30 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:58 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 61 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:25:58 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(61): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 61, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:61
2013-08-01 09:56:07 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/message/classes/Kohana/Message.php [ 47 ] in :
2013-08-01 09:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 09:59:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Message::set_debug() ~ APPPATH/classes/Controller/User.php [ 27 ] in :
2013-08-01 09:59:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 09:59:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/message/classes/Kohana/Message.php [ 54 ] in :
2013-08-01 09:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 10:00:51 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Message::update_config() should not be called statically ~ MODPATH/message/classes/Kohana/Message.php [ 54 ] in /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php:54
2013-08-01 10:00:51 --- DEBUG: #0 /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php(54): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/t/www/moj...', 54, Array)
#1 /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php(54): Kohana_Message::update_config()
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(28): Kohana_Message::instance()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/modules/message/classes/Kohana/Message.php:54
2013-08-01 10:53:28 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/User.php [ 60 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:60
2013-08-01 10:53:28 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(60): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 60, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:60
2013-08-01 13:37:44 --- EMERGENCY: ErrorException [ 1 ]: Class Manager_User contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Serializable::serialize, Serializable::unserialize) ~ MODPATH/manager/classes/Manager/User.php [ 8 ] in :
2013-08-01 13:37:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:46:18 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Manager' not found ~ MODPATH/manager/classes/Kohana/Manager.php [ 3 ] in :
2013-08-01 13:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:47:25 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Manager_Manager' not found ~ MODPATH/manager/classes/Kohana/Manager.php [ 3 ] in :
2013-08-01 13:47:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:47:44 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-01 13:47:44 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-01 13:47:46 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Manager' not found ~ MODPATH/manager/classes/Kohana/Manager.php [ 3 ] in :
2013-08-01 13:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:49:08 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Kohana_Interface_Manager' not found ~ MODPATH/manager/classes/Kohana/Manager.php [ 3 ] in :
2013-08-01 13:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:49:30 --- EMERGENCY: ErrorException [ 1 ]: Class Kohana_Manager contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Kohana_Interface_Manager::say_hi) ~ MODPATH/manager/classes/Kohana/Manager.php [ 11 ] in :
2013-08-01 13:49:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:50:24 --- EMERGENCY: ErrorException [ 1 ]: Class Kohana_Manager contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Kohana_Manager::say_hi) ~ MODPATH/manager/classes/Kohana/Manager.php [ 12 ] in :
2013-08-01 13:50:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:51:07 --- EMERGENCY: ErrorException [ 1 ]: Class Kohana_Manager contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Kohana_Manager::say_hi) ~ MODPATH/manager/classes/Kohana/Manager.php [ 12 ] in :
2013-08-01 13:51:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:54:56 --- EMERGENCY: ErrorException [ 1 ]: Class Kohana_Manager contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Kohana_Manager::say_hi) ~ MODPATH/manager/classes/Kohana/Manager.php [ 12 ] in :
2013-08-01 13:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 13:55:16 --- EMERGENCY: ErrorException [ 1 ]: Class Manager contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Kohana_Manager::say_hi) ~ MODPATH/manager/classes/Manager.php [ 3 ] in :
2013-08-01 13:55:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 14:26:26 --- EMERGENCY: ErrorException [ 1 ]: Class Kohana_Manager contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Kohana_Interface_Manager::say_hi) ~ MODPATH/manager/classes/Kohana/Manager.php [ 13 ] in :
2013-08-01 14:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 14:59:43 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Manager ~ APPPATH/classes/Controller/User.php [ 30 ] in :
2013-08-01 14:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 14:59:54 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Manager ~ APPPATH/classes/Controller/User.php [ 30 ] in :
2013-08-01 14:59:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 14:59:55 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Manager ~ APPPATH/classes/Controller/User.php [ 30 ] in :
2013-08-01 14:59:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 14:59:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Manager ~ APPPATH/classes/Controller/User.php [ 30 ] in :
2013-08-01 14:59:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 20:32:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$container ~ APPPATH/classes/Controller/User.php [ 130 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:130
2013-08-01 20:32:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(130): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 130, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:130
2013-08-01 20:33:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Manager_User::get_view_details() ~ APPPATH/classes/Manager/User.php [ 9 ] in :
2013-08-01 20:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 20:45:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Manager_User::set_view_popver() ~ APPPATH/classes/Manager/User.php [ 67 ] in :
2013-08-01 20:45:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 20:46:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Manager_User::$view_container ~ APPPATH/classes/Manager/User.php [ 12 ] in /home/t/www/moj-klub/application/classes/Manager/User.php:12
2013-08-01 20:46:41 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/User.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(128): Manager_User->set_view_details(Object(View))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Manager/User.php:12
2013-08-01 20:58:10 --- EMERGENCY: ErrorException [ 1 ]: Class Manager_User contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Kohana_Interface_Manager::get_post, Kohana_Interface_Manager::get_orm) ~ APPPATH/classes/Manager/User.php [ 85 ] in :
2013-08-01 20:58:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 21:11:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Manager/User.php [ 65 ] in :
2013-08-01 21:11:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 21:12:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method stdClass::as_array() ~ APPPATH/classes/Manager/User.php [ 65 ] in :
2013-08-01 21:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 21:28:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_avatar' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-01 21:28:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 21:29:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The Avatar property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-01 21:29:39 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('Avatar')
#1 /home/t/www/moj-klub/application/classes/Manager/User.php(73): Kohana_ORM->__get('Avatar')
#2 /home/t/www/moj-klub/application/classes/Manager/User.php(16): Manager_User->get_view_details()
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Manager_User->set_view_details(Object(View))
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-01 21:29:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_avatar' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-08-01 21:29:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 21:32:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_component_about_user ~ APPPATH/views/Container/User/Main.php [ 11 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:11
2013-08-01 21:32:52 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 11, Array)
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
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:11
2013-08-01 21:33:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 35 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:35
2013-08-01 21:33:31 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 35, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:35
2013-08-01 21:33:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 35 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:35
2013-08-01 21:33:36 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 35, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_change_user_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:35
2013-08-01 21:51:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/Header/Loged.php [ 5 ] in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 21:51:04 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Header/Loged.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 5, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Header/Menu/Top.php(27): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Header/Header.php(4): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 21:51:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_component_about_user ~ APPPATH/views/Container/User/Main.php [ 11 ] in /home/t/www/moj-klub/application/views/Container/User/Main.php:11
2013-08-01 21:51:46 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Container/User/Main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 11, Array)
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
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Container/User/Main.php:11
2013-08-01 21:54:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH/views/Component/Info/Success.php [ 10 ] in /home/t/www/moj-klub/application/views/Component/Info/Success.php:10
2013-08-01 21:54:34 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Info/Success.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 10, Array)
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
#12 /home/t/www/moj-klub/application/views/Template.php(20): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Component/Info/Success.php:10
2013-08-01 22:00:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/Header/Loged.php [ 5 ] in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 22:00:57 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Header/Loged.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 5, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Header/Menu/Top.php(27): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Header/Header.php(4): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 22:06:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/Header/Loged.php [ 5 ] in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 22:06:56 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Header/Loged.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 5, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Header/Menu/Top.php(27): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Header/Header.php(4): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 22:11:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/classes/Controller/User.php [ 28 ] in :
2013-08-01 22:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 22:12:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Role class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-01 22:12:38 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('username')
#1 /home/t/www/moj-klub/application/classes/Controller/User.php(30): Kohana_ORM->__get('username')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-01 22:15:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH/classes/Controller/User.php [ 28 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:28
2013-08-01 22:15:05 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 28, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:28
2013-08-01 22:15:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH/classes/Controller/User.php [ 28 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:28
2013-08-01 22:15:56 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 28, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:28
2013-08-01 22:19:37 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-01 22:19:37 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(56): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-01 22:23:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'role' in 'where clause' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`description` AS `description` FROM `roles` AS `role` WHERE `role`  'login' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-01 22:23:03 --- DEBUG: #0 /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(28): Kohana_ORM->find_all()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/modules/database/classes/Kohana/Database/Query.php:251
2013-08-01 22:25:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::last_query() ~ APPPATH/classes/Controller/User.php [ 30 ] in :
2013-08-01 22:25:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 22:26:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::last_query() ~ APPPATH/classes/Controller/User.php [ 29 ] in :
2013-08-01 22:26:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 22:27:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Role::query() ~ APPPATH/classes/Controller/User.php [ 29 ] in :
2013-08-01 22:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-01 22:29:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH/classes/Controller/User.php [ 29 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-08-01 22:29:43 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-08-01 22:30:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH/classes/Controller/User.php [ 29 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-08-01 22:30:14 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-08-01 22:30:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH/classes/Controller/User.php [ 29 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-08-01 22:30:23 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-08-01 23:30:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/Header/Loged.php [ 5 ] in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-08-01 23:30:06 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Header/Loged.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 5, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Header/Menu/Top.php(27): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Header/Header.php(4): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Header/Loged.php:5