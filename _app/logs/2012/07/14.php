<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-14 00:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 00:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/new was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 00:49:22 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE ArrayArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:49:22 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE ArrayArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(229): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:49:44 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE status = publishArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:49:44 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE status = publishArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(229): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:51:09 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE status = publishArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:51:09 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE status = publishArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(230): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:51:38 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE `status` = publishArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:51:38 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE `status` = publishArray ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(230): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:51:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:51:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(230): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:53:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asc' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'asc ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:53:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'asc' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'asc ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(231): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:53:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:53:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(231): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:53:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:53:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(231): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:54:33 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\career\classes\model\career.php [ 214 ]
2012-07-14 00:54:33 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ MODPATH\_app\career\classes\model\career.php [ 214 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'D:\www\multibin...', 214, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(214): explode(' ', Array)
#2 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#3 [internal function]: Controller_Backend_Career->action_index()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#8 {main}
2012-07-14 00:55:50 --- ERROR: ErrorException [ 1 ]: Call to undefined function array_key() ~ MODPATH\_app\career\classes\model\career.php [ 215 ]
2012-07-14 00:55:50 --- STRACE: ErrorException [ 1 ]: Call to undefined function array_key() ~ MODPATH\_app\career\classes\model\career.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 00:55:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function array_value() ~ MODPATH\_app\career\classes\model\career.php [ 215 ]
2012-07-14 00:55:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function array_value() ~ MODPATH\_app\career\classes\model\career.php [ 215 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 00:56:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: orderby ~ MODPATH\_app\career\classes\model\career.php [ 216 ]
2012-07-14 00:56:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: orderby ~ MODPATH\_app\career\classes\model\career.php [ 216 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(216): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 216, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:56:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'ORDER BY Array Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:56:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'ORDER BY Array Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:56:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'ORDER BY Array Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:56:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'ORDER BY Array Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:56:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:56:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:57:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:57:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array' at line 1 [ SELECT * FROM career WHERE `status` = 'publish'Array ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:57:24 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE `status` = 'publish' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:57:24 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE `status` = 'publish' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:57:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant SELECT - assumed 'SELECT' ~ MODPATH\_app\career\classes\model\career.php [ 232 ]
2012-07-14 00:57:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant SELECT - assumed 'SELECT' ~ MODPATH\_app\career\classes\model\career.php [ 232 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 232, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:57:44 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE `status` = 'publish' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-14 00:57:44 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.career' doesn't exist [ SELECT * FROM career WHERE `status` = 'publish' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(232): Kohana_Database_MySQL->query('SELECT', 'SELECT * FROM c...', true)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 00:58:35 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 00:58:35 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 00:59:11 --- ERROR: ErrorException [ 1 ]: Call to a member function commit() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 00:59:11 --- STRACE: ErrorException [ 1 ]: Call to a member function commit() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:00:13 --- ERROR: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:00:13 --- STRACE: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:02:10 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:02:10 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:02:16 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:02:16 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:02:22 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:02:22 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:02:50 --- ERROR: ErrorException [ 1 ]: Call to a member function begin() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:02:50 --- STRACE: ErrorException [ 1 ]: Call to a member function begin() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:03:34 --- ERROR: ErrorException [ 1 ]: Call to a member function begin() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:03:34 --- STRACE: ErrorException [ 1 ]: Call to a member function begin() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:05:00 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:05:00 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:05:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:05:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(247): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 247, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:05:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:05:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(247): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 247, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:05:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:05:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(247): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 247, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:06:31 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ MODPATH\_app\career\classes\model\career.php [ 234 ]
2012-07-14 01:06:31 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database::query() should not be called statically, assuming $this from incompatible context ~ MODPATH\_app\career\classes\model\career.php [ 234 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(234): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\www\multibin...', 234, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:08:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:08:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:08:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:08:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:08:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:08:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:08:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:08:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:09:11 --- ERROR: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:09:11 --- STRACE: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:10:11 --- ERROR: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:10:11 --- STRACE: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:10:21 --- ERROR: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:10:21 --- STRACE: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:10:34 --- ERROR: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:10:34 --- STRACE: ErrorException [ 1 ]: Call to a member function __toString() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:11:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:11:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:11:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:11:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:11:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:11:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:11:59 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:11:59 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:12:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:12:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:12:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
2012-07-14 01:12:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 253 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(253): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 253, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:12:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 248 ]
2012-07-14 01:12:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 248 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 248, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:12:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 248 ]
2012-07-14 01:12:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\classes\model\career.php [ 248 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(248): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 248, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:13:00 --- ERROR: ErrorException [ 1 ]: Call to a member function count_records() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 248 ]
2012-07-14 01:13:00 --- STRACE: ErrorException [ 1 ]: Call to a member function count_records() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 248 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:13:20 --- ERROR: ErrorException [ 1 ]: Call to a member function count_records() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:13:20 --- STRACE: ErrorException [ 1 ]: Call to a member function count_records() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:13:32 --- ERROR: ErrorException [ 1 ]: Call to a member function count_records() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:13:32 --- STRACE: ErrorException [ 1 ]: Call to a member function count_records() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:13:53 --- ERROR: ErrorException [ 1 ]: Call to a member function list_tables() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:13:53 --- STRACE: ErrorException [ 1 ]: Call to a member function list_tables() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:14:02 --- ERROR: ErrorException [ 1 ]: Call to a member function list_tables() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:14:02 --- STRACE: ErrorException [ 1 ]: Call to a member function list_tables() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:14:07 --- ERROR: ErrorException [ 1 ]: Call to a member function list_tables() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
2012-07-14 01:14:07 --- STRACE: ErrorException [ 1 ]: Call to a member function list_tables() on a non-object ~ MODPATH\_app\career\classes\model\career.php [ 247 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:14:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
2012-07-14 01:14:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(250): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 250, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:14:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
2012-07-14 01:14:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: rows ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(250): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 250, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:14:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\career\classes\model\career.php [ 240 ]
2012-07-14 01:14:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL::where() ~ MODPATH\_app\career\classes\model\career.php [ 240 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:15:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 236 ]
2012-07-14 01:15:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_app\career\classes\model\career.php [ 236 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(236): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\multibin...', 236, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:21:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: listings ~ MODPATH\_app\career\classes\controller\backend\career.php [ 161 ]
2012-07-14 01:21:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: listings ~ MODPATH\_app\career\classes\controller\backend\career.php [ 161 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(161): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 161, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#6 {main}
2012-07-14 01:25:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$table ~ MODPATH\_app\admin\classes\model\user.php [ 23 ]
2012-07-14 01:25:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$table ~ MODPATH\_app\admin\classes\model\user.php [ 23 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 23, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(28): Model_User->__construct()
#2 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\authentication.php(44): Model_User::instance()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#8 {main}
2012-07-14 01:26:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\_app\admin\classes\model\user.php [ 219 ]
2012-07-14 01:26:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\_app\admin\classes\model\user.php [ 219 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 01:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 01:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 01:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 01:34:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
2012-07-14 01:34:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(250): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 250, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:34:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
2012-07-14 01:34:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ MODPATH\_app\career\classes\model\career.php [ 250 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(250): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 250, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:36:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:36:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:36:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
2012-07-14 01:36:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ MODPATH\_app\career\classes\model\career.php [ 233 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:37:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::from() ~ MODPATH\_app\career\classes\model\career.php [ 235 ]
2012-07-14 01:37:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::from() ~ MODPATH\_app\career\classes\model\career.php [ 235 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:41:58 --- ERROR: ErrorException [ 1 ]: Cannot call constructor ~ MODPATH\_app\career\classes\model\career.php [ 18 ]
2012-07-14 01:41:58 --- STRACE: ErrorException [ 1 ]: Cannot call constructor ~ MODPATH\_app\career\classes\model\career.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:42:01 --- ERROR: ErrorException [ 1 ]: Cannot call constructor ~ MODPATH\_app\career\classes\model\career.php [ 18 ]
2012-07-14 01:42:01 --- STRACE: ErrorException [ 1 ]: Cannot call constructor ~ MODPATH\_app\career\classes\model\career.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:44:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
2012-07-14 01:44:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:44:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
2012-07-14 01:44:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:45:41 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Database_Query::as_object() must be an array, string given, called in D:\www\multibintang-career\_mod\_app\career\classes\model\career.php on line 242 and defined ~ MODPATH\database\classes\kohana\database\query.php [ 117 ]
2012-07-14 01:45:41 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Database_Query::as_object() must be an array, string given, called in D:\www\multibintang-career\_mod\_app\career\classes\model\career.php on line 242 and defined ~ MODPATH\database\classes\kohana\database\query.php [ 117 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(117): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 117, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(242): Kohana_Database_Query->as_object('career', '')
#2 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#3 [internal function]: Controller_Backend_Career->action_index()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#8 {main}
2012-07-14 01:45:44 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Database_Query::as_object() must be an array, string given, called in D:\www\multibintang-career\_mod\_app\career\classes\model\career.php on line 242 and defined ~ MODPATH\database\classes\kohana\database\query.php [ 117 ]
2012-07-14 01:45:44 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Database_Query::as_object() must be an array, string given, called in D:\www\multibintang-career\_mod\_app\career\classes\model\career.php on line 242 and defined ~ MODPATH\database\classes\kohana\database\query.php [ 117 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(117): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 117, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(242): Kohana_Database_Query->as_object('career', '')
#2 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#3 [internal function]: Controller_Backend_Career->action_index()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#8 {main}
2012-07-14 01:45:54 --- ERROR: ErrorException [ 1 ]: Cannot use [] for reading ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
2012-07-14 01:45:54 --- STRACE: ErrorException [ 1 ]: Cannot use [] for reading ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:45:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant a - assumed 'a' ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
2012-07-14 01:45:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant a - assumed 'a' ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(242): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 242, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:46:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: asdf ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
2012-07-14 01:46:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: asdf ~ MODPATH\_app\career\classes\model\career.php [ 242 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\model\career.php(242): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 242, Array)
#1 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(157): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-14 01:50:55 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_result ~ MODPATH\_app\career\classes\model\career.php [ 259 ]
2012-07-14 01:50:55 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_result ~ MODPATH\_app\career\classes\model\career.php [ 259 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:50:58 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_result ~ MODPATH\_app\career\classes\model\career.php [ 259 ]
2012-07-14 01:50:58 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_result ~ MODPATH\_app\career\classes\model\career.php [ 259 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 01:52:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 173 ]
2012-07-14 01:52:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_rows ~ MODPATH\_app\career\classes\controller\backend\career.php [ 173 ]
--
#0 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(173): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 173, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#6 {main}
2012-07-14 02:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:32:38 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-14 02:32:38 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 02:32:56 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-14 02:32:56 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 02:33:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-14 02:33:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 02:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:33:46 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-14 02:33:46 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 02:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:35:18 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-14 02:35:18 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-14 02:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-14 02:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-14 02:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-14 02:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-14 02:56:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-14 02:56:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}