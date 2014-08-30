<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-30 00:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 00:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/admin/admin_background.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 00:20:22 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 00:20:22 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 00:20:23 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:20:23 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 77)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 77)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 77, '130', '85')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(134): Kohana_Image->crop('130', '85', '130', '85')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:39:58 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:39:58 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 77)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 77)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 77, '130', '85')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(134): Kohana_Image->crop('130', '85', '130', '85')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:41:37 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:41:37 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 2)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 2)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 2, '130', '85')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(134): Kohana_Image->crop('130', '85', '130', '85')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:43:41 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:43:41 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(45, -44)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(45, -44)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(45, -44, '85', '130')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(134): Kohana_Image->crop('130', '85', '85', '130')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:45:08 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:45:08 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 1)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 1)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 1, '130', '85')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(134): Kohana_Image->crop('130', '85', '130', '85')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:45:35 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:45:35 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-426, 10)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-426, 10)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-426, 10, 450, 360)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(134): Kohana_Image->crop('460', '370', 450, 360)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:50:12 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Image_GD as array ~ APPPATH\classes\lib.php [ 40 ]
2012-08-30 00:50:12 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Image_GD as array ~ APPPATH\classes\lib.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 00:52:40 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:52:40 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-104, -12)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-104, -12)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-104, -12, '244', '152')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(144): Kohana_Image->crop(140, 140, '244', '152')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:53:18 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:53:18 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 2)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 2)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 2, '130', '85')
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(130, 87, '130', '85')
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:54:06 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:54:06 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-70, -114)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-70, -114)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-70, -114, 200, 200)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(130, 86, 200, 200)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:54:15 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:54:15 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-70, -113)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-70, -113)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-70, -113, 200, 200)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(130, 87, 200, 200)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:56:07 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:56:07 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-70, -113)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-70, -113)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-70, -113, 200, 200)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(146): Kohana_Image->crop(460, 307, 200, 200)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:56:28 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:56:28 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-70, -114)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-70, -114)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-70, -114, 200, 200)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(146): Kohana_Image->crop(800, 531, 200, 200)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:56:38 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:56:38 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-70, -114)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-70, -114)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-70, -114, 200, 200)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(146): Kohana_Image->crop(800, 531, 200, 200)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:57:55 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:57:55 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 2)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 2)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 2, 130, 85)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(146): Kohana_Image->crop(460, 307, 130, 85)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:58:50 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:58:50 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 1)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 1)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 1, 130, 85)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(800, 800, 130, 85)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 00:59:05 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 00:59:05 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 00:59:06 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 00:59:06 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(0, 2)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(0, 2)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(0, 2, 130, 85)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(800, 800, 130, 85)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 01:00:54 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 01:00:54 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-135, -179)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-135.5, -179.5)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-135.5, -179.5, 265.5, 265.5)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(800, 531, 265.5, 265.5)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 01:01:09 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 01:01:09 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-135, -314)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-135.5, -314)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-135.5, -314, 265.5, 400)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(800, 531, 265.5, 400)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 01:01:18 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 01:01:18 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-270, -179)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-270, -179.5)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-270, -179.5, 400, 265.5)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(800, 531, 400, 265.5)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 01:11:46 --- ERROR: ErrorException [ 1 ]: Class 'Image_ImageMagick' not found ~ MODPATH\image\classes\kohana\image.php [ 54 ]
2012-08-30 01:11:46 --- STRACE: ErrorException [ 1 ]: Class 'Image_ImageMagick' not found ~ MODPATH\image\classes\kohana\image.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 01:24:33 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 01:24:33 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 01:34:25 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 01:34:25 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-74, 82)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-74, 82)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-74, 82, 100, 0)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(190, 82, 100)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 01:35:23 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 01:35:23 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-3, 0)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-3, 0)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-3, 0, 130, 85)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(145): Kohana_Image->crop(0, 0, 130, 85)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 01:43:26 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 01:43:26 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-2, 0)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-2, 0)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-2, 0, 130, 85)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(146): Kohana_Image->crop(130, 85, 130, 85)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(166): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 02:24:00 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH\_app\news\classes\controller\backend\news.php [ 172 ]
2012-08-30 02:24:00 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ MODPATH\_app\news\classes\controller\backend\news.php [ 172 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', 'D:\www\multibin...', 172, Array)
#1 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(172): print_r()
#2 [internal function]: Controller_Backend_News->action_index()
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#7 {main}
2012-08-30 02:26:03 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 02:26:03 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-400, -200)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-400, -200)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-400, -200, 600, 400)
#4 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(172): Kohana_Image->crop(800, 531, 600, 400)
#5 [internal function]: Controller_Backend_News->action_index()
#6 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#10 {main}
2012-08-30 02:30:43 --- ERROR: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
2012-08-30 02:30:43 --- STRACE: ErrorException [ 2 ]: imagecreatetruecolor() [function.imagecreatetruecolor]: Invalid image dimensions ~ MODPATH\image\classes\kohana\image\gd.php [ 654 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatetrue...', 'D:\www\multibin...', 654, Array)
#1 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(654): imagecreatetruecolor(-3, 0)
#2 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image\gd.php(223): Kohana_Image_GD->_create(-3, 0)
#3 D:\www\multibintang-career_ko3\_mod\image\classes\kohana\image.php(354): Kohana_Image_GD->_do_crop(-3, 0, 130, 85)
#4 D:\www\multibintang-career_ko3\_app\classes\lib.php(150): Kohana_Image->crop(130, 85, 130, 85)
#5 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(175): Lib::_auto_image_manipulation('news', Object(Model_NewsFile), Array)
#6 [internal function]: Controller_Backend_News->action_index()
#7 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#8 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#11 {main}
2012-08-30 02:44:20 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 02:44:20 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 02:46:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH\_app\news\views\news\backend\news_view.php [ 72 ]
2012-08-30 02:46:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH\_app\news\views\news\backend\news_view.php [ 72 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\views\news\backend\news_view.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 72, Array)
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
2012-08-30 02:49:00 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\news\views\news\backend\news_view.php [ 80 ]
2012-08-30 02:49:00 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\_app\news\views\news\backend\news_view.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 02:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 02:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:03:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:03:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:05:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$id ~ MODPATH\_app\news\classes\controller\backend\news.php [ 442 ]
2012-08-30 03:05:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_News::$id ~ MODPATH\_app\news\classes\controller\backend\news.php [ 442 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(442): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\www\multibin...', 442, Array)
#1 [internal function]: Controller_Backend_News->action_download()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-30 03:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:06:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:06:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/action_download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/action_download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:06:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:06:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/download/80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:17:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Backend_News::find() ~ MODPATH\_app\news\classes\controller\backend\news.php [ 446 ]
2012-08-30 03:17:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Backend_News::find() ~ MODPATH\_app\news\classes\controller\backend\news.php [ 446 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:17:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\news\classes\controller\backend\news.php [ 449 ]
2012-08-30 03:17:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: module_name ~ MODPATH\_app\news\classes\controller\backend\news.php [ 449 ]
--
#0 D:\www\multibintang-career_ko3\_mod\_app\news\classes\controller\backend\news.php(449): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 449, Array)
#1 [internal function]: Controller_Backend_News->action_download()
#2 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 D:\www\multibintang-career_ko3\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career_ko3\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#6 {main}
2012-08-30 03:17:56 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\lib.php [ 6 ]
2012-08-30 03:17:56 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\lib.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/images/cms/icon/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/cms/admin/disk.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:30:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH\_app\news\views\news\backend\news_view.php [ 80 ]
2012-08-30 03:30:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH\_app\news\views\news\backend\news_view.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:30:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH\_app\news\views\news\backend\news_view.php [ 80 ]
2012-08-30 03:30:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ MODPATH\_app\news\views\news\backend\news_view.php [ 80 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/view/uploads/news/Copy of 80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/news/view/uploads/news/Copy of 80d7c769e8d0ae32ca2f8dcc82c5c4ca.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:35:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:35:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:36:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:36:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:36:10 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 357 ]
2012-08-30 03:36:10 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 357 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:36:19 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:36:19 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:37:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:37:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:39:04 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:39:04 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/user/index/sort/level_id/order/asc ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-30 03:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin-cp/user/index/sort/level_id/order/asc ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\multibintang-career_ko3\index.php(142): Kohana_Request->execute()
#1 {main}
2012-08-30 03:40:21 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:40:21 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:40:22 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:40:22 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:40:38 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 357 ]
2012-08-30 03:40:38 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 357 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:41:00 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:41:00 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:41:32 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:41:32 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:41:37 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:41:37 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:42:08 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:42:08 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:42:23 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 357 ]
2012-08-30 03:42:23 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\_app\news\classes\controller\backend\news.php [ 357 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:42:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:42:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-30 03:42:30 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
2012-08-30 03:42:30 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\controller\themes\defaultadmin.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}