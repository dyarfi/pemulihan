<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_UserDashboard extends Controller_Backend_BaseAdmin {
    
    protected $dashboard;
    protected $admin;
	protected $modules;
	protected $id1; 
	protected $id2; 
	protected $id3;
	protected $id4;
    
    public function before() {
        parent::before();
		
        $this->now      = time();
        
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		$this->_module_name		= 'user';
		$this->_class_name		= strtolower(str_replace('Controller_Backend_', '', get_class($this)));
		$this->_module_menu		= $this->acl->module_menu;
		
		$this->_prefs			= (Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') : array();
		
		//$this->statuses			= array('publish','unpublish');

    }
    
    public function action_main() { $this->template->content = 'Default Dashboard'; }
    
    public function action_index() {       
	
		$articles		= array(
						'table'    => 'article',
						'fields'   => array('MAX( count ) AS hits','name','subject'),
						'group_by' => array('count','name','subject'),
						'order_by' => array('hits'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		$article_top_ten_hits = Model_UserDashboard::instance()->find_top_count($articles);
		
		$item_media_files = array(
						'table'    => 'media_file',
						'fields'   => array('MAX( count ) AS hits','file_name','file_type'),
						'group_by' => array('count','file_name','file_type'),
						'order_by' => array('hits'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		$media_top_ten_hits  = Model_UserDashboard::instance()->find_top_count($item_media_files);
		
		$item_download_files = array(
						'table'    => 'download_file',
						'fields'   => array('MAX( count ) AS hits','file_name','file_type'),
						'group_by' => array('count','file_name','file_type'),
						'order_by' => array('hits'=>'DESC'),
						'limit'	   => array(0,10),
					  );
		
		$download_top_ten_hits = Model_UserDashboard::instance()->find_top_count($item_download_files);
		
		/** Views **/
		$content_vars		= array(
									// Load data models
									'article_top_ten_hits'	=> $article_top_ten_hits,
									'media_top_ten_hits'	=> $media_top_ten_hits,
									'download_top_ten_hits' => $download_top_ten_hits,
			
									// Load widget instance
									'widget'			=> $this->widget,
			
									'module_menu'		=> $this->_module_menu,
									'module_name'		=> $this->_module_name,
									'class_name'		=> $this->_class_name
									);
		
		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_module_name.'/backend/'.$this->_class_name.'_index');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->page_title		= Lib::config('admin.title');
		$this->template->content		= $content; 
		
	}
} // End Event
