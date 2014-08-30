<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-19 00:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:02:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:02:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$action ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(98): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:02:23 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:02:23 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:03:26 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:03:26 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:03:34 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:03:34 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:03:58 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:03:58 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:06:55 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:06:55 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(112): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:07:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:07:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(112): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:08:41 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:08:41 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('*', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:09:04 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:09:04 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('*', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:10:07 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:10:07 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:11:01 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:11:01 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:11:11 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
2012-09-19 00:11:11 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #1 is not an array ~ APPPATH\classes\acl.php [ 91 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', 'D:\www\pemuliha...', 91, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(91): array_merge('index', Array)
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:11:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:11:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:11:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:11:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(112): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:12:36 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'allow' ~ APPPATH\classes\acl.php [ 112 ]
2012-09-19 00:12:36 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'allow' ~ APPPATH\classes\acl.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:12:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method ACL::allowedActions() ~ APPPATH\classes\acl.php [ 112 ]
2012-09-19 00:12:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method ACL::allowedActions() ~ APPPATH\classes\acl.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:14:00 --- ERROR: ErrorException [ 1 ]: Class 'Object' not found ~ APPPATH\classes\acl.php [ 3 ]
2012-09-19 00:14:00 --- STRACE: ErrorException [ 1 ]: Class 'Object' not found ~ APPPATH\classes\acl.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:14:03 --- ERROR: ErrorException [ 1 ]: Class 'Object' not found ~ APPPATH\classes\acl.php [ 3 ]
2012-09-19 00:14:03 --- STRACE: ErrorException [ 1 ]: Class 'Object' not found ~ APPPATH\classes\acl.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:14:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:14:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:17:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:17:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:23:40 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:23:40 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:23:56 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:23:56 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:24:26 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:24:26 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:24:48 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:24:48 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:24:57 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:24:57 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:25:22 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:25:22 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:25:33 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:25:33 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:26:38 --- ERROR: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
2012-09-19 00:26:38 --- STRACE: ErrorException [ 2 ]: strstr() expects parameter 1 to be string, array given ~ APPPATH\classes\acl.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strstr() expect...', 'D:\www\pemuliha...', 120, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(120): strstr(Array, '/')
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-19 00:27:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:30:12 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:30:12 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(115): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:30:15 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'allow' ~ APPPATH\classes\acl.php [ 115 ]
2012-09-19 00:30:15 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'allow' ~ APPPATH\classes\acl.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:32:15 --- ERROR: ErrorException [ 2 ]: get_class_vars() expects exactly 1 parameter, 0 given ~ APPPATH\classes\acl.php [ 114 ]
2012-09-19 00:32:15 --- STRACE: ErrorException [ 2 ]: get_class_vars() expects exactly 1 parameter, 0 given ~ APPPATH\classes\acl.php [ 114 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_class_vars(...', 'D:\www\pemuliha...', 114, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(114): get_class_vars()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:32:30 --- ERROR: ErrorException [ 2 ]: get_class_vars() expects parameter 1 to be string, object given ~ APPPATH\classes\acl.php [ 114 ]
2012-09-19 00:32:30 --- STRACE: ErrorException [ 2 ]: get_class_vars() expects parameter 1 to be string, object given ~ APPPATH\classes\acl.php [ 114 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_class_vars(...', 'D:\www\pemuliha...', 114, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(114): get_class_vars(Object(ACL))
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:32:42 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ACL - assumed 'ACL' ~ APPPATH\classes\acl.php [ 114 ]
2012-09-19 00:32:42 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ACL - assumed 'ACL' ~ APPPATH\classes\acl.php [ 114 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(114): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\pemuliha...', 114, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:32:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ APPPATH\classes\acl.php [ 114 ]
2012-09-19 00:32:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ APPPATH\classes\acl.php [ 114 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(114): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\pemuliha...', 114, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:33:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\acl.php [ 114 ]
2012-09-19 00:33:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\acl.php [ 114 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:35:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\acl.php [ 94 ]
2012-09-19 00:35:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\acl.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 00:36:32 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:36:32 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(94): ACL->allow()
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:36:36 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:36:36 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(94): ACL->allow()
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(67): ACL->allow('download', 'exsport')
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 00:37:08 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:37:08 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(113): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:39:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(115): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:41:22 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
2012-09-19 00:41:22 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\acl.php [ 86 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(86): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\www\pemuliha...', 86, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(115): ACL->allow()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:42:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\acl.php [ 42 ]
2012-09-19 00:42:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\acl.php [ 42 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 42, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(48): ACL->__construct()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:44:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\acl.php [ 43 ]
2012-09-19 00:44:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\acl.php [ 43 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 43, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(49): ACL->__construct()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:44:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: allowedActions ~ APPPATH\classes\acl.php [ 43 ]
2012-09-19 00:44:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: allowedActions ~ APPPATH\classes\acl.php [ 43 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 43, Array)
#1 D:\www\pemulihan\_app\classes\acl.php(49): ACL->__construct()
#2 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#4 [internal function]: Controller_Backend_News->before()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-19 00:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:44:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:44:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 00:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 00:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 01:10:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 01:10:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 01:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 01:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:35:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: called_actions ~ APPPATH\classes\acl.php [ 129 ]
2012-09-19 02:35:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: called_actions ~ APPPATH\classes\acl.php [ 129 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 129, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(21): ACL->check_module_permission('news', 'index')
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(23): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_News->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-19 02:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:37:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:37:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 02:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-19 02:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 02:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:25:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:25:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-19 22:27:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 22:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-19 22:27:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 22:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-19 22:27:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 22:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-19 22:27:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 22:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-19 22:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-19 22:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}