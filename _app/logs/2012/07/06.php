<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-06 00:52:19 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\www\multibintang-career\_app\classes\controller\backend\base.php on line 16 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
2012-07-06 00:52:19 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in D:\www\multibintang-career\_app\classes\controller\backend\base.php on line 16 and defined ~ SYSPATH\classes\kohana\controller.php [ 43 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\www\multibin...', 43, Array)
#1 D:\www\multibintang-career\_app\classes\controller\backend\base.php(16): Kohana_Controller->__construct()
#2 [internal function]: Controller_Backend_Base->__construct(Object(Request), Object(Response))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-06 00:52:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: meta_copywrite ~ APPPATH\views\themes\defaultadmin.php [ 8 ]
2012-07-06 00:52:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: meta_copywrite ~ APPPATH\views\themes\defaultadmin.php [ 8 ]
--
#0 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 8, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career\_sys\classes\kohana\core.php(631): Kohana_View->__toString()
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(250): Kohana_Core::find_file('views', Object(View))
#6 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#7 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#8 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#9 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#10 [internal function]: Controller_Themes_Defaultadmin->before()
#11 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#12 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#15 {main}
2012-07-06 00:53:10 --- ERROR: ErrorException [ 8 ]: Constant VIEWPAGE already defined ~ APPPATH\views\themes\defaultadmin.php [ 30 ]
2012-07-06 00:53:10 --- STRACE: ErrorException [ 8 ]: Constant VIEWPAGE already defined ~ APPPATH\views\themes\defaultadmin.php [ 30 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant VIEWPA...', 'D:\www\multibin...', 30, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(30): define('VIEWPAGE', 'CP')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 [internal function]: Kohana_View->__toString()
#6 D:\www\multibintang-career\_sys\classes\kohana\i18n.php(164): strtr('The requested v...', Array)
#7 D:\www\multibintang-career\_sys\classes\kohana\kohana\exception.php(57): __('The requested v...', Array)
#8 D:\www\multibintang-career\_sys\classes\kohana\view.php(254): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#9 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#10 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#11 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#12 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#13 [internal function]: Controller_Themes_Defaultadmin->before()
#14 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#15 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#18 {main}
2012-07-06 00:53:45 --- ERROR: ErrorException [ 8 ]: Constant LANG already defined ~ APPPATH\views\themes\defaultadmin.php [ 31 ]
2012-07-06 00:53:45 --- STRACE: ErrorException [ 8 ]: Constant LANG already defined ~ APPPATH\views\themes\defaultadmin.php [ 31 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant LANG a...', 'D:\www\multibin...', 31, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(31): define('LANG', 'en')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 [internal function]: Kohana_View->__toString()
#6 D:\www\multibintang-career\_sys\classes\kohana\i18n.php(164): strtr('The requested v...', Array)
#7 D:\www\multibintang-career\_sys\classes\kohana\kohana\exception.php(57): __('The requested v...', Array)
#8 D:\www\multibintang-career\_sys\classes\kohana\view.php(254): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#9 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#10 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#11 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#12 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#13 [internal function]: Controller_Themes_Defaultadmin->before()
#14 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#15 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#18 {main}
2012-07-06 00:54:01 --- ERROR: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-06 00:54:01 --- STRACE: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#3 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Themes_Defaultadmin->before()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-06 00:54:44 --- ERROR: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-06 00:54:44 --- STRACE: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#3 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Themes_Defaultadmin->before()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-06 00:54:50 --- ERROR: ErrorException [ 8 ]: Constant LANG already defined ~ APPPATH\views\themes\defaultadmin.php [ 31 ]
2012-07-06 00:54:50 --- STRACE: ErrorException [ 8 ]: Constant LANG already defined ~ APPPATH\views\themes\defaultadmin.php [ 31 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Constant LANG a...', 'D:\www\multibin...', 31, Array)
#1 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(31): define('LANG', 'en')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\view.php(228): Kohana_View->render()
#5 [internal function]: Kohana_View->__toString()
#6 D:\www\multibintang-career\_sys\classes\kohana\i18n.php(164): strtr('The requested v...', Array)
#7 D:\www\multibintang-career\_sys\classes\kohana\kohana\exception.php(57): __('The requested v...', Array)
#8 D:\www\multibintang-career\_sys\classes\kohana\view.php(254): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#9 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#10 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#11 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#12 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#13 [internal function]: Controller_Themes_Defaultadmin->before()
#14 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#15 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#18 {main}
2012-07-06 00:55:14 --- ERROR: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-06 00:55:14 --- STRACE: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#3 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Themes_Defaultadmin->before()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-06 00:55:55 --- ERROR: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-06 00:55:55 --- STRACE: View_Exception [ 0 ]: The requested view 


	
    
    
    
         var base_url = 'http://localhost/multibintang-career/';
        
        var server = 'http://'+'localhost/multibintang-career/';
        
        $(document).ready(function(){
           var docu_width = screen.width;
           var left_width = parseInt($(".tw_cl").css('width'));
           var right_width = docu_width-left_width-57;
           //$(".tw_cr").css('width',right_width+'px');
           
           var body_height = $('body').height()-290;
           $('#main_body_container').css('min-height',body_height); 
        });
    
	PT. Multi Bintang Indonesia


     
          
    
    
        
            
                            
            
    
    
     
            
    
    
        
            
                 Copyright &copy; Kohana Developer Team - All Right Reserved
            
            
                 CMS Developed by WEBARQ
                 
            
            
        
    


 could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\view.php(137): Kohana_View->set_filename(Object(View))
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(30): Kohana_View->__construct(Object(View), NULL)
#2 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(33): Kohana_View::factory(Object(View))
#3 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(19): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Themes_Defaultadmin->before()
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#9 {main}
2012-07-06 00:56:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant VIEWPAGE - assumed 'VIEWPAGE' ~ APPPATH\views\layout\two_column.php [ 20 ]
2012-07-06 00:56:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant VIEWPAGE - assumed 'VIEWPAGE' ~ APPPATH\views\layout\two_column.php [ 20 ]
--
#0 D:\www\multibintang-career\_app\views\layout\two_column.php(20): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\www\multibin...', 20, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_sys\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\www\multibintang-career\_app\views\themes\defaultadmin.php(61): Kohana_View->__toString()
#5 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#6 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#7 D:\www\multibintang-career\_sys\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\www\multibintang-career\_app\classes\controller\themes\defaultadmin.php(94): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Themes_Defaultadmin->after()
#10 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Backend_Base))
#11 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#14 {main}
2012-07-06 01:04:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\backend\base.php [ 23 ]
2012-07-06 01:04:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\backend\base.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 01:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadfasfd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/page/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/content/page/save was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:10:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ MODPATH\career\views\career\backend\new.php [ 59 ]
2012-07-06 01:10:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ MODPATH\career\views\career\backend\new.php [ 59 ]
--
#0 D:\www\multibintang-career\_mod\career\views\career\backend\new.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\multibin...', 59, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\view.php(61): include('D:\www\multibin...')
#2 D:\www\multibintang-career\_sys\classes\kohana\view.php(343): Kohana_View::capture('D:\www\multibin...', Array)
#3 D:\www\multibintang-career\_mod\career\classes\kohana\career.php(178): Kohana_View->render()
#4 D:\www\multibintang-career\_mod\career\classes\controller\backend\career.php(71): Kohana_Career->render('backend/new', Array)
#5 [internal function]: Controller_Backend_Career->action_new()
#6 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Career))
#7 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#10 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sad was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasda was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasda was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title/sadasdasd was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 01:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 01:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/undefined/check_title was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/applicants was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-06 02:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/applicants was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:44:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_divison was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:44:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_divison was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:48:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:48:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_division/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/career_divison was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-06 02:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career/career_divison was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 02:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_divison was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 02:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/career_divison was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:08:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 14 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-07-06 23:08:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 14 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\route.php(392): preg_match('#^(?:/(?P<admin...', 'admin-cp', NULL)
#2 D:\www\multibintang-career\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp')
#3 D:\www\multibintang-career\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp', NULL)
#5 D:\www\multibintang-career\index.php(127): Kohana_Request::factory()
#6 {main}
2012-07-06 23:08:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH\profilertoolbar\classes\kohana\profilertoolbar.php [ 49 ]
2012-07-06 23:08:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH\profilertoolbar\classes\kohana\profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:08:48 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 14 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-07-06 23:08:48 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 14 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\www\multibin...', 392, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\route.php(392): preg_match('#^(?:/(?P<admin...', 'admin-cp', NULL)
#2 D:\www\multibintang-career\_sys\classes\kohana\request.php(567): Kohana_Route->matches('admin-cp')
#3 D:\www\multibintang-career\_sys\classes\kohana\request.php(785): Kohana_Request::process_uri('admin-cp', Array)
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(198): Kohana_Request->__construct('/admin-cp', NULL)
#5 D:\www\multibintang-career\index.php(127): Kohana_Request::factory()
#6 {main}
2012-07-06 23:08:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH\profilertoolbar\classes\kohana\profilertoolbar.php [ 49 ]
2012-07-06 23:08:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH\profilertoolbar\classes\kohana\profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:13:59 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
2012-07-06 23:13:59 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:15:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '-', expecting '{' ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:15:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '-', expecting '{' ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:16:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:16:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:17:07 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:17:07 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:17:31 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:17:31 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:17:38 --- ERROR: ErrorException [ 1 ]: Class 'Themes_Default_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:17:38 --- STRACE: ErrorException [ 1 ]: Class 'Themes_Default_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:17:41 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:17:41 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:18:05 --- ERROR: ErrorException [ 1 ]: Class 'Themes_Defaultadmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:18:05 --- STRACE: ErrorException [ 1 ]: Class 'Themes_Defaultadmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:18:13 --- ERROR: ErrorException [ 1 ]: Class 'Themes_Defaultadmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:18:13 --- STRACE: ErrorException [ 1 ]: Class 'Themes_Defaultadmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:21:24 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
2012-07-06 23:21:24 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:21:45 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
2012-07-06 23:21:45 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:21:48 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
2012-07-06 23:21:48 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\admin-cp\authentication.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:21:54 --- ERROR: ErrorException [ 1 ]: Class 'DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:21:54 --- STRACE: ErrorException [ 1 ]: Class 'DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:21:59 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:21:59 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:22:15 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:22:15 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:22:20 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:22:20 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:22:26 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:22:26 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:22:32 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:22:32 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:23:02 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:23:02 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:23:20 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:23:20 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:23:30 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:23:30 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:24:38 --- ERROR: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
2012-07-06 23:24:38 --- STRACE: ErrorException [ 1 ]: Class 'Themes_DefaultAdmin_Controller' not found ~ APPPATH\classes\controller\admin-cp\auth.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:30:15 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:30:15 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ MODPATH\admin\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:30:30 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:30:30 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:30:58 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:30:58 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:31:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session::factory() ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:31:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session::factory() ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:31:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:31:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:31:51 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:31:51 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:32:00 --- ERROR: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:32:00 --- STRACE: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:32:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:32:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE or '$' ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:32:16 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:32:16 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:32:33 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-07-06 23:32:33 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 D:\www\multibintang-career\_app\classes\controller\backend\auth.php(24): Kohana_Session->__construct()
#2 [internal function]: Controller_Backend_Auth->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-06 23:32:44 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:32:44 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Session ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:33:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session::factory() ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
2012-07-06 23:33:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session::factory() ~ APPPATH\classes\controller\backend\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:35:58 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\backend\auth.php [ 38 ]
2012-07-06 23:35:58 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\backend\auth.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:37:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::filter() ~ APPPATH\classes\controller\backend\auth.php [ 39 ]
2012-07-06 23:37:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::filter() ~ APPPATH\classes\controller\backend\auth.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:39:06 --- ERROR: ErrorException [ 2 ]: include(admin.default_page) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\kohana\core.php [ 792 ]
2012-07-06 23:39:06 --- STRACE: ErrorException [ 2 ]: include(admin.default_page) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\kohana\core.php [ 792 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\core.php(792): Kohana_Core::error_handler(2, 'include(admin.d...', 'D:\www\multibin...', 792, Array)
#1 D:\www\multibintang-career\_sys\classes\kohana\core.php(792): Kohana_Core::load()
#2 D:\www\multibintang-career\_app\classes\controller\backend\auth.php(86): Kohana_Core::load('admin.default_p...')
#3 [internal function]: Controller_Backend_Auth->action_validate()
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#5 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#8 {main}
2012-07-06 23:45:57 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\backend\auth.php [ 87 ]
2012-07-06 23:45:57 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\backend\auth.php [ 87 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\backend\auth.php(87): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\www\multibin...', 87, Array)
#1 [internal function]: Controller_Backend_Auth->action_validate()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-06 23:46:46 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\backend\auth.php [ 31 ]
2012-07-06 23:46:46 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\backend\auth.php [ 31 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\backend\auth.php(31): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\www\multibin...', 31, Array)
#1 [internal function]: Controller_Backend_Auth->before()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-06 23:47:16 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\backend\auth.php [ 88 ]
2012-07-06 23:47:16 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\backend\auth.php [ 88 ]
--
#0 D:\www\multibintang-career\_app\classes\controller\backend\auth.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\www\multibin...', 88, Array)
#1 [internal function]: Controller_Backend_Auth->action_validate()
#2 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#6 {main}
2012-07-06 23:47:40 --- ERROR: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH\classes\controller\backend\auth.php [ 31 ]
2012-07-06 23:47:40 --- STRACE: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH\classes\controller\backend\auth.php [ 31 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', 'D:\www\multibin...', 31, Array)
#1 D:\www\multibintang-career\_app\classes\controller\backend\auth.php(31): print_r()
#2 [internal function]: Controller_Backend_Auth->before()
#3 D:\www\multibintang-career\_sys\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend_Auth))
#4 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#7 {main}
2012-07-06 23:47:52 --- ERROR: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
2012-07-06 23:47:52 --- STRACE: ErrorException [ 1 ]: Class 'Base_Admin_Controller' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:48:41 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base_Admin' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
2012-07-06 23:48:41 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base_Admin' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:49:29 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base_Admin' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
2012-07-06 23:49:29 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base_Admin' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:51:52 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Backend_Base_Admin' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
2012-07-06 23:51:52 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Backend_Base_Admin' not found ~ APPPATH\classes\controller\backend\user.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-06 23:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/v was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/v was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:54:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:54:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:54:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:54:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp/user/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}
2012-07-06 23:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-06 23:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin-cp was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\multibintang-career\_sys\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\multibintang-career\_sys\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\multibintang-career\index.php(128): Kohana_Request->execute()
#3 {main}