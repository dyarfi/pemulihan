<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-21 21:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-06-21 21:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/media was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}
2013-06-21 21:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-21 21:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL apiv2/medias was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Data/www/pemulihan/_sys/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Data/www/pemulihan/index.php(119): Kohana_Request->execute()
#3 {main}