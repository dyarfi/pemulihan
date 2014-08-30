<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-07 23:29:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:29:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/cms/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/cms/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:46:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/assets/images/themes/material/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:46:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/assets/images/themes/material/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/assets/images/themes/material/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/assets/images/themes/material/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/user/themes/assets/images/themes/material/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/user/themes/assets/images/themes/material/logo.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(135): Kohana_Request->execute()
#1 {main}
2012-08-07 23:53:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-07 23:53:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/side_menu.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(143): Kohana_Request->execute()
#1 {main}
2012-08-07 23:53:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
2012-08-07 23:53:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_AjaxMenu::$session ~ MODPATH\_app\user\classes\controller\backend\ajaxmenu.php [ 11 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\ajaxmenu.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 11, Array)
#1 [internal function]: Controller_Backend_AjaxMenu->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_AjaxMenu))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(143): Kohana_Request->execute()
#6 {main}
2012-08-07 23:53:20 --- ERROR: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
2012-08-07 23:53:20 --- STRACE: ErrorException [ 1 ]: Class 'Admin' not found ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}