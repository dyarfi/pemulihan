<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-17 00:35:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Authentication::$logged_user ~ APPPATH/classes/controller/backend/baseadmin.php [ 33 ]
2012-10-17 00:35:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Authentication::$logged_user ~ APPPATH/classes/controller/backend/baseadmin.php [ 33 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 33, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/authentication.php(7): Controller_Backend_BaseAdmin->before()
#2 [internal function]: Controller_Backend_Authentication->before()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-17 00:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/T was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/T was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/T was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/T was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Te was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Te was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Tet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Tet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Tet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Tet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 00:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 00:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 01:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 01:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 01:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 01:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 01:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 01:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 01:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 01:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 01:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 01:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 01:11:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Member::$profile ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 74 ]
2012-10-17 01:11:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Member::$profile ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 74 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(74): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 74, Array)
#1 [internal function]: Controller_Backend_Member->before()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-17 01:12:49 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH/_modules/user/classes/model/userprofile.php [ 278 ]
2012-10-17 01:12:49 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH/_modules/user/classes/model/userprofile.php [ 278 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userprofile.php(278): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Volumes/Data/w...', 278, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(74): Model_UserProfile->find()
#2 [internal function]: Controller_Backend_Member->before()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-17 01:16:09 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 75 ]
2012-10-17 01:16:09 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 01:20:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: profiles ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 78 ]
2012-10-17 01:20:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: profiles ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 78 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 78, Array)
#1 [internal function]: Controller_Backend_Member->before()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-17 01:20:21 --- ERROR: ErrorException [ 1 ]: Call to a member function find_count() on a non-object ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 204 ]
2012-10-17 01:20:21 --- STRACE: ErrorException [ 1 ]: Call to a member function find_count() on a non-object ~ MODPATH/_modules/member/classes/controller/backend/member.php [ 204 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 01:31:22 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-17 01:31:22 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/model/member.php(230): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(76): Model_Member->find()
#2 [internal function]: Controller_Backend_Member->before()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-17 01:33:37 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-17 01:33:37 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_member' doesn't exist [ SELECT * FROM `tbl_member` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/model/member.php(230): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(76): Model_Member->find()
#2 [internal function]: Controller_Backend_Member->before()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-17 22:33:48 --- ERROR: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-17 22:33:48 --- STRACE: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('digg')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('digg', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('digg')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/views/article/backend/article_index.php(209): Kohana_Pagination->render('digg')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(95): Kohana_View->__toString()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(145): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(53): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#18 {main}
2012-10-17 22:33:53 --- ERROR: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-17 22:33:53 --- STRACE: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('digg')
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(30): Kohana_View->__construct('digg', NULL)
#2 /Volumes/Data/www/pemulihan/_mod/pagination/classes/kohana/pagination.php(254): Kohana_View::factory('digg')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/views/article/backend/article_index.php(209): Kohana_Pagination->render('digg')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#7 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(95): Kohana_View->__toString()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(145): Kohana_Controller_Template->after()
#12 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(53): Controller_Themes_DefaultAdmin->after()
#13 [internal function]: Controller_Backend_BaseAdmin->after()
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#15 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#18 {main}
2012-10-17 22:39:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/site/classes/controller/articles.php [ 113 ]
2012-10-17 22:39:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/site/classes/controller/articles.php [ 113 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/articles.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 113, Array)
#1 [internal function]: Controller_Articles->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-17 22:42:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: article_files ~ MODPATH/_modules/site/classes/controller/articles.php [ 94 ]
2012-10-17 22:42:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: article_files ~ MODPATH/_modules/site/classes/controller/articles.php [ 94 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/articles.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 94, Array)
#1 [internal function]: Controller_Articles->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-17 22:43:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/site/classes/controller/articles.php [ 114 ]
2012-10-17 22:43:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: order_by ~ MODPATH/_modules/site/classes/controller/articles.php [ 114 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/articles.php(114): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 114, Array)
#1 [internal function]: Controller_Articles->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-17 22:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 22:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 22:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 22:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 22:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list-corner.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 22:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-17 23:00:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-17 23:00:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/page/classes/model/page.php(252): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/page/classes/controller/backend/page.php(401): Model_Page->find(Array, Array, 25, -25)
#2 [internal function]: Controller_Backend_Page->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-17 23:11:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH/_modules/page/classes/controller/backend/page.php [ 249 ]
2012-10-17 23:11:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH/_modules/page/classes/controller/backend/page.php [ 249 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 23:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-17 23:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-17 23:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-17 23:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-17 23:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-17 23:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-17 23:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-17 23:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-17 23:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-17 23:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-17 23:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-17 23:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}