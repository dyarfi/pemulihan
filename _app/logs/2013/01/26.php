<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-26 13:22:57 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:24:27 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:25:24 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:25:25 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:25:32 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:25:50 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:25:54 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:26:16 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 13:26:16 --- STRACE: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_urls' doesn't exist [ SELECT MAX( `clicks` ) AS `clicks`, keywords FROM `wus_urls` GROUP BY `clicks` , `keywords` ORDER BY `clicks` DESC LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(287): Kohana_Database_MySQL->query(1, 'SELECT MAX( `cl...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(86): Model_Dashboard->manual_query('SELECT MAX( `cl...', true)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:37:04 --- ERROR: ErrorException [ 8 ]: Undefined index: table ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 305 ]
2013-01-26 13:37:04 --- STRACE: ErrorException [ 8 ]: Undefined index: table ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 305 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(305): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 305, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(80): Model_Dashboard->find_top_ten()
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:37:19 --- ERROR: Kohana_Exception [ 0 ]: There is no table wus_urls available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 306 ]
2013-01-26 13:37:19 --- STRACE: Kohana_Exception [ 0 ]: There is no table wus_urls available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 306 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(80): Model_Dashboard->find_top_ten(Array)
#1 [internal function]: Controller_Backend_Dashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-26 13:38:14 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_wus_urls available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 308 ]
2013-01-26 13:38:14 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_wus_urls available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 308 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(80): Model_Dashboard->find_top_ten(Array)
#1 [internal function]: Controller_Backend_Dashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-26 13:38:25 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_wus_urls available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 310 ]
2013-01-26 13:38:25 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_wus_urls available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 310 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(80): Model_Dashboard->find_top_ten(Array)
#1 [internal function]: Controller_Backend_Dashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-26 13:48:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 327 ]
2013-01-26 13:48:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 327 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(327): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 327, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_ten(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:49:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 327 ]
2013-01-26 13:49:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 327 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(327): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 327, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:49:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 327 ]
2013-01-26 13:49:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 327 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(327): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 327, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:50:31 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 319 ]
2013-01-26 13:50:31 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 319 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(319): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 319, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:50:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
2013-01-26 13:50:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(318): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 318, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:51:22 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
2013-01-26 13:51:22 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(318): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 318, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:51:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 319 ]
2013-01-26 13:51:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 319 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(319): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 319, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:53:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
2013-01-26 13:53:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(318): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 318, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 13:53:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: order ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
2013-01-26 13:53:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: order ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(318): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 318, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:05:35 --- ERROR: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 3 given ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 344 ]
2013-01-26 14:05:35 --- STRACE: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 3 given ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 344 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 344, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(344): print_r('ORDER BY   `cli...', 'GROUP BY clicks...', 'LIMIT 0, 12, 10')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#3 [internal function]: Controller_Backend_Dashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 14:09:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
2013-01-26 14:09:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 318 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(318): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 318, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:10:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:10:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:11:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: val ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 320 ]
2013-01-26 14:11:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: val ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 320 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(320): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 320, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:11:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
2013-01-26 14:11:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(357): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 357, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:11:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
2013-01-26 14:11:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(357): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 357, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:11:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
2013-01-26 14:11:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(357): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 357, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:12:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
2013-01-26 14:12:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 357 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(357): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 357, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:12:57 --- ERROR: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 356 ]
2013-01-26 14:12:57 --- STRACE: ErrorException [ 2 ]: print_r() expects at most 2 parameters, 4 given ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 356 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/Volumes/Data/w...', 356, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(356): print_r('  MAX( clicks )...', 'ORDER BY   `cli...', 'GROUP BY clicks...', ' LIMIT 0, 12, 1...')
#2 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#3 [internal function]: Controller_Backend_Dashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 14:13:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:13:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:14:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:14:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:14:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:14:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:14:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:14:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:14:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:14:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:14:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:14:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:15:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:15:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:15:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:15:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:15:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:15:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:16:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:16:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:16:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:16:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:16:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:16:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:16:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:16:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:17:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
2013-01-26 14:17:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 358 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(358): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 358, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:17:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:17:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:18:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:18:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:19:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:19:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:19:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:19:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:19:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:19:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:19:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:19:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:19:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:19:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:19:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:19:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:20:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:20:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:20:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:20:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:20:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:20:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:20:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:20:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:20:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:20:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:21:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:21:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:21:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:21:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:23:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:23:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:24:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:24:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:25:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:25:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:25:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:25:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:26:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:26:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:27:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 361 ]
2013-01-26 14:27:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 361 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(361): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 361, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:27:28 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 349 ]
2013-01-26 14:27:28 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 349 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 349, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(349): implode(', ', 5)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#3 [internal function]: Controller_Backend_Dashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 14:27:50 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 353 ]
2013-01-26 14:27:50 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 353 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 353, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(353): implode(', ', 5)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#3 [internal function]: Controller_Backend_Dashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 14:28:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:28:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:28:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:28:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:28:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:28:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:28:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
2013-01-26 14:28:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 359 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(359): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 359, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:29:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 360 ]
2013-01-26 14:29:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 360 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(360): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 360, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:30:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 363 ]
2013-01-26 14:30:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 363 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(363): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 363, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:30:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:30:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:30:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:30:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:30:58 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 350 ]
2013-01-26 14:30:58 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 350 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 350, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(350): implode(', ', 20)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#3 [internal function]: Controller_Backend_Dashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 14:31:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:31:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
2013-01-26 14:31:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 364 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(364): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 364, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:33:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 371 ]
2013-01-26 14:33:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 371 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(371): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 371, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:34:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:34:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:34:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:34:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:34:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:34:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:35:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:35:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:35:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:35:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:37:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:37:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:37:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:37:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:37:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:37:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:42:27 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_media_files available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 309 ]
2013-01-26 14:42:27 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_media_files available ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 309 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_Dashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-26 14:42:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:42:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:43:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:43:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:44:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
2013-01-26 14:44:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: where_cond ~ MODPATH/_modules/dashboard/classes/model/dashboard.php [ 370 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(370): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 370, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(87): Model_Dashboard->find_top_count(Array)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:45:05 --- ERROR: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_url_logs' doesn't exist [ SELECT COUNT(`user_agent`) as `count`, `user_agent` FROM `wus_url_logs` GROUP BY `user_agent` LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2013-01-26 14:45:05 --- STRACE: Database_Exception [ 1146 ]: Table 'client_wa_pemulihan2012.wus_url_logs' doesn't exist [ SELECT COUNT(`user_agent`) as `count`, `user_agent` FROM `wus_url_logs` GROUP BY `user_agent` LIMIT 0 , 10; ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/model/dashboard.php(287): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`u...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/classes/controller/backend/dashboard.php(104): Model_Dashboard->manual_query('SELECT COUNT(`u...', true)
#2 [internal function]: Controller_Backend_Dashboard->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#7 {main}
2013-01-26 14:46:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 25 ]
2013-01-26 14:46:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 25 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/views/dashboard/backend/dashboard_index.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 14:46:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 64 ]
2013-01-26 14:46:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 64 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/views/dashboard/backend/dashboard_index.php(64): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 64, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 14:47:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: top_ten_click ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 183 ]
2013-01-26 14:47:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: top_ten_click ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 183 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/views/dashboard/backend/dashboard_index.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 14:47:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 214 ]
2013-01-26 14:47:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 214 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/views/dashboard/backend/dashboard_index.php(214): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 214, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 14:48:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 248 ]
2013-01-26 14:48:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/_modules/dashboard/views/dashboard/backend/dashboard_index.php [ 248 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/dashboard/views/dashboard/backend/dashboard_index.php(248): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/Data/w...', 248, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 15:31:03 --- ERROR: View_Exception [ 0 ]: The requested view dashboard/backend/dashboard_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-26 15:31:03 --- STRACE: View_Exception [ 0 ]: The requested view dashboard/backend/dashboard_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('dashboard/backe...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('dashboard/backe...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/dashboard.php(136): Kohana_View::factory('dashboard/backe...')
#3 [internal function]: Controller_Backend_Dashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 15:31:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 25 ]
2013-01-26 15:31:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 25 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_index.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 15:32:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 25 ]
2013-01-26 15:32:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_menu ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 25 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_index.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 25, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 15:32:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 34 ]
2013-01-26 15:32:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 34 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_index.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 15:32:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 34 ]
2013-01-26 15:32:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH/_modules/user/views/user/backend/user_index.php [ 34 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_index.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 34, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 15:37:24 --- ERROR: Kohana_Exception [ 0 ]: There is no table tbl_media_file available ~ MODPATH/_modules/user/classes/model/dashboard.php [ 310 ]
2013-01-26 15:37:24 --- STRACE: Kohana_Exception [ 0 ]: There is no table tbl_media_file available ~ MODPATH/_modules/user/classes/model/dashboard.php [ 310 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/dashboard.php(88): Model_Dashboard->find_top_count(Array)
#1 [internal function]: Controller_Backend_Dashboard->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Dashboard))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#6 {main}
2013-01-26 15:52:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: functions ~ APPPATH/views/themes/defaultadmin.php [ 2 ]
2013-01-26 15:52:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: functions ~ APPPATH/views/themes/defaultadmin.php [ 2 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 2, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#6 [internal function]: Controller_Backend_BaseAdmin->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#11 {main}
2013-01-26 15:57:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dashboard' not found ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 88 ]
2013-01-26 15:57:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dashboard' not found ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-26 15:59:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dashboard' not found ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 88 ]
2013-01-26 15:59:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dashboard' not found ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-26 16:00:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_DashboardPanel' not found ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 88 ]
2013-01-26 16:00:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_DashboardPanel' not found ~ MODPATH/_modules/user/classes/controller/backend/userdashboard.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-26 16:00:30 --- ERROR: View_Exception [ 0 ]: The requested view user/backend/userdashboard_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-01-26 16:00:30 --- STRACE: View_Exception [ 0 ]: The requested view user/backend/userdashboard_index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('user/backend/us...')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('user/backend/us...', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/userdashboard.php(137): Kohana_View::factory('user/backend/us...')
#3 [internal function]: Controller_Backend_UserDashboard->action_index()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#8 {main}
2013-01-26 18:06:45 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 195 ]
2013-01-26 18:06:45 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 195 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(195): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 195, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 18:23:13 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 22 ]
2013-01-26 18:23:13 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 22, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(22): implode(',', '&nbsp;Hits (12)...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 18:25:14 --- ERROR: ErrorException [ 8 ]: Undefined index: articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 27 ]
2013-01-26 18:25:14 --- STRACE: ErrorException [ 8 ]: Undefined index: articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 27 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 27, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 18:25:25 --- ERROR: ErrorException [ 8 ]: Undefined index: articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 26 ]
2013-01-26 18:25:25 --- STRACE: ErrorException [ 8 ]: Undefined index: articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 26 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 26, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 18:29:06 --- ERROR: ErrorException [ 8 ]: Undefined index: articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 17 ]
2013-01-26 18:29:06 --- STRACE: ErrorException [ 8 ]: Undefined index: articles ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 17 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 17, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 18:29:16 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 17 ]
2013-01-26 18:29:16 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 17 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 17, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(17): implode(',', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 18:29:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 14 ]
2013-01-26 18:29:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 14 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Data/w...', 14, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(14): implode(',', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 18:30:09 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 14 ]
2013-01-26 18:30:09 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 14 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 14, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(14): implode(',', 0.5)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 18:31:56 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 18 ]
2013-01-26 18:31:56 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 18, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(18): implode(',', '&nbsp;Hits (12)...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 18:47:15 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 21 ]
2013-01-26 18:47:15 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(21): implode(',', '["apakah-allah-...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 18:47:37 --- ERROR: ErrorException [ 2 ]: implode() expects at most 2 parameters, 3 given ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 21 ]
2013-01-26 18:47:37 --- STRACE: ErrorException [ 2 ]: implode() expects at most 2 parameters, 3 given ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() expec...', '/Volumes/Data/w...', 21, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(21): implode(',', Array, true)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#16 {main}
2013-01-26 19:34:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: top_ten_click ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 218 ]
2013-01-26 19:34:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: top_ten_click ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 218 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 218, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 19:34:39 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$url ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 218 ]
2013-01-26 19:34:39 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$url ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 218 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(218): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 218, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 19:45:09 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 286 ]
2013-01-26 19:45:09 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 286 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(286): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 286, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 19:48:52 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 97 ]
2013-01-26 19:48:52 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 97 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 19:48:55 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$counts ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 97 ]
2013-01-26 19:48:55 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$counts ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 97 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 19:48:57 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 97 ]
2013-01-26 19:48:57 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$count ~ MODPATH/_modules/user/views/user/backend/userdashboard_index.php [ 97 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/userdashboard_index.php(97): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 97, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(51): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(101): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_UserDashboard))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#15 {main}
2013-01-26 20:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/jquery.jqplot.1.0.4/excanvas.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-26 20:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/jquery.jqplot.1.0.4/excanvas.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}
2013-01-26 20:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/jquery.jqplot.1.0.4/excanvas.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-01-26 20:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/jquery.jqplot.1.0.4/excanvas.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(141): Kohana_Request->execute()
#1 {main}