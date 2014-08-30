<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-24 00:05:11 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'ALTER' ~ MODPATH\_app\user\classes\model\modulelist.php [ 382 ]
2012-08-24 00:05:11 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'ALTER' ~ MODPATH\_app\user\classes\model\modulelist.php [ 382 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:05:21 --- ERROR: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.module_list' doesn't exist [ ALTER TABLE `module_list`ADD COLUMN level_id_5 INT(11) NOT NULL DEFAULT 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 00:05:21 --- STRACE: Database_Exception [ 1146 ]: Table 'wa_mbintangid2012ko3.module_list' doesn't exist [ ALTER TABLE `module_list`ADD COLUMN level_id_5 INT(11) NOT NULL DEFAULT 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\modulelist.php(382): Kohana_Database_MySQL->query('ALTER', 'ALTER TABLE `mo...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\model\userlevel.php(127): Model_ModuleList->add_user_level_field('5')
#2 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(182): Model_UserLevel->add(Array)
#3 [internal function]: Controller_Backend_UserLevel->action_add()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-24 00:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 00:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/images/cms/icon/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 00:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 00:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 00:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/admin/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 00:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/admin/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 00:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/admin/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 00:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/admin/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 00:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/admin/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 00:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/userlevel/admin/bin_closed.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 00:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userlevel/delete/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-24 00:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userlevel/delete/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-24 00:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userlevel/delete/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-24 00:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/userlevel/delete/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-24 00:27:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$id ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 333 ]
2012-08-24 00:27:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$id ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 333 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(333): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 333, Array)
#1 [internal function]: Controller_Backend_UserLevel->action_delete()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 00:32:45 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:32:45 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:36:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$id ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 254 ]
2012-08-24 00:36:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$id ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 254 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(254): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 254, Array)
#1 [internal function]: Controller_Backend_UserLevel->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 00:37:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$id ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 254 ]
2012-08-24 00:37:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_UserLevel::$id ~ MODPATH\_app\user\classes\controller\backend\userlevel.php [ 254 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(254): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 254, Array)
#1 [internal function]: Controller_Backend_UserLevel->action_edit()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 00:37:06 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/base_admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-24 00:37:06 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/base_admin could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('admin-cp/base_a...')
#1 D:\www\multibintang-career_ko3\_mod\_app\user\classes\controller\backend\userlevel.php(326): Kohana_View->__construct('admin-cp/base_a...')
#2 [internal function]: Controller_Backend_UserLevel->action_edit()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_UserLevel))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 00:38:38 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_edit.php [ 3 ]
2012-08-24 00:38:38 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_edit.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:39:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:39:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:40:30 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_view.php [ 3 ]
2012-08-24 00:40:30 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\user\views\user\backend\userlevel_view.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:40:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\userlevel_view.php [ 3 ]
2012-08-24 00:40:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\user\views\user\backend\userlevel_view.php [ 3 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_view.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 3, Array)
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
2012-08-24 00:41:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\user\views\user\backend\userlevel_view.php [ 25 ]
2012-08-24 00:41:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\_app\user\views\user\backend\userlevel_view.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:42:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:42:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:42:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:42:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:45:40 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:45:40 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:45:43 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:45:43 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:50:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: index ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 85 ]
2012-08-24 00:50:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: index ~ MODPATH\_app\user\views\user\backend\userlevel_index.php [ 85 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\user\views\user\backend\userlevel_index.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 85, Array)
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
2012-08-24 00:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 00:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 00:53:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:53:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:54:54 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:54:54 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:54:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 00:54:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 00:55:06 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 185 ]
2012-08-24 00:55:06 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\career\classes\controller\backend\careerdivision.php [ 185 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\career\classes\controller\backend\careerdivision.php(185): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 185, Array)
#1 [internal function]: Controller_Backend_CareerDivision->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_CareerDivision))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 01:49:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 01:49:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 01:49:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 01:49:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 01:49:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 01:49:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 01:53:55 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 01:53:55 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 01:55:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$user ~ MODPATH\_app\news\classes\controller\backend\news.php [ 139 ]
2012-08-24 01:55:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$user ~ MODPATH\_app\news\classes\controller\backend\news.php [ 139 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(139): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 139, Array)
#1 [internal function]: Controller_Backend_News->action_index()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 02:09:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\news\views\news\backend\news_index.php [ 75 ]
2012-08-24 02:09:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\news\views\news\backend\news_index.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\views\news\backend\news_index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_News))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-24 02:09:46 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:09:46 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:10:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\news\views\news\backend\news_index.php [ 75 ]
2012-08-24 02:10:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\news\views\news\backend\news_index.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\views\news\backend\news_index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_News))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-24 02:10:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\news\views\news\backend\news_index.php [ 75 ]
2012-08-24 02:10:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: perpage ~ MODPATH\_app\news\views\news\backend\news_index.php [ 75 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\views\news\backend\news_index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 75, Array)
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career_ko3\_app\views\themes\defaultadmin.php(48): Kohana_View->__toString()
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career_ko3\_app\classes\controller\themes\defaultadmin.php(103): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_DefaultAdmin->after()
#10 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_News))
#11 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#14 {main}
2012-08-24 02:11:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:11:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:12:34 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:12:34 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:12:39 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:12:39 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:13:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:13:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:13:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:13:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:14:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:14:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:14:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:14:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:15:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:15:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:15:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:15:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:17:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH\_app\news\classes\model\news.php [ 284 ]
2012-08-24 02:17:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ MODPATH\_app\news\classes\model\news.php [ 284 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:18:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:18:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:18:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:18:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:18:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:18:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:18:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:18:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:18:58 --- ERROR: Database_Exception [ 1065 ]: Query was empty [   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:18:58 --- STRACE: Database_Exception [ 1065 ]: Query was empty [   ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, ' ', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:19:01 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:19:01 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, '', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:19:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:19:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE' at line 1 [  WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, ' WHERE ', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:19:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-24 02:19:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `mbi_news` WHERE  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\model\news.php(284): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', true)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(138): Model_News->find_count('')
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-24 02:21:38 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:21:38 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:26:10 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:26:10 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:26:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:26:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:26:16 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:26:16 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:26:52 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:26:52 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:27:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:27:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/news/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-08-24 02:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/news/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-24 02:28:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$language ~ MODPATH\_app\news\classes\controller\backend\news.php [ 270 ]
2012-08-24 02:28:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$language ~ MODPATH\_app\news\classes\controller\backend\news.php [ 270 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(270): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 270, Array)
#1 [internal function]: Controller_Backend_News->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 02:29:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$model ~ MODPATH\_app\news\classes\controller\backend\news.php [ 272 ]
2012-08-24 02:29:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$model ~ MODPATH\_app\news\classes\controller\backend\news.php [ 272 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(272): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 272, Array)
#1 [internal function]: Controller_Backend_News->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 02:30:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$levels ~ MODPATH\_app\news\classes\controller\backend\news.php [ 277 ]
2012-08-24 02:30:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$levels ~ MODPATH\_app\news\classes\controller\backend\news.php [ 277 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(277): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 277, Array)
#1 [internal function]: Controller_Backend_News->action_add()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 02:30:28 --- ERROR: View_Exception [ 0 ]: The requested view user/backend/news_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-08-24 02:30:28 --- STRACE: View_Exception [ 0 ]: The requested view user/backend/news_add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(137): Kohana_View->set_filename('user/backend/ne...')
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\view.php(30): Kohana_View->__construct('user/backend/ne...', NULL)
#2 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(273): Kohana_View::factory('user/backend/ne...')
#3 [internal function]: Controller_Backend_News->action_add()
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#8 {main}
2012-08-24 02:31:04 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\news\views\news\backend\news_add.php [ 3 ]
2012-08-24 02:31:04 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\news\views\news\backend\news_add.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:31:31 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\news\views\news\backend\news_add.php [ 22 ]
2012-08-24 02:31:31 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\news\views\news\backend\news_add.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:38:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:38:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:38:35 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:38:35 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:38:41 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:38:41 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:40:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:40:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:44:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:44:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/tiny_mce/tiny_mce.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/content.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/content.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 02:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 02:58:44 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:58:44 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:58:59 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:58:59 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:59:09 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 285 ]
2012-08-24 02:59:09 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 285 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:59:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:59:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:59:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:59:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:59:26 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:59:26 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:59:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:59:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 02:59:47 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 02:59:47 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 03:00:42 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 03:00:42 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 03:00:46 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
2012-08-24 03:00:46 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\controller\backend\setting.php(454): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 454, Array)
#1 [internal function]: Controller_Backend_Setting->action_aupdate()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 03:00:48 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
2012-08-24 03:00:48 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH\_app\setting\classes\controller\backend\setting.php [ 454 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\setting\classes\controller\backend\setting.php(454): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\www\multibin...', 454, Array)
#1 [internal function]: Controller_Backend_Setting->action_aupdate()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-24 03:00:51 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 03:00:51 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 03:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/11/0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-24 03:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/11/0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-24 03:01:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/11/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-24 03:01:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/aupdate/11/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#3 {main}
2012-08-24 03:01:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 03:01:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 04:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-24 04:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-24 04:31:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 04:31:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-24 04:31:51 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-24 04:31:51 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}