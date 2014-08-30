<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-26 00:58:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 143 ]
2013-05-26 00:58:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 143 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 143, Array)
#1 [internal function]: Controller_ApiV2->action_category()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 01:09:33 --- ERROR: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-05-26 01:09:33 --- STRACE: View_Exception [ 0 ]: The requested view site/blank_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('site/blank_page')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('site/blank_page', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(52): Kohana_View::factory('site/blank_page')
#3 [internal function]: Controller_ApiV2->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-05-26 02:08:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/api.php [ 184 ]
2013-05-26 02:08:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/api.php [ 184 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(184): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 184, Array)
#1 [internal function]: Controller_Api->action_category()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 02:43:20 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2013-05-26 02:43:20 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 02:43:23 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2013-05-26 02:43:23 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 02:44:15 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2013-05-26 02:44:15 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 02:44:18 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2013-05-26 02:44:18 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 02:45:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: class_login ~ MODPATH/_modules/site/views/site/media_page.php [ 31 ]
2013-05-26 02:45:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: class_login ~ MODPATH/_modules/site/views/site/media_page.php [ 31 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/views/site/media_page.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 31, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(264): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(211): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Media))
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#14 {main}
2013-05-26 02:54:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: visible ~ MODPATH/_modules/media/views/media/backend/mediarelease_add.php [ 53 ]
2013-05-26 02:54:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: visible ~ MODPATH/_modules/media/views/media/backend/mediarelease_add.php [ 53 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/media/views/media/backend/mediarelease_add.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(57): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#15 {main}
2013-05-26 02:56:02 --- ERROR: ErrorException [ 8 ]: Undefined index: visible ~ MODPATH/_modules/media/classes/controller/backend/mediarelease.php [ 398 ]
2013-05-26 02:56:02 --- STRACE: ErrorException [ 8 ]: Undefined index: visible ~ MODPATH/_modules/media/classes/controller/backend/mediarelease.php [ 398 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/media/classes/controller/backend/mediarelease.php(398): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 398, Array)
#1 [internal function]: Controller_Backend_MediaRelease->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 03:02:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: mediarelease ~ MODPATH/_modules/media/views/media/backend/media_view.php [ 24 ]
2013-05-26 03:02:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: mediarelease ~ MODPATH/_modules/media/views/media/backend/media_view.php [ 24 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/media/views/media/backend/media_view.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 24, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(57): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(104): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(41): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#15 {main}
2013-05-26 03:06:23 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2013-05-26 03:06:23 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-05-26 03:06:25 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
2013-05-26 03:06:25 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 163 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(163): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 163, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}