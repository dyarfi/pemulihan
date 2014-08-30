<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Api_Api extends Controller_Themes_DefaultApi {
	protected $id1;
	protected $id2;
	protected $id3;
	protected $id4;

	public function before () {
		parent::before();
        
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		// Load necessary Model
		$this->page_category	= new Model_PageCategory;
		$this->category_files	= new Model_PageCategoryFile;
		
		$this->pages			= new Model_Page;
		$this->files			= new Model_PageFile;
		
		// Load Config
		$this->_config	= Lib::config('page');
		
		// Page Fields Config
		$this->page_category_fields	= $this->_config->page_category_fields;
		
		// Upload Path Config
		$this->category_upload_path	= $this->_config->category_upload_path;
		
		// Upload Url Config
		$this->category_upload_url	= $this->_config->category_upload_url;
		
		// Page Fields Config
		$this->page_fields	= $this->_config->page_fields;
		
		// Upload Path Config
		$this->upload_path	= $this->_config->upload_path;
		
		// Upload Url Config
		$this->upload_url	= $this->_config->upload_url;
		
				
	}
    
	public function action_index () {

		$content_vars		= array();
		$content			= View::factory('themes/defaultapi');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}

		$this->template->content		= $content; 
	}
	
	public function action_media () {
		
		$content_vars		= array();
		$content			= View::factory('themes/defaultapi');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}

		$this->template->content		= $content; 
	}
	
	public function action_category () {
		//print_r($this->id2);
		// API for medias data
		if ($this->id1 == 'medias') {
			
			$releases	= Model_MediaRelease::instance()->find(array('status'=>'publish')); 
			
			$content_vars		= $releases;
		} else
		// API for articles data
		if ($this->id1 == 'articles') {
			
			$categories	= Model_ArticleCategory::instance()->load(array('status'=>'publish'),array('id'=>'asc'));
	
			$content_vars		= array(
									$categories,
									);
			
		} else
		// API for Download data
		if ($this->id1 == 'downloads') {
			
			$_downloads	= Model_DownloadType::instance()->find(array('status'=>'publish'),array('id'=>'asc'));
			//$_download	= Model_DownloadTypeFile::instance()->find();
			
			$buffers = array();
			$i=0;
			foreach ($_downloads as $download) {
				$buffers[$download->id] = $download;
				
				$_downloadfiles		= Model_DownloadFile::instance()->find(array('status'=>'publish','type_id'=>$download->id),array('order'=>'desc'));
				foreach ($_downloadfiles as $files) {
					$buffers[$download->id]->files[]		= $files;
				}
			$i++;	
			}
			$downloads = $buffers;			
			//print_r($downloads);
			unset($buffers);
		

			$content_vars		= array(
									'downloads' => $downloads
									);
			
		} else 
		// API for calendar data
		if ($this->id1 == 'calendar') {
			
			$calendar_type	= Model_LinksType::instance()->find(); 
			$calendar		= Model_Links::instance()->find(array('status'=>'publish'),array('order'=>'desc'));

			$buffers = array();
			foreach ($calendar as $key) {
				$buffers[$key->type_id] = $key;
			}
			$calendar = $buffers;

			$content_vars		= array(
										'calendar_type' => $calendar_type,
										'calendar' => $calendar
									);
		} else		
		// API for links data
		if ($this->id1 == 'links') {
			
			$links_type	= Model_LinksType::instance()->find(); 
			$links		= Model_Links::instance()->find(array('status'=>'publish'),array('order'=>'desc'));

			$buffers = array();
			foreach ($links as $key) {
				$buffers[$key->type_id] = $key;
			}
			$links = $buffers;

			$content_vars		= array(
									'links_type' => $links_type,
									'links' => $links
									);
		}
		echo json_encode($content_vars);
	}
	
	public function action_member_login () {
		$value = 'member_login';
		echo json_encode($value);
	}
	
	public function action_read () { }
	
}
