<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-03 04:08:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:08:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL multibintang-career_ko3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:10:54 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 04:10:54 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\kohana\setting.php(44): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\themes\default.php(38): Kohana_Setting->get(Array)
#4 D:\www\multibintang-career_ko3\_app\classes\controller\frontend\home.php(15): Controller_Themes_Default->before()
#5 [internal function]: Controller_Frontend_Home->before()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Frontend_Home))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#10 {main}
2012-08-03 04:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 04:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:14:18 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 04:14:18 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\kohana\setting.php(44): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\themes\default.php(38): Kohana_Setting->get(Array)
#4 D:\www\multibintang-career_ko3\_app\classes\controller\frontend\home.php(15): Controller_Themes_Default->before()
#5 [internal function]: Controller_Frontend_Home->before()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Frontend_Home))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#10 {main}
2012-08-03 04:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:14:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-08-03 04:14:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:16:40 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH\_app/admin' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2012-08-03 04:16:40 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'admin' at 'MODPATH\_app/admin' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 D:\www\multibintang-career_ko3\_app\bootstrap.php(128): Kohana_Core::modules(Array)
#1 D:\www\multibintang-career_ko3\index.php(127): require('D:\www\multibin...')
#2 {main}
2012-08-03 04:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logoff was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logoff was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logoff was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logoff was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:23:06 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 04:23:06 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\kohana\setting.php(44): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\themes\default.php(38): Kohana_Setting->get(Array)
#4 D:\www\multibintang-career_ko3\_app\classes\controller\frontend\home.php(15): Controller_Themes_Default->before()
#5 [internal function]: Controller_Frontend_Home->before()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Frontend_Home))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#10 {main}
2012-08-03 04:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:31:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:32:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Base::$session ~ APPPATH\classes\controller\backend\base.php [ 18 ]
2012-08-03 04:32:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Base::$session ~ APPPATH\classes\controller\backend\base.php [ 18 ]
--
#0 D:\www\multibintang-career_ko3\_app\classes\controller\backend\base.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 18, Array)
#1 [internal function]: Controller_Backend_Base->before()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 04:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 04:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 04:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:42:47 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-08-03 04:42:47 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 04:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 04:44:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH\_app\user\views\user\login-admin.php [ 40 ]
2012-08-03 04:44:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH\_app\user\views\user\login-admin.php [ 40 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\login-admin.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 40, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(33): Kohana_View->render('user/login-admi...')
#4 [internal function]: Controller_Backend_Authentication->action_index()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#9 {main}
2012-08-03 04:46:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
2012-08-03 04:46:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:46:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
2012-08-03 04:46:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:47:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
2012-08-03 04:47:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:50:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
2012-08-03 04:50:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 178 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:53:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 181 ]
2012-08-03 04:53:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\user\classes\model\modellist.php [ 181 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:54:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 197 ]
2012-08-03 04:54:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 197 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:56:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 199 ]
2012-08-03 04:56:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 04:56:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH\_app\user\classes\model\modellist.php [ 125 ]
2012-08-03 04:56:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH\_app\user\classes\model\modellist.php [ 125 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:01:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ DELETE FROM `mbi_model_list` Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 05:01:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ DELETE FROM `mbi_model_list` Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(125): Kohana_Database_MySQL->query('DELETE', 'DELETE FROM `mb...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(204): Model_ModelList->delete_by_module_id(1)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 05:01:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH\_app\user\classes\model\modellist.php [ 125 ]
2012-08-03 05:01:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::delete() ~ MODPATH\_app\user\classes\model\modellist.php [ 125 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:04:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH\_app\user\classes\model\modellist.php [ 127 ]
2012-08-03 05:04:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH\_app\user\classes\model\modellist.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:04:55 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_mbi_model_list' doesn't exist [ DELETE FROM `mbi_mbi_model_list` WHERE `module_id` = (1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 05:04:55 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_mbi_model_list' doesn't exist [ DELETE FROM `mbi_mbi_model_list` WHERE `module_id` = (1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(125): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(204): Model_ModelList->delete_by_module_id(1)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#9 {main}
2012-08-03 05:05:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH\_app\user\classes\model\modellist.php [ 127 ]
2012-08-03 05:05:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH\_app\user\classes\model\modellist.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:05:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 205 ]
2012-08-03 05:05:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 205 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:05:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 205 ]
2012-08-03 05:05:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::table_exists() ~ MODPATH\_app\user\classes\model\modulelist.php [ 205 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 05:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 05:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:08:54 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 05:08:54 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_setting' doesn't exist [ SELECT * FROM `mbi_setting` WHERE `status` = 1 AND `parameter` LIKE '%socmed_%' LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\kohana\setting.php(44): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\themes\default.php(38): Kohana_Setting->get(Array)
#4 D:\www\multibintang-career_ko3\_app\classes\controller\frontend\home.php(15): Controller_Themes_Default->before()
#5 [internal function]: Controller_Frontend_Home->before()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Frontend_Home))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#10 {main}
2012-08-03 05:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 05:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:09:12 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 1, 'Model_User') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 05:09:12 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 1, 'Model_User') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(81): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(146): Model_ModelList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#9 {main}
2012-08-03 05:11:22 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 2, 'Model_Career') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 05:11:22 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_mbi_model_list' doesn't exist [ INSERT INTO `mbi_mbi_model_list` (`id`, `module_id`, `model`) VALUES (0, 2, 'Model_Career') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `mb...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modellist.php(81): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(146): Model_ModelList->add(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\authentication.php(74): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#9 {main}
2012-08-03 05:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 05:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 05:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:13:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_level ~ MODPATH\_app\user\views\user\backend\user_add.php [ 54 ]
2012-08-03 05:13:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_level ~ MODPATH\_app\user\views\user\backend\user_add.php [ 54 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\user_add.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 54, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_User))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 05:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 05:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:20:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
2012-08-03 05:20:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#13 {main}
2012-08-03 05:21:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
2012-08-03 05:21:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#13 {main}
2012-08-03 05:23:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
2012-08-03 05:23:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#13 {main}
2012-08-03 05:23:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 35 ]
2012-08-03 05:23:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 35 ]
--
#0 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 35, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#2 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_DefaultAdmin->after()
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#12 {main}
2012-08-03 05:25:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
2012-08-03 05:25:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#3 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#13 {main}
2012-08-03 05:25:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
2012-08-03 05:25:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\user\classes\model\user.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(75): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#3 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#13 {main}
2012-08-03 05:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:26:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:26:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/module_list/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 05:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/module_list/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:26:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:26:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:27:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:27:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 05:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 05:27:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:27:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:27:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:27:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:27:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$session ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 18 ]
2012-08-03 05:27:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$session ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 18 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 18, Array)
#1 [internal function]: Controller_Backend_UserLevel->before()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:27:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:27:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:27:58 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
2012-08-03 05:27:58 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:28:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:28:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:28:03 --- ERROR: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
2012-08-03 05:28:03 --- STRACE: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:28:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:28:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 05:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 05:28:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:28:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:28:15 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
2012-08-03 05:28:15 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 05:28:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:28:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:28:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:28:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 05:28:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 05:28:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 13:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 13:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:05:17 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:05:17 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:05:24 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:05:24 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:05:25 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:05:25 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:05:34 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:05:34 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(307): Model_User->load()
#3 [internal function]: Controller_Backend_User->action_view()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 14:05:38 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:05:38 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:06:59 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:06:59 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:07:12 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:07:12 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:07:13 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:07:13 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:07:15 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:07:15 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:07:40 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:07:40 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:07:44 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:07:44 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(24): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(44): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 14:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:27 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 14:08:27 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_user' doesn't exist [ SELECT * FROM mbi_user WHERE `id` = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(78): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#3 D:\www\multibintang-career_ko3\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(98): Controller_Acl::instance()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 14:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:09:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:09:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:09:12 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
2012-08-03 14:09:12 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ] 1126 ]
2012-08-03 14:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 14:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:10:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:10:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:10:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$session ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 18 ]
2012-08-03 14:10:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$session ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 18 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 18, Array)
#1 [internal function]: Controller_Backend_UserLevel->before()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:10:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:10:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:10:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:10:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:10:59 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
2012-08-03 14:10:59 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 14:11:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:11:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:11:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:11:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 54 ]
2012-08-03 14:11:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 54 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 54, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ][ 1126 ]
2012-08-03 14:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ][ 1126 ]
2012-08-03 14:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:13:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:16:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:16:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH\_app\user\config\user.php [ 5 ]
2012-08-03 14:17:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ MODPATH\_app\user\config\user.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:17:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:18:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:18:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:18:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 14:18:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 14:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 14:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 14:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 15:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:50:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:52:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:52:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:52:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:52:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$session ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 18 ]
2012-08-03 15:52:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$session ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 18 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 18, Array)
#1 [internal function]: Controller_Backend_UserLevel->before()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:53:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:53:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:53:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:53:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:53:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:54:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:54:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/page_white.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/pencil.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/list-corner.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:54:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:54:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:54:07 --- ERROR: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
2012-08-03 15:54:07 --- STRACE: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 15:54:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 15:54:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 15:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 15:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 15:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 15:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 15:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-03 15:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 15:57:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 192 ]
2012-08-03 15:57:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 192 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 15:58:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::get() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 202 ]
2012-08-03 15:58:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::get() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 15:59:15 --- ERROR: ErrorException [ 1 ]: Class 'MY_Ceo' not found ~ MODPATH\_app\ceo\classes\model\ceo.php [ 209 ]
2012-08-03 15:59:15 --- STRACE: ErrorException [ 1 ]: Class 'MY_Ceo' not found ~ MODPATH\_app\ceo\classes\model\ceo.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 15:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 15:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 15:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 16:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 16:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 16:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 16:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 16:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 16:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 16:04:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
2012-08-03 16:04:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:04:43 --- ERROR: ErrorException [ 1 ]: Call to undefined function array_key() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
2012-08-03 16:04:43 --- STRACE: ErrorException [ 1 ]: Call to undefined function array_key() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:04:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
2012-08-03 16:04:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(199): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:05:14 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
2012-08-03 16:05:14 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(199): array_values('asc')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:06:26 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
2012-08-03 16:06:26 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(199): explode(' ', Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:06:39 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
2012-08-03 16:06:39 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 199 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(199): explode(' ', Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:11:33 --- ERROR: ErrorException [ 8 ]: Use of undefined constant DB - assumed 'DB' ~ MODPATH\_app\ceo\classes\model\ceo.php [ 198 ]
2012-08-03 16:11:33 --- STRACE: ErrorException [ 8 ]: Use of undefined constant DB - assumed 'DB' ~ MODPATH\_app\ceo\classes\model\ceo.php [ 198 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(198): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 198, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:12:53 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
2012-08-03 16:12:53 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 201, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(201): explode('', Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:13:39 --- ERROR: ErrorException [ 2 ]: explode() [function.explode]: Empty delimiter ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
2012-08-03 16:13:39 --- STRACE: ErrorException [ 2 ]: explode() [function.explode]: Empty delimiter ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() [<a h...', 'D:\www\multibin...', 201, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(201): explode('', 'Array Array')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:13:52 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
2012-08-03 16:13:52 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 201, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(201): explode('', Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:14:03 --- ERROR: ErrorException [ 2 ]: explode() [function.explode]: Empty delimiter ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
2012-08-03 16:14:03 --- STRACE: ErrorException [ 2 ]: explode() [function.explode]: Empty delimiter ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() [<a h...', 'D:\www\multibin...', 201, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(201): explode('', 'asc')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:14:20 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
2012-08-03 16:14:20 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(201): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\multibin...', 201, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:15:42 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
2012-08-03 16:15:42 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 201 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 201, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(201): explode(' ', Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:20:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\_app\ceo\classes\model\ceo.php [ 202 ]
2012-08-03 16:20:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\_app\ceo\classes\model\ceo.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:21:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
2012-08-03 16:21:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:22:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: var ~ MODPATH\_app\ceo\classes\model\ceo.php [ 203 ]
2012-08-03 16:22:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: var ~ MODPATH\_app\ceo\classes\model\ceo.php [ 203 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(203): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 203, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:33:51 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\ceo\classes\model\ceo.php [ 204 ]
2012-08-03 16:33:51 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\ceo\classes\model\ceo.php [ 204 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(204): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 204, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:34:02 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\ceo\classes\model\ceo.php [ 204 ]
2012-08-03 16:34:02 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\ceo\classes\model\ceo.php [ 204 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(204): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 204, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:34:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_var ~ MODPATH\_app\ceo\classes\model\ceo.php [ 204 ]
2012-08-03 16:34:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_var ~ MODPATH\_app\ceo\classes\model\ceo.php [ 204 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(204): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 204, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:39:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 213 ]
2012-08-03 16:39:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\_app\ceo\classes\model\ceo.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:39:34 --- ERROR: ErrorException [ 8 ]: Undefined index: asc ~ MODPATH\_app\ceo\classes\model\ceo.php [ 205 ]
2012-08-03 16:39:34 --- STRACE: ErrorException [ 8 ]: Undefined index: asc ~ MODPATH\_app\ceo\classes\model\ceo.php [ 205 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(205): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 205, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:41:13 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
2012-08-03 16:41:13 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 206, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(206): explode('$', Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:42:10 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
2012-08-03 16:42:10 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'D:\www\multibin...', 206, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(206): implode(' ', 'desc')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:46:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\ceo\classes\model\ceo.php [ 208 ]
2012-08-03 16:46:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\ceo\classes\model\ceo.php [ 208 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 16:50:29 --- ERROR: ErrorException [ 8 ]: Undefined index: asc ~ MODPATH\_app\ceo\classes\model\ceo.php [ 209 ]
2012-08-03 16:50:29 --- STRACE: ErrorException [ 8 ]: Undefined index: asc ~ MODPATH\_app\ceo\classes\model\ceo.php [ 209 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(209): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 209, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:54:27 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_app\ceo\classes\model\ceo.php [ 212 ]
2012-08-03 16:54:27 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_app\ceo\classes\model\ceo.php [ 212 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'D:\www\multibin...', 212, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(212): implode('', '', 'asc')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:56:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: operator ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
2012-08-03 16:56:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: operator ~ MODPATH\_app\ceo\classes\model\ceo.php [ 206 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(206): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 206, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#2 [internal function]: Controller_Backend_Ceo->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#7 {main}
2012-08-03 16:57:22 --- ERROR: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 207 ]
2012-08-03 16:57:22 --- STRACE: ErrorException [ 2 ]: array_values() expects parameter 1 to be array, string given ~ MODPATH\_app\ceo\classes\model\ceo.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_values() ...', 'D:\www\multibin...', 207, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(207): array_values('name > id')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 16:57:42 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_app\ceo\classes\model\ceo.php [ 207 ]
2012-08-03 16:57:42 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_app\ceo\classes\model\ceo.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'D:\www\multibin...', 207, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(207): implode(' > ', 'name > id')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(150): Model_Ceo->find('', Array, NULL, '')
#3 [internal function]: Controller_Backend_Ceo->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 17:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:05:18 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 69 ]
2012-08-03 17:05:18 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:06:30 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 70 ]
2012-08-03 17:06:30 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:06:36 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 75 ]
2012-08-03 17:06:36 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:06:59 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 79 ]
2012-08-03 17:06:59 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:06:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:06:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:03 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 82 ]
2012-08-03 17:09:03 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:16 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 89 ]
2012-08-03 17:09:16 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Ceo as array ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 146 ]
2012-08-03 17:09:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 146 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_index.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 146, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ][ 1126 ]
2012-08-03 17:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 17:10:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 17:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:10:55 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\career\classes\controller\backend\career.php [ 379 ]
2012-08-03 17:10:55 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\career\classes\controller\backend\career.php [ 379 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ][ 1126 ]
2012-08-03 17:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ] 1126 ]
2012-08-03 17:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/find_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/add_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 378 ]
2012-08-03 17:26:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 378 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(378): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 378, Array)
#1 [internal function]: Controller_Backend_Ceo->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:26:23 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 629 ]
2012-08-03 17:26:23 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 629 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(629): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 629, Array)
#1 [internal function]: Controller_Backend_Ceo->action_view()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:26:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 378 ]
2012-08-03 17:26:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 378 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(378): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 378, Array)
#1 [internal function]: Controller_Backend_Ceo->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:26:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 378 ]
2012-08-03 17:26:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 378 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(378): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 378, Array)
#1 [internal function]: Controller_Backend_Ceo->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:27:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 [ SELECT * FROM `mbi_ceo` WHERE `id` = ''1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-03 17:27:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 [ SELECT * FROM `mbi_ceo` WHERE `id` = ''1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(202): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\model\ceo.php(73): Model_Ceo->find(Array, '', 1)
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(381): Model_Ceo->load()
#3 [internal function]: Controller_Backend_Ceo->action_edit()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 17:27:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 382 ]
2012-08-03 17:27:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 382 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 17:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:27:35 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 630 ]
2012-08-03 17:27:35 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 630 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(630): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 630, Array)
#1 [internal function]: Controller_Backend_Ceo->action_view()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:27:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 382 ]
2012-08-03 17:27:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 382 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 17:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 17:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 17:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 17:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 17:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 17:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 17:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 17:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 17:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-03 17:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/ceo/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#3 {main}
2012-08-03 17:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]6 ]
2012-08-03 17:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:29:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Ceo::$file ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 535 ]
2012-08-03 17:29:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Ceo::$file ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 535 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(535): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 535, Array)
#1 [internal function]: Controller_Backend_Ceo->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:30:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
2012-08-03 17:30:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:30:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
2012-08-03 17:30:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:31:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
2012-08-03 17:31:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:32:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
2012-08-03 17:32:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\ceo\classes\model\ceofile.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:33:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Ceo::$type ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 563 ]
2012-08-03 17:33:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Ceo::$type ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 563 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(563): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 563, Array)
#1 [internal function]: Controller_Backend_Ceo->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:33:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 565 ]
2012-08-03 17:33:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 565 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 17:35:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:24 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 632 ]
2012-08-03 17:35:24 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 632 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(632): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 632, Array)
#1 [internal function]: Controller_Backend_Ceo->action_view()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1
2012-08-03 17:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:39:07 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
2012-08-03 17:39:07 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:39:46 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
2012-08-03 17:39:46 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:06 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
2012-08-03 17:40:06 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
2012-08-03 17:40:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
2012-08-03 17:40:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_edit.php(3): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 3, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:26 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
2012-08-03 17:40:26 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
2012-08-03 17:40:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 3 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_edit.php(3): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 3, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:40 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
2012-08-03 17:40:40 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:04 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
2012-08-03 17:41:04 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_edit.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:41:24 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 633 ]
2012-08-03 17:41:24 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 633 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(633): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 633, Array)
#1 [internal function]: Controller_Backend_Ceo->action_view()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:42:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 633 ]
2012-08-03 17:42:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 633 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(633): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 633, Array)
#1 [internal function]: Controller_Backend_Ceo->action_view()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:43:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Ceo::_auto_image_manipulation() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 656 ]
2012-08-03 17:43:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Ceo::_auto_image_manipulation() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 656 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:44:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 827 ]
2012-08-03 17:44:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 827 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:44:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 812 ]
2012-08-03 17:44:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 812 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:44:35 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No error ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 815 ]
2012-08-03 17:44:35 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No error ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 815 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', 'D:\www\multibin...', 815, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(815): mkdir('')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(656): Controller_Backend_Ceo->_auto_image_manipulation()
#3 [internal function]: Controller_Backend_Ceo->action_view()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 17:44:58 --- ERROR: ErrorException [ 2 ]: scandir() [function.scandir]: Directory name cannot be empty ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 818 ]
2012-08-03 17:44:58 --- STRACE: ErrorException [ 2 ]: scandir() [function.scandir]: Directory name cannot be empty ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 818 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'scandir() [<a h...', 'D:\www\multibin...', 818, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(818): scandir('')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(656): Controller_Backend_Ceo->_auto_image_manipulation()
#3 [internal function]: Controller_Backend_Ceo->action_view()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 17:45:01 --- ERROR: ErrorException [ 2 ]: scandir() [function.scandir]: Directory name cannot be empty ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 818 ]
2012-08-03 17:45:01 --- STRACE: ErrorException [ 2 ]: scandir() [function.scandir]: Directory name cannot be empty ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 818 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'scandir() [<a h...', 'D:\www\multibin...', 818, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(818): scandir('')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(656): Controller_Backend_Ceo->_auto_image_manipulation()
#3 [internal function]: Controller_Backend_Ceo->action_view()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 17:50:49 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 815 ]
2012-08-03 17:50:49 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 815 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', 'D:\www\multibin...', 815, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(815): mkdir('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_mod\_app\ceo\classes\controller\backend\ceo.php(656): Controller_Backend_Ceo->_auto_image_manipulation()
#3 [internal function]: Controller_Backend_Ceo->action_view()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#8 {main}
2012-08-03 17:52:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 660 ]
2012-08-03 17:52:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\ceo\classes\controller\backend\ceo.php [ 660 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:52:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: languages ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 20 ]
2012-08-03 17:52:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: languages ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 20 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_view.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 20, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:52:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: titleId ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 137 ]
2012-08-03 17:52:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: titleId ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 137 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_view.php(137): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 137, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:01 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 137 ]
2012-08-03 17:53:01 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ][ 1126 ]
2012-08-03 17:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:33 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 3 ]
2012-08-03 17:53:33 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 17:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:54:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 3 ]
2012-08-03 17:54:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$controller ~ MODPATH\_app\ceo\views\ceo\backend\ceo_view.php [ 3 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_view.php(3): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 3, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:54:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:54:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 17:56:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 17:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]126 ]
2012-08-03 17:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]]
2012-08-03 17:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Ceo::$location ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 82 ]
2012-08-03 17:59:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Ceo::$location ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 82 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_index.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 82, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Ceo::$biogrphy ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 82 ]
2012-08-03 17:59:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Ceo::$biogrphy ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 82 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\ceo\views\ceo\backend\ceo_index.php(82): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 82, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Ceo))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#14 {main}
2012-08-03 17:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 17:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 17:59:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:39 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 53 ]
2012-08-03 18:00:39 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\ceo\views\ceo\backend\ceo_index.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 18:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 18:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 18:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/edit_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 19:06:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 19:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/order-asc.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-03 19:32:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#6 {main}
2012-08-03 19:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/table_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/button/save_button.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-03 19:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ][ 1126 ]
2012-08-03 19:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/main_menu_icon.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-03 19:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/icon/logout.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}