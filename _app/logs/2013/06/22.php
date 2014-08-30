<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-22 04:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-22 04:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-22 06:04:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
2013-06-22 06:04:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/backend/ajaxdefault.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(46): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:04:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
2013-06-22 06:04:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/backend/ajaxdefault.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(46): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:05:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
2013-06-22 06:05:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/backend/ajaxdefault.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(47): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:06:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
2013-06-22 06:06:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/backend/ajaxdefault.php [ 7 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/backend/ajaxdefault.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 7, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(51): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:07:57 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/themes/defaultapi.php [ 2 ]
2013-06-22 06:07:57 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/themes/defaultapi.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 06:08:12 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/backend/ajaxdefault.php [ 2 ]
2013-06-22 06:08:12 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/backend/ajaxdefault.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 06:09:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/themes/defaultapi.php [ 3 ]
2013-06-22 06:09:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/themes/defaultapi.php [ 3 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultapi.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(63): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:09:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/themes/defaultapi.php [ 3 ]
2013-06-22 06:09:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/themes/defaultapi.php [ 3 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultapi.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(62): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:09:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/themes/defaultapi.php [ 3 ]
2013-06-22 06:09:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/themes/defaultapi.php [ 3 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultapi.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 3, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(63): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultApi->after()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#10 {main}
2013-06-22 06:42:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$query ~ MODPATH/_modules/site/views/site/media_detail_page.php [ 2 ]
2013-06-22 06:42:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$query ~ MODPATH/_modules/site/views/site/media_detail_page.php [ 2 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/views/site/media_detail_page.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(264): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(212): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Media))
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#14 {main}
2013-06-22 07:37:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/media_detail_page.php [ 62 ]
2013-06-22 07:37:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/_modules/site/views/site/media_detail_page.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:47:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 08:47:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:47:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 08:47:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:48:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 08:48:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(60): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 60, Array)
#1 [internal function]: Controller_Themes_DefaultApi->after()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:48:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 08:48:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultapi.php(60): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 60, Array)
#1 [internal function]: Controller_Themes_DefaultApi->after()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:49:10 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
2013-06-22 08:49:10 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(71): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:49:48 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
2013-06-22 08:49:48 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(71): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:50:06 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
2013-06-22 08:50:06 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(71): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:50:14 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
2013-06-22 08:50:14 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 71 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(71): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 71, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:51:22 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:51:22 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:51:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 08:51:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:51:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:51:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:51:52 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:51:52 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:52:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:52:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:52:25 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:52:25 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:52:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:52:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:52:52 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:52:52 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:53:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 75 ]
2013-06-22 08:53:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:56:13 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:56:13 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:56:36 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:56:36 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:57:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 74 ]
2013-06-22 08:57:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:57:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2013-06-22 08:57:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:57:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 74 ]
2013-06-22 08:57:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:57:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2013-06-22 08:57:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:57:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:57:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 08:58:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 08:58:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 08:58:06 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 08:58:06 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 09:00:47 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
2013-06-22 09:00:47 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 72 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(72): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 72, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-22 09:00:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 09:00:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 09:02:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 09:02:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 09:02:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 09:02:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 09:02:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
2013-06-22 09:02:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/themes/defaultapi.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 09:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apiv2/articles/all/\"\/pemulihan\/assets\/images\/themes\/content\/custom\/images\/03.jpg\" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-06-22 09:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apiv2/articles/all/\"\/pemulihan\/assets\/images\/themes\/content\/custom\/images\/03.jpg\" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#1 {main}
2013-06-22 10:05:16 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
2013-06-22 10:05:16 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 10:05:16 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
2013-06-22 10:05:16 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 10:07:46 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
2013-06-22 10:07:46 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-22 10:07:46 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
2013-06-22 10:07:46 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Themes_DefaultRESTful' not found ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}