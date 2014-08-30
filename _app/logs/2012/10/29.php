<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-29 14:54:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
2012-10-29 14:54:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 152, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-29 14:58:35 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-29 14:58:35 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(40): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(79): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(20): ACL::instance()
#6 [internal function]: Controller_Backend_BaseAdmin->before()
#7 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_BaseAdmin))
#8 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-29 14:58:48 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-29 14:58:48 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(40): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(79): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(20): ACL::instance()
#6 [internal function]: Controller_Backend_BaseAdmin->before()
#7 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_BaseAdmin))
#8 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-29 15:19:19 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-29 15:19:19 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(416): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#4 [internal function]: Controller_Backend_PageCategory->action_view()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-29 15:19:23 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-29 15:19:23 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(416): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#4 [internal function]: Controller_Backend_PageCategory->action_view()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-29 15:19:32 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-29 15:19:32 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(711): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#4 [internal function]: Controller_Backend_PageCategory->action_edit()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-29 15:21:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-29 15:21:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(416): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#4 [internal function]: Controller_Backend_PageCategory->action_view()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-29 15:21:35 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-10-29 15:21:35 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(416): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#4 [internal function]: Controller_Backend_PageCategory->action_view()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-29 15:56:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_page_category` WHERE `status` != 'deleted' ORDER BY `order` ASC ,  `sub_level` ASC ,  `subject` asc LIMIT 25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-29 15:56:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subject' in 'order clause' [ SELECT * FROM `tbl_page_category` WHERE `status` != 'deleted' ORDER BY `order` ASC ,  `sub_level` ASC ,  `subject` asc LIMIT 25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\model\pagecategory.php(222): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(143): Model_PageCategory->find(Array, Array, 25, '')
#2 [internal function]: Controller_Backend_PageCategory->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-29 16:00:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
2012-10-29 16:00:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 152, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-29 16:01:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
2012-10-29 16:01:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 152, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-29 16:01:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
2012-10-29 16:01:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\themes\default.php [ 152 ]
--
#0 D:\www\pemulihan\_app\classes\controller\themes\default.php(152): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 152, Array)
#1 D:\www\pemulihan\_mod\_modules\site\classes\controller\home.php(12): Controller_Themes_Default->before()
#2 [internal function]: Controller_Home->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-29 16:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL media/arus-hayat-voice-note was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-29 16:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL media/arus-hayat-voice-note was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL media was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 16:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL media was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:17:10 --- ERROR: View_Exception [ 0 ]: The requested view site/media_detail_page could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-29 16:17:10 --- STRACE: View_Exception [ 0 ]: The requested view site/media_detail_page could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('site/media_deta...')
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(30): Kohana_View->__construct('site/media_deta...', NULL)
#2 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(225): Kohana_View::factory('site/media_deta...')
#3 [internal function]: Controller_Media->action_category()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-10-29 16:17:22 --- ERROR: View_Exception [ 0 ]: The requested view site/media_detail_page could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-29 16:17:22 --- STRACE: View_Exception [ 0 ]: The requested view site/media_detail_page could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('site/media_deta...')
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(30): Kohana_View->__construct('site/media_deta...', NULL)
#2 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(225): Kohana_View::factory('site/media_deta...')
#3 [internal function]: Controller_Media->action_category()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-10-29 16:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 16:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 16:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 16:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 16:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:28:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 196 ]
2012-10-29 16:28:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 196 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 196, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:28:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 196 ]
2012-10-29 16:28:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 196 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 196, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:29:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 196 ]
2012-10-29 16:29:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 196 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(196): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 196, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:29:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
2012-10-29 16:29:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(198): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 198, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:30:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
2012-10-29 16:30:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(198): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 198, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:30:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
2012-10-29 16:30:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(198): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 198, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:30:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
2012-10-29 16:30:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(198): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 198, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:30:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
2012-10-29 16:30:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 198 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(198): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 198, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:31:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: mediafile ~ MODPATH\_modules\site\classes\controller\media.php [ 219 ]
2012-10-29 16:31:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: mediafile ~ MODPATH\_modules\site\classes\controller\media.php [ 219 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\classes\controller\media.php(219): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 219, Array)
#1 [internal function]: Controller_Media->action_category()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 16:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 16:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 16:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 16:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 16:59:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 72 ]
2012-10-29 16:59:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 72 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(72): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 72, Array)
#1 [internal function]: Controller_Backend_MediaFile->before()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 17:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 17:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 17:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 17:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 17:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 17:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 17:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 17:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 17:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 17:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 17:10:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_MediaRelease::find_by_name() ~ MODPATH\_modules\site\classes\controller\media.php [ 194 ]
2012-10-29 17:10:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_MediaRelease::find_by_name() ~ MODPATH\_modules\site\classes\controller\media.php [ 194 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 17:12:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_MediaRelease::$title ~ MODPATH\_modules\site\views\site\media_detail_page.php [ 24 ]
2012-10-29 17:12:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_MediaRelease::$title ~ MODPATH\_modules\site\views\site\media_detail_page.php [ 24 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\views\site\media_detail_page.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 24, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\default.php(205): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\default.php(244): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Media))
#11 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#14 {main}
2012-10-29 18:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 18:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 18:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 18:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 18:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 18:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 18:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mediakidung was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mediakidung was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 18:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 18:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mobile/favicon.ico was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:38:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ APPPATH\classes\controller\themes\default.php [ 64 ]
2012-10-29 18:38:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Setting' not found ~ APPPATH\classes\controller\themes\default.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 18:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 18:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 18:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 18:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 18:43:25 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 71 ]
2012-10-29 18:43:25 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 71 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(71): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\pemuliha...', 71, Array)
#1 [internal function]: Controller_Backend_MediaRelease->action_index()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 18:43:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 73 ]
2012-10-29 18:43:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 73 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 73, Array)
#1 [internal function]: Controller_Backend_MediaRelease->action_index()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 18:43:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaRelease::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 171 ]
2012-10-29 18:43:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaRelease::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 171 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(171): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 171, Array)
#1 [internal function]: Controller_Backend_MediaRelease->action_index()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 18:44:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_index.php [ 2 ]
2012-10-29 18:44:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_index.php [ 2 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 2, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 18:51:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_index.php [ 45 ]
2012-10-29 18:51:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_index.php [ 45 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_index.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 45, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 18:53:44 --- ERROR: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 20 ]
2012-10-29 18:53:44 --- STRACE: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 20 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_add.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 20, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:23:29 --- ERROR: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 20 ]
2012-10-29 19:23:29 --- STRACE: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 20 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_add.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 20, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:25:38 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_modules\media\views\media\backend\mediarelease_index.php [ 3 ]
2012-10-29 19:25:38 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_modules\media\views\media\backend\mediarelease_index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 19:27:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_menu ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 3 ]
2012-10-29 19:27:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_menu ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 3 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_add.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 3, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:28:02 --- ERROR: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 20 ]
2012-10-29 19:28:02 --- STRACE: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediarelease_add.php [ 20 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_add.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 20, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 19:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 19:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 19:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 19:29:45 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Session::get(), called in D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php on line 46 and defined ~ SYSPATH\classes\kohana\session.php [ 211 ]
2012-10-29 19:29:45 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Session::get(), called in D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php on line 46 and defined ~ SYSPATH\classes\kohana\session.php [ 211 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\session.php(211): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\pemuliha...', 211, Array)
#1 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(46): Kohana_Session->get()
#2 [internal function]: Controller_Backend_MediaRelease->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-29 19:42:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaRelease::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 466 ]
2012-10-29 19:42:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaRelease::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 466 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(466): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 466, Array)
#1 [internal function]: Controller_Backend_MediaRelease->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 19:42:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_menu ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 3 ]
2012-10-29 19:42:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_menu ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 3 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 3, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:43:01 --- ERROR: ErrorException [ 2 ]: str_repeat() expects parameter 2 to be long, string given ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 3 ]
2012-10-29 19:43:01 --- STRACE: ErrorException [ 2 ]: str_repeat() expects parameter 2 to be long, string given ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'str_repeat() ex...', 'D:\www\pemuliha...', 3, Array)
#1 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_edit.php(3): str_repeat('Media Release L...', 'Listings')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-10-29 19:43:13 --- ERROR: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 3 ]
2012-10-29 19:43:13 --- STRACE: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'str_replace() e...', 'D:\www\pemuliha...', 3, Array)
#1 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_edit.php(3): str_replace('Media Release L...', 'Listings')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-10-29 19:43:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 25 ]
2012-10-29 19:43:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ MODPATH\_modules\media\views\media\backend\mediarelease_edit.php [ 25 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_edit.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 25, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:44:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_menu ~ MODPATH\_modules\media\views\media\backend\mediarelease_view.php [ 3 ]
2012-10-29 19:44:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_menu ~ MODPATH\_modules\media\views\media\backend\mediarelease_view.php [ 3 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 3, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:45:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH\_modules\media\views\media\backend\mediarelease_view.php [ 19 ]
2012-10-29 19:45:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ MODPATH\_modules\media\views\media\backend\mediarelease_view.php [ 19 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediarelease_view.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 19, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 19:46:19 --- ERROR: ErrorException [ 8 ]: Undefined index: category_id ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 321 ]
2012-10-29 19:46:19 --- STRACE: ErrorException [ 8 ]: Undefined index: category_id ~ MODPATH\_modules\media\classes\controller\backend\mediarelease.php [ 321 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(321): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 321, Array)
#1 [internal function]: Controller_Backend_MediaRelease->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:00:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'news_id' in 'field list' [ INSERT INTO `tbl_media_release_file` (`release_id`, `field_name`, `file_name`, `file_type`, `caption`, `news_id`) VALUES (0, 'image_1', 'b34e0f9ed47c962fa0ce55a5de37190d.png', 'image/png', '', 8) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-29 20:00:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'news_id' in 'field list' [ INSERT INTO `tbl_media_release_file` (`release_id`, `field_name`, `file_name`, `file_type`, `caption`, `news_id`) VALUES (0, 'image_1', 'b34e0f9ed47c962fa0ce55a5de37190d.png', 'image/png', '', 8) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 D:\www\pemulihan\_mod\_modules\media\classes\model\mediareleasefile.php(98): Kohana_Database_Query->execute()
#2 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediarelease.php(245): Model_MediaReleaseFile->add(Array)
#3 [internal function]: Controller_Backend_MediaRelease->action_add()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaRelease))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-10-29 20:04:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_Media' not found ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 26 ]
2012-10-29 20:04:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_Media' not found ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:05:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_MediaFile' not found ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 43 ]
2012-10-29 20:05:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_MediaFile' not found ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:06:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$medias ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 183 ]
2012-10-29 20:06:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$medias ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 183 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(183): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 183, Array)
#1 [internal function]: Controller_Backend_MediaFile->action_index()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:17:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Media' not found ~ MODPATH\_modules\site\classes\controller\media.php [ 38 ]
2012-10-29 20:17:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Media' not found ~ MODPATH\_modules\site\classes\controller\media.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:17:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:17:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:18:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:18:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:18:58 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 208 ]
2012-10-29 20:18:58 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\_modules\site\classes\controller\media.php [ 208 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:19:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 331 ]
2012-10-29 20:19:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 331 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(331): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 331, Array)
#1 [internal function]: Controller_Backend_MediaFile->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:21:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 324 ]
2012-10-29 20:21:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$categories ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 324 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(324): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 324, Array)
#1 [internal function]: Controller_Backend_MediaFile->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:21:11 --- ERROR: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 14 ]
2012-10-29 20:21:11 --- STRACE: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 14 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_add.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 14, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:29:13 --- ERROR: ErrorException [ 1 ]: Class 'Model_MediaCategory' not found ~ MODPATH\_modules\site\classes\controller\home.php [ 70 ]
2012-10-29 20:29:13 --- STRACE: ErrorException [ 1 ]: Class 'Model_MediaCategory' not found ~ MODPATH\_modules\site\classes\controller\home.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:35:27 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\_modules\site\classes\controller\download.php [ 147 ]
2012-10-29 20:35:27 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\_modules\site\classes\controller\download.php [ 147 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:36:02 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\_modules\site\classes\controller\download.php [ 212 ]
2012-10-29 20:36:02 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\_modules\site\classes\controller\download.php [ 212 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 20:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 20:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 20:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:36:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$medias ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 561 ]
2012-10-29 20:36:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_MediaFile::$medias ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 561 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(561): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 561, Array)
#1 [internal function]: Controller_Backend_MediaFile->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:37:45 --- ERROR: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediafile_edit.php [ 20 ]
2012-10-29 20:37:45 --- STRACE: ErrorException [ 8 ]: Undefined index: media_id ~ MODPATH\_modules\media\views\media\backend\mediafile_edit.php [ 20 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_edit.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 20, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:39:01 --- ERROR: Database_Exception [ 1072 ]: Key column 'media_id' doesn't exist in table [ CREATE TABLE IF NOT EXISTS `tbl_media_file` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, `release_id` INT(11) UNSIGNED NOT NULL, `name` VARCHAR(96) NOT NULL, `title` VARCHAR(255) NOT NULL, `description` TEXT NOT NULL, `field_name` VARCHAR(128) NOT NULL, `file_name` VARCHAR(96) NOT NULL, `file_type` VARCHAR(64) NOT NULL, `caption` VARCHAR(255) NOT NULL, `allow_comment` TINYINT(1) NOT NULL, `status` ENUM('publish', 'unpublish', 'deleted') NOT NULL DEFAULT 'unpublish', `added` INT(11) UNSIGNED NOT NULL, `modified` INT(11) UNSIGNED NOT NULL, INDEX (`media_id`, `name`, `allow_comment`, `status`) ) ENGINE=MYISAM ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-29 20:39:01 --- STRACE: Database_Exception [ 1072 ]: Key column 'media_id' doesn't exist in table [ CREATE TABLE IF NOT EXISTS `tbl_media_file` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, `release_id` INT(11) UNSIGNED NOT NULL, `name` VARCHAR(96) NOT NULL, `title` VARCHAR(255) NOT NULL, `description` TEXT NOT NULL, `field_name` VARCHAR(128) NOT NULL, `file_name` VARCHAR(96) NOT NULL, `file_type` VARCHAR(64) NOT NULL, `caption` VARCHAR(255) NOT NULL, `allow_comment` TINYINT(1) NOT NULL, `status` ENUM('publish', 'unpublish', 'deleted') NOT NULL DEFAULT 'unpublish', `added` INT(11) UNSIGNED NOT NULL, `modified` INT(11) UNSIGNED NOT NULL, INDEX (`media_id`, `name`, `allow_comment`, `status`) ) ENGINE=MYISAM ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\model\mediafile.php(60): Kohana_Database_MySQL->query('CREATE', 'CREATE TABLE IF...')
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(138): Model_MediaFile->install()
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(93): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-10-29 20:43:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_MediaFile::$media_id ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 353 ]
2012-10-29 20:43:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_MediaFile::$media_id ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 353 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(353): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 353, Array)
#1 [internal function]: Controller_Backend_MediaFile->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:43:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: media ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 366 ]
2012-10-29 20:43:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: media ~ MODPATH\_modules\media\classes\controller\backend\mediafile.php [ 366 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\mediafile.php(366): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 366, Array)
#1 [internal function]: Controller_Backend_MediaFile->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 20:43:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: media ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 21 ]
2012-10-29 20:43:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: media ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 21 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_view.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 21, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:44:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:44:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:46:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
2012-10-29 20:46:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_view.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 100, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:46:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
2012-10-29 20:46:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_view.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 100, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:46:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
2012-10-29 20:46:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_view.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 100, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:47:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
2012-10-29 20:47:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_view.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 100, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:47:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
2012-10-29 20:47:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ MODPATH\_modules\media\views\media\backend\mediafile_view.php [ 100 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_view.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 100, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:56:07 --- ERROR: ErrorException [ 8 ]: Undefined index: audio/AMR ~ MODPATH\_modules\media\views\media\backend\mediafile_index.php [ 83 ]
2012-10-29 20:56:07 --- STRACE: ErrorException [ 8 ]: Undefined index: audio/AMR ~ MODPATH\_modules\media\views\media\backend\mediafile_index.php [ 83 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_index.php(83): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 83, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:57:02 --- ERROR: ErrorException [ 8 ]: Undefined index: audio/AMR ~ MODPATH\_modules\media\views\media\backend\mediafile_index.php [ 83 ]
2012-10-29 20:57:02 --- STRACE: ErrorException [ 8 ]: Undefined index: audio/AMR ~ MODPATH\_modules\media\views\media\backend\mediafile_index.php [ 83 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_index.php(83): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 83, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 20:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 20:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 20:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 20:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 20:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 20:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 20:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 20:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 21:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:19:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:19:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:36:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:36:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:51:01 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 48 ]
2012-10-29 21:51:01 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 48 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode() [<a h...', 'D:\www\pemuliha...', 48, Array)
#1 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_add.php(48): implode(',', 'mp3,amr')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-10-29 21:52:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: filetype ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 50 ]
2012-10-29 21:52:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: filetype ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 50 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_add.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 50, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 21:52:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: filetype ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 50 ]
2012-10-29 21:52:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: filetype ~ MODPATH\_modules\media\views\media\backend\mediafile_add.php [ 50 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\mediafile_add.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 50, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_MediaFile))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 21:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 21:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-29 21:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/order-asc.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-29 22:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 22:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 22:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-29 22:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-29 22:07:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_MediaCategory' not found ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 36 ]
2012-10-29 22:07:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_MediaCategory' not found ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 22:08:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Media::$category_id ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 65 ]
2012-10-29 22:08:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Media::$category_id ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 65 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\media_index.php(65): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 65, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 22:09:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 2 ]
2012-10-29 22:09:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_id ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 2 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\media_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 2, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 22:10:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 67 ]
2012-10-29 22:10:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 67 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\media_index.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 67, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 22:13:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 66 ]
2012-10-29 22:13:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_modules\media\views\media\backend\media_index.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-29 22:13:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 317 ]
2012-10-29 22:13:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 317 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\media.php(317): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 317, Array)
#1 [internal function]: Controller_Backend_Media->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 22:14:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 317 ]
2012-10-29 22:14:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 317 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\media.php(317): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 317, Array)
#1 [internal function]: Controller_Backend_Media->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 22:14:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 317 ]
2012-10-29 22:14:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Media::$max_upload ~ MODPATH\_modules\media\classes\controller\backend\media.php [ 317 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\controller\backend\media.php(317): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 317, Array)
#1 [internal function]: Controller_Backend_Media->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-29 22:15:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_MediaRelease::$sub_level ~ MODPATH\_modules\media\views\media\backend\media_edit.php [ 26 ]
2012-10-29 22:15:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_MediaRelease::$sub_level ~ MODPATH\_modules\media\views\media\backend\media_edit.php [ 26 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\media_edit.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 22:16:11 --- ERROR: ErrorException [ 8 ]: Undefined index: max_upload ~ MODPATH\_modules\media\views\media\backend\media_edit.php [ 39 ]
2012-10-29 22:16:11 --- STRACE: ErrorException [ 8 ]: Undefined index: max_upload ~ MODPATH\_modules\media\views\media\backend\media_edit.php [ 39 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\media_edit.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 39, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 22:16:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_MediaRelease::$sub_level ~ MODPATH\_modules\media\views\media\backend\media_add.php [ 26 ]
2012-10-29 22:16:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_MediaRelease::$sub_level ~ MODPATH\_modules\media\views\media\backend\media_add.php [ 26 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\views\media\backend\media_add.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(45): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(92): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(49): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Media))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-29 22:21:44 --- ERROR: Database_Exception [ 1072 ]: Key column 'release_id' doesn't exist in table [ CREATE TABLE IF NOT EXISTS `tbl_media_file` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, `media_id` INT(11) UNSIGNED NULL, `field_name` VARCHAR(96) NULL, `file_name` VARCHAR(64) NULL, `file_type` VARCHAR(16) NULL, `caption` VARCHAR(255) NULL, INDEX (`release_id`) ) ENGINE=MYISAM ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-29 22:21:44 --- STRACE: Database_Exception [ 1072 ]: Key column 'release_id' doesn't exist in table [ CREATE TABLE IF NOT EXISTS `tbl_media_file` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, `media_id` INT(11) UNSIGNED NULL, `field_name` VARCHAR(96) NULL, `file_name` VARCHAR(64) NULL, `file_type` VARCHAR(16) NULL, `caption` VARCHAR(255) NULL, INDEX (`release_id`) ) ENGINE=MYISAM ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\media\classes\model\mediafile.php(45): Kohana_Database_MySQL->query('INSERT', 'CREATE TABLE IF...')
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(138): Model_MediaFile->install()
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(93): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-10-29 23:56:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT * FROM `tbl_media_file` WHERE `status` != 'unpublish' AND `file_type` = 'audio/mpeg'ORDER BY   `added` desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-10-29 23:56:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT * FROM `tbl_media_file` WHERE `status` != 'unpublish' AND `file_type` = 'audio/mpeg'ORDER BY   `added` desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/media/classes/model/mediafile.php(195): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/home.php(71): Model_MediaFile->find(Array, Array)
#2 [internal function]: Controller_Home->action_index()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}