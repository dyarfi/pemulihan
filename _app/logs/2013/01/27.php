<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-27 00:55:11 --- ERROR: ErrorException [ 1 ]: Interface 'Template' not found ~ APPPATH/classes/widget.php [ 2 ]
2013-01-27 00:55:11 --- STRACE: ErrorException [ 1 ]: Interface 'Template' not found ~ APPPATH/classes/widget.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 00:56:12 --- ERROR: ErrorException [ 1 ]: Widget cannot implement Controller_Template - it is not an interface ~ APPPATH/classes/widget.php [ 2 ]
2013-01-27 00:56:12 --- STRACE: ErrorException [ 1 ]: Widget cannot implement Controller_Template - it is not an interface ~ APPPATH/classes/widget.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 00:57:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Widget::$_module_name ~ APPPATH/classes/widget.php [ 20 ]
2013-01-27 00:57:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Widget::$_module_name ~ APPPATH/classes/widget.php [ 20 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('test', 'asdf')
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 00:57:46 --- ERROR: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 00:57:46 --- STRACE: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('widget/test')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('widget/test', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('widget/test')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('test', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:00:41 --- ERROR: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:00:41 --- STRACE: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('widget/test')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('widget/test', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('widget/test')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('test', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:00:42 --- ERROR: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:00:42 --- STRACE: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('widget/test')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('widget/test', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('widget/test')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('test', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:00:45 --- ERROR: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:00:45 --- STRACE: View_Exception [ 0 ]: The requested view widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('widget/test')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('widget/test', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('widget/test')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('test', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:01:40 --- ERROR: View_Exception [ 0 ]: The requested view widget/user/backend/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:01:40 --- STRACE: View_Exception [ 0 ]: The requested view widget/user/backend/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('widget/user/bac...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('widget/user/bac...', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('widget/user/bac...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('user/backend/', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:02:06 --- ERROR: View_Exception [ 0 ]: The requested view user/backend//widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:02:06 --- STRACE: View_Exception [ 0 ]: The requested view user/backend//widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('user/backend//w...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('user/backend//w...', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('user/backend//w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('user/backend/', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:02:17 --- ERROR: View_Exception [ 0 ]: The requested view user/backend//widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:02:17 --- STRACE: View_Exception [ 0 ]: The requested view user/backend//widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('user/backend//w...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('user/backend//w...', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('user/backend//w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('user/backend/', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:02:30 --- ERROR: View_Exception [ 0 ]: The requested view /widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:02:30 --- STRACE: View_Exception [ 0 ]: The requested view /widget/test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('/widget/test')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('/widget/test', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('/widget/test')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('user/backend/', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:02:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 26 ]
2013-01-27 01:02:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 26 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('user', 'asdf')
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:06:03 --- ERROR: View_Exception [ 0 ]: The requested view user/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:06:03 --- STRACE: View_Exception [ 0 ]: The requested view user/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('user/widget/')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('user/widget/', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(20): Kohana_View::factory('user/widget/')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(38): Widget->load('user', 'asdf')
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:10:52 --- ERROR: Kohana_Exception [ 0 ]: No views available in user ~ APPPATH/classes/widget.php [ 21 ]
2013-01-27 01:10:52 --- STRACE: Kohana_Exception [ 0 ]: No views available in user ~ APPPATH/classes/widget.php [ 21 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Widget->load('user', Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-27 01:11:12 --- ERROR: View_Exception [ 0 ]: The requested view Array/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:11:12 --- STRACE: View_Exception [ 0 ]: The requested view Array/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('Array/widget/')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('Array/widget/', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(25): Kohana_View::factory('Array/widget/')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Widget->load(Array, Array)
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:11:51 --- ERROR: View_Exception [ 0 ]: The requested view Array/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:11:51 --- STRACE: View_Exception [ 0 ]: The requested view Array/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('Array/widget/')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('Array/widget/', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(25): Kohana_View::factory('Array/widget/')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Widget->load(Array, Array)
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:12:13 --- ERROR: View_Exception [ 0 ]: The requested view Array/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:12:13 --- STRACE: View_Exception [ 0 ]: The requested view Array/widget/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('Array/widget/')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('Array/widget/', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(25): Kohana_View::factory('Array/widget/')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(44): Widget->load(Array, Array)
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:12:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 28 ]
2013-01-27 01:12:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 28 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 28, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(44): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:13:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 28 ]
2013-01-27 01:13:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 28 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 28, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(43): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:13:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 28 ]
2013-01-27 01:13:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 28 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 28, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(40): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:14:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 35 ]
2013-01-27 01:14:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ APPPATH/classes/widget.php [ 35 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 35, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(40): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:14:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Widget::render() ~ APPPATH/classes/widget.php [ 38 ]
2013-01-27 01:14:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Widget::render() ~ APPPATH/classes/widget.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:14:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 38 ]
2013-01-27 01:14:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:15:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 37 ]
2013-01-27 01:15:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:15:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 37 ]
2013-01-27 01:15:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:16:21 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 37 ]
2013-01-27 01:16:21 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 37 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(37): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 37, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(40): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:19:02 --- ERROR: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 01:19:02 --- STRACE: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename(Object(View))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(38): Kohana_View::factory(Object(View))
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(40): Widget->load(Array, Array)
#4 [internal function]: Controller_Backend_UserDashboard->action_index()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#9 {main}
2013-01-27 01:25:43 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:25:43 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:26:03 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:26:03 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:26:45 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:26:45 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:27:10 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:27:10 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:27:40 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Data/www/pemulihan/_app/classes/widget.php on line 14 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2013-01-27 01:27:40 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Data/www/pemulihan/_app/classes/widget.php on line 14 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(14): Kohana_Controller->__construct()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget::instance()
#3 [internal function]: Controller_Backend_UserDashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-27 01:27:57 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:27:57 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:28:19 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:28:19 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:29:00 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
2013-01-27 01:29:00 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/widget.php [ 46 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 46, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:37:49 --- ERROR: Kohana_Exception [ 0 ]: No widget available in widget ~ APPPATH/classes/widget.php [ 35 ]
2013-01-27 01:37:49 --- STRACE: Kohana_Exception [ 0 ]: No widget available in widget ~ APPPATH/classes/widget.php [ 35 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-27 01:38:23 --- ERROR: Kohana_Exception [ 0 ]: No views available in widget ~ APPPATH/classes/widget.php [ 35 ]
2013-01-27 01:38:23 --- STRACE: Kohana_Exception [ 0 ]: No views available in widget ~ APPPATH/classes/widget.php [ 35 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#1 [internal function]: Controller_Backend_UserDashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-27 01:42:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Widget::response() ~ APPPATH/classes/widget.php [ 54 ]
2013-01-27 01:42:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Widget::response() ~ APPPATH/classes/widget.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:43:37 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
2013-01-27 01:43:37 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:43:46 --- ERROR: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
2013-01-27 01:43:46 --- STRACE: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:44:00 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
2013-01-27 01:44:00 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:44:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
2013-01-27 01:44:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:44:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
2013-01-27 01:44:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:44:52 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 59 ]
2013-01-27 01:44:52 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/widget.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:46:26 --- ERROR: ErrorException [ 1 ]: Call to a member function set_global() on a non-object ~ APPPATH/classes/widget.php [ 58 ]
2013-01-27 01:46:26 --- STRACE: ErrorException [ 1 ]: Call to a member function set_global() on a non-object ~ APPPATH/classes/widget.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:49:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant get_class_methods - assumed 'get_class_methods' ~ APPPATH/classes/widget.php [ 27 ]
2013-01-27 01:49:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant get_class_methods - assumed 'get_class_methods' ~ APPPATH/classes/widget.php [ 27 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#2 [internal function]: Controller_Backend_UserDashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-27 01:49:10 --- ERROR: ErrorException [ 2 ]: get_class_methods() expects exactly 1 parameter, 0 given ~ APPPATH/classes/widget.php [ 27 ]
2013-01-27 01:49:10 --- STRACE: ErrorException [ 2 ]: get_class_methods() expects exactly 1 parameter, 0 given ~ APPPATH/classes/widget.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_class_metho...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(27): get_class_methods()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(42): Widget->load(Array, Array)
#3 [internal function]: Controller_Backend_UserDashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-27 01:49:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_call_stack() ~ APPPATH/classes/widget.php [ 27 ]
2013-01-27 01:49:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_call_stack() ~ APPPATH/classes/widget.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:56:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: widget_articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 146 ]
2013-01-27 01:56:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: widget_articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 146 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 146, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 01:57:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 146 ]
2013-01-27 01:57:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 146 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 146, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 01:57:22 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 146 ]
2013-01-27 01:57:22 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-27 01:58:15 --- ERROR: Kohana_Exception [ 0 ]: No views available in  ~ APPPATH/classes/widget.php [ 29 ]
2013-01-27 01:58:15 --- STRACE: Kohana_Exception [ 0 ]: No views available in  ~ APPPATH/classes/widget.php [ 29 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(146): Widget->load()
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 02:02:54 --- ERROR: Kohana_Exception [ 0 ]: No views available in  ~ APPPATH/classes/widget.php [ 29 ]
2013-01-27 02:02:54 --- STRACE: Kohana_Exception [ 0 ]: No views available in  ~ APPPATH/classes/widget.php [ 29 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(146): Widget->load()
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 02:03:11 --- ERROR: Kohana_Exception [ 0 ]: No views available in  ~ APPPATH/classes/widget.php [ 29 ]
2013-01-27 02:03:11 --- STRACE: Kohana_Exception [ 0 ]: No views available in  ~ APPPATH/classes/widget.php [ 29 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(146): Widget->load()
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 02:37:21 --- ERROR: ErrorException [ 2 ]: Illegal offset type in unset ~ SYSPATH/classes/kohana/session.php [ 280 ]
2013-01-27 02:37:21 --- STRACE: ErrorException [ 2 ]: Illegal offset type in unset ~ SYSPATH/classes/kohana/session.php [ 280 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(280): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 280, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(14): Kohana_Session->delete(Array)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(14): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserDashboard->before()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-27 02:37:43 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 63 ]
2013-01-27 02:37:43 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 63 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 63, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(46): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#11 {main}
2013-01-27 02:37:45 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 63 ]
2013-01-27 02:37:45 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 63 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 63, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(46): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#11 {main}
2013-01-27 02:38:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 63 ]
2013-01-27 02:38:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/themes/defaultadmin.php [ 63 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(63): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 63, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(46): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#11 {main}
2013-01-27 02:52:41 --- ERROR: Kohana_Exception [ 0 ]: No views available in table_stats_dashboard ~ APPPATH/classes/widget.php [ 24 ]
2013-01-27 02:52:41 --- STRACE: Kohana_Exception [ 0 ]: No views available in table_stats_dashboard ~ APPPATH/classes/widget.php [ 24 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 02:53:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: arg_num ~ APPPATH/classes/widget.php [ 23 ]
2013-01-27 02:53:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: arg_num ~ APPPATH/classes/widget.php [ 23 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-27 02:53:25 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
2013-01-27 02:53:25 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(23): func_get_arg('table_stats_das...')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#17 {main}
2013-01-27 02:53:31 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
2013-01-27 02:53:31 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(23): func_get_arg('table_stats_das...')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#17 {main}
2013-01-27 02:53:41 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
2013-01-27 02:53:41 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(23): func_get_arg('table_stats_das...')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#17 {main}
2013-01-27 02:53:48 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
2013-01-27 02:53:48 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(23): func_get_arg('t')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#17 {main}
2013-01-27 02:53:52 --- ERROR: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
2013-01-27 02:53:52 --- STRACE: ErrorException [ 2 ]: func_get_arg() expects parameter 1 to be long, string given ~ APPPATH/classes/widget.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'func_get_arg() ...', '/Volumes/Data/w...', 23, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/widget.php(23): func_get_arg('t')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#12 [internal function]: Controller_Backend_BaseAdmin->after()
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#17 {main}
2013-01-27 02:54:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: views ~ APPPATH/classes/widget.php [ 27 ]
2013-01-27 02:54:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: views ~ APPPATH/classes/widget.php [ 27 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-27 02:58:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: views ~ APPPATH/classes/widget.php [ 25 ]
2013-01-27 02:58:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: views ~ APPPATH/classes/widget.php [ 25 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-27 02:58:19 --- ERROR: Kohana_Exception [ 0 ]: No views available in table_stats_dashboard ~ APPPATH/classes/widget.php [ 24 ]
2013-01-27 02:58:19 --- STRACE: Kohana_Exception [ 0 ]: No views available in table_stats_dashboard ~ APPPATH/classes/widget.php [ 24 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 02:58:31 --- ERROR: View_Exception [ 0 ]: The requested view t/widget/t could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 02:58:31 --- STRACE: View_Exception [ 0 ]: The requested view t/widget/t could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('t/widget/t')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('t/widget/t', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(38): Kohana_View::factory('t/widget/t')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(158): Widget->load('table_stats_das...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#18 {main}
2013-01-27 03:07:30 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-01-27 03:07:30 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(42): Kohana_View->__get('content')
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(7): Widget->load('table_stats_das...', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-27 03:08:04 --- ERROR: Kohana_Exception [ 0 ]: No item available in item ~ APPPATH/classes/widget.php [ 34 ]
2013-01-27 03:08:04 --- STRACE: Kohana_Exception [ 0 ]: No item available in item ~ APPPATH/classes/widget.php [ 34 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(7): Widget->load('table_stats_das...', Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 03:08:20 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH/classes/widget.php [ 40 ]
2013-01-27 03:08:20 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH/classes/widget.php [ 40 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 40, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(7): Widget->load('table_stats_das...', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-27 03:08:35 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-01-27 03:08:35 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/widget.php(42): Kohana_View->__get('content')
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(7): Widget->load('table_stats_das...', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-27 03:22:38 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/_modules/user/views/user/widget/table_stats_dashboard.php [ 20 ]
2013-01-27 03:22:38 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$subject ~ MODPATH/_modules/user/views/user/widget/table_stats_dashboard.php [ 20 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/widget/table_stats_dashboard.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 20, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(23): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#13 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#14 [internal function]: Controller_Backend_BaseAdmin->after()
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#16 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#19 {main}
2013-01-27 03:29:11 --- ERROR: View_Exception [ 0 ]: The requested view user/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 03:29:11 --- STRACE: View_Exception [ 0 ]: The requested view user/widget/stats_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('user/widget/sta...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('user/widget/sta...', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(38): Kohana_View::factory('user/widget/sta...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(225): Widget->load('stats_dashboard', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#18 {main}
2013-01-27 03:29:34 --- ERROR: View_Exception [ 0 ]: The requested view user/widget/table_stats_file_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-27 03:29:34 --- STRACE: View_Exception [ 0 ]: The requested view user/widget/table_stats_file_dashboard could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('user/widget/tab...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('user/widget/tab...', NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/widget.php(38): Kohana_View::factory('user/widget/tab...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(247): Widget->load('table_stats_fil...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#18 {main}
2013-01-27 14:10:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/user/views/user/backend/userhistory_index.php [ 3 ]
2013-01-27 14:10:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/user/views/user/backend/userhistory_index.php [ 3 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userhistory_index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(52): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserHistory))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-27 14:36:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 14:36:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}
2013-01-27 14:37:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 14:37:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}
2013-01-27 14:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 14:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}
2013-01-27 14:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 14:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}
2013-01-27 14:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-27 14:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/glyphicons/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}