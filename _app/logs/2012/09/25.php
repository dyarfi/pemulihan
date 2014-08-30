<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-25 00:00:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 143 ]
2012-09-25 00:00:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 143 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(143): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 143, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('history', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_History->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_History))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:00:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 143 ]
2012-09-25 00:00:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 143 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(143): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 143, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('userlevel', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\userlevel.php(8): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserLevel->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:00:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 144 ]
2012-09-25 00:00:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 144 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(144): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 144, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('userlevel', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\userlevel.php(8): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserLevel->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:01:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 144 ]
2012-09-25 00:01:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 144 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(144): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 144, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('ajaxmenu', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\ajaxmenu.php(5): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_AjaxMenu->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:01:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 144 ]
2012-09-25 00:01:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 144 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(144): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 144, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('userlevel', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\userlevel.php(8): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserLevel->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:01:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 153 ]
2012-09-25 00:01:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 153 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(153): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 153, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('user', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\user.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:01:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
2012-09-25 00:01:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(156): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('history', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_History->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_History))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:01:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
2012-09-25 00:01:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(156): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('userlevel', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\userlevel.php(8): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserLevel->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:02:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
2012-09-25 00:02:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(156): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('userlevel', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\userlevel.php(8): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_UserLevel->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:02:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
2012-09-25 00:02:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(156): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('authentication', 'logout')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_Authentication->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:02:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
2012-09-25 00:02:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(156): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('authentication', 'logout')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_Authentication->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:02:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:02:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:03:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:03:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:03:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:03:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:03:04 --- ERROR: ErrorException [ 8 ]: Undefined index: 0 ~ MODPATH\_modules\user\views\user\backend\history_index.php [ 103 ]
2012-09-25 00:03:04 --- STRACE: ErrorException [ 8 ]: Undefined index: 0 ~ MODPATH\_modules\user\views\user\backend\history_index.php [ 103 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\backend\history_index.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 103, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_History))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-25 00:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:21:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:21:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:21:33 --- ERROR: ErrorException [ 8 ]: Undefined index: 0 ~ MODPATH\_modules\user\views\user\backend\history_index.php [ 103 ]
2012-09-25 00:21:33 --- STRACE: ErrorException [ 8 ]: Undefined index: 0 ~ MODPATH\_modules\user\views\user\backend\history_index.php [ 103 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\backend\history_index.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 103, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_History))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-25 00:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:34:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: modules_position ~ APPPATH\classes\acl.php [ 144 ]
2012-09-25 00:34:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: modules_position ~ APPPATH\classes\acl.php [ 144 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(144): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 144, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('history', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_History->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_History))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:35:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'module_id' in 'field list' [ INSERT INTO `tbl_history` (`module`, `user_id`, `controller`, `action`, `time`, `module_id`) VALUES ('', '1', 'history', 'index', 1348508125, '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-25 00:35:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'module_id' in 'field list' [ INSERT INTO `tbl_history` (`module`, `user_id`, `controller`, `action`, `time`, `module_id`) VALUES ('', '1', 'history', 'index', 1348508125, '4') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\history.php(113): Kohana_Database_Query->execute()
#2 D:\www\pemulihan\_app\classes\acl.php(150): Model_History->add(Array)
#3 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('history', 'index')
#4 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(11): Controller_Backend_BaseAdmin->before()
#5 [internal function]: Controller_Backend_History->before()
#6 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_History))
#7 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#10 {main}
2012-09-25 00:35:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 153 ]
2012-09-25 00:35:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 153 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(153): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 153, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('history', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_History->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_History))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:12 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:12 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:36:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:38:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:38:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:38:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:38:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:38:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:38:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:42:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:42:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:42:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
2012-09-25 00:42:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 156 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(156): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('modulelist', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\modulelist.php(14): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_ModuleList->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ModuleList))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:42:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:42:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:43:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 142 ]
2012-09-25 00:43:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 142 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(142): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 142, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('history', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_History->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_History))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:44:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:44:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:44:28 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 157 ]
2012-09-25 00:44:28 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 157 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(157): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 157, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('modulelist', 'index')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\modulelist.php(14): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_ModuleList->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ModuleList))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:44:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:44:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:45:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:45:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:45:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:45:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:45:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:45:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:46:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-25 00:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:26 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'test-page-five' for key 'name_2' [ INSERT INTO `tbl_news` (`name`, `subject`, `type`, `synopsis`, `text`, `news_date`, `status`, `added`, `modified`) VALUES ('test-page-five', 'Test Page Five', '', 'Test Page Five', '\n	Test Page Five\n', '2012/09/29', 'publish', 1348508785, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-25 00:46:26 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'test-page-five' for key 'name_2' [ INSERT INTO `tbl_news` (`name`, `subject`, `type`, `synopsis`, `text`, `news_date`, `status`, `added`, `modified`) VALUES ('test-page-five', 'Test Page Five', '', 'Test Page Five', '\n	Test Page Five\n', '2012/09/29', 'publish', 1348508785, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 D:\www\pemulihan\_mod\_modules\news\classes\model\news.php(121): Kohana_Database_Query->execute()
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(289): Model_News->add(Array)
#3 [internal function]: Controller_Backend_News->action_add()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-25 00:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:51 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:46:51 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:47:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 00:47:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 00:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 00:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 00:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-25 01:01:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-25 01:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-25 01:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-25 01:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}