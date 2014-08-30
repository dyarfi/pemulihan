<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-14 01:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 01:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 01:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 01:45:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 01:45:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 01:57:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 01:57:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 01:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 01:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 02:00:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:00:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 02:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 02:06:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:06:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:23:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:23:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:23:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:23:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:23:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:23:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:23:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:23:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:24:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:24:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:29:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:29:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:41:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:41:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:41:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:41:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:49:15 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 30, 'Model_Setting') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 02:49:15 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 30, 'Model_Setting') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(81): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(144): Model_ModelList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 02:50:57 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 32, 'Model_Setting') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 02:50:57 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 32, 'Model_Setting') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(80): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(144): Model_ModelList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 02:54:58 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 33, 'Model_Ceo') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 02:54:58 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 33, 'Model_Ceo') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(80): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(144): Model_ModelList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 02:55:42 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 34, 'Model_Setting') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 02:55:42 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 34, 'Model_Setting') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(80): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(144): Model_ModelList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 02:57:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:57:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 02:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 02:57:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:57:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:57:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:59:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:59:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/manage/sort/date/desc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-14 02:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/manage/sort/date/desc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 02:59:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:59:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 02:59:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 02:59:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 03:05:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 03:05:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 03:09:56 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_module_list' doesn't exist [ INSERT INTO `mbi_mbi_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 03:09:56 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_module_list' doesn't exist [ INSERT INTO `mbi_mbi_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(242): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(130): Model_ModuleList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 03:13:28 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_module_list' doesn't exist [ INSERT INTO `mbi_mbi_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 03:13:28 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_module_list' doesn't exist [ INSERT INTO `mbi_mbi_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(243): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(130): Model_ModuleList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 03:16:16 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_module_list' doesn't exist [ INSERT INTO `mbi_mbi_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 03:16:16 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_module_list' doesn't exist [ INSERT INTO `mbi_mbi_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(245): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(130): Model_ModuleList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 03:16:29 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_' doesn't exist [ INSERT INTO `mbi_` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-14 03:16:29 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_' doesn't exist [ INSERT INTO `mbi_` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(245): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(130): Model_ModuleList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-14 03:25:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 03:25:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 04:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 04:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 04:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 04:14:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:14:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:14:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:14:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:15:30 --- ERROR: ErrorException [ 1 ]: Class 'Package' not found ~ MODPATH\_app\page\init.php [ 14 ]
2012-08-14 04:15:30 --- STRACE: ErrorException [ 1 ]: Class 'Package' not found ~ MODPATH\_app\page\init.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:15:42 --- ERROR: ErrorException [ 1 ]: Class 'Package' not found ~ MODPATH\_app\page\init.php [ 14 ]
2012-08-14 04:15:42 --- STRACE: ErrorException [ 1 ]: Class 'Package' not found ~ MODPATH\_app\page\init.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:15:48 --- ERROR: ErrorException [ 1 ]: Class 'Package' not found ~ MODPATH\_app\page\init.php [ 14 ]
2012-08-14 04:15:48 --- STRACE: ErrorException [ 1 ]: Class 'Package' not found ~ MODPATH\_app\page\init.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:16:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\_app\page\config\page.php [ 14 ]
2012-08-14 04:16:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\_app\page\config\page.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:17:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Page,PageCategory,PageFile' not found ~ MODPATH\_app\user\classes\model\modulelist.php [ 136 ]
2012-08-14 04:17:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Page,PageCategory,PageFile' not found ~ MODPATH\_app\user\classes\model\modulelist.php [ 136 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:18:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:18:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page_category/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 04:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page_category/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 04:18:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:18:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:18:52 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 3 ]
2012-08-14 04:18:52 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:18:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:18:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page_category/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 04:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page_category/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 04:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page_category/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 04:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page_category/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 04:19:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:19:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:19:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:19:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-14 04:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-14 04:20:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:20:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:20:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategory/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 04:20:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategory/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 04:20:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:20:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategory/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-14 04:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/pagecategory/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 04:20:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:20:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:20:55 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 3 ]
2012-08-14 04:20:55 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:22:14 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php on line 16 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
2012-08-14 04:22:14 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php on line 16 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\www\multibin...', 43, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Backend_Page->__construct(Object(Request), Object(Response))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-14 04:22:36 --- ERROR: ErrorException [ 1 ]: Class 'Page_Category_Model' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 18 ]
2012-08-14 04:22:36 --- STRACE: ErrorException [ 1 ]: Class 'Page_Category_Model' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:23:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\page\classes\controller\backend\page.php [ 32 ]
2012-08-14 04:23:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\page\classes\controller\backend\page.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:23:47 --- ERROR: ErrorException [ 1 ]: Class 'Page_Model' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 34 ]
2012-08-14 04:23:47 --- STRACE: ErrorException [ 1 ]: Class 'Page_Model' not found ~ MODPATH\_app\page\classes\controller\backend\page.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-14 04:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-14 04:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/page/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-14 04:24:45 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 52 ]
2012-08-14 04:24:45 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 52 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(52): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 52, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:26:45 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
2012-08-14 04:26:45 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(61): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 61, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:27:05 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
2012-08-14 04:27:05 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(61): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 61, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:27:29 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
2012-08-14 04:27:29 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(61): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 61, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:27:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Page::$uri ~ MODPATH\_app\page\classes\controller\backend\page.php [ 131 ]
2012-08-14 04:27:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Page::$uri ~ MODPATH\_app\page\classes\controller\backend\page.php [ 131 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(131): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 131, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:27:44 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
2012-08-14 04:27:44 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(61): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 61, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:27:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$uri ~ MODPATH\_app\page\classes\controller\backend\pagecategory.php [ 99 ]
2012-08-14 04:27:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$uri ~ MODPATH\_app\page\classes\controller\backend\pagecategory.php [ 99 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\pagecategory.php(99): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 99, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:27:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:27:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:28:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:28:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:29:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:29:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:29:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
2012-08-14 04:29:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\page\classes\controller\backend\page.php [ 61 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\page.php(61): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 61, Array)
#1 [internal function]: Controller_Backend_Page->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:29:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:29:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:29:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$uri ~ MODPATH\_app\page\classes\controller\backend\pagecategory.php [ 99 ]
2012-08-14 04:29:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$uri ~ MODPATH\_app\page\classes\controller\backend\pagecategory.php [ 99 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\page\classes\controller\backend\pagecategory.php(99): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 99, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-14 04:29:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-14 04:29:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}