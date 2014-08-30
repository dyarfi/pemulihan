<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-27 00:00:55 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-27 00:00:55 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(20): Model_UserLevel->find()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(39): Model_ModuleList->__construct()
#3 /Volumes/Data/www/pemulihan/_app/classes/acl.php(40): Model_ModuleList::instance()
#4 /Volumes/Data/www/pemulihan/_app/classes/acl.php(79): ACL->__construct()
#5 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/authentication.php(16): ACL::instance()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-27 00:01:06 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-27 00:01:06 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(20): Model_UserLevel->find()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(39): Model_ModuleList->__construct()
#3 /Volumes/Data/www/pemulihan/_app/classes/acl.php(40): Model_ModuleList::instance()
#4 /Volumes/Data/www/pemulihan/_app/classes/acl.php(79): ACL->__construct()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(20): ACL::instance()
#6 [internal function]: Controller_Backend_BaseAdmin->before()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_BaseAdmin))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-27 00:10:21 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-27 00:10:21 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(20): Model_UserLevel->find()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(39): Model_ModuleList->__construct()
#3 /Volumes/Data/www/pemulihan/_app/classes/acl.php(40): Model_ModuleList::instance()
#4 /Volumes/Data/www/pemulihan/_app/classes/acl.php(79): ACL->__construct()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(20): ACL::instance()
#6 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(18): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Member->before()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-27 00:10:28 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-27 00:10:28 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(20): Model_UserLevel->find()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(39): Model_ModuleList->__construct()
#3 /Volumes/Data/www/pemulihan/_app/classes/acl.php(40): Model_ModuleList::instance()
#4 /Volumes/Data/www/pemulihan/_app/classes/acl.php(79): ACL->__construct()
#5 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/authentication.php(16): ACL::instance()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-27 00:20:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: load ~ MODPATH/_modules/member/views/member/backend/member_index.php [ 99 ]
2012-10-27 00:20:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: load ~ MODPATH/_modules/member/views/member/backend/member_index.php [ 99 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_index.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 99, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 00:21:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: load ~ MODPATH/_modules/member/views/member/backend/member_index.php [ 99 ]
2012-10-27 00:21:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: load ~ MODPATH/_modules/member/views/member/backend/member_index.php [ 99 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_index.php(99): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 99, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 00:22:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_UserProfile::$name ~ MODPATH/_modules/member/views/member/backend/member_view.php [ 53 ]
2012-10-27 00:22:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_UserProfile::$name ~ MODPATH/_modules/member/views/member/backend/member_view.php [ 53 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_view.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 00:22:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_UserProfile::$name ~ MODPATH/_modules/member/views/member/backend/member_view.php [ 53 ]
2012-10-27 00:22:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_UserProfile::$name ~ MODPATH/_modules/member/views/member/backend/member_view.php [ 53 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_view.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 53, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 00:35:05 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-27 00:35:05 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(20): Model_UserLevel->find()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/modulelist.php(39): Model_ModuleList->__construct()
#3 /Volumes/Data/www/pemulihan/_app/classes/acl.php(40): Model_ModuleList::instance()
#4 /Volumes/Data/www/pemulihan/_app/classes/acl.php(79): ACL->__construct()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(16): ACL::instance()
#6 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/download.php(19): Controller_Themes_Default->before()
#7 [internal function]: Controller_Download->before()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Download))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-27 00:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 00:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 00:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 00:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 01:10:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: genders ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 83 ]
2012-10-27 01:10:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: genders ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 83 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 83, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:10:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 86 ]
2012-10-27 01:10:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 86 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:12:55 --- ERROR: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 86 ]
2012-10-27 01:12:55 --- STRACE: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 86 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:13:06 --- ERROR: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 86 ]
2012-10-27 01:13:06 --- STRACE: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 86 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 86, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:18:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 85 ]
2012-10-27 01:18:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 85 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(85): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 85, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:18:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 85 ]
2012-10-27 01:18:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 85 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(85): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 85, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:19:10 --- ERROR: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 70 ]
2012-10-27 01:19:10 --- STRACE: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 70 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php(70): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 70, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:22:24 --- ERROR: ErrorException [ 8 ]: Undefined index: male ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 77 ]
2012-10-27 01:22:24 --- STRACE: ErrorException [ 8 ]: Undefined index: male ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 77 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 77, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:24:57 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php on line 78 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
2012-10-27 01:24:57 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php on line 78 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Data/w...', 252, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php(78): Kohana_Form::select('gender', 'Female', '')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#16 {main}
2012-10-27 01:26:23 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php on line 78 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
2012-10-27 01:26:23 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php on line 78 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Data/w...', 252, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php(78): Kohana_Form::select('gender', 'Female', false)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#10 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#16 {main}
2012-10-27 01:28:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: options ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 79 ]
2012-10-27 01:28:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: options ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 79 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:29:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: options ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 79 ]
2012-10-27 01:29:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: options ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 79 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_edit.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:29:36 --- ERROR: ErrorException [ 1 ]: Undefined class constant 's' ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 81 ]
2012-10-27 01:29:36 --- STRACE: ErrorException [ 1 ]: Undefined class constant 's' ~ MODPATH/_modules/member/views/member/backend/member_edit.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-27 01:35:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_UserProfile::$id ~ MODPATH/_modules/user/classes/model/userprofile.php [ 169 ]
2012-10-27 01:35:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_UserProfile::$id ~ MODPATH/_modules/user/classes/model/userprofile.php [ 169 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/userprofile.php(169): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 169, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(476): Model_UserProfile->update()
#2 [internal function]: Controller_Backend_Member->action_edit()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-27 01:45:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 85 ]
2012-10-27 01:45:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 85 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 85, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 01:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 01:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 01:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 01:53:28 --- ERROR: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 66 ]
2012-10-27 01:53:28 --- STRACE: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 66 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_edit.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:55:14 --- ERROR: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 66 ]
2012-10-27 01:55:14 --- STRACE: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 66 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_edit.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:55:52 --- ERROR: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 66 ]
2012-10-27 01:55:52 --- STRACE: ErrorException [ 8 ]: Undefined index: gender ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 66 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_edit.php(66): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 66, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:57:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: genders ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 69 ]
2012-10-27 01:57:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: genders ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 69 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_edit.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 69, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:57:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$genders ~ MODPATH/_modules/user/classes/controller/backend/user.php [ 402 ]
2012-10-27 01:57:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$genders ~ MODPATH/_modules/user/classes/controller/backend/user.php [ 402 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/user.php(402): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 402, Array)
#1 [internal function]: Controller_Backend_User->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 01:57:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$_genders ~ MODPATH/_modules/user/classes/controller/backend/user.php [ 402 ]
2012-10-27 01:57:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$_genders ~ MODPATH/_modules/user/classes/controller/backend/user.php [ 402 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/controller/backend/user.php(402): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 402, Array)
#1 [internal function]: Controller_Backend_User->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 01:58:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 69 ]
2012-10-27 01:58:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 69 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_edit.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 69, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 01:58:40 --- ERROR: ErrorException [ 8 ]: Undefined index: country ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 75 ]
2012-10-27 01:58:40 --- STRACE: ErrorException [ 8 ]: Undefined index: country ~ MODPATH/_modules/user/views/user/backend/user_edit.php [ 75 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_edit.php(75): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 75, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 02:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEst was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEst was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEst was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEst was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TEs was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/TE was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/T was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/T was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Te was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Te was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Tes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Tes was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 02:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/Test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 02:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test  ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test U ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test U ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:12:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test U ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:12:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test U ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test User ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test User ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test User ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test User ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test User ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/Test User ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 02:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 02:38:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH/_modules/user/classes/model/user.php [ 147 ]
2012-10-27 02:38:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH/_modules/user/classes/model/user.php [ 147 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/user.php(147): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 147, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(1181): Model_User->update()
#2 [internal function]: Controller_Backend_Member->action_change()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-27 02:40:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH/_modules/user/classes/model/user.php [ 147 ]
2012-10-27 02:40:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH/_modules/user/classes/model/user.php [ 147 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/user.php(147): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 147, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(1181): Model_User->update()
#2 [internal function]: Controller_Backend_Member->action_change()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-27 02:42:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH/_modules/user/classes/model/user.php [ 147 ]
2012-10-27 02:42:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH/_modules/user/classes/model/user.php [ 147 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/classes/model/user.php(147): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 147, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/member/classes/controller/backend/member.php(1184): Model_User->update()
#2 [internal function]: Controller_Backend_Member->action_change()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-27 03:04:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: index ~ MODPATH/_modules/member/views/member/backend/member_index.php [ 78 ]
2012-10-27 03:04:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: index ~ MODPATH/_modules/member/views/member/backend/member_index.php [ 78 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_index.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 78, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 03:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 03:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 03:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 03:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 03:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 03:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 04:32:58 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ MODPATH/_modules/user/views/user/backend/user_add.php [ 18 ]
2012-10-27 04:32:58 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ MODPATH/_modules/user/views/user/backend/user_add.php [ 18 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/user/views/user/backend/user_add.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 18, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_User))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 05:00:19 --- ERROR: ErrorException [ 8 ]: Undefined index: about ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 93 ]
2012-10-27 05:00:19 --- STRACE: ErrorException [ 8 ]: Undefined index: about ~ MODPATH/_modules/member/views/member/backend/member_add.php [ 93 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/member/views/member/backend/member_add.php(93): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Data/w...', 93, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(45): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(92): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Member))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-27 05:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 05:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 05:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 05:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 05:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 05:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 05:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 05:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 05:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 05:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 05:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 05:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 14:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 14:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 14:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 14:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 14:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 14:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 14:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 14:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL members/Nw== was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-27 15:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL members/Nw== was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-27 15:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 15:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 15:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 16:00:36 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::user_agent(), called in /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php on line 28 and defined ~ SYSPATH/classes/kohana/request.php [ 387 ]
2012-10-27 16:00:36 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::user_agent(), called in /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php on line 28 and defined ~ SYSPATH/classes/kohana/request.php [ 387 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(387): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Data/w...', 387, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(28): Kohana_Request::user_agent()
#2 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(12): Controller_Themes_Default->before()
#3 [internal function]: Controller_Home->before()
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#8 {main}
2012-10-27 16:00:39 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'user_agent' ~ APPPATH/classes/controller/themes/default.php [ 28 ]
2012-10-27 16:00:39 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'user_agent' ~ APPPATH/classes/controller/themes/default.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-27 16:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 16:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 16:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/fancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 16:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/fancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 16:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/close.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 16:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 16:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/close.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 16:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 16:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/ancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 16:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/ancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 16:52:15 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 105 ]
2012-10-27 16:52:15 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 105 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(105): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 105, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 19:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/d69fdf1bfc2768f4c36bbd6f00df587b_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/medias/0951966dba462233204c973de2725fab_crop_143x143.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:19:50 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
2012-10-27 19:19:50 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(146): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 146, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 19:19:55 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
2012-10-27 19:19:55 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(146): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 146, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 19:21:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
2012-10-27 19:21:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(146): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 146, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 19:21:03 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
2012-10-27 19:21:03 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/member.php [ 146 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/member.php(146): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 146, Array)
#1 [internal function]: Controller_Member->action_login()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Member))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-27 19:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-27 19:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-27 19:23:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 105 ]
2012-10-27 19:23:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/_modules/site/classes/controller/home.php [ 105 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(105): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Data/w...', 105, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}