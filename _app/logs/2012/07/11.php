<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-11 01:11:50 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ACL - assumed 'ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:11:50 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ACL - assumed 'ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-11 01:12:34 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:12:34 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): print_r()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#11 {main}
2012-07-11 01:12:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ACL - assumed 'ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:12:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ACL - assumed 'ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-11 01:12:53 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:12:53 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:13:17 --- ERROR: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:13:17 --- STRACE: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:13:22 --- ERROR: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:13:22 --- STRACE: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:13:27 --- ERROR: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:13:27 --- STRACE: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:04 --- ERROR: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:04 --- STRACE: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:05 --- ERROR: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:05 --- STRACE: ErrorException [ 1 ]: Class 'Acl' not found ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:20 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'instance' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:20 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'instance' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:14:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:14:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:15:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:15:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:15:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:15:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:15:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:15:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:15:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Controller_ACL - assumed 'Controller_ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:15:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Controller_ACL - assumed 'Controller_ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-11 01:16:06 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Controller_ACL - assumed 'Controller_ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:16:06 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Controller_ACL - assumed 'Controller_ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-11 01:16:07 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Controller_ACL - assumed 'Controller_ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:16:07 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Controller_ACL - assumed 'Controller_ACL' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-11 01:16:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Controller_Acl - assumed 'Controller_Acl' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
2012-07-11 01:16:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Controller_Acl - assumed 'Controller_Acl' ~ APPPATH\views\themes\defaultadmin.php [ 96 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 96, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Themes_DefaultAdmin->after()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}
2012-07-11 01:16:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
2012-07-11 01:16:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:16:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
2012-07-11 01:16:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:16:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
2012-07-11 01:16:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:18:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
2012-07-11 01:18:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:19:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
2012-07-11 01:19:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:19:08 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\controller\acl.php on line 14 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-11 01:19:08 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\controller\acl.php on line 14 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(14): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:19:14 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\controller\acl.php on line 14 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
2012-07-11 01:19:14 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in D:\www\multibintang-career\_app\classes\controller\acl.php on line 14 and defined ~ SYSPATH\classes\kohana\request.php [ 755 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 755, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(14): Kohana_Request->__construct()
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:19:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
2012-07-11 01:19:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\acl.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:19:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:19:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:19:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:19:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:20:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:20:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:21:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:21:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:22:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:22:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:22:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:22:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:22:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
2012-07-11 01:22:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$id ~ MODPATH\_app\admin\classes\model\user.php [ 72 ]
--
#0 D:\www\multibintang-career\_mod\_app\admin\classes\model\user.php(72): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 72, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(25): Model_User->load(NULL)
#2 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#3 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(96): Controller_Acl::instance()
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#6 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Themes_DefaultAdmin->after()
#9 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Authentication))
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#13 {main}
2012-07-11 01:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:23:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 31 ]
2012-07-11 01:23:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 31 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(31): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 31, Array)
#1 D:\www\multibintang-career\_app\classes\controller\acl.php(45): Controller_Acl->__construct()
#2 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl::instance()
#3 [internal function]: Controller_Backend_User->before()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#8 {main}
2012-07-11 01:24:15 --- ERROR: ErrorException [ 1 ]: Call to a member function uri() on a non-object ~ APPPATH\classes\controller\acl.php [ 31 ]
2012-07-11 01:24:15 --- STRACE: ErrorException [ 1 ]: Call to a member function uri() on a non-object ~ APPPATH\classes\controller\acl.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:24:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 56 ]
2012-07-11 01:24:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 56 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(56): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 56, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:25:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:25:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:25:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:25:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:25:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:25:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:25:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:25:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:26:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:26:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:26:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:26:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:26:23 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:26:23 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:26:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:26:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:26:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:26:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:27:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:27:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:27:17 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
2012-07-11 01:27:17 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\acl.php [ 57 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\acl.php(57): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\www\multibin...', 57, Array)
#1 D:\www\multibintang-career\_mod\_app\admin\classes\controller\backend\user.php(13): Controller_Acl->admin_system_modules()
#2 [internal function]: Controller_Backend_User->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_User))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#7 {main}
2012-07-11 01:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:29:06 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 01:29:06 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:29:13 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 01:29:13 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:29:17 --- ERROR: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 98 ]
2012-07-11 01:29:17 --- STRACE: ErrorException [ 1 ]: Class 'ACL' not found ~ APPPATH\views\themes\defaultadmin.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:29:35 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 101 ]
2012-07-11 01:29:35 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:30:12 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 105 ]
2012-07-11 01:30:12 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\themes\defaultadmin.php [ 105 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/applicants was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/applicants was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:31:56 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Session::get(), called in D:\www\multibintang-career\_app\views\themes\defaultadmin.php on line 97 and defined ~ SYSPATH\classes\kohana\session.php [ 211 ]
2012-07-11 01:31:56 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Session::get(), called in D:\www\multibintang-career\_app\views\themes\defaultadmin.php on line 97 and defined ~ SYSPATH\classes\kohana\session.php [ 211 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\session.php(211): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\www\multibin...', 211, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(97): Kohana_Session->get()
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(105): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Themes_DefaultAdmin->after()
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#8 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#11 {main}
2012-07-11 01:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 01:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 01:33:35 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 01:33:35 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:33:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 01:33:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:44:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 01:44:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 01:44:43 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 01:44:43 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 20:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 20:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 20:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 20:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 20:51:58 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
2012-07-11 20:51:58 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ MODPATH\_app\admin\views\admin\backend\user_listing.php [ 92 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 20:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 20:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#3 {main}
2012-07-11 20:53:30 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-11 20:53:30 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012.mbi_career_titles' doesn't exist [ SELECT * FROM `mbi_career_titles` WHERE `titleId` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career\_mod\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\www\multibintang-career\_app\classes\model\global.php(112): Kohana_Database_Query->execute()
#2 D:\www\multibintang-career\_app\classes\model\global.php(192): Model_Global->globalSelect(Array)
#3 D:\www\multibintang-career\_mod\_app\career\classes\kohana\career.php(32): Model_Global->globalTotal('career_titles', Array)
#4 D:\www\multibintang-career\_mod\_app\career\classes\controller\backend\career.php(255): Kohana_Career->get(Array, true)
#5 [internal function]: Controller_Backend_Career->action_view()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(133): Kohana_Request->execute()
#10 {main}