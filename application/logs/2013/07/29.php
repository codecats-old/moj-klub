<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-29 09:23:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 09:23:28 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2013-07-29 09:35:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:14
2013-07-29 09:35:01 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(14): Kohana_ORM->find()
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:14
2013-07-29 09:38:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::last_query() ~ APPPATH/classes/Model/Team.php [ 16 ] in :
2013-07-29 09:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 09:39:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Team.php [ 17 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:17
2013-07-29 09:39:09 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 17, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:17
2013-07-29 09:39:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Team.php [ 17 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:17
2013-07-29 09:39:25 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 17, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:17
2013-07-29 09:42:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/Team.php [ 40 ] in :
2013-07-29 09:42:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 09:42:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Team::test() ~ APPPATH/classes/Controller/Team.php [ 15 ] in :
2013-07-29 09:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 09:42:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find() ~ APPPATH/classes/Model/Team.php [ 11 ] in :
2013-07-29 09:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 10:11:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zend_Acl_Role' not found ~ APPPATH/classes/Controller/Team.php [ 15 ] in :
2013-07-29 10:11:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 10:11:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Acl_Role' not found ~ APPPATH/classes/Controller/Team.php [ 15 ] in :
2013-07-29 10:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 10:13:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Role' not found ~ APPPATH/classes/Controller/Team.php [ 15 ] in :
2013-07-29 10:13:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 10:42:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/Controller/Team.php [ 266 ] in :
2013-07-29 10:42:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 10:52:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getRoles() on a non-object ~ APPPATH/classes/Controller/Team.php [ 254 ] in :
2013-07-29 10:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 11:16:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function addResource() ~ APPPATH/classes/Controller/Team.php [ 276 ] in :
2013-07-29 11:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 11:17:17 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'e' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:127
2013-07-29 11:17:17 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(127): Zend\Permissions\Acl\Role\Registry->get('e')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(195): Zend\Permissions\Acl\Acl->getRole('e')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(30): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:127
2013-07-29 11:17:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Team::acl() ~ APPPATH/classes/Controller/Team.php [ 197 ] in :
2013-07-29 11:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 11:17:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Team::acl() ~ APPPATH/classes/Controller/Team.php [ 197 ] in :
2013-07-29 11:17:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 11:18:07 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'e' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:127
2013-07-29 11:18:07 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(127): Zend\Permissions\Acl\Role\Registry->get('e')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(195): Zend\Permissions\Acl\Acl->getRole('e')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(30): Controller_Team->get_view_details(Object(Model_User), Object(Model_Team))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:127
2013-07-29 11:18:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Zend\Permissions\Acl\Role\GenericRole::getResources() ~ APPPATH/classes/Controller/Team.php [ 195 ] in :
2013-07-29 11:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 13:31:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Team.php [ 202 ] in :
2013-07-29 13:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 13:32:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header_menu_access ~ APPPATH/views/Template.php [ 18 ] in /home/t/www/moj-klub/application/views/Template.php:18
2013-07-29 13:32:49 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 18, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(54): Kohana_Controller_Template->after()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(36): Controller_Automatic->after()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Team->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/views/Template.php:18
2013-07-29 13:33:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Automatic.php [ 42 ] in :
2013-07-29 13:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 13:51:54 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/Controller/Team.php [ 312 ] in :
2013-07-29 13:51:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 13:53:57 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'coach' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:548
2013-07-29 13:53:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(548): Zend\Permissions\Acl\Role\Registry->get('coach')
#1 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(432): Zend\Permissions\Acl\Acl->setRule('OP_ADD', 'TYPE_ALLOW', 'coach', 'say', NULL, NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(285): Zend\Permissions\Acl\Acl->allow('coach', 'say')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:548
2013-07-29 13:59:14 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource id 'leave' already exists in the ACL ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 243 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:278
2013-07-29 13:59:14 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(278): Zend\Permissions\Acl\Acl->addResource(Object(Zend\Permissions\Acl\Resource\GenericResource), Object(Zend\Permissions\Acl\Resource\GenericResource))
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_resources()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:278
2013-07-29 14:06:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resources ~ APPPATH/classes/Controller/Team.php [ 325 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 14:06:47 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 325, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 14:15:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resources ~ APPPATH/classes/Controller/Team.php [ 325 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 14:15:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 325, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 14:15:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resources ~ APPPATH/classes/Controller/Team.php [ 325 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 14:15:58 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(325): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 325, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 14:28:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Team.php [ 333 ] in :
2013-07-29 14:28:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 14:28:18 --- EMERGENCY: ErrorException [ 2 ]: next() expects parameter 1 to be array, string given ~ APPPATH/classes/Controller/Team.php [ 327 ] in :
2013-07-29 14:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'next() expects ...', '/home/t/www/moj...', 327, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(327): next('edit')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-07-29 14:29:04 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:327
2013-07-29 14:29:04 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(327): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#6 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Controller_Team->create_structure(Array)
#9 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#11 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#12 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#18 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:327
2013-07-29 14:31:39 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:330
2013-07-29 14:31:39 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(330): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#6 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(333): Controller_Team->create_structure(Array)
#9 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#11 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#12 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#18 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:330
2013-07-29 14:32:34 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:331
2013-07-29 14:32:34 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(331): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#6 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#7 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#8 /home/t/www/moj-klub/application/classes/Controller/Team.php(334): Controller_Team->create_structure(Array)
#9 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#10 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#11 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#12 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#18 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:331
2013-07-29 14:35:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: next ~ APPPATH/classes/Controller/Team.php [ 329 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:329
2013-07-29 14:35:21 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(329): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 329, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(317): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:329
2013-07-29 14:47:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: parent ~ APPPATH/classes/Controller/Team.php [ 353 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:353
2013-07-29 14:47:32 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(353): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 353, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:353
2013-07-29 14:49:30 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:49:30 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(338): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(342): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(342): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:49:46 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:49:46 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(338): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(342): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(342): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:49:50 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:49:50 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(338): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(341): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(341): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:51:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: parent ~ APPPATH/classes/Controller/Team.php [ 354 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:354
2013-07-29 14:51:52 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(354): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 354, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(341): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(341): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:354
2013-07-29 14:56:33 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:337
2013-07-29 14:56:33 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(337): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(340): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(340): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:337
2013-07-29 14:57:01 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 14:57:01 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(338): Zend\Permissions\Acl\Acl->inheritsResource(false, 'management', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(341): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(341): Controller_Team->create_structure(Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#4 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 15:07:26 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 15:07:26 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(338): Zend\Permissions\Acl\Acl->inheritsResource(false, 'description', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:338
2013-07-29 15:08:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Zend\Permissions\Acl\Acl::$admin ~ APPPATH/classes/Controller/Team.php [ 325 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 15:08:09 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(325): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 325, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:325
2013-07-29 15:08:22 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Zend\Permissions\Acl\Acl as array ~ APPPATH/classes/Controller/Team.php [ 325 ] in :
2013-07-29 15:08:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 15:08:53 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource '' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 338 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:340
2013-07-29 15:08:53 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(340): Zend\Permissions\Acl\Acl->inheritsResource(false, 'description', true)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(315): Controller_Team->create_structure(Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:340
2013-07-29 15:09:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/classes/Controller/Team.php [ 318 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:318
2013-07-29 15:09:04 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(318): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 318, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(303): Controller_Team->get_user_allowed_resources('tomek11')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:318
2013-07-29 15:14:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH/classes/Controller/Team.php [ 17 ] in :
2013-07-29 15:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 15:14:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zend_Permission_Acl_Acl' not found ~ APPPATH/classes/Zend/Acl.php [ 10 ] in :
2013-07-29 15:14:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 15:28:28 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role id "login" already exists in the registry ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 48 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:112
2013-07-29 15:28:28 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(112): Zend\Permissions\Acl\Role\Registry->add(Object(Zend\Permissions\Acl\Role\GenericRole), NULL)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(259): Zend\Permissions\Acl\Acl->addRole(Object(Zend\Permissions\Acl\Role\GenericRole))
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_roles(Object(Model_User), Object(Database_MySQL_Result))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:112
2013-07-29 15:29:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Zend_Acl::ggets() ~ APPPATH/classes/Controller/Team.php [ 320 ] in :
2013-07-29 15:29:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 16:42:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-29 16:42:40 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(20): Kohana_ORM->__get('name')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-29 16:52:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Zend/Acl.php [ 34 ] in :
2013-07-29 16:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:03:09 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 17 ] in :
2013-07-29 17:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:03:39 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 18 ] in :
2013-07-29 17:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:06:10 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 18 ] in :
2013-07-29 17:06:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:06:29 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 18 ] in :
2013-07-29 17:06:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:06:39 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 18 ] in :
2013-07-29 17:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:07:32 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 19 ] in :
2013-07-29 17:07:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:08:12 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Zend/Acl.php [ 19 ] in :
2013-07-29 17:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:11:47 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'tomek111' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:722
2013-07-29 17:11:47 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(722): Zend\Permissions\Acl\Role\Registry->get('tomek111')
#1 /home/t/www/moj-klub/application/classes/Zend/Acl.php(13): Zend\Permissions\Acl\Acl->isAllowed('tomek111', 'edit')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(21): Zend_Acl->get_resource_by_user('tomek111', 'edit')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:722
2013-07-29 17:12:08 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'coach' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:722
2013-07-29 17:12:08 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(722): Zend\Permissions\Acl\Role\Registry->get('coach')
#1 /home/t/www/moj-klub/application/classes/Zend/Acl.php(13): Zend\Permissions\Acl\Acl->isAllowed('coach', 'edit')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(21): Zend_Acl->get_resource_by_user('coach', 'edit')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:722
2013-07-29 17:20:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Zend/Acl.php [ 21 ] in :
2013-07-29 17:20:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:37:42 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 12 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:37:42 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:38:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Team::get_user_allowed_resources() ~ APPPATH/classes/Controller/Team.php [ 301 ] in :
2013-07-29 17:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:40:02 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'coach' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:548
2013-07-29 17:40:02 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(548): Zend\Permissions\Acl\Role\Registry->get('coach')
#1 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(432): Zend\Permissions\Acl\Acl->setRule('OP_ADD', 'TYPE_ALLOW', 'coach', 'leave', NULL, NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(284): Zend\Permissions\Acl\Acl->allow('coach', 'leave')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:548
2013-07-29 17:40:46 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 12 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:40:46 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:41:20 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 12 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:41:20 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:41:31 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 12 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:41:31 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:42:26 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 12 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:42:26 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:47:47 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 12 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:47:47 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(12): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:12
2013-07-29 17:48:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zend_Acl' not found ~ APPPATH/classes/Controller/Team.php [ 17 ] in :
2013-07-29 17:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:49:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zend\Permissions\Acl' not found ~ APPPATH/classes/Zend/Acl.php [ 14 ] in :
2013-07-29 17:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 17:49:38 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 17:49:38 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 17:49:57 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 17:49:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:02:56 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:02:56 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:12:57 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:12:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:13:56 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:13:56 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:13:57 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 18:13:57 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 20:20:29 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'coach' not found ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:548
2013-07-29 20:20:29 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(548): Zend\Permissions\Acl\Role\Registry->get('coach')
#1 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(432): Zend\Permissions\Acl\Acl->setRule('OP_ADD', 'TYPE_ALLOW', 'coach', 'leave', NULL, NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(284): Zend\Permissions\Acl\Acl->allow('coach', 'leave')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:548
2013-07-29 20:31:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 282 ] in :
2013-07-29 20:31:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 20:32:20 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 20:32:20 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 20:35:25 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource 'aa' not found ~ APPPATH/classes/Zend/Permissions/Acl/Acl.php [ 292 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:731
2013-07-29 20:35:25 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(731): Zend\Permissions\Acl\Acl->getResource('aa')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(23): Zend\Permissions\Acl\Acl->isAllowed('tomek11', 'aa')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:731
2013-07-29 20:44:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Team.php [ 285 ] in :
2013-07-29 20:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 20:44:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Team.php [ 283 ] in :
2013-07-29 20:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 20:45:33 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Zend_Acl::allow() should be compatible with Zend\Permissions\Acl\Acl::allow($roles = NULL, $resources = NULL, $privileges = NULL, Zend\Permissions\Acl\Assertion\AssertionInterface $assert = NULL) ~ APPPATH/classes/Zend/Acl.php [ 14 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 20:45:33 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(14): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/t/www/moj...', 14, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Core.php(511): require('/home/t/www/moj...')
#2 [internal function]: Kohana_Core::auto_load('Zend_Acl')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(17): spl_autoload_call('Zend_Acl')
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:14
2013-07-29 20:53:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Team.php [ 285 ] in :
2013-07-29 20:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 20:55:10 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Parent Role id "playera" does not exist ~ APPPATH/classes/Zend/Permissions/Acl/Role/Registry.php [ 69 ] in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:112
2013-07-29 20:55:10 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php(112): Zend\Permissions\Acl\Role\Registry->add(Object(Zend\Permissions\Acl\Role\GenericRole), 'playera')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(278): Zend\Permissions\Acl\Acl->addRole('capitan', 'playera')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Zend/Permissions/Acl/Acl.php:112
2013-07-29 21:01:33 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Zend/Acl.php [ 29 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:29
2013-07-29 21:01:33 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(29): Kohana_Core::error_handler(8, 'Array to string...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(286): Zend_Acl->__call('costam', Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(286): Zend_Acl->costam('1')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:29
2013-07-29 21:22:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Zend\Permissions\Acl\Acl::__call() ~ APPPATH/classes/Zend/Acl.php [ 43 ] in :
2013-07-29 21:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:23:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant parent - assumed 'parent' ~ APPPATH/classes/Zend/Acl.php [ 43 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:43
2013-07-29 21:23:58 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(43): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 43, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(286): Zend_Acl->__call('remove_role_sif...', Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(286): Zend_Acl->remove_role_sif_exist('1', '2')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:43
2013-07-29 21:24:22 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Zend\Permissions\Acl\Acl::$name ~ APPPATH/classes/Zend/Acl.php [ 43 ] in :
2013-07-29 21:24:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:24:39 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'name' ~ APPPATH/classes/Zend/Acl.php [ 43 ] in :
2013-07-29 21:24:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:25:48 --- EMERGENCY: Exception [ 0 ]: function remove_role_sif_exist is undefined ~ APPPATH/classes/Zend/Acl.php [ 43 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:286
2013-07-29 21:25:48 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(286): Zend_Acl->__call('remove_role_sif...', Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(286): Zend_Acl->remove_role_sif_exist('1', '2')
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:286
2013-07-29 21:28:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function addRole() on a non-object ~ APPPATH/classes/Controller/Team.php [ 278 ] in :
2013-07-29 21:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:28:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 278 ] in :
2013-07-29 21:28:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:29:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_role_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 278 ] in :
2013-07-29 21:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:29:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add_roles_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 278 ] in :
2013-07-29 21:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:29:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:29:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:29:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:29:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:30:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:30:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:30:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:30:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:30:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:30:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:30:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:30:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:31:38 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:31:38 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:31:40 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant parent - assumed 'parent' ~ APPPATH/classes/Zend/Acl.php [ 39 ] in /home/t/www/moj-klub/application/classes/Zend/Acl.php:39
2013-07-29 21:31:40 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Zend/Acl.php(39): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/t/www/moj...', 39, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(276): Zend_Acl->__call('allow_if_exist', Array)
#2 /home/t/www/moj-klub/application/classes/Controller/Team.php(276): Zend_Acl->allow_if_exist('player', 'leave')
#3 /home/t/www/moj-klub/application/classes/Controller/Team.php(19): Controller_Team->prepare_permissions()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/classes/Zend/Acl.php:39
2013-07-29 21:31:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:32:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function allow_if_exist() on a non-object ~ APPPATH/classes/Controller/Team.php [ 279 ] in :
2013-07-29 21:32:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:43:14 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:43:14 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:44:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Role class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-29 21:44:54 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('username')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(27): Kohana_ORM->__get('username')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-29 21:48:12 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:48:12 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:50:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_resource_by_user() on a non-object ~ APPPATH/classes/Controller/Team.php [ 242 ] in :
2013-07-29 21:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:51:26 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:51:26 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/application/classes/Controller/Team.php(13): Controller_Automatic->before()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-29 21:51:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/Controller/Team.php [ 16 ] in :
2013-07-29 21:51:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-29 21:53:13 --- EMERGENCY: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Role class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-29 21:53:13 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('username')
#1 /home/t/www/moj-klub/application/classes/Controller/Team.php(21): Kohana_ORM->__get('username')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-29 21:53:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH/classes/Controller/Team.php [ 15 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:15
2013-07-29 21:53:52 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 15, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:15
2013-07-29 21:53:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH/classes/Controller/Team.php [ 15 ] in /home/t/www/moj-klub/application/classes/Controller/Team.php:15
2013-07-29 21:53:55 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Team.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 15, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Team->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Team.php:15