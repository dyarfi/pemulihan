<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-12 00:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-12 00:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-12 00:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-12 00:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-12 00:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-12 00:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-12 01:01:45 --- ERROR: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH/_modules/article/classes/controller/backend/article.php [ 337 ]
2012-10-12 01:01:45 --- STRACE: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH/_modules/article/classes/controller/backend/article.php [ 337 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'mktime() [<a hr...', '/Volumes/Data/w...', 337, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/article.php(337): mktime()
#2 [internal function]: Controller_Backend_Article->action_add()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}