<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Links extends Controller_Themes_Default {

	protected $page_category;
	protected $category_file;
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
		
		$this->links			= new Model_Links();
		$this->linkstype		= new Model_LinksType();
		
		// Load Config
		//--------------------------- Pages - Start ---------------------------//
		$this->_config	= Lib::config('page');
		
		// Page Fields Config
		$this->page_category_fields	= $this->_config->page_category_fields;
		
		// Upload Path Config
		$this->category_upload_path	= $this->_config->category_upload_path;
		
		// Upload Url Config
		$this->category_upload_url	= $this->_config->category_upload_url;
		
	}
    
	public function action_index () {
		
		// Articles Page Category -name = links || -category_id = links | 5
		$page_category	= $this->page_category->load_by_name($this->_class_name);
		$category_files	= $this->category_files->find(array('category_id'=>$page_category->id),'',1);
		
		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
		
		$order_by		= array('order'=>'desc');
		$links			= $this->links->find(array('status'=>'publish'),$order_by);
		$linkstype		= $this->linkstype->find(array('status'=>'publish'));
		
		$content_vars	= array(
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'page_category' => $page_category,
									'category_files' => $category_files,
									'links' => $links,
									'linkstype' => $linkstype
								);

		$content			= View::factory('site/links_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
				
		$this->template->meta_keywords		= Lib::_explode_keywords('Links for information');
		
		$this->template->meta_description	= 'Links Page ' . strip_tags('Links for information');	
		
		$this->template->page_title		= 'Links - '. Lib::config('site.title');
		
		$this->template->content		= $content; 
	}

}
