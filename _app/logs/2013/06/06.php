<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-06 02:12:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Rest::GET() ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 96 ]
2013-06-06 02:12:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Rest::GET() ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-06 02:12:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Rest::GET() ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 96 ]
2013-06-06 02:12:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Rest::GET() ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-06 17:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/media/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-06 17:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/media/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-06 17:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/media/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-06 17:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/media/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-06 18:27:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
2013-06-06 18:27:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 70, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-06 18:29:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
2013-06-06 18:29:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 70, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-06 18:29:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
2013-06-06 18:29:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 70, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-06 18:29:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
2013-06-06 18:29:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: medias ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 70 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 70, Array)
#1 [internal function]: Controller_ApiV2->action_articles()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-06 19:14:06 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_MediaFile::load_by_media_id() should not be called statically, assuming $this from incompatible context ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 83 ]
2013-06-06 19:14:06 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_MediaFile::load_by_media_id() should not be called statically, assuming $this from incompatible context ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 83 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(83): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Volumes/Data/w...', 83, Array)
#1 [internal function]: Controller_ApiV2->action_medias()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-06 19:18:57 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/kohana/arr.php [ 277 ]
2013-06-06 19:18:57 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/kohana/arr.php [ 277 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 277, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(83): Kohana_Arr::get('file_name', Array)
#2 [internal function]: Controller_ApiV2->action_medias()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#7 {main}
2013-06-06 19:21:32 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/kohana/arr.php [ 277 ]
2013-06-06 19:21:32 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/kohana/arr.php [ 277 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Volumes/Data/w...', 277, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(84): Kohana_Arr::get('file_name', Array)
#2 [internal function]: Controller_ApiV2->action_medias()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#7 {main}