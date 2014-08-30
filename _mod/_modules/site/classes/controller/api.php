<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Api extends Controller_Themes_DefaultApi {
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
		$this->page_category	= new Model_PageCategory();
		$this->category_files	= new Model_PageCategoryFile();
		
		$this->pages			= new Model_Page();
		$this->files			= new Model_PageFile();
		
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
		$content			= View::factory('site/blank_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}

		$this->template->content		= $content; 
	}
	
	public function action_category () {
		// API for medias data
		if ($this->id1 == 'media') {
			
			$releases	= Model_MediaRelease::instance()->load_by_name('arus-hayat-voice-note'); 
			$medias		= Model_Media::instance()->find(array('release_id'=>$releases->id),array('order'=>'desc'));
			$files		= Model_MediaFile::instance()->find(array('file_type LIKE'=>'%audio\/mp%'));

			// Media files packing up
			$buffers = array();
			$mediafile_upload_path = Lib::config('media.mediafile_upload_path');
			foreach ($files as $file) {
				$file->download			  = URL::site().'media/download/'.base64_encode($mediafile_upload_path . $file->file_name);
				$buffers[$file->media_id] = $file;
			}
			$files = $buffers;
			unset($buffers);			
			
			$content_vars		= array(
									'releases' => $releases,
									'medias' => $medias,
									'files' => $files,	
									);
		} else
		// API for articles data
		if ($this->id1 == 'articles') {
			
			$categories	= Model_ArticleCategory::instance()->find(array('status'=>'publish'),array('id'=>'asc'));
			$category_files	= Model_ArticleCategoryFile::instance()->find();
			
			$buffers =array();
			foreach ($category_files as $categoryFiles) {
				$buffers[$categoryFiles->category_id] = $categoryFiles;
			}
			$category_files = $buffers;
			unset($buffers);
			
			$articles	= Model_Article::instance()->find(array('status'=>'publish'),array('order'=>'desc'));
			$article_files	= Model_ArticleFile::instance()->find();
			
			$buffers = array();
			foreach ($articles as $article) {
				$article->text	= strip_tags($article->text,'<p><div><span><table><tr><td><br/><br><ul><ol><li><b><i><em><strong><h1><h2><h3><h4><h5>');
				$buffers[]		= $article;
			}
			$articles = $buffers;
			unset($buffers);
			
			$buffers =array();
			foreach ($article_files as $articleFiles) {
				$articleFiles->file_name = str_replace('.', '_resize_280x172.', $articleFiles->file_name);
				$buffers[$articleFiles->article_id] = $articleFiles;
			}
			$article_files = $buffers;
	
			unset($buffers);

			$content_vars		= array(
									//'categories' => $categories,
									//'category_files' => $category_files,
									'articles' => $articles,
									'article_files' => $article_files,	
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
	
	public function action_read () { }
	
}
