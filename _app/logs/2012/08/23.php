<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-23 00:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:05:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::messages() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:05:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::messages() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:05:13 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:05:13 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(296): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 296, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:05:23 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:05:23 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(296): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 296, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:05:43 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:05:43 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(296): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 296, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:05:48 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:05:48 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(296): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 296, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:06:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 297 ]
2012-08-23 00:06:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 297 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:06:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 297 ]
2012-08-23 00:06:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 297 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:06:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 297 ]
2012-08-23 00:06:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 297 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:07:39 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:07:39 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:07:54 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:07:54 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:07:59 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:07:59 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:08:10 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:08:10 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:08:29 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:08:29 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:08:38 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:08:38 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:08:45 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:08:45 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:09:51 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
2012-08-23 00:09:51 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 298 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(298): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 298, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:10:21 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 299 ]
2012-08-23 00:10:21 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 299 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(299): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 299, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:10:26 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 299 ]
2012-08-23 00:10:26 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 299 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(299): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 299, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:10:40 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 299 ]
2012-08-23 00:10:40 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\_app\user\classes\controller\backend\user.php [ 299 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(299): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\www\multibin...', 299, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:11:12 --- ERROR: ErrorException [ 8 ]: Undefined index: Name must be at least 10 characters long ~ MODPATH\_app\user\classes\controller\backend\user.php [ 300 ]
2012-08-23 00:11:12 --- STRACE: ErrorException [ 8 ]: Undefined index: Name must be at least 10 characters long ~ MODPATH\_app\user\classes\controller\backend\user.php [ 300 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(300): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 300, Array)
#1 [internal function]: Controller_Backend_User->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 00:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:22:40 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php on line 296 and defined ~ SYSPATH\classes\kohana\i18n.php [ 155 ]
2012-08-23 00:22:40 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to __() must be an array, string given, called in D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php on line 296 and defined ~ SYSPATH\classes\kohana\i18n.php [ 155 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\i18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 155, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(296): __('validation', 'Name must be at...')
#2 [internal function]: Controller_Backend_User->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 00:22:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::messages() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:22:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::messages() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:22:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::messages() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
2012-08-23 00:22:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::messages() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 296 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:30:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\_app\user\classes\controller\backend\user.php [ 300 ]
2012-08-23 00:30:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\_app\user\classes\controller\backend\user.php [ 300 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:30:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\_app\user\classes\controller\backend\user.php [ 300 ]
2012-08-23 00:30:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\_app\user\classes\controller\backend\user.php [ 300 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:30:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\_app\user\classes\controller\backend\user.php [ 301 ]
2012-08-23 00:30:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ MODPATH\_app\user\classes\controller\backend\user.php [ 301 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 00:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:34:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:34:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:35:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:35:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 00:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 00:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 01:10:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'activated' in 'order clause' [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1'ORDER BY   `activated` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 01:10:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'activated' in 'order clause' [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1'ORDER BY   `activated` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(221): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(199): Model_User->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 01:11:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'activated' in 'order clause' [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1'ORDER BY   `activated` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 01:11:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'activated' in 'order clause' [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1'ORDER BY   `activated` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(221): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(199): Model_User->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 01:20:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:20:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:24:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:24:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:25:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:25:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:25:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:25:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:26:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:26:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:26:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY   `1` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 01:26:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY   `1` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 01:27:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 198 ]
2012-08-23 01:27:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 198 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(198): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 198, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:28:45 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 198 ]
2012-08-23 01:28:45 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 198 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 01:29:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY   `1` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 01:29:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY   `1` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 01:35:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:35:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(176): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/i was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 01:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/i was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 01:39:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:39:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:40:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:40:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:40:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:40:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:40:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:40:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render('pagination/basi...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 01:42:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 183 ]
2012-08-23 01:42:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 183 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(183): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 183, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 01:43:56 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 183 ]
2012-08-23 01:43:56 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_uri ~ MODPATH\_app\career\classes\controller\backend\career.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 01:45:19 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 01:45:19 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 01:46:17 --- ERROR: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 202 ]
2012-08-23 01:46:17 --- STRACE: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ MODPATH\pagination\classes\kohana\pagination.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 01:47:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH\_app\career\classes\controller\backend\career.php [ 186 ]
2012-08-23 01:47:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH\_app\career\classes\controller\backend\career.php [ 186 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(186): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 186, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 01:47:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH\_app\career\classes\controller\backend\career.php [ 186 ]
2012-08-23 01:47:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH\_app\career\classes\controller\backend\career.php [ 186 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(186): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 186, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 01:58:02 --- ERROR: ErrorException [ 8 ]: Use of undefined constant      - assumed '    ' ~ APPPATH\bootstrap.php [ 171 ]
2012-08-23 01:58:02 --- STRACE: ErrorException [ 8 ]: Use of undefined constant      - assumed '    ' ~ APPPATH\bootstrap.php [ 171 ]
--
#0 D:\www\multibintang-career_ko3\_app\bootstrap.php(171): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 171, Array)
#1 D:\www\multibintang-career_ko3\index.php(134): require('D:\www\multibin...')
#2 {main}
2012-08-23 02:05:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\_app\career\classes\controller\backend\career.php [ 201 ]
2012-08-23 02:05:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ MODPATH\_app\career\classes\controller\backend\career.php [ 201 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(201): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 201, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 02:05:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Pagination::route_params() ~ MODPATH\_app\career\classes\controller\backend\career.php [ 202 ]
2012-08-23 02:05:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Pagination::route_params() ~ MODPATH\_app\career\classes\controller\backend\career.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 02:06:02 --- ERROR: ErrorException [ 8 ]: Undefined index: key ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
2012-08-23 02:06:02 --- STRACE: ErrorException [ 8 ]: Undefined index: key ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(156): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 156, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(79): Kohana_Pagination->setup(Array)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(64): Kohana_Pagination->__construct(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(199): Kohana_Pagination::factory(Array)
#4 [internal function]: Controller_Backend_Career->action_index()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-23 02:06:30 --- ERROR: ErrorException [ 8 ]: Undefined index: key ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
2012-08-23 02:06:30 --- STRACE: ErrorException [ 8 ]: Undefined index: key ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(156): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 156, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(79): Kohana_Pagination->setup(Array)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(64): Kohana_Pagination->__construct(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(199): Kohana_Pagination::factory(Array)
#4 [internal function]: Controller_Backend_Career->action_index()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-23 02:06:41 --- ERROR: ErrorException [ 8 ]: Undefined index: key ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
2012-08-23 02:06:41 --- STRACE: ErrorException [ 8 ]: Undefined index: key ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(156): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 156, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(79): Kohana_Pagination->setup(Array)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(64): Kohana_Pagination->__construct(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(199): Kohana_Pagination::factory(Array)
#4 [internal function]: Controller_Backend_Career->action_index()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-23 02:06:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY   `1` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 02:06:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_career`ORDER BY   `1` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(159): Model_Career->find('', Array, 4, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 02:13:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\model\user.php [ 290 ]
2012-08-23 02:13:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\user\classes\model\user.php [ 290 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 02:13:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\career\classes\model\career.php [ 306 ]
2012-08-23 02:13:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\_app\career\classes\model\career.php [ 306 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 02:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:20:42 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 101 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:20:42 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 101 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:20:45 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 99 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:20:45 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 99 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:21:21 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 96 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:21:21 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 96 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:21:23 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 94 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:21:23 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 94 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:21:33 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 126 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:21:33 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 126 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:21:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 96 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:21:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 96 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:21:51 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 97 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:21:51 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 97 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:22:01 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 92 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 02:22:01 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 92 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 02:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:22:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:22:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:25:13 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\_app\career\classes\controller\backend\career.php [ 116 ]
2012-08-23 02:25:13 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ MODPATH\_app\career\classes\controller\backend\career.php [ 116 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(116): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 116, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 02:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:31:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '164' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` asc LIMIT ,164 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 02:31:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '164' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` asc LIMIT ,164 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(240): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find(Array, Array, 4, 16)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 02:32:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:32:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:34:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:34:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:40:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
2012-08-23 02:40:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 86, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 02:41:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 02:41:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/page was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 02:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/page/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 02:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/page/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 02:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:44:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:44:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:47:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:47:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 02:54:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
2012-08-23 02:54:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 156, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(79): Kohana_Pagination->setup(Array)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(64): Kohana_Pagination->__construct(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(200): Kohana_Pagination::factory(Array)
#4 [internal function]: Controller_Backend_Career->action_index()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-23 02:54:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
2012-08-23 02:54:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 156, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(79): Kohana_Pagination->setup(Array)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(64): Kohana_Pagination->__construct(Array)
#3 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(200): Kohana_Pagination::factory(Array)
#4 [internal function]: Controller_Backend_Career->action_index()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#9 {main}
2012-08-23 02:54:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
2012-08-23 02:54:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\pagination\classes\kohana\pagination.php [ 156 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 02:56:52 --- ERROR: ErrorException [ 8 ]: Undefined index: no ~ MODPATH\_app\career\classes\controller\backend\career.php [ 116 ]
2012-08-23 02:56:52 --- STRACE: ErrorException [ 8 ]: Undefined index: no ~ MODPATH\_app\career\classes\controller\backend\career.php [ 116 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(116): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 116, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 02:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 02:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:08:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:08:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:10:13 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 81 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:10:13 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 81 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:10:43 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 77 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:10:43 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 77 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:10:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:10:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:10:52 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:10:52 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:10:53 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:10:53 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:10:58 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 73 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:10:58 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 73 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:11:01 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 74 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:11:01 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 74 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:11:05 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 77 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:11:05 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 77 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:11:07 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:11:07 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 76 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:11:10 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 80 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:11:10 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 80 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:11:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:11:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/3 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:44:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '44' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` asc LIMIT ,44 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 03:44:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '44' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` asc LIMIT ,44 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(162): Model_Career->find(Array, Array, 4, 4)
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 03:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:53:21 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 100 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:53:21 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 100 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:54:06 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 100 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:54:06 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 100 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:54:32 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 93 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:54:32 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 93 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:54:41 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 94 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:54:41 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 94 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:54:51 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 89 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:54:51 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 89 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:54:57 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 88 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:54:57 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 88 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:55:01 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 84 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:55:01 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 84 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:55:05 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 84 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:55:05 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 84 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:55:12 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 83 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:55:12 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 83 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:55:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 03:55:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(162): Model_Career->find(Array, Array, 4, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 03:56:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 03:56:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(162): Model_Career->find(Array, Array, 4, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 03:56:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 03:56:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(162): Model_Career->find(Array, Array, 4, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 03:56:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 03:56:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(242): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(162): Model_Career->find(Array, Array, 4, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 03:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:16 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 120 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:57:16 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 120 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:20 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 119 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:57:20 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 119 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:57:26 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 96 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-08-23 03:57:26 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 96 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\route.php(392): preg_match('#^admin-cp(?:/(...', 'admin-cp/career...', NULL)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp/career...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp/career...', Array)
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp/caree...', NULL)
#5 D:\www\multibintang-career_ko3\index.php(141): Kohana_Request::factory()
#6 {main}
2012-08-23 03:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 03:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 03:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 04:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/admin-cp/career/index/page/4 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 04:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/page/admin-cp/career/index/page/4 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 04:01:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\career\classes\controller\backend\career.php [ 118 ]
2012-08-23 04:01:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\_app\career\classes\controller\backend\career.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 04:04:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH\pagination\views\pagination\basic.php [ 2 ]
2012-08-23 04:04:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ MODPATH\pagination\views\pagination\basic.php [ 2 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 2, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(253): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Themes_DefaultAdmin->after()
#14 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#18 {main}
2012-08-23 04:10:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 92 ]
2012-08-23 04:10:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 04:11:28 --- ERROR: View_Exception [ 0 ]: The requested view pagination/basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 04:11:28 --- STRACE: View_Exception [ 0 ]: The requested view pagination/basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('pagination/basi...')
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(30): Kohana_View->__construct('pagination/basi...', NULL)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(245): Kohana_View::factory('pagination/basi...')
#3 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Themes_DefaultAdmin->after()
#13 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#14 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#17 {main}
2012-08-23 04:13:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 04:13:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\cke.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 04:13:44 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'query' ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 04:13:44 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'query' ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 04:13:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 04:13:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant URL - assumed 'URL' ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\cke.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(250): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 04:14:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 200 ]
2012-08-23 04:14:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 200 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(200): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 200, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\cke.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(250): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 04:14:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
2012-08-23 04:14:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 86, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 04:15:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
2012-08-23 04:15:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 86, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 04:24:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 92 ]
2012-08-23 04:24:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 04:24:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
2012-08-23 04:24:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 86, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 04:25:02 --- ERROR: View_Exception [ 0 ]: The requested view pagination/cke could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 04:25:02 --- STRACE: View_Exception [ 0 ]: The requested view pagination/cke could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('pagination/cke')
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(30): Kohana_View->__construct('pagination/cke', NULL)
#2 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(245): Kohana_View::factory('pagination/cke')
#3 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Themes_DefaultAdmin->after()
#13 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#14 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#17 {main}
2012-08-23 04:25:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
2012-08-23 04:25:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$uri ~ MODPATH\pagination\classes\kohana\pagination.php [ 199 ]
--
#0 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(199): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 199, Array)
#1 D:\www\multibintang-career_ko3\_mod\pagination\views\pagination\basic.php(20): Kohana_Pagination->url(2)
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career_ko3\_mod\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#5 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(177): Kohana_Pagination->render()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Themes_DefaultAdmin->after()
#15 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#16 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#19 {main}
2012-08-23 04:41:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 92 ]
2012-08-23 04:41:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 05:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/sort/ref_no/order/asc ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/sort/ref_no/order/asc ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/sort/name/order/desc ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/career/index/sort/name/order/desc ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:26:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
2012-08-23 05:26:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\career_index.php [ 86 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(86): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 86, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 05:27:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: penomoran_start ~ MODPATH\_app\career\views\career\backend\career_index.php [ 101 ]
2012-08-23 05:27:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: penomoran_start ~ MODPATH\_app\career\views\career\backend\career_index.php [ 101 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 101, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 05:29:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:29:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:32:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 132 ]
2012-08-23 05:32:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 05:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:32:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH\_app\career\classes\controller\backend\career.php [ 85 ]
2012-08-23 05:32:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH\_app\career\classes\controller\backend\career.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 05:33:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH\_app\career\classes\controller\backend\career.php [ 87 ]
2012-08-23 05:33:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH\_app\career\classes\controller\backend\career.php [ 87 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 05:33:18 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Career' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
2012-08-23 05:33:18 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Career' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'D:\www\multibin...', 364, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\validation.php(364): call_user_func_array(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(87): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Career->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-23 05:34:23 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Career' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
2012-08-23 05:34:23 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_Career' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'D:\www\multibin...', 364, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\validation.php(364): call_user_func_array(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(87): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_Career->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-23 05:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:36:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 132 ]
2012-08-23 05:36:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ MODPATH\_app\user\classes\controller\backend\user.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 05:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 05:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 05:37:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\views\career\backend\career_index.php [ 163 ]
2012-08-23 05:37:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\views\career\backend\career_index.php [ 163 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(163): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 163, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 05:38:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\views\career\backend\career_index.php [ 163 ]
2012-08-23 05:38:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\views\career\backend\career_index.php [ 163 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\career_index.php(163): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 163, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 06:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:00:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:00:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:06:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:06:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:06:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1'ORDER BY   `1` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:06:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'order clause' [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1'ORDER BY   `1` asc LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(222): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(200): Model_User->find(Array, Array, 4, '')
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 06:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:10:31 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'query' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 163 ]
2012-08-23 06:10:31 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'query' ~ MODPATH\_app\user\classes\controller\backend\user.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 06:11:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\_app\user\classes\controller\backend\user.php [ 163 ]
2012-08-23 06:11:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\_app\user\classes\controller\backend\user.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 06:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:13:13 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_get ~ MODPATH\_app\user\classes\controller\backend\user.php [ 163 ]
2012-08-23 06:13:13 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_get ~ MODPATH\_app\user\classes\controller\backend\user.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 06:16:11 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH\_app\user\classes\controller\backend\user.php [ 165 ]
2012-08-23 06:16:11 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH\_app\user\classes\controller\backend\user.php [ 165 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(165): Kohana_Core::error_handler(8, 'Uninitialized s...', 'D:\www\multibin...', 165, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:16:46 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ MODPATH\_app\user\classes\controller\backend\user.php [ 164 ]
2012-08-23 06:16:46 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ MODPATH\_app\user\classes\controller\backend\user.php [ 164 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(164): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\www\multibin...', 164, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:22:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:22:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column '6' in 'order clause' [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `6` asc LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(240): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(161): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 06:28:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: base_url ~ MODPATH\_app\user\classes\controller\backend\user.php [ 211 ]
2012-08-23 06:28:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: base_url ~ MODPATH\_app\user\classes\controller\backend\user.php [ 211 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(211): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 211, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:28:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_url ~ MODPATH\_app\user\classes\controller\backend\user.php [ 246 ]
2012-08-23 06:28:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_url ~ MODPATH\_app\user\classes\controller\backend\user.php [ 246 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(246): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 246, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:28:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_url ~ MODPATH\_app\user\classes\controller\backend\user.php [ 246 ]
2012-08-23 06:28:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_url ~ MODPATH\_app\user\classes\controller\backend\user.php [ 246 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(246): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 246, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:28:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_url ~ MODPATH\_app\user\views\user\backend\user_index.php [ 74 ]
2012-08-23 06:28:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_url ~ MODPATH\_app\user\views\user\backend\user_index.php [ 74 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\user_index.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 74, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(106): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_User))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 06:32:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc2 LIMIT 10' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` desc2 LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:32:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc2 LIMIT 10' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` desc2 LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(240): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 06:32:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc2 LIMIT 10' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` desc2 LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:32:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc2 LIMIT 10' at line 1 [ SELECT * FROM `mbi_career` WHERE `status` = 'publish'ORDER BY   `name` desc2 LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(240): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(158): Model_Career->find(Array, Array, 10, '')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 06:36:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$career ~ MODPATH\_app\user\classes\controller\backend\user.php [ 197 ]
2012-08-23 06:36:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_User::$career ~ MODPATH\_app\user\classes\controller\backend\user.php [ 197 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(197): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 197, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:37:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\user\classes\controller\backend\user.php [ 198 ]
2012-08-23 06:37:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\user\classes\controller\backend\user.php [ 198 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(198): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 198, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:37:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 65 ]
2012-08-23 06:37:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 06:38:16 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_UserLevel' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
2012-08-23 06:38:16 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_UserLevel' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'D:\www\multibin...', 364, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\validation.php(364): call_user_func_array(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(67): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_UserLevel->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-23 06:39:01 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_UserLevel' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
2012-08-23 06:39:01 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Controller_Backend_UserLevel' does not have a method '_valid_search_key' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'D:\www\multibin...', 364, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\validation.php(364): call_user_func_array(Array, Array)
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(67): Kohana_Validation->check()
#3 [internal function]: Controller_Backend_UserLevel->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-23 06:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:44:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:44:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(305): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(155): Model_Career->find_count('')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 06:44:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:44:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\career.php(305): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(155): Model_Career->find_count('')
#2 [internal function]: Controller_Backend_Career->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 06:48:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 47 ]
2012-08-23 06:48:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 47 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(47): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 47, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 06:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 06:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 06:58:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'' at line 1 [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1' AND `email` LIKE '%m'%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 06:58:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'' at line 1 [ SELECT * FROM `mbi_user` WHERE `level_id` >= '1' AND `email` LIKE '%m'%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\user.php(289): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(197): Model_User->find_count(Array)
#2 [internal function]: Controller_Backend_User->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 07:40:24 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Setting as array ~ MODPATH\_app\setting\views\setting\backend\setting_index.php [ 118 ]
2012-08-23 07:40:24 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Setting as array ~ MODPATH\_app\setting\views\setting\backend\setting_index.php [ 118 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 07:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 07:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 07:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 07:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 07:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 07:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 08:03:33 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:03:33 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:03:52 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:03:52 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:04:08 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:04:08 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:04:29 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:04:29 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:05:08 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:05:08 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:06:06 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:06:06 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:06:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:06:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:07:19 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:07:19 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:08:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:08:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:14:25 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\themes\defaultadmin.php [ 18 ]
2012-08-23 08:14:25 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\themes\defaultadmin.php [ 18 ]
--
#0 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(18): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\www\multibin...', 18, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(11): Controller_Themes_DefaultAdmin->before()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 08:14:52 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:14:52 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:18:56 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:18:56 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:19:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:19:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:21:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:21:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:22:30 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
2012-08-23 08:22:30 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\user\classes\controller\backend\user.php [ 258 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\user.php(258): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 258, Array)
#1 [internal function]: Controller_Backend_User->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_User))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:24:42 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 08:24:42 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 08:24:49 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\career\classes\controller\backend\career.php [ 203 ]
2012-08-23 08:24:49 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\career\classes\controller\backend\career.php [ 203 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\career.php(203): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 203, Array)
#1 [internal function]: Controller_Backend_Career->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:25:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 08:25:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 08:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 08:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 08:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-23 08:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 08:28:48 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
2012-08-23 08:28:48 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\controller\backend\setting.php(454): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 454, Array)
#1 [internal function]: Controller_Backend_Setting->action_aupdate()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:30:14 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
2012-08-23 08:30:14 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\controller\backend\setting.php(454): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 454, Array)
#1 [internal function]: Controller_Backend_Setting->action_aupdate()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:30:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 08:30:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 08:30:47 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
2012-08-23 08:30:47 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\controller\backend\setting.php(454): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 454, Array)
#1 [internal function]: Controller_Backend_Setting->action_aupdate()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 08:41:18 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 08:41:18 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 08:41:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 08:41:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 08:41:50 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
2012-08-23 08:41:50 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\controller\backend\setting.php(454): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 454, Array)
#1 [internal function]: Controller_Backend_Setting->action_aupdate()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 09:05:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:05:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:06:49 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:06:49 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:06:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:06:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 09:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 09:08:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:08:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:08:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 47 ]
2012-08-23 09:08:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 47 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(47): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 47, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 09:08:53 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:08:53 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:09:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:09:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:09:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'' at line 1 [ SELECT * FROM `mbi_user_level` WHERE `id` >= '1' AND `status` != 'deleted' AND `name` LIKE '%'%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 09:09:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%'' at line 1 [ SELECT * FROM `mbi_user_level` WHERE `id` >= '1' AND `status` != 'deleted' AND `name` LIKE '%'%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\userlevel.php(236): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(126): Model_UserLevel->find(Array)
#2 [internal function]: Controller_Backend_UserLevel->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 09:10:00 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:10:00 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:10:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:10:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:10:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:10:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:10:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:10:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:11:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:11:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:11:25 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:11:25 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:12:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:12:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:12:12 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:12:12 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:12:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 171 ]
2012-08-23 09:12:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_record ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 171 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\careerdivision_index.php(171): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 171, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(108): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 09:15:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career_division` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 09:15:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career_division` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\careerdivision.php(278): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(129): Model_CareerDivision->find_count('')
#2 [internal function]: Controller_Backend_CareerDivision->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 09:16:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career_division` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 09:16:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_career_division` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\careerdivision.php(278): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(129): Model_CareerDivision->find_count('')
#2 [internal function]: Controller_Backend_CareerDivision->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 09:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:16:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:18:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 101 ]
2012-08-23 09:18:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 101 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\careerdivision_index.php(101): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 101, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(108): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 09:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/13/0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-23 09:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/13/0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 09:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/13/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-23 09:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/13/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-23 09:20:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 47 ]
2012-08-23 09:20:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$uri ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 47 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(47): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 47, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 09:20:41 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_' doesn't exist [ UPDATE `mbi_` SET `id` = '13', `name` = 'Creative', `description` = 'Lorem Ipsum Dolor Sit Amet', `in_menu` = '1', `status` = 'unpublish', `added` = '1344446154', `modified` = 1345688441 WHERE `id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-23 09:20:41 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.mbi_' doesn't exist [ UPDATE `mbi_` SET `id` = '13', `name` = 'Creative', `description` = 'Lorem Ipsum Dolor Sit Amet', `in_menu` = '1', `status` = 'unpublish', `added` = '1344446154', `modified` = 1345688441 WHERE `id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `mbi_` S...', false, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\career\classes\model\careerdivision.php(134): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(57): Model_CareerDivision->update()
#3 [internal function]: Controller_Backend_CareerDivision->action_index()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-23 09:25:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 88 ]
2012-08-23 09:25:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 88 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\careerdivision_index.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 88, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(108): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 09:25:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:25:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:25:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:25:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:25:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 88 ]
2012-08-23 09:25:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\career\views\career\backend\careerdivision_index.php [ 88 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\views\career\backend\careerdivision_index.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 88, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(108): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 09:26:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:26:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:27:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$id4 ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 96 ]
2012-08-23 09:27:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_CareerDivision::$id4 ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 96 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(96): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 96, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 09:28:07 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:28:07 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:28:11 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Controller_Backend_CareerDivision as array ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2012-08-23 09:28:11 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Controller_Backend_CareerDivision as array ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:28:19 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Controller_Backend_CareerDivision as array ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2012-08-23 09:28:19 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Controller_Backend_CareerDivision as array ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:29:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:29:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:29:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:29:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:30:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:30:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 09:30:22 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 09:30:22 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 22:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 22:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 22:48:11 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 22:48:11 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 22:48:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 22:48:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 22:48:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 22:48:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 22:55:31 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 22:55:31 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 22:55:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
2012-08-23 22:55:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 22:56:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$uri ~ MODPATH\_app\news\classes\controller\backend\news.php [ 51 ]
2012-08-23 22:56:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$uri ~ MODPATH\_app\news\classes\controller\backend\news.php [ 51 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(51): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 51, Array)
#1 [internal function]: Controller_Backend_News->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-23 23:02:33 --- ERROR: ErrorException [ 1 ]: Class 'Controller_ACL' not found ~ APPPATH\classes\controller\themes\defaultadmin.php [ 11 ]
2012-08-23 23:02:33 --- STRACE: ErrorException [ 1 ]: Class 'Controller_ACL' not found ~ APPPATH\classes\controller\themes\defaultadmin.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:05:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH\_app\news\classes\controller\backend\news.php [ 72 ]
2012-08-23 23:05:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_callbacks() ~ MODPATH\_app\news\classes\controller\backend\news.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:05:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH\_app\news\classes\controller\backend\news.php [ 74 ]
2012-08-23 23:05:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH\_app\news\classes\controller\backend\news.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:08:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\themes\defaultadmin.php [ 61 ]
2012-08-23 23:08:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\themes\defaultadmin.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:10:58 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 61 ]
2012-08-23 23:10:58 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:11:36 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 61 ]
2012-08-23 23:11:36 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:12:53 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 53 ]
2012-08-23 23:12:53 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:12:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 53 ]
2012-08-23 23:12:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:12:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 53 ]
2012-08-23 23:12:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:20:48 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:20:48 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:20:51 --- ERROR: View_Exception [ 0 ]: The requested view user/backend/backend_userlevel_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 23:20:51 --- STRACE: View_Exception [ 0 ]: The requested view user/backend/backend_userlevel_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('user/backend/ba...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(214): Kohana_View->__construct('user/backend/ba...')
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:20:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:20:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:24:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:24:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:24:59 --- ERROR: View_Exception [ 0 ]: The requested view user/backend/backend_userlevel_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 23:24:59 --- STRACE: View_Exception [ 0 ]: The requested view user/backend/backend_userlevel_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('user/backend/ba...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(214): Kohana_View->__construct('user/backend/ba...')
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:25:46 --- ERROR: View_Exception [ 0 ]: The requested view user/backend/backend_userlevel_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 23:25:46 --- STRACE: View_Exception [ 0 ]: The requested view user/backend/backend_userlevel_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('user/backend/ba...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(214): Kohana_View->__construct('user/backend/ba...')
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:26:25 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/base_admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 23:26:25 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/base_admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('admin-cp/base_a...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(220): Kohana_View->__construct('admin-cp/base_a...')
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:27:30 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/base_admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-23 23:27:30 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/base_admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('admin-cp/base_a...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(220): Kohana_View->__construct('admin-cp/base_a...')
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:29:41 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php on line 221 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-08-23 23:29:41 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php on line 221 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 28, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(221): Kohana_View::factory('user/backend/us...', Object(View))
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:30:11 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php on line 221 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-08-23 23:30:11 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php on line 221 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\www\multibin...', 28, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(221): Kohana_View::factory('user/backend/us...', Object(View))
#2 [internal function]: Controller_Backend_UserLevel->action_add()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-23 23:30:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 4 ]
2012-08-23 23:30:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 4 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 4, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:30:54 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:30:54 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:30:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\user_index.php [ 4 ]
2012-08-23 23:30:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\user_index.php [ 4 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\user_index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 4, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_User))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:31:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:31:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:31:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 4 ]
2012-08-23 23:31:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 4 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 4, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:31:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 33 ]
2012-08-23 23:31:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 33 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 33, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:32:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 33 ]
2012-08-23 23:32:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 33 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 33, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:32:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:32:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:32:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 33 ]
2012-08-23 23:32:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 33 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 33, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:33:03 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_add.php [ 3 ]
2012-08-23 23:33:03 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_add.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:33:17 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_add.php [ 5 ]
2012-08-23 23:33:17 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_add.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:36:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:36:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:36:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\user_index.php [ 34 ]
2012-08-23 23:36:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: search_keys ~ MODPATH\_app\user\views\user\backend\user_index.php [ 34 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\user_index.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 34, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_User))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-23 23:36:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:36:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:46:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:46:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:49:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:49:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:51:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:51:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-23 23:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-23 23:51:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-23 23:51:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:54:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 174 ]
2012-08-23 23:54:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::validate() ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 174 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-23 23:56:01 --- ERROR: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH\_app\user\classes\model\userlevel.php [ 116 ]
2012-08-23 23:56:01 --- STRACE: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH\_app\user\classes\model\userlevel.php [ 116 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'mktime() [<a hr...', 'D:\www\multibin...', 116, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\userlevel.php(116): mktime()
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(182): Model_UserLevel->add(Array)
#3 [internal function]: Controller_Backend_UserLevel->action_add()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}