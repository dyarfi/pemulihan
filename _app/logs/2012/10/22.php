<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-22 00:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/contact-u ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/contact-u ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/contact- ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/contact- ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-22 00:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-22 00:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/contact- ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/undefined/check_title/contact- ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-22 00:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-22 00:38:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Setting::$parent_id ~ APPPATH/classes/lib.php [ 182 ]
2012-10-22 00:38:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Setting::$parent_id ~ APPPATH/classes/lib.php [ 182 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 182, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(150): Lib::traverse('drop', 0, Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 00:38:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Setting::$parent_id ~ APPPATH/classes/lib.php [ 182 ]
2012-10-22 00:38:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Setting::$parent_id ~ APPPATH/classes/lib.php [ 182 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(182): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 182, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(150): Lib::traverse('drop', '0', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 00:39:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Setting::$parent_id ~ APPPATH/classes/lib.php [ 184 ]
2012-10-22 00:39:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Setting::$parent_id ~ APPPATH/classes/lib.php [ 184 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(184): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 184, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(150): Lib::traverse('drop', '0', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 00:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/close.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/close.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/fancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/fancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/blank.gif ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/ancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/ancybox.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:40:08 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/lib.php [ 186 ]
2012-10-22 00:40:08 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/lib.php [ 186 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-22 00:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:47:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH/classes/lib.php [ 183 ]
2012-10-22 00:47:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH/classes/lib.php [ 183 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(150): Lib::traverse('drop', '0', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 00:49:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_ArticleCategory::$subject ~ APPPATH/classes/lib.php [ 188 ]
2012-10-22 00:49:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_ArticleCategory::$subject ~ APPPATH/classes/lib.php [ 188 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 188, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(150): Lib::traverse('drop', '0', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 00:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:52:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:52:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:54:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:54:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:57:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH/classes/lib.php [ 183 ]
2012-10-22 00:57:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH/classes/lib.php [ 183 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(183): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 183, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 00:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 00:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 00:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:03:36 --- ERROR: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
2012-10-22 01:03:36 --- STRACE: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge_rec...', '/Volumes/Data/w...', 188, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): array_merge_recursive(Array, '<ul class="drop...')
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:04:10 --- ERROR: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
2012-10-22 01:04:10 --- STRACE: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge_rec...', '/Volumes/Data/w...', 188, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): array_merge_recursive(Array, '<ul class="drop...')
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:04:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lib.php [ 185 ]
2012-10-22 01:04:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lib.php [ 185 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(185): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('drop', '1', Object(Model_ArticleCategory))
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:06:05 --- ERROR: ErrorException [ 4096 ]: Object of class Model_ArticleCategory could not be converted to string ~ APPPATH/classes/lib.php [ 192 ]
2012-10-22 01:06:05 --- STRACE: ErrorException [ 4096 ]: Object of class Model_ArticleCategory could not be converted to string ~ APPPATH/classes/lib.php [ 192 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(192): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 192, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('drop', '1', Array)
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:06:22 --- ERROR: ErrorException [ 4096 ]: Object of class Model_ArticleCategory could not be converted to string ~ APPPATH/classes/lib.php [ 190 ]
2012-10-22 01:06:22 --- STRACE: ErrorException [ 4096 ]: Object of class Model_ArticleCategory could not be converted to string ~ APPPATH/classes/lib.php [ 190 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(190): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 190, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('drop', '1', Array)
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:06:35 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/lib.php [ 190 ]
2012-10-22 01:06:35 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/lib.php [ 190 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-22 01:08:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/lib.php [ 197 ]
2012-10-22 01:08:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/lib.php [ 197 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(197): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 197, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('', '1', Array)
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:08:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lib.php [ 185 ]
2012-10-22 01:08:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lib.php [ 185 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(185): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('', '1', Object(Model_ArticleCategory))
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:09:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lib.php [ 185 ]
2012-10-22 01:09:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/lib.php [ 185 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(185): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 185, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('', '1', Object(Model_ArticleCategory))
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:10:27 --- ERROR: ErrorException [ 4096 ]: Object of class Model_ArticleCategory could not be converted to string ~ APPPATH/classes/lib.php [ 190 ]
2012-10-22 01:10:27 --- STRACE: ErrorException [ 4096 ]: Object of class Model_ArticleCategory could not be converted to string ~ APPPATH/classes/lib.php [ 190 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(190): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Data/w...', 190, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Lib::traverse('', '1', Array)
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:11:15 --- ERROR: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
2012-10-22 01:11:15 --- STRACE: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge_rec...', '/Volumes/Data/w...', 188, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): array_merge_recursive(Array, '<ul class="drop...')
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:13:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:13:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:18:50 --- ERROR: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
2012-10-22 01:18:50 --- STRACE: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 188 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge_rec...', '/Volumes/Data/w...', 188, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): array_merge_recursive(Array, '<ul class="drop...')
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:19:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:19:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:20:07 --- ERROR: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/lib.php [ 186 ]
2012-10-22 01:20:07 --- STRACE: ErrorException [ 1 ]: [] operator not supported for strings ~ APPPATH/classes/lib.php [ 186 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-22 01:20:37 --- ERROR: ErrorException [ 1 ]: Cannot use assign-op operators with overloaded objects nor string offsets ~ APPPATH/classes/lib.php [ 187 ]
2012-10-22 01:20:37 --- STRACE: ErrorException [ 1 ]: Cannot use assign-op operators with overloaded objects nor string offsets ~ APPPATH/classes/lib.php [ 187 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-22 01:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:23:18 --- ERROR: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 189 ]
2012-10-22 01:23:18 --- STRACE: ErrorException [ 2 ]: array_merge_recursive() [function.array-merge-recursive]: Argument #2 is not an array ~ APPPATH/classes/lib.php [ 189 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge_rec...', '/Volumes/Data/w...', 189, Array)
#1 /Volumes/Data/www/pemulihan/_app/classes/lib.php(189): array_merge_recursive(Array, '<ul class="drop...')
#2 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#7 [internal function]: Controller_Themes_Default->after()
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Articles))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#12 {main}
2012-10-22 01:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:27:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:27:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:41:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: last ~ APPPATH/classes/lib.php [ 188 ]
2012-10-22 01:41:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: last ~ APPPATH/classes/lib.php [ 188 ]
--
#0 /Volumes/Data/www/pemulihan/_app/classes/lib.php(188): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 188, Array)
#1 /Volumes/Data/www/pemulihan/_app/views/themes/default.php(160): Lib::traverse('drop', '0', Array)
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/default.php(224): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_Default->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-22 01:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: html/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:50:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:50:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:52:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 01:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 01:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:18:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:18:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:22:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:22:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:25:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:25:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/articles.php [ 161 ]
2012-10-22 02:31:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/articles.php [ 161 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/articles.php(161): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 161, Array)
#1 [internal function]: Controller_Articles->action_read()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-22 02:31:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/articles.php [ 161 ]
2012-10-22 02:31:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/_modules/site/classes/controller/articles.php [ 161 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/site/classes/controller/articles.php(161): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Data/w...', 161, Array)
#1 [internal function]: Controller_Articles->action_read()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-22 02:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:32:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:32:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:46:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:46:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-22 02:50:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-22 02:50:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/georgia/italic/georgiaz.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}