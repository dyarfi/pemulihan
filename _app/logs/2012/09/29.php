<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-29 17:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-c was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-29 17:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-c was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-29 17:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:19:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 86 ]
2012-09-29 17:19:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 86 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 86, Array)
#1 [internal function]: Controller_Backend_Authentication->action_validate()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-29 17:34:14 --- ERROR: ErrorException [ 2 ]: array_intersect_key() [function.array-intersect-key]: Argument #2 is not an array ~ SYSPATH\classes\kohana\arr.php [ 494 ]
2012-09-29 17:34:14 --- STRACE: ErrorException [ 2 ]: array_intersect_key() [function.array-intersect-key]: Argument #2 is not an array ~ SYSPATH\classes\kohana\arr.php [ 494 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_intersect...', 'D:\www\pemuliha...', 494, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\arr.php(494): array_intersect_key(Array, '')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(87): Kohana_Arr::overwrite('', Array)
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-29 17:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:41:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ MODPATH\_modules\user\views\user\authentication.php [ 57 ]
2012-09-29 17:41:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ MODPATH\_modules\user\views\user\authentication.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:43:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:44:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:44:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:44:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:45:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:57 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:45:57 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:45:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:45:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
2012-09-29 17:46:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\_modules\user\views\user\authentication.php [ 56 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\views\user\authentication.php(56): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\www\pemuliha...', 56, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(89): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 17:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:48:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:48:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 17:58:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 17:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 17:58:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 17:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/audios/01 As I Am.mp3 ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/audios/01 As I Am.mp3 ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 17:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 17:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 18:59:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 18:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 18:59:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 18:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 18:59:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 18:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:42 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 18:59:42 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 18:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 18:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 18:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:01:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:02:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:23:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:23:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:23:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:23:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:24:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:24:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:24:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:24:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 19:24:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\model\page.php(252): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(177): Model_Page->find(Array, Array, 25, -25)
#2 [internal function]: Controller_Backend_Page->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-29 19:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:24:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}xecute()
#1 {main}
2012-09-29 19:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}xecute()
#1 {main}
2012-09-29 19:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:24:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:24:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 19:24:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\model\page.php(252): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(177): Model_Page->find(Array, Array, 25, -25)
#2 [internal function]: Controller_Backend_Page->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-29 19:24:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 19:24:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-25' at line 1 [ SELECT * FROM `tbl_page` WHERE `status` != 'deleted'ORDER BY   `subject` asc LIMIT 25-25 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\model\page.php(252): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(177): Model_Page->find(Array, Array, 25, -25)
#2 [internal function]: Controller_Backend_Page->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-29 19:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:25:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_error() ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 771 ]
2012-09-29 19:26:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_error() ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 771 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:26:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:26:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}xecute()
#1 {main}
2012-09-29 19:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:28:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:53 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:28:53 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:28:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:28:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:22 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:30:22 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/check_title/subject-test-news-sample-one ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/check_title/subject-test-news-sample-one ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/check_title/subject-test-news-sample-one ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/check_title/subject-test-news-sample-one ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:06 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'subject-test-news-sample-one' for key 'name_2' [ UPDATE `tbl_news` SET `id` = '23', `name` = 'subject-test-news-sample-one', `subject` = 'subject-test-news-sample-one', `type` = '0', `synopsis` = 'subject-test-news-sample-one', `text` = '\n	subject-test-news-sample-one\n', `news_date` = '2012/09/12', `status` = 'publish', `added` = '1348922037', `modified` = 1348922346 WHERE `id` = '23' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 19:39:06 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'subject-test-news-sample-one' for key 'name_2' [ UPDATE `tbl_news` SET `id` = '23', `name` = 'subject-test-news-sample-one', `subject` = 'subject-test-news-sample-one', `type` = '0', `synopsis` = 'subject-test-news-sample-one', `text` = '\n	subject-test-news-sample-one\n', `news_date` = '2012/09/12', `status` = 'publish', `added` = '1348922037', `modified` = 1348922346 WHERE `id` = '23' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `tbl_new...', false, Array)
#1 D:\www\pemulihan\_mod\_modules\news\classes\model\news.php(140): Kohana_Database_Query->execute()
#2 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(466): Model_News->update()
#3 [internal function]: Controller_Backend_News->action_edit()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-29 19:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:39:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:39:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:40:01 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 26 ]
2012-09-29 19:40:01 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(26): sprintf('Array', 'Name')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 26 ]
2012-09-29 19:41:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(26): sprintf('Array', 'Name')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:41:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:41:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:41:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:02 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 19 ]
2012-09-29 19:42:02 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 19, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(19): sprintf('Array', 'Subject')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:44:58 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 19 ]
2012-09-29 19:44:58 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 19, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(19): sprintf('Array', 'Subject')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:14 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 19 ]
2012-09-29 19:45:14 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 19, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(19): sprintf('Array', 'Subject')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:22 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 26 ]
2012-09-29 19:45:22 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(26): sprintf('Array', 'Name')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:35 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 32 ]
2012-09-29 19:45:35 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 32 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 32, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(32): sprintf('Array', 'News Date')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 45 ]
2012-09-29 19:45:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 45, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(45): sprintf('Array', 'Text')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}xecute()
#1 {main}
2012-09-29 19:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:53 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 84 ]
2012-09-29 19:45:53 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\news\views\news\backend\news_add.php [ 84 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 84, Array)
#1 D:\www\pemulihan\_mod\_modules\news\views\news\backend\news_add.php(84): sprintf('Array', 'Status')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#4 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#7 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#8 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#10 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(39): Controller_Themes_DefaultAdmin->after()
#11 [internal function]: Controller_Backend_BaseAdmin->after()
#12 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#13 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#16 {main}
2012-09-29 19:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-29 19:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:48:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:48:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::lang() ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 553 ]
2012-09-29 19:48:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::lang() ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 553 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:49:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:49:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:42 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:49:42 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:49:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:50:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:50:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:50:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:50:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:43 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:43 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:52:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:53:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 154 ]
2012-09-29 19:53:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 154 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 154, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('user', 'view')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\user.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-29 19:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:54:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 154 ]
2012-09-29 19:54:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 154 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 154, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('user', 'view')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\user.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-29 19:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 19:56:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 19:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 19:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 19:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:01:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 154 ]
2012-09-29 20:01:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 154 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(154): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 154, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('user', 'view')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\user.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-29 20:02:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 170 ]
2012-09-29 20:02:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\acl.php [ 170 ]
--
#0 D:\www\pemulihan\_app\classes\acl.php(170): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 170, Array)
#1 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(24): ACL->user_history('user', 'view')
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\user.php(11): Controller_Backend_BaseAdmin->before()
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-29 20:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:51 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:03:51 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}xecute()
#1 {main}
2012-09-29 20:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:04:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:37 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:04:37 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:05:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:52 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:05:52 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:54 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:05:54 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:05:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:05:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:06:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:06:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:06:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:06:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:07:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'level_id_3' in 'field list' [ INSERT INTO `tbl_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`, `level_id_3`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:07:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'level_id_3' in 'field list' [ INSERT INTO `tbl_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`, `level_id_3`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(274): Kohana_Database_Query->execute()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(130): Model_ModuleList->add(Array)
#3 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(55): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-29 20:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:08:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'level_id_3' in 'field list' [ INSERT INTO `tbl_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`, `level_id_3`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:08:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'level_id_3' in 'field list' [ INSERT INTO `tbl_module_list` (`id`, `parent_id`, `module_name`, `module_link`, `order`, `level_id_1`, `level_id_2`, `level_id_99`, `level_id_3`) VALUES (0, 0, 'user', '#', 0, 1, 0, 0, 0) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `tb...', false, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(274): Kohana_Database_Query->execute()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(130): Model_ModuleList->add(Array)
#3 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(55): Model_ModuleList->module_check()
#4 [internal function]: Controller_Backend_Authentication->action_validate()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-29 20:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:32 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:09:32 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(32): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(68): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:38 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:09:38 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(32): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(68): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:09:56 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:09:56 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(32): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(68): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:10:08 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:10:08 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(32): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(68): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:11:07 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 102 ]
2012-09-29 20:11:07 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 102 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(102): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\pemuliha...', 102, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(15): Controller_Backend_Authentication->action_validate()
#2 [internal function]: Controller_Backend_Authentication->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-29 20:11:16 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:11:16 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(32): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(68): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:11:36 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:11:36 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(32): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(68): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(13): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:12:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:12:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:13:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:13:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:13:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:16:48 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:16:48 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:17:34 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:17:34 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL->__construct()
#5 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#11 {main}
2012-09-29 20:18:24 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:18:24 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#4 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#5 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#6 [internal function]: Controller_Backend_Authentication->before()
#7 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#11 {main}
2012-09-29 20:18:53 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:18:53 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(238): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:24:23 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:24:23 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:24:26 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:24:26 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:24:37 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:24:37 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:25:01 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:25:01 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:27:06 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:27:06 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(15): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:27:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Authentication::$acl ~ APPPATH\classes\controller\backend\baseadmin.php [ 22 ]
2012-09-29 20:27:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Authentication::$acl ~ APPPATH\classes\controller\backend\baseadmin.php [ 22 ]
--
#0 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 22, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#2 [internal function]: Controller_Backend_Authentication->before()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-29 20:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:00 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-29 20:29:00 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_user_level' doesn't exist [ SELECT * FROM `tbl_user_level` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\model\userlevel.php(241): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(20): Model_UserLevel->find()
#2 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(39): Model_ModuleList->__construct()
#3 D:\www\pemulihan\_app\classes\acl.php(33): Model_ModuleList::instance()
#4 D:\www\pemulihan\_app\classes\acl.php(70): ACL->__construct()
#5 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(19): ACL::instance()
#6 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(7): Controller_Backend_BaseAdmin->before()
#7 [internal function]: Controller_Backend_Authentication->before()
#8 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#9 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#12 {main}
2012-09-29 20:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:31:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:31:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:31:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:35:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:35:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:36:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:36:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:36:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:36:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:36:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:41:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:41:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:42:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:42:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:42:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:42:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:42:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:46:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:46:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:47:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:47:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:47:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:49:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\views\site\home_page.php [ 121 ]
2012-09-29 20:49:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\site\views\site\home_page.php [ 121 ]
--
#0 D:\www\pemulihan\_mod\_modules\site\views\site\home_page.php(121): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 121, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\default.php(220): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\default.php(108): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Default->after()
#10 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#11 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#14 {main}
2012-09-29 20:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:27 --- ERROR: ErrorException [ 8 ]: Undefined index: extension ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 320 ]
2012-09-29 20:50:27 --- STRACE: ErrorException [ 8 ]: Undefined index: extension ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 320 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(320): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 320, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-29 20:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:52:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:52:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 20:59:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 20:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 20:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 21:03:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 21:03:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 21:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 21:04:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 21:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 21:05:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 21:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 21:05:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 21:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/images/material/fancybox.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/images/material/fancybox.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 21:29:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 21:29:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:51 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 23:21:51 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 23:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-29 23:30:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-29 23:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:19 --- ERROR: ErrorException [ 8 ]: Undefined index: attribute ~ MODPATH\_modules\page\views\page\backend\page_add.php [ 99 ]
2012-09-29 23:30:19 --- STRACE: ErrorException [ 8 ]: Undefined index: attribute ~ MODPATH\_modules\page\views\page\backend\page_add.php [ 99 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\page_add.php(99): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 99, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(40): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-29 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-29 23:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-29 23:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}