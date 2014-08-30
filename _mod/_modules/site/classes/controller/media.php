<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Media extends Controller_Themes_Default {
	
	protected $page_category;
	protected $category_file;
	protected $media;
	protected $mediafile;
	protected $mediarelease;
	protected $mediareleasefile;	
	protected $id1;
	protected $id2;
	protected $id3;
	protected $id4;


	public function before () {
		parent::before();
        
        $this->_class_name		= Request::$current->controller();
		
		$this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		// Load necessary Model
		$this->page_category	= new Model_PageCategory;
		$this->category_files	= new Model_PageCategoryFile;

		$this->media			= new Model_Media;
		$this->mediafile		= new Model_MediaFile;
		$this->mediarelease		= new Model_MediaRelease;
		$this->mediareleasefile	= new Model_MediaReleaseFile;
		
		$mediareleasefile		= $this->mediareleasefile->find(array('field_name'=>'image_2'));
		$buffers = array();
		foreach ($mediareleasefile as $releasefile) {
			$buffers[$releasefile->release_id] = $releasefile;
		}
		$this->mediareleasefiles = $buffers;
		
		// Load Config
		//--------------------------- Pages - Start ---------------------------//
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
		//--------------------------- Pages - End ---------------------------//
		
		//--------------------------- Media - Start ---------------------------//
		$this->_config_media	= Lib::config('media');
		// Media Upload Path Config
		$this->media_upload_path	= $this->_config_media->upload_path;
		// Media Upload Url Config
		$this->media_upload_url		= $this->_config_media->upload_url;
		// Media Upload Path Config
		$this->mediafile_upload_path	= $this->_config_media->mediafile_upload_path;	
		// Media Upload Url Config
		$this->mediafile_upload_url		= $this->_config_media->mediafile_upload_url;
		//--------------------------- Media - End ---------------------------//	
		
		// Get logged member
		$this->_member		= !empty($this->member) ? $this->member : '';		
	}
    
	public function action_index () {
		
		// Articles Page Category -name || -category_id = articles | 4
		// $page_category	= $this->page_category->find(array('name' => 'about-us'),array('added'=>'desc'),1);
		$page_category	= $this->page_category->load_by_name($this->_class_name);
		$category_files	= $this->category_files->find(array('category_id'=>$page_category->id),'',1);

		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
				
		// Default conditions
		$where_cond = array('status'=>'publish');
		$order_by	= array('added'=>'desc');
		
		/** Initialize pagination **/
		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		$per_page	= Lib::config('site.item_per_page');
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;
		
		/** Execute list query **/

		$total_rows			= $this->mediarelease->find_count($where_cond);	
		$mediarelease		= $this->mediarelease->find($where_cond, $order_by, $per_page, $offset);
		
		/** Initialize pagination **/

		$pagination = Pagination::factory(array(
				'total_items' 		=> $total_rows,
				'items_per_page' 	=> $per_page,
				'view'              => 'pagination/default'
			 )
		);
		
		$content_vars		= array(
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'page_category' => $page_category,
									'category_files' => $category_files,
			
									'mediafile' => $this->mediafile->find(),
									'mediarelease' => $mediarelease,
									'mediareleasefiles' => $this->mediareleasefiles,
			
									'media_upload_path' => $this->media_upload_path,
									'media_upload_url' => $this->media_upload_url,
									
									'member' => $this->_member,

									'total_record'  => $total_rows,
									'pagination'	=> $pagination
									);

		$content			= View::factory('site/media_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}

		$this->template->meta_keywords		= Lib::_explode_keywords('Media MP3 AMR');
		
		$this->template->meta_description	= 'Media Page ' . strip_tags('Media for information');	
		
		$this->template->page_title		= 'Media - ' . Lib::config('site.title');
		
		$this->template->content		= $content; 
	}
	
	public function action_category () {
	
		// Media Page Category -name || -category_id = media | 1
		// $page_category	= $this->page_category->find(array('name' => 'media'),array('added'=>'desc'),1);
		$page_category	= $this->page_category->load_by_name($this->_class_name);
		$category_files	= $this->category_files->find(array('category_id'=>$page_category->id),'',1);
		
		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
	
		$mediarelease = $this->mediarelease->load_by_name($this->id1);
		
		// Default Conditions
		$where_cond = array('release_id'=>$mediarelease->id,'status'=>'publish');
		$order_by	= array('order'=>'desc');

		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;		
		$per_page	= Lib::config('site.item_per_page');
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;
		
		/** Execute list query **/

		$total_rows	= $this->media->find_count($where_cond);
		$medias		= $this->media->find($where_cond, $order_by, $per_page, $offset);	
		
		$order_by	 = array('field_name'=>'desc');
		$_mediafiles = $this->mediafile->find('',$order_by);
		$mediafiles = array();
		$buffers = array();
		foreach($_mediafiles as $mfiles) {
			$buffers[$mfiles->media_id][] = $mfiles;
		}
		$mediafiles = $buffers;
		
		/** Initialize pagination **/

		$pagination = Pagination::factory(array(
				'total_items' 		=> $total_rows,
				'items_per_page' 	=> $per_page,
				'view'              => 'pagination/default'
			 )
		);
		
		/** Views Vars **/
		
		$content_vars		= array(
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'page_category' => $page_category,
									'category_files' => $category_files,
									
									'member' => $this->_member,
			
									'medias'			=> $medias,
									'mediarelease'		=> $mediarelease,
									'mediafiles'		=> $mediafiles,
			
									'media_upload_path' => $this->media_upload_path,
									'media_upload_url'	=> $this->media_upload_url,
			
									'mediafile_upload_url' => $this->mediafile_upload_url,
									'mediafile_upload_path' => $this->mediafile_upload_path,
			
									'total_record'  => $total_rows,
									'pagination'	=> $pagination
									);

		$content			= View::factory('site/media_detail_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($mediarelease->description);
		
		$this->template->meta_description	= 'Media Page ' . strip_tags($mediarelease->subject);	
		
		$this->template->page_title		= $mediarelease->subject . ' | Media - ' . Lib::config('site.title');
		
		$this->template->content		= $content; 
	}
	
	public function action_download() {
		if (!$this->id1)
			return;
		
		if ($this->request->is_ajax() && $this->request->post('file')) {
			// Send id to count hits
			$this->_count_downloads(base64_decode($this->request->post('file')));
			echo 1;
			exit();
		}
			
		// Retrieve Raw File
		$fileraw = base64_decode($this->id1);
		// Set filename to original
		$filename = '';
		
		//print_r($fileraw);
		//return Lib::_download_file_force($filename,$fileraw);

		return Lib::_download($fileraw);
	}
	
	/*
	public function action_download() {
		if (!$this->id1)
			return;
		
		// Decode Filenames	
		$content  = explode("||",base64_decode($this->id1));
		// Get raw file
		$fileraw = $content[1];
		// Get file extension
		$filexts  = strstr($content[1],'.');
		// Get file name
		$filename = str_replace(' ', '_', trim($content[0] . $filexts));
		
		// Return File Force Download Helper
		return Lib::_download_file_force($filename,$fileraw);
	}	
	*/
	
	protected function _count_downloads($id = '') {	
		if (!$id)
			return;
		
		$mediaFile = $this->mediafile->load($id);
		$mediaFile->count = $mediaFile->count + 1;
		$mediaFile->update();
	}
}
