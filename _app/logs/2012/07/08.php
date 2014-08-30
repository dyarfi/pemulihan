<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-08 00:08:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_UserLevel' not found ~ MODPATH\admin\classes\controller\backend\auth.php [ 92 ]
2012-07-08 00:08:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_UserLevel' not found ~ MODPATH\admin\classes\controller\backend\auth.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:09:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
2012-07-08 00:09:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:16:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:16:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:16:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:16:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:16:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:16:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:16:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 117 ]
2012-07-08 00:16:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 117 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(117): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 117, Array)
#1 [internal function]: Controller_Backend_Auth->action_logoff()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:16:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:16:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:17:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:17:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:17:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:17:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:17:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
2012-07-08 00:17:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\controller\backend\auth.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:18:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ MODPATH\admin\classes\controller\backend\user.php [ 49 ]
2012-07-08 00:18:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ MODPATH\admin\classes\controller\backend\user.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:18:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ MODPATH\admin\classes\controller\backend\user.php [ 65 ]
2012-07-08 00:18:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ MODPATH\admin\classes\controller\backend\user.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:18:34 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\user.php [ 21 ]
2012-07-08 00:18:34 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\user.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:18:50 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\user.php [ 21 ]
2012-07-08 00:18:50 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\user.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:18:54 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:18:54 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(211): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:00 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:00 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(211): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:06 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:06 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(211): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 00:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 00:19:16 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:16 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(211): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:31 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:31 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 211 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(211): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:51 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:51 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:54 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:54 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:19:58 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:19:58 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:20:15 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:20:15 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:20:17 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:20:17 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:20:20 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:20:20 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:20:31 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:20:31 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:20:50 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:20:50 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:21:06 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:21:06 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:21:07 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:21:07 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:21:11 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:21:11 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:21:15 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:21:15 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:22:04 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 00:22:04 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 00:22:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 00:22:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:22:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\admin\classes\model\user.php [ 218 ]
2012-07-08 00:22:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\admin\classes\model\user.php [ 218 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 218, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 00:22:42 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 314 ]
2012-07-08 00:22:42 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 314 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(314): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 314, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:23:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$user ~ MODPATH\admin\classes\controller\backend\user.php [ 316 ]
2012-07-08 00:23:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$user ~ MODPATH\admin\classes\controller\backend\user.php [ 316 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(316): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 316, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:23:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$user ~ MODPATH\admin\classes\controller\backend\user.php [ 321 ]
2012-07-08 00:23:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$user ~ MODPATH\admin\classes\controller\backend\user.php [ 321 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(321): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 321, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:23:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_level ~ MODPATH\admin\classes\controller\backend\user.php [ 324 ]
2012-07-08 00:23:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_level ~ MODPATH\admin\classes\controller\backend\user.php [ 324 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(324): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 324, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:23:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$user ~ MODPATH\admin\classes\controller\backend\user.php [ 332 ]
2012-07-08 00:23:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$user ~ MODPATH\admin\classes\controller\backend\user.php [ 332 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(332): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 332, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:23:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH\admin\classes\controller\backend\user.php [ 337 ]
2012-07-08 00:23:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content_vars ~ MODPATH\admin\classes\controller\backend\user.php [ 337 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(337): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 337, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:23:54 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php on line 337 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-07-08 00:23:54 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php on line 337 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 28, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(337): Kohana_View::factory('backend/admin-c...', '')
#2 [internal function]: Controller_Backend_User->action_view()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 00:24:02 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php on line 337 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-07-08 00:24:02 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php on line 337 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 28, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(337): Kohana_View::factory('backend/admin-c...', '')
#2 [internal function]: Controller_Backend_User->action_view()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 00:24:34 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 314 ]
2012-07-08 00:24:34 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 314 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(314): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 314, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 00:25:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 00:25:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:25:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 00:25:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:25:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 00:25:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:25:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 00:25:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:25:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 00:25:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:26:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\themes\defaultadmin.php [ 28 ]
2012-07-08 00:26:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\themes\defaultadmin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:27:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\themes\defaultadmin.php [ 28 ]
2012-07-08 00:27:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\themes\defaultadmin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 00:28:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\themes\defaultadmin.php [ 28 ]
2012-07-08 00:28:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\themes\defaultadmin.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:22:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\admin\classes\controller\backend\auth.php [ 34 ]
2012-07-08 01:22:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\admin\classes\controller\backend\auth.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:23:01 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH\admin\classes\controller\backend\auth.php [ 33 ]
2012-07-08 01:23:01 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH\admin\classes\controller\backend\auth.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:23:42 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Auth - assumed 'Auth' ~ MODPATH\admin\classes\controller\backend\auth.php [ 33 ]
2012-07-08 01:23:42 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Auth - assumed 'Auth' ~ MODPATH\admin\classes\controller\backend\auth.php [ 33 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 33, Array)
#1 [internal function]: Controller_Backend_Auth->before()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 01:24:07 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 28 ]
2012-07-08 01:24:07 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 28 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 28, Array)
#1 [internal function]: Controller_Backend_Auth->before()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 01:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 01:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 01:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 01:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 01:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 01:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 01:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 01:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 01:31:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 37 ]
2012-07-08 01:31:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:32:30 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 01:32:30 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:32:45 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 01:32:45 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(72): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:33:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$session ~ MODPATH\admin\classes\controller\backend\user.php [ 11 ]
2012-07-08 01:33:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$session ~ MODPATH\admin\classes\controller\backend\user.php [ 11 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_User->before()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 01:34:01 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
2012-07-08 01:34:01 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:34:07 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
2012-07-08 01:34:07 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:34:22 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 01:34:22 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(75): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:35:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 01:35:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(75): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:35:42 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 01:35:42 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(75): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:35:43 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 01:35:43 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 212 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(212): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(75): Model_User->find(Array)
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:35:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Auth::login() ~ MODPATH\admin\classes\controller\backend\auth.php [ 41 ]
2012-07-08 01:35:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_Auth::login() ~ MODPATH\admin\classes\controller\backend\auth.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:37:22 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/pages/authentication could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 01:37:22 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/pages/authentication could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('admin-cp/pages/...')
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(177): Kohana_View->__construct('admin-cp/pages/...')
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(41): Controller_Backend_Auth->action_login()
#3 [internal function]: Controller_Backend_Auth->action_main()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:37:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 42 ]
2012-07-08 01:37:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:38:02 --- ERROR: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 01:38:02 --- STRACE: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(334): Kohana_View->set_filename('login-admin')
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(42): Kohana_View->render('login-admin')
#2 [internal function]: Controller_Backend_Auth->action_main()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 01:38:29 --- ERROR: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 01:38:29 --- STRACE: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('login-admin')
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct('login-admin', NULL)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(42): Kohana_View::factory('login-admin')
#3 [internal function]: Controller_Backend_Auth->action_main()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:38:37 --- ERROR: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 01:38:37 --- STRACE: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(334): Kohana_View->set_filename('login-admin')
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(42): Kohana_View->render('login-admin')
#2 [internal function]: Controller_Backend_Auth->action_main()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 01:38:38 --- ERROR: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 01:38:38 --- STRACE: View_Exception [ 0 ]: The requested view login-admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(334): Kohana_View->set_filename('login-admin')
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(42): Kohana_View->render('login-admin')
#2 [internal function]: Controller_Backend_Auth->action_main()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 01:41:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\themes\defaultadmin.php [ 80 ]
2012-07-08 01:41:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\themes\defaultadmin.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:42:20 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\userlevel.php [ 21 ]
2012-07-08 01:42:20 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\userlevel.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:43:23 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\userlevel.php [ 21 ]
2012-07-08 01:43:23 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\admin\classes\model\userlevel.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:43:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
2012-07-08 01:43:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:44:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\admin\classes\model\userlevel.php [ 21 ]
2012-07-08 01:44:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\admin\classes\model\userlevel.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:46:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
2012-07-08 01:46:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:47:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_prefix() ~ MODPATH\admin\classes\model\user.php [ 22 ]
2012-07-08 01:47:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_prefix() ~ MODPATH\admin\classes\model\user.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:48:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
2012-07-08 01:48:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:49:29 --- ERROR: ErrorException [ 1 ]: Cannot call constructor ~ MODPATH\admin\classes\model\user.php [ 10 ]
2012-07-08 01:49:29 --- STRACE: ErrorException [ 1 ]: Cannot call constructor ~ MODPATH\admin\classes\model\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:50:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
2012-07-08 01:50:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:55:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
2012-07-08 01:55:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::table_exists() ~ MODPATH\admin\classes\model\userlevel.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 01:57:37 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\admin\classes\model\userlevel.php on line 51 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-07-08 01:57:37 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\admin\classes\model\userlevel.php on line 51 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 168, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\userlevel.php(51): Kohana_Database_MySQL->query('CREATE TABLE IF...')
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(53): Model_UserLevel->install()
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:58:11 --- ERROR: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH\admin\classes\model\userlevel.php [ 58 ]
2012-07-08 01:58:11 --- STRACE: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH\admin\classes\model\userlevel.php [ 58 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'mktime() [<a hr...', 'D:\www\multibin...', 58, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\userlevel.php(58): mktime()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(53): Model_UserLevel->install()
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 01:58:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::limit() ~ MODPATH\admin\classes\model\user.php [ 209 ]
2012-07-08 01:58:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::limit() ~ MODPATH\admin\classes\model\user.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:00:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::select() ~ MODPATH\admin\classes\model\user.php [ 214 ]
2012-07-08 02:00:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::select() ~ MODPATH\admin\classes\model\user.php [ 214 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:01:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`email` = 'superadmin' AND `password` = '3da541559918a808c2402bba5012f6c60b27661' at line 1 [ `email` = 'superadmin' AND `password` = '3da541559918a808c2402bba5012f6c60b27661c' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 02:01:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`email` = 'superadmin' AND `password` = '3da541559918a808c2402bba5012f6c60b27661' at line 1 [ `email` = 'superadmin' AND `password` = '3da541559918a808c2402bba5012f6c60b27661c' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(214): Kohana_Database_MySQL->query('SELECT', '`email` = 'supe...')
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(288): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:05:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::select() ~ MODPATH\admin\classes\model\user.php [ 214 ]
2012-07-08 02:05:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::select() ~ MODPATH\admin\classes\model\user.php [ 214 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:06:46 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_user' doesn't exist [ SHOW FULL COLUMNS FROM `mbi_user` LIKE '`email` = \'superadmin\' AND `password` = \'3da541559918a808c2402bba5012f6c60b27661c\'' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 02:06:46 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_user' doesn't exist [ SHOW FULL COLUMNS FROM `mbi_user` LIKE '`email` = \'superadmin\' AND `password` = \'3da541559918a808c2402bba5012f6c60b27661c\'' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(355): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(214): Kohana_Database_MySQL->list_columns('user', '`email` = 'supe...', true)
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(288): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 02:06:57 --- ERROR: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ MODPATH\admin\classes\model\user.php [ 214 ]
2012-07-08 02:06:57 --- STRACE: ErrorException [ 1 ]: Call to a member function from() on a non-object ~ MODPATH\admin\classes\model\user.php [ 214 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:10:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 02:10:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:10:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 02:10:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:11:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_Level' not found ~ MODPATH\admin\classes\model\user.php [ 224 ]
2012-07-08 02:11:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_Level' not found ~ MODPATH\admin\classes\model\user.php [ 224 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:11:16 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 02:11:16 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:11:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 02:11:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:13:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 02:13:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_User->authenticate('superadmin', '3da541559918a80...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:16:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session_Native::set_flash() ~ MODPATH\admin\classes\controller\backend\auth.php [ 91 ]
2012-07-08 02:16:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session_Native::set_flash() ~ MODPATH\admin\classes\controller\backend\auth.php [ 91 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:17:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 94 ]
2012-07-08 02:17:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ MODPATH\admin\classes\controller\backend\auth.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 02:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 02:43:00 --- ERROR: ErrorException [ 1 ]: Class 'Module_List_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 435 ]
2012-07-08 02:43:00 --- STRACE: ErrorException [ 1 ]: Class 'Module_List_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 435 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:43:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::get() ~ MODPATH\admin\classes\model\userlevel.php [ 222 ]
2012-07-08 02:43:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::get() ~ MODPATH\admin\classes\model\userlevel.php [ 222 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:45:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_List_Model' not found ~ MODPATH\admin\classes\model\modellist.php [ 201 ]
2012-07-08 02:45:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_List_Model' not found ~ MODPATH\admin\classes\model\modellist.php [ 201 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:46:13 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\admin\classes\model\modellist.php on line 38 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-07-08 02:46:13 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\admin\classes\model\modellist.php on line 38 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 168, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\modellist.php(38): Kohana_Database_MySQL->query('CREATE TABLE IF...')
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(56): Model_ModelList->install()
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:46:43 --- ERROR: ErrorException [ 1 ]: Class 'Configuration_Model' not found ~ MODPATH\admin\classes\model\configuration.php [ 194 ]
2012-07-08 02:46:43 --- STRACE: ErrorException [ 1 ]: Class 'Configuration_Model' not found ~ MODPATH\admin\classes\model\configuration.php [ 194 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:46:57 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\admin\classes\model\configuration.php on line 36 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-07-08 02:46:57 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\www\multibintang-career\_mod\admin\classes\model\configuration.php on line 36 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 168, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\configuration.php(36): Kohana_Database_MySQL->query('CREATE TABLE IF...')
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(57): Model_Configuration->install()
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:55:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'users' at line 1 [ users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 02:55:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'users' at line 1 [ users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'users')
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:55:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::q() ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 02:55:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::q() ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 02:56:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'users' at line 1 [ users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 02:56:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'users' at line 1 [ users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'users', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:56:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 02:56:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'mbi_users', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:58:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 02:58:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 215, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(292): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:58:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$table ~ MODPATH\admin\classes\model\user.php [ 214 ]
2012-07-08 02:58:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$table ~ MODPATH\admin\classes\model\user.php [ 214 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(214): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 214, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 02:59:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 02:59:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'mbi_users', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:00:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:00:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'mbi_users', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:01:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:01:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'mbi_users', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:02:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:02:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'mbi_users' at line 1 [ mbi_users ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_MySQL->query('SELECT', 'mbi_users', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:03:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::_sql() ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:03:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::_sql() ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:05:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:05:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:17:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''superadmin' AND `password` = '356a192b7913b04c54574d18c28d46e6395428ab'' at line 1 [ SELECT * FROM `mbi_users``email` = 'superadmin' AND `password` = '356a192b7913b04c54574d18c28d46e6395428ab' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:17:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''superadmin' AND `password` = '356a192b7913b04c54574d18c28d46e6395428ab'' at line 1 [ SELECT * FROM `mbi_users``email` = 'superadmin' AND `password` = '356a192b7913b04c54574d18c28d46e6395428ab' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(214): Kohana_Database_MySQL->query('SELECT', 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(290): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:24:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 221 ]
2012-07-08 03:24:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 221 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(221): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 221, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(289): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:27:11 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.users' doesn't exist [ SELECT * FROM `users` WHERE `email` = 'superadmin' AND `password` = '356a192b7913b04c54574d18c28d46e6395428ab' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:27:11 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.users' doesn't exist [ SELECT * FROM `users` WHERE `email` = 'superadmin' AND `password` = '356a192b7913b04c54574d18c28d46e6395428ab' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(213): Kohana_Database_MySQL->query('SELECT', 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:30:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 03:30:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:30:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 03:30:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:31:05 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 03:31:05 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:33:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
2012-07-08 03:33:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\admin\classes\model\user.php [ 223 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(223): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 223, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(291): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:34:06 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\admin\classes\model\user.php [ 213 ]
2012-07-08 03:34:06 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\admin\classes\model\user.php [ 213 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:37:29 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 216 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 03:37:29 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 216 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:37:35 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 216 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-07-08 03:37:35 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in D:\www\multibintang-career\_mod\admin\classes\model\user.php on line 216 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Database_Query_Builder_Where->where(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:38:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\admin\classes\model\user.php [ 217 ]
2012-07-08 03:38:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\admin\classes\model\user.php [ 217 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 217, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:38:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT * FROM `mbi_users` WHERE `username` = 'superadmin' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:38:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT * FROM `mbi_users` WHERE `username` = 'superadmin' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:38:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT * FROM `mbi_users` WHERE `username` = 'superadmin' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:38:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT * FROM `mbi_users` WHERE `username` = 'superadmin' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:40:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:40:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:40:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:40:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:40:51 --- ERROR: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH\admin\classes\model\user.php [ 229 ]
2012-07-08 03:40:51 --- STRACE: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH\admin\classes\model\user.php [ 229 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_object_vars...', 'D:\www\multibin...', 229, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(229): get_object_vars(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:43:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: type ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:43:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: type ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 216, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(294): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:43:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::get() ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:43:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::get() ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:44:31 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:44:31 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:44:37 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:44:37 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:44:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::get() ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:44:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::get() ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:45:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::query() ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:45:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::query() ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:45:42 --- ERROR: ErrorException [ 1 ]: Call to a member function commit() on a non-object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:45:42 --- STRACE: ErrorException [ 1 ]: Call to a member function commit() on a non-object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:46:00 --- ERROR: ErrorException [ 1 ]: Call to a member function commit() on a non-object ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:46:00 --- STRACE: ErrorException [ 1 ]: Call to a member function commit() on a non-object ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:46:27 --- ERROR: ErrorException [ 1 ]: Call to a member function begin() on a non-object ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:46:27 --- STRACE: ErrorException [ 1 ]: Call to a member function begin() on a non-object ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:48:41 --- ERROR: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:48:42 --- STRACE: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT *', true, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:48:46 --- ERROR: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:48:46 --- STRACE: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT *', true, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:49:08 --- ERROR: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:49:08 --- STRACE: Database_Exception [ 1096 ]: No tables used [ SELECT * ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT *', true, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:49:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method DB::get() ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:49:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method DB::get() ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:50:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::get() ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:50:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::get() ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:50:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:50:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 215, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:50:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:50:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 215, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:50:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:50:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 215, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:51:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
2012-07-08 03:51:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ MODPATH\admin\classes\model\user.php [ 215 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(215): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 215, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:52:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$username ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:52:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$username ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 216, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:52:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$username ~ MODPATH\admin\classes\model\user.php [ 216 ]
2012-07-08 03:52:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$username ~ MODPATH\admin\classes\model\user.php [ 216 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(216): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 216, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(293): Model_User->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:54:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\admin\classes\model\user.php [ 217 ]
2012-07-08 03:54:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\admin\classes\model\user.php [ 217 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:54:48 --- ERROR: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH\admin\classes\model\user.php [ 230 ]
2012-07-08 03:54:48 --- STRACE: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH\admin\classes\model\user.php [ 230 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_object_vars...', 'D:\www\multibin...', 230, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\user.php(230): get_object_vars(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\model\user.php(295): Model_User->find(Array, '', 1)
#3 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(60): Model_User->authenticate('superadmin', '356a192b7913b04...', '')
#4 [internal function]: Controller_Backend_Auth->action_validate()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-08 03:56:27 --- ERROR: ErrorException [ 1 ]: Class 'User_Level_Model' not found ~ MODPATH\admin\classes\controller\backend\auth.php [ 71 ]
2012-07-08 03:56:27 --- STRACE: ErrorException [ 1 ]: Class 'User_Level_Model' not found ~ MODPATH\admin\classes\controller\backend\auth.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:57:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::limit() ~ MODPATH\admin\classes\model\userlevel.php [ 217 ]
2012-07-08 03:57:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::limit() ~ MODPATH\admin\classes\model\userlevel.php [ 217 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:57:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\admin\classes\model\userlevel.php [ 220 ]
2012-07-08 03:57:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\admin\classes\model\userlevel.php [ 220 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 03:58:27 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_user_levels' doesn't exist [ SELECT * FROM mbi_user_levels WHERE `id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 03:58:27 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_user_levels' doesn't exist [ SELECT * FROM mbi_user_levels WHERE `id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\userlevel.php(220): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\model\userlevel.php(291): Model_UserLevel->find(Array, '', 1)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(71): Model_UserLevel->full_level_access('1')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 03:58:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\controller\backend\auth.php [ 76 ]
2012-07-08 03:58:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\controller\backend\auth.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:04:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 66 ]
2012-07-08 04:04:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:04:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 66 ]
2012-07-08 04:04:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:06:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\admin\classes\model\modulelist.php [ 334 ]
2012-07-08 04:06:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\admin\classes\model\modulelist.php [ 334 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:07:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ModuleList::$prefix ~ MODPATH\admin\classes\model\modulelist.php [ 335 ]
2012-07-08 04:07:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ModuleList::$prefix ~ MODPATH\admin\classes\model\modulelist.php [ 335 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(335): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 335, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\model\modulelist.php(77): Model_ModuleList->find(Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(81): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 04:07:39 --- ERROR: ErrorException [ 1 ]: Class 'User_Level_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 81 ]
2012-07-08 04:07:39 --- STRACE: ErrorException [ 1 ]: Class 'User_Level_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:07:58 --- ERROR: ErrorException [ 1 ]: Class 'User_Level_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 394 ]
2012-07-08 04:07:58 --- STRACE: ErrorException [ 1 ]: Class 'User_Level_Model' not found ~ MODPATH\admin\classes\model\modulelist.php [ 394 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:08:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 400 ]
2012-07-08 04:08:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 400 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:11:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\admin\config\admin.php [ 4 ]
2012-07-08 04:11:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\admin\config\admin.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:11:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 404 ]
2012-07-08 04:11:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 404 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:13:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 404 ]
2012-07-08 04:13:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\admin\classes\model\modulelist.php [ 404 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:13:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH\admin\config\module_list.php [ 2 ]
2012-07-08 04:13:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ MODPATH\admin\config\module_list.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:14:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH\admin\config\module_list.php [ 3 ]
2012-07-08 04:14:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH\admin\config\module_list.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:14:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH\admin\config\module_list.php [ 11 ]
2012-07-08 04:14:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ MODPATH\admin\config\module_list.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:14:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\admin\classes\model\modulelist.php [ 328 ]
2012-07-08 04:14:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\admin\classes\model\modulelist.php [ 328 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:14:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\admin\classes\model\modulelist.php [ 328 ]
2012-07-08 04:14:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\admin\classes\model\modulelist.php [ 328 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:15:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 88 ]
2012-07-08 04:15:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ MODPATH\admin\classes\controller\backend\auth.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:15:59 --- ERROR: ErrorException [ 2 ]: include(admin.default_page) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\kohana\core.php [ 792 ]
2012-07-08 04:15:59 --- STRACE: ErrorException [ 2 ]: include(admin.default_page) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\kohana\core.php [ 792 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\core.php(792): Kohana_Core::error_handler(2, 'include(admin.d...', 'D:\www\multibin...', 792, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\core.php(792): Kohana_Core::load()
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(88): Kohana_Core::load('admin.default_p...')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 04:17:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT * FROM mbi_users WHERE `username` = 'superadmin' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:17:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT * FROM mbi_users WHERE `username` = 'superadmin' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(74): Model_User->find(Array)
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:18:21 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 317 ]
2012-07-08 04:18:21 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 317 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(317): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 317, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 04:18:32 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 317 ]
2012-07-08 04:18:32 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 317 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(317): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 317, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 04:18:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 317 ]
2012-07-08 04:18:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\admin\classes\controller\backend\user.php [ 317 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(317): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\multibin...', 317, Array)
#1 [internal function]: Controller_Backend_User->action_view()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 04:19:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get() ~ MODPATH\admin\classes\controller\backend\user.php [ 180 ]
2012-07-08 04:19:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get() ~ MODPATH\admin\classes\controller\backend\user.php [ 180 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:20:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:20:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(180): Model_User->find(Array)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:20:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:20:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(180): Model_User->find(Array)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:20:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:20:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(180): Model_User->find(Array)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:22:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\admin\classes\model\user.php [ 203 ]
2012-07-08 04:22:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::orderby() ~ MODPATH\admin\classes\model\user.php [ 203 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:23:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::get() ~ MODPATH\admin\classes\controller\backend\user.php [ 192 ]
2012-07-08 04:23:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::get() ~ MODPATH\admin\classes\controller\backend\user.php [ 192 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:23:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:23:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(192): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:24:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::select() ~ MODPATH\admin\classes\model\user.php [ 218 ]
2012-07-08 04:24:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::select() ~ MODPATH\admin\classes\model\user.php [ 218 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:24:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::render() ~ MODPATH\admin\classes\controller\backend\user.php [ 224 ]
2012-07-08 04:24:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::render() ~ MODPATH\admin\classes\controller\backend\user.php [ 224 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:25:28 --- ERROR: View_Exception [ 0 ]: The requested view backend/user_listing could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 04:25:28 --- STRACE: View_Exception [ 0 ]: The requested view backend/user_listing could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('backend/user_li...')
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct('backend/user_li...', Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(224): Kohana_View::factory('backend/user_li...', Array)
#3 [internal function]: Controller_Backend_User->action_manage()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 04:25:45 --- ERROR: View_Exception [ 0 ]: The requested view adminbackend//user_listing could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-08 04:25:45 --- STRACE: View_Exception [ 0 ]: The requested view adminbackend//user_listing could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('adminbackend//u...')
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct('adminbackend//u...', Array)
#2 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(224): Kohana_View::factory('adminbackend//u...', Array)
#3 [internal function]: Controller_Backend_User->action_manage()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-08 04:25:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
2012-07-08 04:25:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 04:26:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:26:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(192): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:26:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:26:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(192): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 04:27:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 04:27:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(192): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 05:01:29 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
2012-07-08 05:01:29 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:01:33 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
2012-07-08 05:01:33 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\user.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:03:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 05:03:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(193): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 05:06:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
2012-07-08 05:06:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:06:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
2012-07-08 05:06:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:07:07 --- ERROR: ErrorException [ 1 ]: Call to undefined function HTML_SPECIALCHARS() ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
2012-07-08 05:07:07 --- STRACE: ErrorException [ 1 ]: Call to undefined function HTML_SPECIALCHARS() ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:08:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
2012-07-08 05:08:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:09:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
2012-07-08 05:09:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\themes\defaultadmin.php [ 10 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 10, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 05:09:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH\classes\controller\themes\defaultadmin.php [ 31 ]
2012-07-08 05:09:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_title ~ APPPATH\classes\controller\themes\defaultadmin.php [ 31 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 31, Array)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\auth.php(18): Controller_Themes_DefaultAdmin->before()
#2 [internal function]: Controller_Backend_Auth->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 05:10:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 12 ]
2012-07-08 05:10:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:11:34 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 29 ]
2012-07-08 05:11:34 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:17:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 36 ]
2012-07-08 05:17:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:21:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 36 ]
2012-07-08 05:21:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:21:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\themes\defaultadmin.php [ 46 ]
2012-07-08 05:21:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\themes\defaultadmin.php [ 46 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(46): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 46, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 05:22:03 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$base_URL ~ APPPATH\views\themes\defaultadmin.php [ 15 ]
2012-07-08 05:22:03 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$base_URL ~ APPPATH\views\themes\defaultadmin.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:22:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\themes\defaultadmin.php [ 46 ]
2012-07-08 05:22:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\themes\defaultadmin.php [ 46 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(46): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 46, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 05:23:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\themes\defaultadmin.php [ 46 ]
2012-07-08 05:23:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\themes\defaultadmin.php [ 46 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(46): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 46, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 05:25:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\themes\defaultadmin.php [ 60 ]
2012-07-08 05:25:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\themes\defaultadmin.php [ 60 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 60, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 05:25:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\themes\defaultadmin.php [ 60 ]
2012-07-08 05:25:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\themes\defaultadmin.php [ 60 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 60, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 05:26:41 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 05:26:41 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 05:26:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 05:26:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:07:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:07:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:29:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:29:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:30:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\acl\classes\synapse\acl.php [ 131 ]
2012-07-08 15:30:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\acl\classes\synapse\acl.php [ 131 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:31:26 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\acl\classes\synapse\acl.php [ 136 ]
2012-07-08 15:31:26 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\acl\classes\synapse\acl.php [ 136 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:36:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:36:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_File::admin_system_modules() ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:39:26 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:39:26 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:40:11 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:40:11 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:40:16 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:40:16 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:40:27 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:40:27 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:40:29 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:40:29 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:43:48 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:43:48 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:43:50 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
2012-07-08 15:43:50 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:44:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\helper\ACL.php [ 14 ]
2012-07-08 15:44:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\helper\ACL.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:45:09 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
2012-07-08 15:45:09 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:45:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\helper\ACL.php [ 14 ]
2012-07-08 15:45:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\helper\ACL.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:46:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\helper\ACL.php [ 15 ]
2012-07-08 15:46:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\helper\ACL.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:47:07 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:47:07 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(15): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\helper\ACL.php(42): helper_ACL->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#13 {main}
2012-07-08 15:47:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 53 ]
2012-07-08 15:47:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 53 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(53): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 53, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:48:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:48:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:48:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:48:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:49:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:49:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:51:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:51:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:51:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:51:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:51:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 56 ]
2012-07-08 15:51:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 56 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 56, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:51:30 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:51:30 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(15): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\helper\ACL.php(44): helper_ACL->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#13 {main}
2012-07-08 15:51:40 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for helper_ACL::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 44 and defined ~ APPPATH\classes\helper\ACL.php [ 13 ]
2012-07-08 15:51:40 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for helper_ACL::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 44 and defined ~ APPPATH\classes\helper\ACL.php [ 13 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 13, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(44): helper_ACL->__construct()
#2 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#5 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_DefaultAdmin->after()
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#12 {main}
2012-07-08 15:52:17 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:52:17 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(15): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\helper\ACL.php(44): helper_ACL->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#13 {main}
2012-07-08 15:52:31 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:52:31 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(15): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\helper\ACL.php(44): helper_ACL->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#13 {main}
2012-07-08 15:52:33 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:52:33 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 15 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(15): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\helper\ACL.php(44): helper_ACL->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#13 {main}
2012-07-08 15:52:42 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 44 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:52:42 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 44 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(44): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL::instance()
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#5 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_DefaultAdmin->after()
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#12 {main}
2012-07-08 15:52:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:52:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:53:05 --- ERROR: ErrorException [ 8 ]: Undefined property: helper_ACL::$request ~ APPPATH\classes\helper\ACL.php [ 55 ]
2012-07-08 15:53:05 --- STRACE: ErrorException [ 8 ]: Undefined property: helper_ACL::$request ~ APPPATH\classes\helper\ACL.php [ 55 ]
--
#0 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 55, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#11 {main}
2012-07-08 15:53:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 55 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-08 15:53:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\helper\ACL.php on line 55 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\helper\ACL.php(55): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(76): helper_ACL->admin_system_modules()
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#5 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_DefaultAdmin->after()
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#12 {main}
2012-07-08 15:56:27 --- ERROR: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
2012-07-08 15:56:27 --- STRACE: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:58:01 --- ERROR: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
2012-07-08 15:58:01 --- STRACE: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:58:10 --- ERROR: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
2012-07-08 15:58:10 --- STRACE: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 15:58:24 --- ERROR: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
2012-07-08 15:58:24 --- STRACE: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:02:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\kohana\auth.php [ 26 ]
2012-07-08 16:02:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\kohana\auth.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:02:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\kohana\auth.php [ 26 ]
2012-07-08 16:02:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\kohana\auth.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:02:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\kohana\auth.php [ 65 ]
2012-07-08 16:02:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\auth\classes\kohana\auth.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:03:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\themes\defaultadmin.php [ 105 ]
2012-07-08 16:03:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\themes\defaultadmin.php [ 105 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 105, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 16:03:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 113 ]
2012-07-08 16:03:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:04:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 113 ]
2012-07-08 16:04:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method HTML::specialchars() ~ APPPATH\views\themes\defaultadmin.php [ 113 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:04:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 115 ]
2012-07-08 16:04:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\views\themes\defaultadmin.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-08 16:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#1 {main}
2012-07-08 16:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-08 16:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#1 {main}
2012-07-08 16:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-08 16:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#1 {main}
2012-07-08 16:20:30 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 16:20:30 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:23:15 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 16:23:15 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:23:19 --- ERROR: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-08 16:23:19 --- STRACE: ErrorException [ 1 ]: Class 'Helper_ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:24:01 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-08 16:24:01 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:24:21 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-08 16:24:21 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:24:47 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ MODPATH\admin\classes\controller\backend\authentication.php [ 3 ]
2012-07-08 16:24:47 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ MODPATH\admin\classes\controller\backend\authentication.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 16:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 16:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 16:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 16:31:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ MODPATH\career\classes\controller\backend\career.php [ 23 ]
2012-07-08 16:31:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ MODPATH\career\classes\controller\backend\career.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:31:49 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\career\classes\model\career.php [ 33 ]
2012-07-08 16:31:49 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\career\classes\model\career.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:32:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\career\classes\model\career.php [ 33 ]
2012-07-08 16:32:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\career\classes\model\career.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:32:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\career\classes\model\career.php [ 33 ]
2012-07-08 16:32:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\career\classes\model\career.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:32:33 --- ERROR: ErrorException [ 1 ]: Class name must be a valid object or a string ~ MODPATH\career\classes\model\career.php [ 33 ]
2012-07-08 16:32:33 --- STRACE: ErrorException [ 1 ]: Class name must be a valid object or a string ~ MODPATH\career\classes\model\career.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:32:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\career\classes\model\career.php [ 33 ]
2012-07-08 16:32:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ MODPATH\career\classes\model\career.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:32:49 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\career\classes\model\career.php [ 33 ]
2012-07-08 16:32:49 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ MODPATH\career\classes\model\career.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:32:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\career\classes\controller\backend\career.php [ 43 ]
2012-07-08 16:32:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\career\classes\controller\backend\career.php [ 43 ]
--
#0 D:\www\multibintang-career\_mod\career\classes\controller\backend\career.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 43, Array)
#1 [internal function]: Controller_Backend_Career->before()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-08 16:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/mamange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 16:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/mamange was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 16:34:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
2012-07-08 16:34:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 16:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 16:35:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
2012-07-08 16:35:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 16:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 16:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 16:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 16:36:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
2012-07-08 16:36:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Admin::factory() ~ APPPATH\views\backend\menu.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 16:37:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant VIEWPAGE - assumed 'VIEWPAGE' ~ APPPATH\views\layout\two_column.php [ 20 ]
2012-07-08 16:37:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant VIEWPAGE - assumed 'VIEWPAGE' ~ APPPATH\views\layout\two_column.php [ 20 ]
--
#0 D:\www\multibintang-career\_app\views\layout\two_column.php(20): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 20, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(82): Kohana_View->__toString()
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(95): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#14 {main}
2012-07-08 16:40:43 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 16:40:43 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_app\classes\model\global.php(192): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career\_mod\career\classes\kohana\career.php(32): Model_Global->globalTotal('career_titles', Array)
#4 D:\www\multibintang-career\_mod\career\classes\controller\backend\career.php(168): Kohana_Career->get(Array, true)
#5 [internal function]: Controller_Backend_Career->action_edit()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 16:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-08 16:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#1 {main}
2012-07-08 16:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-08 16:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#1 {main}
2012-07-08 20:42:16 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 20:42:16 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 20:43:44 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 20:43:44 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 20:45:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 20:45:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(193): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 20:53:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 20:53:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(193): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_manage()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 20:53:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 20:53:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 20:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 20:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 20:54:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 20:54:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(193): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 20:56:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 20:56:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 20:56:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 20:56:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 21:11:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 21:11:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 21:11:58 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\themes\defaultadmin.php [ 29 ]
2012-07-08 21:11:58 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\views\themes\defaultadmin.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:13:06 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\backend\base.php [ 20 ]
2012-07-08 21:13:06 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\backend\base.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:14:24 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\backend\base.php [ 20 ]
2012-07-08 21:14:24 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\backend\base.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth/validate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth/validate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth/validate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth/validate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth/validate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth/validate was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:22:15 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 21:22:15 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:23:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:23:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:24:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:24:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:25:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::install() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:25:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::install() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:25:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:25:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:26:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:26:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:27:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:27:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:27:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:27:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:28:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::authenticate() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 51 ]
2012-07-08 21:28:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::authenticate() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:28:49 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 21:28:49 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:29:22 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Auth_User::save() should be compatible with that of Kohana_ORM::save() ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 21:29:22 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Auth_User::save() should be compatible with that of Kohana_ORM::save() ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 D:\www\multibintang-career\_mod\auth\classes\model\auth\user.php(10): Kohana_Core::error_handler(2048, 'Declaration of ...', 'D:\www\multibin...', 10, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\core.php(496): require('D:\www\multibin...')
#2 [internal function]: Kohana_Core::auto_load('Model_Auth_User')
#3 D:\www\multibintang-career\_mod\auth\classes\model\user.php(3): spl_autoload_call('Model_Auth_User')
#4 D:\www\multibintang-career\_sys\classes\kohana\core.php(496): require('D:\www\multibin...')
#5 [internal function]: Kohana_Core::auto_load('Model_User')
#6 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(44): spl_autoload_call('Model_User')
#7 [internal function]: Controller_Backend_Authentication->action_validate()
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#12 {main}
2012-07-08 21:29:24 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Auth_User::save() should be compatible with that of Kohana_ORM::save() ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
2012-07-08 21:29:24 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Auth_User::save() should be compatible with that of Kohana_ORM::save() ~ MODPATH\auth\classes\model\auth\user.php [ 10 ]
--
#0 D:\www\multibintang-career\_mod\auth\classes\model\auth\user.php(10): Kohana_Core::error_handler(2048, 'Declaration of ...', 'D:\www\multibin...', 10, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\core.php(496): require('D:\www\multibin...')
#2 [internal function]: Kohana_Core::auto_load('Model_Auth_User')
#3 D:\www\multibintang-career\_mod\auth\classes\model\user.php(3): spl_autoload_call('Model_Auth_User')
#4 D:\www\multibintang-career\_sys\classes\kohana\core.php(496): require('D:\www\multibin...')
#5 [internal function]: Kohana_Core::auto_load('Model_User')
#6 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(44): spl_autoload_call('Model_User')
#7 [internal function]: Controller_Backend_Authentication->action_validate()
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#12 {main}
2012-07-08 21:31:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
2012-07-08 21:31:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::instance() ~ MODPATH\admin\classes\controller\backend\authentication.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-08 21:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:37:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 21:37:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 21:38:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-08 21:38:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'where' in 'where clause' [ SELECT * FROM mbi_users WHERE `where` = 'Array' AND `table` = 'user_levels' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\admin\classes\model\user.php(217): Kohana_Database_MySQL->query(1, 'SELECT * FROM m...', true)
#1 D:\www\multibintang-career\_mod\admin\classes\controller\backend\user.php(194): Model_User->find(Array, false)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-08 21:38:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:38:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 21:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 21:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 21:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 22:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 22:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 22:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 22:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 22:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 22:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 23:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 23:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 23:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-08 23:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 23:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 23:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-08 23:51:09 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\config\config.php [ 6 ]
2012-07-08 23:51:09 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\config\config.php [ 6 ]
--
#0 D:\www\multibintang-career\_app\config\config.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 6, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\core.php(792): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\config\file\reader.php(49): Kohana_Core::load('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('config')
#4 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(67): Kohana_Config->load('config.modules')
#5 [internal function]: Controller_Backend_Authentication->action_validate()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 23:51:39 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\config\config.php [ 6 ]
2012-07-08 23:51:39 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SITE_NAME - assumed 'SITE_NAME' ~ APPPATH\config\config.php [ 6 ]
--
#0 D:\www\multibintang-career\_app\config\config.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 6, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\core.php(792): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\config\file\reader.php(49): Kohana_Core::load('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('config')
#4 D:\www\multibintang-career\_mod\admin\classes\controller\backend\authentication.php(67): Kohana_Config->load('config.modules')
#5 [internal function]: Controller_Backend_Authentication->action_validate()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-08 23:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-08 23:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}