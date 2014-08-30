<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-18 23:01:59 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php on line 17 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2012-10-18 23:01:59 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php on line 17 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 43, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(17): Kohana_Controller->__construct()
#2 [internal function]: Controller_Backend_Member->__construct(Object(Request), Object(Response))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-18 23:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:17 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'client_pemulihan'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-10-18 23:29:17 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'client_pemulihan'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /Volumes/Data/www/pemulihan/_mod/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('tbl_user')
#2 /Volumes/Data/www/pemulihan/_mod/database/classes/kohana/database/mysql.php(330): Kohana_Database->quote('tbl_user')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/user.php(39): Kohana_Database_MySQL->list_tables('tbl_user')
#4 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/authentication.php(32): Model_User->install()
#5 [internal function]: Controller_Backend_Authentication->action_validate()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#10 {main}
2012-10-18 23:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:33:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:33:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:46:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:46:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.tipsy.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-18 23:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-18 23:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}