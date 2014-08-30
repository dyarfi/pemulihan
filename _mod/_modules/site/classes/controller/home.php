<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Home extends Controller_Themes_Default {
	protected $page_category;
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
        
		$this->page			= new Model_Page();
		$this->articles		= new Model_Article();
		$this->file			= new Model_ArticleFile();
		
		$files				= $this->file->find();
		
		$buffers = array();
		foreach ($files as $row) {
			$buffers[$row->article_id] = $row;
		}
		$this->files = $buffers;
		unset($buffers);
		
		//--------------------------- Article - Start ---------------------------//
		$this->_config_article	= Lib::config('article');
		
		// Page Fields Config
		$this->article_fields	= $this->_config_article->article_fields;
		
		// Upload Path Config
		$this->aupload_path	= $this->_config_article->upload_path;
		
		// Upload Url Config
		$this->aupload_url	= $this->_config_article->upload_url;
		//--------------------------- Article - End ---------------------------//

	}
    
	public function action_index () {
		
		// Home Page Categories --- id = 1
		// $home_page		= $this->page->load_by_name ('selamat-datang-di-pemulihan-tuhan', 1);
		
		// Latest article -- limit = 4
		$latest_article		= $this->articles->find(array('status'=>'publish','headline'=>0),array('publish_date'=>'desc'),6);
		
		// Headline article -- limit = 5
		$headline_article	= $this->articles->find(array('status'=>'publish','headline'=>1),array('order'=>'desc','publish_date'=>'desc'),5);
		
		$where_cond = array('status' => 'publish');
		$order_by	= array('added' => 'desc');
		
		// MediaRelease MediaFiles
		$_mediareleases		= Model_MediaRelease::instance()->find();
		$medias				= Model_Media::instance()->find($where_cond,$order_by,1);
		$_mediafiles		= Model_MediaFile::instance()->find(array('media_id'=>@$medias[0]->id, 'file_type IN'=>array('audio/mpeg','audio/mp3')),array('id'=>'desc'),1);
		
		$buffers  = array();
		foreach ($_mediareleases as $_releases) {
			$buffers[$_releases->id] = $_releases;
		}
		$mediareleases = $buffers;
		unset($buffers);
		
		$buffers = array();
		foreach ($_mediafiles as $_media) {
			if ($_media->file_type == 'audio/mpeg' || $_media->file_type == 'audio/mp3') {
				$buffers[$_media->media_id] = $_media; 
			}
		} 
		$mediafiles			= $buffers;
		$status				= '';
		
		$media_upload_path  = Lib::config('media.upload_path');
		$media_upload_url	= Lib::config('media.upload_url');
		
		$mediafile_upload_path  = Lib::config('media.mediafile_upload_path');
		$mediafile_upload_url	= Lib::config('media.mediafile_upload_url');
		
		$content_vars	= array(
								'media_upload_path'  => $media_upload_path,
								'media_upload_url'  => $media_upload_url,
								'mediafile_upload_path' => $mediafile_upload_path,
								'mediafile_upload_url' => $mediafile_upload_url,	
			
								'mediareleases' => $mediareleases,
								'medias' => $medias,
								'mediafiles' => $mediafiles,
			
								'latest_article' => $latest_article,
								'latest_article_files' => $this->files,
								'headline_article' => $headline_article,
								'headline_files' => $this->files,
			
								'aupload_path' => $this->aupload_path,
								'aupload_url' => $this->aupload_url,
								);

		$content			= View::factory('site/home_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($latest_article[0]->text);
		
		$this->template->meta_description	= 'Home Page - ' . strip_tags($latest_article[0]->subject);
		
		$this->template->page_title		= $this->data['title_default'] . ' | ' . Lib::config('site.title');
		
		$this->template->content		= $content; 
	}

}
