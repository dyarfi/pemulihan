<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-16 12:59:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ArticleFile::$text ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 12:59:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ArticleFile::$text ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 104, Array)
#1 [internal function]: Controller_Api->action_category()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-03-16 13:05:57 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier 'p' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:05:57 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier 'p' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('//pemulihan/ass...', 'http://localhos...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:06:15 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier 'p' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:06:15 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier 'p' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('//pemulihan//as...', 'http://localhos...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:06:37 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Delimiter must not be alphanumeric or backslash ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:06:37 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Delimiter must not be alphanumeric or backslash ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('\/pemulihan\/as...', 'http://localhos...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:06:58 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: No ending delimiter '/' found ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:06:58 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: No ending delimiter '/' found ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('/\/pemulihan\/a...', 'http://localhos...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-03-16 13:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#3 {main}
2013-03-16 13:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-03-16 13:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#3 {main}
2013-03-16 13:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-03-16 13:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#3 {main}
2013-03-16 13:11:08 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: No ending delimiter '/' found ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:11:08 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: No ending delimiter '/' found ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('/\/pemulihan\/', 'http://localhos...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:12:11 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Delimiter must not be alphanumeric or backslash ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:12:11 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Delimiter must not be alphanumeric or backslash ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('src="/\/pemulih...', 'src="http://loc...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:12:28 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier '\' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:12:28 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier '\' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('/src="/\/pemuli...', 'src="http://loc...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:12:46 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier '\' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:12:46 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Unknown modifier '\' ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('/src=\"/\/pemul...', 'src="http://loc...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-03-16 13:13:12 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: No ending delimiter '/' found ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
2013-03-16 13:13:12 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: No ending delimiter '/' found ~ MODPATH/_modules/site/classes/controller/api.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace() ...', '/Volumes/Data/w...', 104, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/api.php(104): preg_replace('/src="\/pemulih...', 'src="http://loc...', '<table class="c...')
#2 [internal function]: Controller_Api->action_category()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}