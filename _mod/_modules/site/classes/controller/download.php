<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Download extends Controller_Themes_Default {
	protected $page_category;
	protected $category_file;

	protected $download;
	protected $downloadfile;	
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
		$this->page_category	= new Model_PageCategory();
		$this->category_files	= new Model_PageCategoryFile();
		
		$this->downloadtype		= new Model_DownloadType();
		$this->downloadtypefile	= new Model_DownloadTypeFile();
		$this->downloadfile		= new Model_DownloadFile();
		
		$downloadtypefile		= $this->downloadtypefile->find();
		$buffers				= array();
		
		foreach ($downloadtypefile as $typefiles) {
			$buffers[$typefiles->type_id] = $typefiles;
		}
		$this->downloadtypefiles = $buffers;
		unset($buffers);
		
		$downloadfile			= $this->downloadfile->find();
		$buffers				= array();
		
		foreach ($downloadfile as $files) {
			$buffers[$files->type_id][] = $files;
		}
		$this->downloadfiles = $buffers;
		unset($buffers);
		
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

		//--------------------------- Download - Start ---------------------------//
		$this->_config_download		= Lib::config('download');
		// Download Type Upload Path Config
		$this->downloadtype_upload_path	= $this->_config_download->downloadtype_upload_path;
		// Download Type Upload Url Config
		$this->downloadtype_upload_url	= $this->_config_download->downloadtype_upload_url;
		// Download File Upload Path Config
		$this->downloadfile_upload_path	= $this->_config_download->downloadfile_upload_path;
		// Download File Upload Url Config
		$this->downloadfile_upload_url	= $this->_config_download->downloadfile_upload_url;
		//--------------------------- Download - End ---------------------------//			
		
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

		$total_rows			= $this->downloadtype->find_count($where_cond);	
		$downloadtype		= $this->downloadtype->find($where_cond, $order_by, $per_page, $offset);
		
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
			
									'downloadtype' => $downloadtype,
									'downloadtypefiles' => $this->downloadtypefiles,
									'downloadfiles' => $this->downloadfiles,
			
									'downloadtype_upload_path' => $this->downloadtype_upload_path,
									'downloadtype_upload_url' => $this->downloadtype_upload_url,
			
									'member' => $this->_member,
				
									'total_record'  => $total_rows,
									'pagination'	=> $pagination
			
									);

		$content			= View::factory('site/download_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords('Download Page PPTX DOCX');
		
		$this->template->meta_description	= 'Download Page ' . strip_tags('Download Page');
		
		$this->template->page_title		= 'Download - ' . Lib::config('site.title');
		
		$this->template->content		= $content; 
	}
	
	public function action_category () {
	
		// Articles Page Category -name || -category_id = articles | 4
		// $page_category	= $this->page_category->find(array('name' => 'about-us'),array('added'=>'desc'),1);
		$page_category	= $this->page_category->load_by_name($this->_class_name);
		$category_files	= $this->category_files->find(array('category_id'=>$page_category->id),'',1);
		
		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
		
		$downloadtype	= $this->downloadtype->load_by_name($this->id1);		
		
		// Default conditions
		$where_cond = array('status'=>'publish','type_id'=>$downloadtype->id);
		$order_by	= array('order'=>'desc');
		
		/** Initialize pagination **/
		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		$per_page	= Lib::config('site.item_per_page') + 20;
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;
		
		/** Execute list query **/

		$total_rows			= $this->downloadfile->find_count($where_cond);
		$downloadfile		= $this->downloadfile->find($where_cond, $order_by, $per_page, $offset);
		
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

									'downloadtype' => $downloadtype,
									'downloadfile' => $downloadfile,
			
									'downloadfile_upload_path' => $this->downloadfile_upload_path,
									'downloadfile_upload_url' => $this->downloadfile_upload_url,
			
									'total_record'  => $total_rows,
									'pagination'	=> $pagination
									);

		$content			= View::factory('site/download_detail_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($downloadtype->description);
		
		$this->template->meta_description	= 'Read Download Page ' . strip_tags($downloadtype->subject);
		
		$this->template->page_title		= Lib::config('site.title');
		
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
		
		$downloadFile = $this->downloadfile->load($id);
		$downloadFile->count = $downloadFile->count + 1;
		$downloadFile->update();
	}
}
