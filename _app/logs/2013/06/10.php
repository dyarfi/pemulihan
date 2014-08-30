<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-10 09:14:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/api.php [ 185 ]
2013-06-10 09:14:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH/_modules/site/classes/controller/api.php [ 185 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(185): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 185, Array)
#1 [internal function]: Controller_Api->action_category()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#6 {main}