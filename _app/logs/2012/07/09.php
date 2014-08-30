<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-09 00:03:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::insert() ~ MODPATH\admin\classes\model\modulelist.php [ 235 ]
2012-07-09 00:03:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::insert() ~ MODPATH\admin\classes\model\modulelist.php [ 235 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:11:04 --- ERROR: ErrorException [ 1 ]: Class 'Module_List' not found ~ MODPATH\admin\classes\model\modulelist.php [ 345 ]
2012-07-09 00:11:04 --- STRACE: ErrorException [ 1 ]: Class 'Module_List' not found ~ MODPATH\admin\classes\model\modulelist.php [ 345 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:11:33 --- ERROR: ErrorException [ 1 ]: Class 'ModuleList' not found ~ MODPATH\admin\classes\model\modulelist.php [ 344 ]
2012-07-09 00:11:33 --- STRACE: ErrorException [ 1 ]: Class 'ModuleList' not found ~ MODPATH\admin\classes\model\modulelist.php [ 344 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:11:45 --- ERROR: ErrorException [ 1 ]: Call to a member function insert_id() on a non-object ~ MODPATH\admin\classes\model\modulelist.php [ 239 ]
2012-07-09 00:11:45 --- STRACE: ErrorException [ 1 ]: Call to a member function insert_id() on a non-object ~ MODPATH\admin\classes\model\modulelist.php [ 239 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/log_off was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/log_off was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/log_off was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/log_off was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:16:37 --- ERROR: ErrorException [ 1 ]: Call to a member function mysql_insert_id() on a non-object ~ MODPATH\admin\classes\model\modulelist.php [ 240 ]
2012-07-09 00:16:37 --- STRACE: ErrorException [ 1 ]: Call to a member function mysql_insert_id() on a non-object ~ MODPATH\admin\classes\model\modulelist.php [ 240 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:16:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH\admin\classes\model\modulelist.php [ 244 ]
2012-07-09 00:16:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::clear_cache() ~ MODPATH\admin\classes\model\modulelist.php [ 244 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:20:00 --- ERROR: ErrorException [ 1 ]: Class 'User_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 129 ]
2012-07-09 00:20:00 --- STRACE: ErrorException [ 1 ]: Class 'User_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:21:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:21:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:23:02 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\career\classes\model\career.php on line 60 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-07-09 00:23:02 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\career\classes\model\career.php on line 60 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 168, Array)
#1 D:\www\multibintang-career\_mod\career\classes\model\career.php(60): Kohana_Database_MySQL->query('CREATE TABLE IF...')
#2 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_Career->install()
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-09 00:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:24:47 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\career\classes\model\career.php on line 60 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-07-09 00:24:47 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\career\classes\model\career.php on line 60 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 168, Array)
#1 D:\www\multibintang-career\_mod\career\classes\model\career.php(60): Kohana_Database_MySQL->query('CREATE TABLE IF...')
#2 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_Career->install()
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-09 00:26:39 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\career\classes\model\career.php on line 60 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-07-09 00:26:39 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\career\classes\model\career.php on line 60 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 168, Array)
#1 D:\www\multibintang-career\_mod\career\classes\model\career.php(60): Kohana_Database_MySQL->query('CREATE TABLE IF...')
#2 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_Career->install()
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-09 00:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:31:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 00:31:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-09 00:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 00:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 00:34:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Careerdivision' not found ~ MODPATH\admin\classes\model\modulelist.php [ 129 ]
2012-07-09 00:34:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Careerdivision' not found ~ MODPATH\admin\classes\model\modulelist.php [ 129 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 00:35:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 00:35:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:02:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: insert_data ~ MODPATH\career\classes\model\career.php [ 63 ]
2012-07-09 01:02:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: insert_data ~ MODPATH\career\classes\model\career.php [ 63 ]
--
#0 D:\www\multibintang-career\_mod\career\classes\model\career.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 63, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_Career->install()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-09 01:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:04:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'english', 'publish', 1335875541, 1336032823)' at line 1 [ INSERT INTO `mbi_career` (`id`, `name`, `sent_to`, `ref_no`, `start_date`, `end_date`, `synopsis`, `qualification`, `language`, `status`, `added`, `modified`) VALUES (1, 'Web Developer', 'defrian@webarq.com', '234210', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification', 'indonesia', 'publish', 1335875490, 1336032870),(2, 'Web Designer', 'defrian@webarq.com', '234211', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification'', 'english', 'publish', 1335875541, 1336032823); ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 01:04:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'english', 'publish', 1335875541, 1336032823)' at line 1 [ INSERT INTO `mbi_career` (`id`, `name`, `sent_to`, `ref_no`, `start_date`, `end_date`, `synopsis`, `qualification`, `language`, `status`, `added`, `modified`) VALUES (1, 'Web Developer', 'defrian@webarq.com', '234210', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification', 'indonesia', 'publish', 1335875490, 1336032870),(2, 'Web Designer', 'defrian@webarq.com', '234211', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification'', 'english', 'publish', 1335875541, 1336032823); ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\career\classes\model\career.php(74): Kohana_Database_MySQL->query('INSERT', 'INSERT INTO `mb...')
#1 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_Career->install()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-09 01:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:06:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'english', 'publish', 1341770776, 0)' at line 1 [ INSERT INTO `mbi_career` (`id`, `name`, `sent_to`, `ref_no`, `start_date`, `end_date`, `synopsis`, `qualification`, `language`, `status`, `added`, `modified`) VALUES (1, 'Web Developer', 'defrian@webarq.com', '234210', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification', 'indonesia', 'publish', 1341770776, 0),(2, 'Web Designer', 'defrian@webarq.com', '234211', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification'', 'english', 'publish', 1341770776, 0); ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 01:06:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'english', 'publish', 1341770776, 0)' at line 1 [ INSERT INTO `mbi_career` (`id`, `name`, `sent_to`, `ref_no`, `start_date`, `end_date`, `synopsis`, `qualification`, `language`, `status`, `added`, `modified`) VALUES (1, 'Web Developer', 'defrian@webarq.com', '234210', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification', 'indonesia', 'publish', 1341770776, 0),(2, 'Web Designer', 'defrian@webarq.com', '234211', '2012-05-01', '2012-05-31', 'Synopsis', 'Qualification'', 'english', 'publish', 1341770776, 0); ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\career\classes\model\career.php(74): Kohana_Database_MySQL->query('INSERT', 'INSERT INTO `mb...')
#1 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_Career->install()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-09 01:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:15:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11' at line 10 [ CREATE TABLE IF NOT EXISTS `mbi_career_division` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `name` varchar(255) NOT NULL,
				  `description` text NOT NULL,
				  `in_menu` tinyint(1) NOT NULL DEFAULT '1',
				  `status` tinyint(1) NOT NULL DEFAULT '1',
				  `added` int(11) NOT NULL,
				  `modifed` int(11) NOT NULL, 
				  INDEX (`name`, `description`, `status`) 
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 01:15:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11' at line 10 [ CREATE TABLE IF NOT EXISTS `mbi_career_division` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `name` varchar(255) NOT NULL,
				  `description` text NOT NULL,
				  `in_menu` tinyint(1) NOT NULL DEFAULT '1',
				  `status` tinyint(1) NOT NULL DEFAULT '1',
				  `added` int(11) NOT NULL,
				  `modifed` int(11) NOT NULL, 
				  INDEX (`name`, `description`, `status`) 
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\career\classes\model\careerdivision.php(48): Kohana_Database_MySQL->query('CREATE', 'CREATE TABLE IF...')
#1 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_CareerDivision->install()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-09 01:16:33 --- ERROR: Database_Exception [ 1170 ]: BLOB/TEXT column 'description' used in key specification without a key length [ CREATE TABLE IF NOT EXISTS `mbi_career_division` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `name` varchar(255) NOT NULL,
				  `description` text NOT NULL,
				  `in_menu` tinyint(1) NOT NULL DEFAULT '1',
				  `status` tinyint(1) NOT NULL DEFAULT '1',
				  `added` int(11) NOT NULL,
				  `modifed` int(11) NOT NULL, 
				  INDEX (`name`, `description`, `status`), 
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 01:16:33 --- STRACE: Database_Exception [ 1170 ]: BLOB/TEXT column 'description' used in key specification without a key length [ CREATE TABLE IF NOT EXISTS `mbi_career_division` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `name` varchar(255) NOT NULL,
				  `description` text NOT NULL,
				  `in_menu` tinyint(1) NOT NULL DEFAULT '1',
				  `status` tinyint(1) NOT NULL DEFAULT '1',
				  `added` int(11) NOT NULL,
				  `modifed` int(11) NOT NULL, 
				  INDEX (`name`, `description`, `status`), 
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11; ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\career\classes\model\careerdivision.php(48): Kohana_Database_MySQL->query('CREATE', 'CREATE TABLE IF...')
#1 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(132): Model_CareerDivision->install()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(72): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-09 01:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 01:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-09 01:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-09 01:27:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-09 01:27:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-09 01:28:46 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\classes\controller\backend\user.php [ 201 ]
2012-07-09 01:28:46 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\classes\controller\backend\user.php [ 201 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 01:30:07 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-09 01:30:07 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 01:30:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
2012-07-09 01:30:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 01:31:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
2012-07-09 01:31:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 01:31:21 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
2012-07-09 01:31:21 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 01:32:01 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 93 ]
2012-07-09 01:32:01 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\admin\views\admin\backend\user_listing.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 01:32:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$activated ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
2012-07-09 01:32:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$activated ~ MODPATH\admin\views\admin\backend\user_listing.php [ 91 ]
--
#0 D:\www\multibintang-career\_mod\admin\views\admin\backend\user_listing.php(91): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 91, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(229): Kohana_View->render()
#4 [internal function]: Controller_Backend_User->action_index()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-09 23:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 23:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}