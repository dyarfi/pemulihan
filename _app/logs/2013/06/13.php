<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-13 13:49:52 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:49:52 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:53:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Home::$session ~ APPPATH/classes/controller/themes/default.php [ 19 ]
2013-06-13 13:53:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Home::$session ~ APPPATH/classes/controller/themes/default.php [ 19 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#7 {main}
2013-06-13 13:53:32 --- ERROR: ErrorException [ 2 ]: session_destroy(): Trying to destroy uninitialized session ~ APPPATH/classes/controller/themes/default.php [ 19 ]
2013-06-13 13:53:32 --- STRACE: ErrorException [ 2 ]: session_destroy(): Trying to destroy uninitialized session ~ APPPATH/classes/controller/themes/default.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'session_destroy...', '/Volumes/Data/w...', 19, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(19): session_destroy()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#3 [internal function]: Controller_Home->before()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#8 {main}
2013-06-13 13:53:41 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:53:41 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:59:11 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:59:11 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:59:12 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:59:12 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:59:12 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:59:12 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:59:13 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:59:13 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:59:13 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:59:13 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}
2013-06-13 13:59:13 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
2013-06-13 13:59:13 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 325 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(21): Kohana_Session::instance('native')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#4 [internal function]: Controller_Home->before()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#9 {main}