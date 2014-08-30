<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-09 00:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-09 00:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-09 00:06:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:06:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:13:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:13:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-09 00:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-09 00:14:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:14:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:14:13 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_career' doesn't exist [ SELECT * FROM `mbi_career` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 00:14:13 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_career' doesn't exist [ SELECT * FROM `mbi_career` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(260): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(152): Model_Career->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:15:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:15:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:15:26 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_career' doesn't exist [ SELECT * FROM `mbi_career` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 00:15:26 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_career' doesn't exist [ SELECT * FROM `mbi_career` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(260): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(152): Model_Career->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:15:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:15:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:15:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 156 ]
2012-08-09 00:15:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 156, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:16:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:16:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:16:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:16:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:16:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 156 ]
2012-08-09 00:16:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 156, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:16:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Career::$is_deleted ~ MODPATH\_app\career\views\career\backend\career_index.php [ 85 ]
2012-08-09 00:16:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Career::$is_deleted ~ MODPATH\_app\career\views\career\backend\career_index.php [ 85 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(85): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 85, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-09 00:18:17 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ MODPATH\_app\career\views\career\backend\career_index.php [ 98 ]
2012-08-09 00:18:17 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ MODPATH\_app\career\views\career\backend\career_index.php [ 98 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\www\multibin...', 98, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(98): date('d M Y', '2012-05-01')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#15 {main}
2012-08-09 00:20:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 00:20:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 00:22:54 --- ERROR: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH\_app\career\classes\controller\backend\career.php [ 148 ]
2012-08-09 00:22:54 --- STRACE: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH\_app\career\classes\controller\backend\career.php [ 148 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', 'D:\www\multibin...', 148, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(148): print_r('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 00:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 00:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 00:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 00:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 00:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 00:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 00:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 00:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 00:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 00:30:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\career\classes\model\career.php [ 222 ]
2012-08-09 00:30:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\career\classes\model\career.php [ 222 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 00:41:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH\_app\career\classes\model\career.php [ 225 ]
2012-08-09 00:41:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH\_app\career\classes\model\career.php [ 225 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 00:45:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ MODPATH\_app\career\classes\model\career.php [ 227 ]
2012-08-09 00:45:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ MODPATH\_app\career\classes\model\career.php [ 227 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(227): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 227, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(149): Model_Career->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 00:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 00:53:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: sql_limit ~ MODPATH\_app\career\classes\model\career.php [ 239 ]
2012-08-09 00:53:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: sql_limit ~ MODPATH\_app\career\classes\model\career.php [ 239 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(239): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 239, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(150): Model_Career->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:59:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ascLIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name ascLIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 00:59:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ascLIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name ascLIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(152): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:59:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ascLIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name ascLIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 00:59:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ascLIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name ascLIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(152): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 00:59:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ascLIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name ascLIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 00:59:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ascLIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name ascLIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(152): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 01:02:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 168 ]
2012-08-09 01:02:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 168 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(168): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 168, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 01:03:30 --- ERROR: View_Exception [ 0 ]: The requested view pagination/basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-09 01:03:30 --- STRACE: View_Exception [ 0 ]: The requested view pagination/basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('pagination/basi...')
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(30): Kohana_View->__construct('pagination/basi...', NULL)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(245): Kohana_View::factory('pagination/basi...')
#3 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Themes_DefaultAdmin->after()
#13 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#14 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#17 {main}
2012-08-09 01:05:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:05:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:13:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:13:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:13:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:13:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:15:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:15:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:15:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:15:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:15:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:15:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:16:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:16:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:17:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:17:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:18:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 01:18:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(154): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 01:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/manage/sort/title/desc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-09 01:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/manage/sort/title/desc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-09 01:19:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Career::$uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 62 ]
2012-08-09 01:19:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Career::$uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 62 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(62): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 62, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 01:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:21:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 01:21:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 01:22:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 54 ]
2012-08-09 01:22:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 54 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 54, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 01:23:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 92 ]
2012-08-09 01:23:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 92 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(92): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\multibin...', 92, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 01:57:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 01:57:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 01:57:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ MODPATH\_app\career\views\career\backend\career_index.php [ 179 ]
2012-08-09 01:57:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ MODPATH\_app\career\views\career\backend\career_index.php [ 179 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 01:57:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\career\views\career\backend\career_index.php [ 82 ]
2012-08-09 01:57:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\career\views\career\backend\career_index.php [ 82 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 82, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-09 01:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 01:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 01:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:00:32 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\career\views\career\backend\career_index.php [ 53 ]
2012-08-09 02:00:32 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\career\views\career\backend\career_index.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:01:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\career\views\career\backend\career_index.php [ 74 ]
2012-08-09 02:01:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\career\views\career\backend\career_index.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/admin/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/admin/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/admin/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/admin/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:15:51 --- ERROR: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, array given ~ MODPATH\_app\career\views\career\backend\career_index.php [ 167 ]
2012-08-09 02:15:51 --- STRACE: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, array given ~ MODPATH\_app\career\views\career\backend\career_index.php [ 167 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ucfirst() expec...', 'D:\www\multibin...', 167, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(167): ucfirst(Array)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#15 {main}
2012-08-09 02:17:23 --- ERROR: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, array given ~ MODPATH\_app\career\views\career\backend\career_index.php [ 167 ]
2012-08-09 02:17:23 --- STRACE: ErrorException [ 2 ]: ucfirst() expects parameter 1 to be string, array given ~ MODPATH\_app\career\views\career\backend\career_index.php [ 167 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'ucfirst() expec...', 'D:\www\multibin...', 167, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(167): ucfirst(Array)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Themes_DefaultAdmin->after()
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#15 {main}
2012-08-09 02:18:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:18:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:18:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:18:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:18:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:18:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:19:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\career\views\career\backend\career_index.php [ 180 ]
2012-08-09 02:19:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\career\views\career\backend\career_index.php [ 180 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(180): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 180, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-09 02:23:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\career\views\career\backend\career_index.php [ 171 ]
2012-08-09 02:23:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\career\views\career\backend\career_index.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:23:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-09 02:23:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(171): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(107): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-09 02:23:34 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\career\classes\controller\backend\career.php [ 488 ]
2012-08-09 02:23:34 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\career\classes\controller\backend\career.php [ 488 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(488): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 488, Array)
#1 [internal function]: Controller_Backend_Career->action_view()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:25:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:25:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, -10)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:25:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
2012-08-09 02:25:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(108): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 108, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:26:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$current_uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
2012-08-09 02:26:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$current_uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(108): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 108, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:26:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$to_array ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
2012-08-09 02:26:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$to_array ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(108): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 108, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:26:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:26:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, -10)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:27:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:27:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, -10)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:27:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:27:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, -10)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:27:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:27:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, -10)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:27:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:27:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  name asc LIMIT 10-10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, -10)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:28:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:28:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:29:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:29:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:29:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:29:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:29:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:29:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:31:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:31:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:32:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:32:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:32:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:32:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:32:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Career::$id4 ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
2012-08-09 02:32:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Career::$id4 ~ MODPATH\_app\career\classes\controller\backend\career.php [ 108 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(108): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 108, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:32:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:32:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:33:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:33:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:33:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:33:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order LIMIT 10' at line 1 [ SELECT * FROM `mbi_career`ORDER BY  sort order LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:33:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'sort' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY  sort asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:33:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'sort' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY  sort asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:33:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'sort' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY  sort asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:33:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'sort' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY  sort asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(243): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:37:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:37:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:37:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:37:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:37:36 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
2012-08-09 02:37:36 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:37:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:37:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:37:42 --- ERROR: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
2012-08-09 02:37:42 --- STRACE: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:43:24 --- ERROR: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
2012-08-09 02:43:24 --- STRACE: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:43:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:43:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(420): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:44:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:44:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(420): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:46:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:46:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:46:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:46:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:47:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:47:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:47:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:47:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:48:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:48:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:48:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_permission ~ MODPATH\_app\user\classes\model\modulelist.php [ 423 ]
2012-08-09 02:48:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_permission ~ MODPATH\_app\user\classes\model\modulelist.php [ 423 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(423): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 423, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#2 [internal function]: Controller_Backend_Authentication->action_validate()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-09 02:48:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:48:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:49:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:49:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:49:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:49:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:49:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:49:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(346): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(421): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:52:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order ASC' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'ORDER BY  order ASC  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:52:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order ASC' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'ORDER BY  order ASC  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(358): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(432): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:53:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order ASC' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1' ORDER BY  order ASC  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:53:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order ASC' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1' ORDER BY  order ASC  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(358): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(432): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:55:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order ASC' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'ORDER BY  order ASC  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 02:55:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order ASC' at line 1 [ SELECT * FROM `mbi_module_list` WHERE `parent_id` = '0' AND `level_id_1` = '1'ORDER BY  order ASC  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(358): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(432): Model_ModuleList->find(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(80): Model_ModuleList->get_modules('1')
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-09 02:57:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:11 --- ERROR: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
2012-08-09 02:57:11 --- STRACE: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:57:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:57:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:18 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
2012-08-09 02:57:18 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-09 02:57:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:57:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 02:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 02:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 02:58:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 02:58:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 03:00:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 03:00:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 03:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-09 03:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-09 03:32:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 03:32:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 03:32:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-09 03:32:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-09 03:38:52 --- ERROR: ErrorException [ 1 ]: Class 'Module_List_Model' not found ~ MODPATH\_app\user\classes\controller\backend\modulelist.php [ 80 ]
2012-08-09 03:38:52 --- STRACE: ErrorException [ 1 ]: Class 'Module_List_Model' not found ~ MODPATH\_app\user\classes\controller\backend\modulelist.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}