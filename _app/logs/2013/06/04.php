<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-04 19:13:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/api.php [ 185 ]
2013-06-04 19:13:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/api.php [ 185 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 185, Array)
#1 [internal function]: Controller_Api->action_category()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-04 19:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-04 19:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-04 19:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-04 19:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-04 19:14:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 140 ]
2013-06-04 19:14:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/apiv2.php [ 140 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/apiv2.php(140): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 140, Array)
#1 [internal function]: Controller_ApiV2->action_category()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_ApiV2))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}
2013-06-04 19:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-04 19:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/member/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}