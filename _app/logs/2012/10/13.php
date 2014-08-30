<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-13 13:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 13:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 13:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 13:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/alerts/alert.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_top.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_bot.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/material/popup_mid.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:20:47 --- ERROR: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-10-13 14:20:47 --- STRACE: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/news/classes/controller/backend/news.php(319): Kohana_Upload::save(Array, '611e5040001182d...', Object(Config_Group), '0644')
#1 [internal function]: Controller_Backend_News->action_add()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 14:21:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/uploads/news/95f63967d31c25c5ff3d0ac16b89b133.jpg ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:21:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/uploads/news/95f63967d31c25c5ff3d0ac16b89b133.jpg ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/news/classes/controller/backend/news.php(704): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_NewsFile), Array)
#4 [internal function]: Controller_Backend_News->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:32:38 --- ERROR: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-10-13 14:32:38 --- STRACE: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/news/classes/controller/backend/news.php(319): Kohana_Upload::save(Array, 'f87370e4ce0549c...', Object(Config_Group), '0644')
#1 [internal function]: Controller_Backend_News->action_add()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 14:34:57 --- ERROR: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-10-13 14:34:57 --- STRACE: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/news/classes/controller/backend/news.php(319): Kohana_Upload::save(Array, '8916e7a1e44951d...', Object(Config_Group), '0777')
#1 [internal function]: Controller_Backend_News->action_add()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 14:36:48 --- ERROR: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2012-10-13 14:36:48 --- STRACE: Kohana_Exception [ 0 ]: Directory a:0:{} must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/news/classes/controller/backend/news.php(319): Kohana_Upload::save(Array, '8a6a25cc8259db0...', Object(Config_Group), '0777')
#1 [internal function]: Controller_Backend_News->action_add()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_News))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 14:43:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH/_modules/news/views/news/backend/news_view.php [ 79 ]
2012-10-13 14:43:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: upload_path ~ MODPATH/_modules/news/views/news/backend/news_view.php [ 79 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/news/views/news/backend/news_view.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 79, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/views/themes/defaultadmin.php(48): Kohana_View->__toString()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Data/www/pemulihan/_app/classes/controller/themes/defaultadmin.php(73): Kohana_Controller_Template->after()
#9 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/baseadmin.php(40): Controller_Themes_DefaultAdmin->after()
#10 [internal function]: Controller_Backend_BaseAdmin->after()
#11 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_News))
#12 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#15 {main}
2012-10-13 14:51:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:51:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(438): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:53:14 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:53:14 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:53:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:53:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:53:27 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:53:27 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:53:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:53:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:53:32 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:53:32 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:54:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:54:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(45): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:55:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2012-10-13 14:55:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('/Volumes/Data/w...')
#1 /Volumes/Data/www/pemulihan/_mod/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_app/classes/lib.php(47): Kohana_Image::factory('/Volumes/Data/w...')
#3 /Volumes/Data/www/pemulihan/_mod/_modules/article/classes/controller/backend/articlecategory.php(441): Lib::_auto_image_manipulation('/Volumes/Data/w...', Object(Model_ArticleCategoryFile), Array)
#4 [internal function]: Controller_Backend_ArticleCategory->action_view()
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_ArticleCategory))
#6 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#9 {main}
2012-10-13 14:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:55:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:55:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/582f205be67386ae41351176d8b26803_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/a046148c2ac28fbddfd21bd4c50ef343_resize_640x121.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:59:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/ec4cba89bf43ff3090a0ae5ea2ec72d7_resize_640x121.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:59:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/ec4cba89bf43ff3090a0ae5ea2ec72d7_resize_640x121.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 14:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/ec4cba89bf43ff3090a0ae5ea2ec72d7_resize_640x121.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 14:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/article_categories/ec4cba89bf43ff3090a0ae5ea2ec72d7_resize_640x121.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/articles/4ddb1f2837da256132cbae5d0a5bc6d5_resize_90x90.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/articles/4ddb1f2837da256132cbae5d0a5bc6d5_resize_90x90.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:02:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/articles/4ddb1f2837da256132cbae5d0a5bc6d5_resize_90x90.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:02:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/articles/4ddb1f2837da256132cbae5d0a5bc6d5_resize_90x90.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:16:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 403 ]
2012-10-13 15:16:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 403 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(403): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 403, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:16:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 403 ]
2012-10-13 15:16:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 403 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(403): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 403, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:20:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 404 ]
2012-10-13 15:20:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 404 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(404): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 404, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:22:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
2012-10-13 15:22:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(405): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 405, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:22:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
2012-10-13 15:22:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(405): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 405, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:22:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
2012-10-13 15:22:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(405): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 405, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:22:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant HTTP_Exception - assumed 'HTTP_Exception' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
2012-10-13 15:22:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant HTTP_Exception - assumed 'HTTP_Exception' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 272, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:22:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: e ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
2012-10-13 15:22:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: e ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 272, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:23:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant HTTP_Message - assumed 'HTTP_Message' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
2012-10-13 15:23:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant HTTP_Message - assumed 'HTTP_Message' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 272, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:23:38 --- ERROR: ErrorException [ 8 ]: Use of undefined constant HTTP_Response - assumed 'HTTP_Response' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
2012-10-13 15:23:38 --- STRACE: ErrorException [ 8 ]: Use of undefined constant HTTP_Response - assumed 'HTTP_Response' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 272, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:23:58 --- ERROR: ErrorException [ 8 ]: Use of undefined constant HTTP_Exception_404 - assumed 'HTTP_Exception_404' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
2012-10-13 15:23:58 --- STRACE: ErrorException [ 8 ]: Use of undefined constant HTTP_Exception_404 - assumed 'HTTP_Exception_404' ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Data/w...', 272, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:24:13 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, none given, called in /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php on line 272 and defined ~ SYSPATH/classes/kohana/kohana/exception.php [ 209 ]
2012-10-13 15:24:13 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, none given, called in /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php on line 272 and defined ~ SYSPATH/classes/kohana/kohana/exception.php [ 209 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/kohana/exception.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 209, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Kohana_Exception::text()
#2 [internal function]: Controller_Backend_Setting->action_edit()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-13 15:24:28 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php on line 272 and defined ~ SYSPATH/classes/kohana/kohana/exception.php [ 209 ]
2012-10-13 15:24:28 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::text() must be an instance of Exception, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php on line 272 and defined ~ SYSPATH/classes/kohana/kohana/exception.php [ 209 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/kohana/exception.php(209): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 209, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Kohana_Exception::text('page not found')
#2 [internal function]: Controller_Backend_Setting->action_edit()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-13 15:24:40 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php on line 272 and defined ~ SYSPATH/classes/kohana/kohana/exception.php [ 88 ]
2012-10-13 15:24:40 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, string given, called in /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php on line 272 and defined ~ SYSPATH/classes/kohana/kohana/exception.php [ 88 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/kohana/exception.php(88): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Data/w...', 88, Array)
#1 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Kohana_Exception::handler('page not found')
#2 [internal function]: Controller_Backend_Setting->action_edit()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-13 15:25:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$status ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
2012-10-13 15:25:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$status ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 272 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(272): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 272, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:32:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
2012-10-13 15:32:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 405 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(405): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 405, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 15:32:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:32:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:34:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:34:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:36:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:36:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-13 15:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/setting/errors/404 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews03.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews01.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews02.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/imeNews04.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/together.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/content/homeBanner.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navMiddleBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navLeftBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/listTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/navRightBg.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedTop.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedMiddle.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/quoteBg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgTop.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/LittleRoundedBottom.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/contentBgBottom.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-13 15:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/error/invalid_request was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#3 {main}
2012-10-13 15:59:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_page ~ APPPATH/views/themes/errors.php [ 39 ]
2012-10-13 15:59:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_page ~ APPPATH/views/themes/errors.php [ 39 ]
--
#0 /Volumes/Data/www/pemulihan/_app/views/themes/errors.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 39, Array)
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(61): include('/Volumes/Data/w...')
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Data/w...', Array)
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Data/www/pemulihan/_app/classes/controller/errors.php(144): Kohana_Controller_Template->after()
#5 /Volumes/Data/www/pemulihan/_app/classes/controller/backend/errors.php(33): Controller_Errors->after()
#6 [internal function]: Controller_Backend_Errors->after()
#7 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Backend_Errors))
#8 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#11 {main}
2012-10-13 15:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 15:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 15:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/colorbox.css" ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.woff ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/themes/material/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-13 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/fonts/calibri/calibriR.ttf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#1 {main}
2012-10-13 16:04:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
2012-10-13 16:04:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(396): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 396, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 16:05:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
2012-10-13 16:05:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(396): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 396, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 16:05:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
2012-10-13 16:05:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(396): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 396, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 16:05:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
2012-10-13 16:05:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Backend_Setting::$file ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 396 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(396): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Data/w...', 396, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 16:06:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 399 ]
2012-10-13 16:06:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ MODPATH/_modules/setting/classes/controller/backend/setting.php [ 399 ]
--
#0 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(399): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Data/w...', 399, Array)
#1 [internal function]: Controller_Backend_Setting->action_edit()
#2 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#6 {main}
2012-10-13 16:06:40 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/pages/setting_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-13 16:06:40 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/pages/setting_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/pages/...')
#1 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(428): Kohana_View->__construct('admin-cp/pages/...')
#2 [internal function]: Controller_Backend_Setting->action_edit()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}
2012-10-13 16:08:32 --- ERROR: View_Exception [ 0 ]: The requested view admin-cp/pages/setting_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-13 16:08:32 --- STRACE: View_Exception [ 0 ]: The requested view admin-cp/pages/setting_edit could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/view.php(137): Kohana_View->set_filename('admin-cp/pages/...')
#1 /Volumes/Data/www/pemulihan/_mod/_modules/setting/classes/controller/backend/setting.php(428): Kohana_View->__construct('admin-cp/pages/...')
#2 [internal function]: Controller_Backend_Setting->action_edit()
#3 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Backend_Setting))
#4 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Data/www/pemulihan/index.php(139): Kohana_Request->execute()
#7 {main}