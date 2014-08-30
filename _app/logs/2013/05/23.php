<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-23 00:56:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 129 ]
2013-05-23 00:56:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/page/views/page/backend/page_index.php [ 129 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/page/views/page/backend/page_index.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 129, Array)
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
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-05-23 00:58:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/media/views/media/backend/mediarelease_index.php [ 93 ]
2013-05-23 00:58:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH/_modules/media/views/media/backend/mediarelease_index.php [ 93 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/media/views/media/backend/mediarelease_index.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 93, Array)
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
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-05-23 01:30:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: download ~ MODPATH/_modules/media/views/media/backend/mediarelease_view.php [ 22 ]
2013-05-23 01:30:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: download ~ MODPATH/_modules/media/views/media/backend/mediarelease_view.php [ 22 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/media/views/media/backend/mediarelease_view.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 22, Array)
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
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-05-23 01:34:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: member ~ MODPATH/_modules/site/views/site/media_page.php [ 28 ]
2013-05-23 01:34:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: member ~ MODPATH/_modules/site/views/site/media_page.php [ 28 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/views/site/media_page.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 28, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(267): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(211): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Media))
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#14 {main}
2013-05-23 01:34:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: members ~ MODPATH/_modules/site/views/site/media_page.php [ 28 ]
2013-05-23 01:34:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: members ~ MODPATH/_modules/site/views/site/media_page.php [ 28 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/views/site/media_page.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 28, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(267): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(211): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Media))
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#14 {main}