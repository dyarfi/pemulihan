<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-11 17:56:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: home_page ~ MODPATH\_modules\site\classes\controller\home.php [ 68 ]
2012-10-11 17:56:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: home_page ~ MODPATH\_modules\site\classes\controller\home.php [ 68 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 68, Array)
#1 [internal function]: Controller_Home->action_index()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-11 18:53:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH\_modules\site\views\site\download_page.php [ 3 ]
2012-10-11 18:53:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_category ~ MODPATH\_modules\site\views\site\download_page.php [ 3 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\views\site\download_page.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 3, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\default.php(223): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\default.php(122): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Download))
#11 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#14 {main}
2012-10-11 19:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-11 19:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-11 19:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-11 19:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-11 19:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-11 19:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}