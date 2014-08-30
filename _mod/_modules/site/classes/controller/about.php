<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_About extends Controller_Themes_Default {
	protected $page_category;
	protected $category_file;
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
		
		// About Us Page Category -name || -category_id = about-us | 2
		// $page_category	= $this->page_category->find(array('name' => 'about-us'),array('added'=>'desc'),1);
		$page_category	= $this->page_category->load(2);
		$category_files	= $this->category_files->find(array('category_id'=>2),'',1);
		
		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
		
		// About Us Page = 'tentang-pemulihan-tuhan', Category_Id = 2
		$about_page	= $this->pages->load_by_name('tentang-pemulihan-tuhan', $page_category->id);
		$files		= $this->files->find();
		
		$buffers = array();
		foreach ($files as $file){
			$buffers[$file->page_id] = $file;
		}
		$files = $buffers;
		unset($buffers);
		
		// Others page in this category = 2
		$where_cond = array('id !='=>$about_page->id,'category_id'=> $page_category->id,'status'=>'publish');
		$order_by	= array('added'=>'desc');
		$about_pages_others = $this->pages->find($where_cond,$order_by,12);

		$content_vars		= array(
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'upload_path' => $this->upload_path,
									'upload_url' => $this->upload_url,
									'page_category' => $page_category,
									'category_files' => $category_files,
									'about_pages_others' => $about_pages_others,
									'about_page' => $about_page,
									'files' => $files,
									);

		$content			= View::factory('site/about_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($about_page->text);
		
		$this->template->meta_description	= 'About Page - ' . strip_tags($about_page->subject);
		
		$this->template->page_title		= 'About - '. Lib::config('site.title');
		
		$this->template->content		= $content; 
	}
	
	public function action_read () {
		
		// About Us Page Category -name || -category_id = about-us | 2
		// $page_category	= $this->page_category->find(array('name' => 'about-us'),array('added'=>'desc'),1);
		$page_category	= $this->page_category->load(2);
		$category_files	= $this->category_files->find(array('category_id'=>2),'',1);
		
		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
		
		// About Us Page = $this->id1, Category_Id = 2
		$about_page	= $this->pages->load_by_name($this->id1, $page_category->id);
		
		$files		= $this->files->find();
		
		$buffers = array();
		foreach ($files as $file){
			$buffers[$file->page_id] = $file;
		}
		$files = $buffers;
		unset($buffers);
		
		// Others page in this category = 2
		$where_cond = array('id !='=>$about_page->id,'category_id'=> $page_category->id,'status'=>'publish');
		$order_by	= array('added'=>'desc');
		$about_pages_others = $this->pages->find($where_cond,$order_by,12);
		
		/** Count Viewers **/

		$this->_count_viewers($about_page->id);
		
		$content_vars		= array(
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'upload_path' => $this->upload_path,
									'upload_url' => $this->upload_url,
									'page_category' => $page_category,
									'category_files' => $category_files,
									'about_pages_others' => $about_pages_others,
									'about_page' => $about_page,
									'files' => $files,
									);

		$content			= View::factory('site/about_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->page_title		= 'About - '. Lib::config('site.title');
		$this->template->content		= $content; 
	}
	
	public function action_category(){}
	
	protected function _count_viewers($id = '') {	
		if (!$id)
			return;
		
		$page = $this->pages->load($id);
		$page->count = $page->count + 1;
		$page->update();
	}	
}
