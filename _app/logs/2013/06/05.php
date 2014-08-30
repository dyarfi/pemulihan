<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-05 00:07:36 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:07:36 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:13:13 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:13:13 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:14:17 --- ERROR: View_Exception [ 0 ]: The requested view blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:14:17 --- STRACE: View_Exception [ 0 ]: The requested view blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('blank_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:14:34 --- ERROR: View_Exception [ 0 ]: The requested view themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:14:34 --- STRACE: View_Exception [ 0 ]: The requested view themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/blank_pa...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/blank_pa...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('themes/blank_pa...')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:14:47 --- ERROR: View_Exception [ 0 ]: The requested view site/themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:14:47 --- STRACE: View_Exception [ 0 ]: The requested view site/themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/themes/bla...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/themes/bla...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('site/themes/bla...')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:15:13 --- ERROR: View_Exception [ 0 ]: The requested view blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:15:13 --- STRACE: View_Exception [ 0 ]: The requested view blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('blank_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:15:17 --- ERROR: View_Exception [ 0 ]: The requested view ../blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:15:17 --- STRACE: View_Exception [ 0 ]: The requested view ../blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('../blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('../blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('../blank_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:15:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/classes/controller/api/api.php [ 57 ]
2013-06-05 00:15:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/_modules/site/classes/controller/api/api.php [ 57 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 57, Array)
#1 [internal function]: Controller_Api_Api->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-05 00:15:24 --- ERROR: View_Exception [ 0 ]: The requested view blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:15:24 --- STRACE: View_Exception [ 0 ]: The requested view blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('blank_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:03 --- ERROR: View_Exception [ 0 ]: The requested view touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:03 --- STRACE: View_Exception [ 0 ]: The requested view touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('touch_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('touch_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('touch_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: mediarelease ~ MODPATH/_modules/site/views/site/touch_page.php [ 11 ]
2013-06-05 00:16:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: mediarelease ~ MODPATH/_modules/site/views/site/touch_page.php [ 11 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/views/site/touch_page.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 11, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultapi.php(1): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(45): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultApi->after()
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Api_Api))
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#14 {main}
2013-06-05 00:16:15 --- ERROR: View_Exception [ 0 ]: The requested view app/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:15 --- STRACE: View_Exception [ 0 ]: The requested view app/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('app/touch_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('app/touch_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('app/touch_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:18 --- ERROR: View_Exception [ 0 ]: The requested view _app/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:18 --- STRACE: View_Exception [ 0 ]: The requested view _app/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('_app/touch_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('_app/touch_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('_app/touch_page')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:32 --- ERROR: View_Exception [ 0 ]: The requested view themes/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:32 --- STRACE: View_Exception [ 0 ]: The requested view themes/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/touch_pa...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/touch_pa...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('themes/touch_pa...')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:35 --- ERROR: View_Exception [ 0 ]: The requested view /themes/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:35 --- STRACE: View_Exception [ 0 ]: The requested view /themes/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('/themes/touch_p...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('/themes/touch_p...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('/themes/touch_p...')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:37 --- ERROR: View_Exception [ 0 ]: The requested view themes/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:37 --- STRACE: View_Exception [ 0 ]: The requested view themes/touch_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/touch_pa...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/touch_pa...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('themes/touch_pa...')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:42 --- ERROR: View_Exception [ 0 ]: The requested view themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:16:42 --- STRACE: View_Exception [ 0 ]: The requested view themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/blank_pa...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/blank_pa...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(51): Kohana_View::factory('themes/blank_pa...')
#3 [internal function]: Controller_Api_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:16:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: meta_keywords ~ APPPATH/views/themes/default.php [ 13 ]
2013-06-05 00:16:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: meta_keywords ~ APPPATH/views/themes/default.php [ 13 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 13, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultapi.php(1): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(45): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultApi->after()
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Api_Api))
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#14 {main}
2013-06-05 00:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:19:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:21:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH/_modules/site/classes/controller/api/api.php [ 17 ]
2013-06-05 00:21:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH/_modules/site/classes/controller/api/api.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-05 00:21:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH/_modules/site/classes/controller/api/api.php [ 17 ]
2013-06-05 00:21:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH/_modules/site/classes/controller/api/api.php [ 17 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api/api.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 17, Array)
#1 [internal function]: Controller_Api_Api->before()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Api_Api))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-05 00:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:24:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat-note was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:24:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arus-hayat-note was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arushayatnote was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/arushayatnote was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/asdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/asdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/asdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/asdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/asdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/asdf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:20 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: two named subpatterns have the same name at offset 33 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2013-06-05 00:27:20 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: two named subpatterns have the same name at offset 33 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/Volumes/Data/w...', 402, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/route.php(402): preg_match('#^(?P<api>[^/.,...', 'api', NULL)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(582): Kohana_Route->matches('api')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(800): Kohana_Request::process_uri('api', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(208): Kohana_Request->__construct('/api/', NULL, Array)
#5 /Volumes/Data/www/pemulihan/index.php(118): Kohana_Request::factory()
#6 {main}
2013-06-05 00:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 00:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:29:09 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
2013-06-05 00:29:09 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 827 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(827): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 827, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(208): Kohana_Request->__construct('/api/', NULL, Array)
#2 /Volumes/Data/www/pemulihan/index.php(118): Kohana_Request::factory()
#3 {main}
2013-06-05 00:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:29:36 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:29:36 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:29:56 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 12 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2013-06-05 00:29:56 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 12 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/Volumes/Data/w...', 402, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/route.php(402): preg_match('#^(?P<classes/a...', 'api', NULL)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(582): Kohana_Route->matches('api')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(800): Kohana_Request::process_uri('api', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(208): Kohana_Request->__construct('/api/', NULL, Array)
#5 /Volumes/Data/www/pemulihan/index.php(118): Kohana_Request::factory()
#6 {main}
2013-06-05 00:30:01 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:01 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:30:38 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:38 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:30:38 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:38 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:30:52 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:52 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:30:53 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:53 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:30:55 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:55 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:30:58 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:30:58 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:31:00 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:31:00 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:31:07 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:31:07 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:34:39 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:34:39 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:34:40 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:34:40 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_Api->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:34:51 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:34:51 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(51): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_ApiV2->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 00:37:20 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:37:20 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(63): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_ApiV2->action_articles()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:37:54 --- ERROR: View_Exception [ 0 ]: The requested view site/blankapi could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:37:54 --- STRACE: View_Exception [ 0 ]: The requested view site/blankapi could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blankapi')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blankapi', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(63): Kohana_View::factory('site/blankapi')
#3 [internal function]: Controller_ApiV2->action_articles()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:38:17 --- ERROR: View_Exception [ 0 ]: The requested view themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:38:17 --- STRACE: View_Exception [ 0 ]: The requested view themes/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/blank_pa...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/blank_pa...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(63): Kohana_View::factory('themes/blank_pa...')
#3 [internal function]: Controller_ApiV2->action_articles()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:38:22 --- ERROR: View_Exception [ 0 ]: The requested view themes/blankapi could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:38:22 --- STRACE: View_Exception [ 0 ]: The requested view themes/blankapi could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/blankapi')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/blankapi', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(63): Kohana_View::factory('themes/blankapi')
#3 [internal function]: Controller_ApiV2->action_articles()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:38:41 --- ERROR: View_Exception [ 0 ]: The requested view themes/defaulapi could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-06-05 00:38:41 --- STRACE: View_Exception [ 0 ]: The requested view themes/defaulapi could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('themes/defaulap...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('themes/defaulap...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(63): Kohana_View::factory('themes/defaulap...')
#3 [internal function]: Controller_ApiV2->action_articles()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-05 00:42:08 --- ERROR: ErrorException [ 1 ]: Cannot break/continue 1 level ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 62 ]
2013-06-05 00:42:08 --- STRACE: ErrorException [ 1 ]: Cannot break/continue 1 level ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-05 00:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 00:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 17:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 17:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-05 17:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/articles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-05 17:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-05 17:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}