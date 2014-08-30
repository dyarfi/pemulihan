<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-12 00:31:14 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-12 00:31:14 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_app\classes\model\global.php(192): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career\_mod\_app\career\classes\kohana\career.php(32): Model_Global->globalTotal('career_titles', Array)
#4 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(255): Kohana_Career->get(Array, true)
#5 [internal function]: Controller_Backend_Career->action_view()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-12 00:31:16 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-12 00:31:16 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_app\classes\model\global.php(192): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career\_mod\_app\career\classes\kohana\career.php(32): Model_Global->globalTotal('career_titles', Array)
#4 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(255): Kohana_Career->get(Array, true)
#5 [internal function]: Controller_Backend_Career->action_view()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}