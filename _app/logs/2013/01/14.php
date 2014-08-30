<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-14 15:37:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\classes\controller\themes\default.php [ 180 ]
2013-01-14 15:37:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\classes\controller\themes\default.php [ 180 ]
2013-01-14 15:37:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\classes\controller\themes\default.php [ 180 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(180): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 180, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-14 15:38:12 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2013-01-14 15:38:12 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(214): Kohana_View->__get('styles')
#1 [internal function]: Controller_Themes_Default->after()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-14 15:42:14 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\themes\default.php [ 97 ]
2013-01-14 15:42:14 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\themes\default.php [ 97 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(97): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\pemuliha...', 97, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-14 15:43:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\themes\default.php [ 93 ]
2013-01-14 15:43:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\themes\default.php [ 93 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(93): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\pemuliha...', 93, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-14 15:44:06 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\themes\default.php [ 115 ]
2013-01-14 15:44:06 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\themes\default.php [ 115 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(115): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\pemuliha...', 115, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#7 {main}