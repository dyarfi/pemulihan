<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-10 13:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-10 14:02:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_MediaFile::$description ~ MODPATH\_modules\site\views\site\home_page.php [ 104 ]
2013-01-10 14:02:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_MediaFile::$description ~ MODPATH\_modules\site\views\site\home_page.php [ 104 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\views\site\home_page.php(104): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 104, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\default.php(269): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\default.php(202): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#11 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#14 {main}
2013-01-10 14:02:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_MediaFile::$description ~ MODPATH\_modules\site\views\site\home_page.php [ 104 ]
2013-01-10 14:02:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_MediaFile::$description ~ MODPATH\_modules\site\views\site\home_page.php [ 104 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\views\site\home_page.php(104): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 104, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\default.php(269): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\default.php(202): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#11 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\pemulihan\index.php(141): Kohana_Request->execute()
#14 {main}
2013-01-10 17:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/fancybox.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-01-10 17:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/close.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-01-10 17:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/blank.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-01-10 17:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/ancybox.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]