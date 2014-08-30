<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-18 00:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:03:15 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1_caption ~ MODPATH\_modules\page\views\page\backend\pagecategory_add.php [ 69 ]
2012-09-18 00:03:15 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1_caption ~ MODPATH\_modules\page\views\page\backend\pagecategory_add.php [ 69 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_add.php(69): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 69, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(78): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#11 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#14 {main}
2012-09-18 00:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:07:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:07:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:52 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:07:52 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 00:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:23:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:23:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/history/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/history/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:24:11 --- ERROR: View_Exception [ 0 ]: The requested view user/backend/history_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-18 00:24:11 --- STRACE: View_Exception [ 0 ]: The requested view user/backend/history_index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('user/backend/hi...')
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(30): Kohana_View->__construct('user/backend/hi...', NULL)
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\history.php(248): Kohana_View::factory('user/backend/hi...')
#3 [internal function]: Controller_Backend_HIstory->action_index()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_HIstory))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-18 00:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:24:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:37 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:24:37 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:24:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:24:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:54 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:24:54 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 00:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
2012-09-18 00:24:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 00:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/authentication was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 00:32:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Backend_BaseAdmin' not found ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 2 ]
2012-09-18 00:32:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Backend_BaseAdmin' not found ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:33:24 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 99 ]
2012-09-18 00:33:24 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 99 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(99): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\pemuliha...', 99, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(15): Controller_Backend_Authentication->action_validate()
#2 [internal function]: Controller_Backend_Authentication->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-18 00:33:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_CLASS ~ APPPATH\classes\controller\backend\baseadmin.php [ 3 ]
2012-09-18 00:33:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_CLASS ~ APPPATH\classes\controller\backend\baseadmin.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:34:14 --- ERROR: ErrorException [ 1 ]: Controller_Backend_BaseAdmin cannot implement Controller_Template - it is not an interface ~ APPPATH\classes\controller\backend\baseadmin.php [ 3 ]
2012-09-18 00:34:14 --- STRACE: ErrorException [ 1 ]: Controller_Backend_BaseAdmin cannot implement Controller_Template - it is not an interface ~ APPPATH\classes\controller\backend\baseadmin.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:34:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IMPLEMENTS, expecting '{' ~ APPPATH\classes\controller\backend\baseadmin.php [ 3 ]
2012-09-18 00:34:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IMPLEMENTS, expecting '{' ~ APPPATH\classes\controller\backend\baseadmin.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:34:38 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 99 ]
2012-09-18 00:34:38 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_modules\user\classes\controller\backend\authentication.php [ 99 ]
--
#0 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(99): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\pemuliha...', 99, Array)
#1 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(15): Controller_Backend_Authentication->action_validate()
#2 [internal function]: Controller_Backend_Authentication->action_index()
#3 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#4 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#7 {main}
2012-09-18 00:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 00:38:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 00:38:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 00:39:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:43 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 00:39:43 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 00:39:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:40:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 00:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:40:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:40:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:41:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:41:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 00:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:42:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:42:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:42:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 00:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:42:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:39 --- ERROR: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\acl.php [ 104 ]
2012-09-18 00:44:39 --- STRACE: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH\classes\acl.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:47:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:47:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 00:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:47:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:48:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\acl.php [ 99 ]
2012-09-18 00:48:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\acl.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:48:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function add() ~ APPPATH\classes\acl.php [ 86 ]
2012-09-18 00:48:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function add() ~ APPPATH\classes\acl.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:57:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:22 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:57:22 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 00:57:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 00:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 00:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 00:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:02:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:03:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:03:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:05:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\acl.php [ 14 ]
2012-09-18 01:05:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:08:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:08:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:53 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:09:53 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:09:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:09:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:12:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\classes\controller\backend\baseadmin.php [ 33 ]
2012-09-18 01:13:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\classes\controller\backend\baseadmin.php [ 33 ]
--
#0 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 33, Array)
#1 [internal function]: Controller_Backend_BaseAdmin->after()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 01:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:13:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:14:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:15:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:16:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:16:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$acl ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 84 ]
2012-09-18 01:16:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$acl ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 84 ]
--
#0 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 84, Array)
#1 [internal function]: Controller_Backend_News->action_index()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 01:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:18:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:19:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:19:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:19:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:19:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:20:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:20:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:20:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:21:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
2012-09-18 01:21:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:26:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 717 ]
2012-09-18 01:26:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 717 ]
--
#0 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(717): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 717, Array)
#1 [internal function]: Controller_Backend_News->action_delete()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 01:26:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 717 ]
2012-09-18 01:26:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 717 ]
--
#0 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(717): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 717, Array)
#1 [internal function]: Controller_Backend_News->action_delete()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 01:26:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 717 ]
2012-09-18 01:26:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 717 ]
--
#0 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(717): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 717, Array)
#1 [internal function]: Controller_Backend_News->action_delete()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 01:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:37:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:37:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:37:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:37:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_ArticleCategory::$session ~ MODPATH\_modules\article\classes\controller\backend\articlecategory.php [ 49 ]
2012-09-18 01:37:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_ArticleCategory::$session ~ MODPATH\_modules\article\classes\controller\backend\articlecategory.php [ 49 ]
--
#0 D:\www\pemulihan\_mod\_modules\article\classes\controller\backend\articlecategory.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 49, Array)
#1 [internal function]: Controller_Backend_ArticleCategory->before()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 01:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:37:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:41:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:44:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:44:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:44:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:46:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:47:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:47:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 98 ]
2012-09-18 01:48:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:48:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:49:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:49:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:49:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 01:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:57:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:57:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:57:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:57:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:58:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:59:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:59:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:59:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 01:59:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 01:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 01:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 01:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:00:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:00:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:17 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:17 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:43 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:01:43 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:02:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:02:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 02:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:03:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:04:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:04:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:04:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:06:44 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 110 ]
2012-09-18 02:06:44 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:07:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:07:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:07:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:08:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:08:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:08:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 02:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:09:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:09:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:10:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:10:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:50:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:50:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:50:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:50:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:50:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:03 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:51:03 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:51:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:51:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
2012-09-18 02:51:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(307): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 307, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 02:54:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
2012-09-18 02:54:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(307): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 307, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 02:54:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
2012-09-18 02:54:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(307): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 307, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 02:55:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
2012-09-18 02:55:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 307 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(307): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 307, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_add()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 02:56:32 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:56:32 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:57:10 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:57:10 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:58:06 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:58:06 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:58:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 02:58:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 02:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 02:58:14 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:58:14 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:58:41 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:58:41 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:58:43 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:58:43 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:59:41 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:59:41 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 02:59:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$files ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 422 ]
2012-09-18 02:59:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$files ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 422 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(422): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 422, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 02:59:51 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 02:59:51 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:00:22 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 03:00:22 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:01:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:01:26 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 03:01:26 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:02:05 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 03:02:05 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 03:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:02:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:52 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:02:52 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:02:55 --- ERROR: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
2012-09-18 03:02:55 --- STRACE: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\lib.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:03:40 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\lib.php [ 162 ]
2012-09-18 03:03:40 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\lib.php [ 162 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', 'D:\www\pemuliha...', 162, Array)
#1 D:\www\pemulihan\_app\classes\lib.php(162): mkdir('')
#2 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(422): Lib::_auto_image_manipulation('pagecategory', Object(Model_PageCategoryFile), Array)
#3 [internal function]: Controller_Backend_PageCategory->action_view()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-18 03:04:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 29 ]
2012-09-18 03:04:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 29 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 29, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:04:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:04:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:05:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:05:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:05:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 29 ]
2012-09-18 03:05:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 29 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 29, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:06:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 31 ]
2012-09-18 03:06:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 31 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 31, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:08:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 427 ]
2012-09-18 03:08:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 427 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(427): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 427, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 03:08:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$news ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 410 ]
2012-09-18 03:08:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_PageCategory::$news ~ MODPATH\_modules\page\classes\controller\backend\pagecategory.php [ 410 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(410): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 410, Array)
#1 [internal function]: Controller_Backend_PageCategory->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 03:09:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
2012-09-18 03:09:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 33, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:10:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
2012-09-18 03:10:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 33, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:11:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
2012-09-18 03:11:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_PageCategory::$file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\pemuliha...', 33, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:12:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 32 ]
2012-09-18 03:12:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 32 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 32, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:13:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 32 ]
2012-09-18 03:13:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 32 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 32, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:14:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 32 ]
2012-09-18 03:14:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 32 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(32): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 32, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:14:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:14:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:15:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 34 ]
2012-09-18 03:15:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:15:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
2012-09-18 03:15:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:16:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 36 ]
2012-09-18 03:16:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 36 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 36, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:16:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 36 ]
2012-09-18 03:16:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 36 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 36, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 36 ]
2012-09-18 03:17:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 36 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\pemuliha...', 36, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 51 ]
2012-09-18 03:17:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 51 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 51, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 03:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_categories/cb6e7b48c2c7bd948482f38317ee8522_resize_250x168.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:17:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_categories/cb6e7b48c2c7bd948482f38317ee8522_resize_250x168.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_categories/cb6e7b48c2c7bd948482f38317ee8522_resize_230x86.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_categories/cb6e7b48c2c7bd948482f38317ee8522_resize_230x86.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_categories/cb6e7b48c2c7bd948482f38317ee8522_resize_230x86.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/page_categories/cb6e7b48c2c7bd948482f38317ee8522_resize_230x86.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:20:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 03:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:20:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-18 03:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/home was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#3 {main}
2012-09-18 03:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:37 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:23:37 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:23:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:25:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:25:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:26:02 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\lib.php [ 162 ]
2012-09-18 03:26:02 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\lib.php [ 162 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', 'D:\www\pemuliha...', 162, Array)
#1 D:\www\pemulihan\_app\classes\lib.php(162): mkdir('')
#2 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(170): Lib::_auto_image_manipulation('pagecategory', Object(Model_PageCategoryFile), Array)
#3 [internal function]: Controller_Backend_PageCategory->action_index()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-18 03:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:44:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:44:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 03:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:47:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:47:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:55:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:55:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:55:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 03:55:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 03:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 03:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 03:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:00:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:00:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:00:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:00:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:00:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:00:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:01:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:07 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 04:01:07 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('news374aea7d76b...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('news374aea7d76b...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('news374aea7d76b...')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(690): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_view()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 04:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:01:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:01:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 04:01:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('news6cb258f66a5...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('news6cb258f66a5...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('news6cb258f66a5...')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(690): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_view()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 04:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:02:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:58 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:02:58 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:03:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:03:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:04:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:04:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:51 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:04:51 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:05:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:05:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:06:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:06:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 26 ]
2012-09-18 04:06:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 26 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:07:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 35 ]
2012-09-18 04:07:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 35 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 35, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:07:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 26 ]
2012-09-18 04:07:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 26 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:08:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 26 ]
2012-09-18 04:08:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 26 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(26): Kohana_Core::error_handler(8, 'Array to string...', 'D:\www\pemuliha...', 26, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:09:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:09:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:09:10 --- ERROR: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:09:10 --- STRACE: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:11:25 --- ERROR: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:11:25 --- STRACE: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:13:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
2012-09-18 04:13:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 33, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:14:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: readable_mime ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
2012-09-18 04:14:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: readable_mime ~ MODPATH\_modules\page\views\page\backend\pagecategory_view.php [ 33 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_view.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 33, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:14:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:14:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:50 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:15:50 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:53 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:15:53 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:16:18 --- ERROR: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:16:18 --- STRACE: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:17:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 175 ]
2012-09-18 04:17:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 175 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:17:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 42 ]
2012-09-18 04:17:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:17:47 --- ERROR: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:17:47 --- STRACE: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:18:04 --- ERROR: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:18:04 --- STRACE: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:18:18 --- ERROR: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:18:18 --- STRACE: ErrorException [ 8 ]: Undefined index: file_name ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:18:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
2012-09-18 04:18:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 38 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 38, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:19:02 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
2012-09-18 04:19:02 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 141, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:19:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:19:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:19:30 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1_caption ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 156 ]
2012-09-18 04:19:30 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1_caption ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 156 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(156): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:20:29 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
2012-09-18 04:20:29 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 141, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:22:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: readable_mime ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 42 ]
2012-09-18 04:22:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: readable_mime ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 42 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 42, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:22:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:22:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:23:17 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
2012-09-18 04:23:17 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 141, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:24:18 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
2012-09-18 04:24:18 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1 ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 141 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 141, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:25:27 --- ERROR: ErrorException [ 8 ]: Undefined index: image_1_caption ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 156 ]
2012-09-18 04:25:27 --- STRACE: ErrorException [ 8 ]: Undefined index: image_1_caption ~ MODPATH\_modules\page\views\page\backend\pagecategory_edit.php [ 156 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_edit.php(156): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\pemuliha...', 156, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 04:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:26:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:26:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:26:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:27:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:12 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:27:12 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:27:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:27:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:27:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 409 ]
2012-09-18 04:27:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 409 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(409): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 409, Array)
#1 [internal function]: Controller_Backend_Page->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:12 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:28:12 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:28:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:28:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:27 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
2012-09-18 04:28:27 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
--
#0 D:\www\pemulihan\_mod\_modules\article\classes\controller\backend\article.php(450): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\pemuliha...', 450, Array)
#1 [internal function]: Controller_Backend_Article->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:28:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:28:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:28:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:28:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 409 ]
2012-09-18 04:28:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 409 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(409): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 409, Array)
#1 [internal function]: Controller_Backend_Page->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:29:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 04:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:29:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:12 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:29:12 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:22 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:29:22 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:30 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
2012-09-18 04:29:30 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
--
#0 D:\www\pemulihan\_mod\_modules\article\classes\controller\backend\article.php(450): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\pemuliha...', 450, Array)
#1 [internal function]: Controller_Backend_Article->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:29:35 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
2012-09-18 04:29:35 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
--
#0 D:\www\pemulihan\_mod\_modules\article\classes\controller\backend\article.php(450): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\pemuliha...', 450, Array)
#1 [internal function]: Controller_Backend_Article->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:29:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:29:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:29:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:04 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
2012-09-18 04:30:04 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ MODPATH\_modules\article\classes\controller\backend\article.php [ 450 ]
--
#0 D:\www\pemulihan\_mod\_modules\article\classes\controller\backend\article.php(450): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\www\pemuliha...', 450, Array)
#1 [internal function]: Controller_Backend_Article->action_edit()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Article))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:30:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:30:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:30:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:30:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:30:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:30:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:41 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 409 ]
2012-09-18 04:30:41 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_modules\page\classes\controller\backend\page.php [ 409 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(409): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\pemuliha...', 409, Array)
#1 [internal function]: Controller_Backend_Page->action_view()
#2 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#3 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#6 {main}
2012-09-18 04:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:31:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 04:31:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 04:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 04:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 04:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:54 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 17:51:54 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:51:55 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_page_category_file' doesn't exist [ SELECT * FROM `tbl_page_category_file` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-18 17:51:55 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_pemulihan2012.tbl_page_category_file' doesn't exist [ SELECT * FROM `tbl_page_category_file` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\model\pagecategoryfile.php(186): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\pemulihan\_app\classes\lib.php(13): Model_PageCategoryFile->find()
#2 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(173): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#3 [internal function]: Controller_Backend_PageCategory->action_index()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-18 17:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:52:28 --- ERROR: Database_Exception [ 1072 ]: Key column 'page_id' doesn't exist in table [ CREATE TABLE IF NOT EXISTS `tbl_page_category_file` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, `category_id` INT(11) UNSIGNED NULL, `field_name` VARCHAR(96) NULL, `file_name` VARCHAR(64) NULL, `file_type` VARCHAR(16) NULL, `caption` VARCHAR(255) NULL, INDEX (`page_id`) ) ENGINE=MYISAM ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-18 17:52:28 --- STRACE: Database_Exception [ 1072 ]: Key column 'page_id' doesn't exist in table [ CREATE TABLE IF NOT EXISTS `tbl_page_category_file` (`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, `category_id` INT(11) UNSIGNED NULL, `field_name` VARCHAR(96) NULL, `file_name` VARCHAR(64) NULL, `file_type` VARCHAR(16) NULL, `caption` VARCHAR(255) NULL, INDEX (`page_id`) ) ENGINE=MYISAM ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\classes\model\pagecategoryfile.php(45): Kohana_Database_MySQL->query('CREATE', 'CREATE TABLE IF...')
#1 D:\www\pemulihan\_mod\_modules\user\classes\model\modulelist.php(138): Model_PageCategoryFile->install()
#2 D:\www\pemulihan\_mod\_modules\user\classes\controller\backend\authentication.php(54): Model_ModuleList->module_check()
#3 [internal function]: Controller_Backend_Authentication->action_validate()
#4 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#5 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#8 {main}
2012-09-18 17:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 17:54:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 17:54:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 17:54:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 17:54:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(191): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_index()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 17:54:16 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 17:54:16 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(191): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_index()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 17:54:17 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 17:54:17 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(191): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_index()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 17:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 17:54:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]quest.php [ 1142 ]
2012-09-18 17:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 17:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 17:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:26:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:26:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:26:35 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 23:26:35 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\news\classes\controller\backend\news.php(191): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_index()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 23:26:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:26:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:26:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 23:26:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\pagecategory.php(173): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageCategoryFile), Array)
#4 [internal function]: Controller_Backend_PageCategory->action_index()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 23:27:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:27:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:27:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:27:17 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
2012-09-18 23:27:17 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 107 ]
--
#0 D:\www\pemulihan\_mod\image\classes\kohana\image\gd.php(91): Kohana_Image->__construct('D:\www\pemuliha...')
#1 D:\www\pemulihan\_mod\image\classes\kohana\image.php(54): Kohana_Image_GD->__construct('D:\www\pemuliha...')
#2 D:\www\pemulihan\_app\classes\lib.php(45): Kohana_Image::factory('D:\www\pemuliha...')
#3 D:\www\pemulihan\_mod\_modules\page\classes\controller\backend\page.php(188): Lib::_auto_image_manipulation('D:\www\pemuliha...', Object(Model_PageFile), Array)
#4 [internal function]: Controller_Backend_Page->action_index()
#5 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Page))
#6 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#9 {main}
2012-09-18 23:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:27:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:38:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:38:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:39:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:39:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:39:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:39:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:39:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:39:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:40:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_add.php [ 51 ]
2012-09-18 23:40:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_uploads ~ MODPATH\_modules\page\views\page\backend\pagecategory_add.php [ 51 ]
--
#0 D:\www\pemulihan\_mod\_modules\page\views\page\backend\pagecategory_add.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\pemuliha...', 51, Array)
#1 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#2 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#3 D:\www\pemulihan\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\pemulihan\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\pemulihan\_sys\classes\kohana\view.php(61): include('D:\www\pemuliha...')
#6 D:\www\pemulihan\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\pemuliha...', Array)
#7 D:\www\pemulihan\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\pemulihan\_app\classes\controller\themes\defaultadmin.php(70): Kohana_Controller_Template->after()
#9 D:\www\pemulihan\_app\classes\controller\backend\baseadmin.php(36): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 D:\www\pemulihan\_sys\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_PageCategory))
#12 D:\www\pemulihan\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\pemulihan\_sys\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#15 {main}
2012-09-18 23:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:40:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:40:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
2012-09-18 23:50:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:50:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 66 ]
2012-09-18 23:50:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ MODPATH\_modules\news\classes\controller\backend\news.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\classes\acl.php [ 81 ]
2012-09-18 23:51:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\classes\acl.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.hoverintent-min.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}
2012-09-18 23:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-09-18 23:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/tiny_mce/plugins/tinybrowser/tb_tinymce.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\www\pemulihan\index.php(139): Kohana_Request->execute()
#1 {main}