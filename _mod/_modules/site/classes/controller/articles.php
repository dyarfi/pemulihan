<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Articles extends Controller_Themes_Default {
	protected $article;
	protected $article_file;
	protected $article_category;
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
		
		$this->article			= new Model_Article();
		$this->article_file		= new Model_ArticleFile();
		$this->acategory		= new Model_ArticleCategory();
		$this->acategory_file 	= new Model_ArticleCategoryFile();
		
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
		
		//--------------------------- Article - Start ---------------------------//
		$this->_config_article	= Lib::config('article');
		
		// Article Fields Config
		$this->article_category_fields	= $this->_config_article->article_category_fields;
		
		// Upload Path Config
		$this->acategory_upload_path	= $this->_config_article->category_upload_path;
		
		// Upload Url Config
		$this->acategory_upload_url	= $this->_config_article->category_upload_url;
		
		// Page Fields Config
		$this->article_fields	= $this->_config_article->article_fields;
		
		// Upload Path Config
		$this->aupload_path	= $this->_config_article->upload_path;
		
		// Upload Url Config
		$this->aupload_url	= $this->_config_article->upload_url;
		//--------------------------- Article - End ---------------------------//
		
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
		
		// Default Conditions
		$where_cond = array('status'=>'publish','status !='=>'draft');
		$order_by	= array('added'=>'desc','category_id'=>'asc','order'=>'asc');

		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		
		$per_page	= Lib::config('site.item_per_page');
		$page_url	= isset($_GET['page']) ? '?page='.$_GET['page'] : '';
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;
		
		/** Execute list query **/
		
		$total_rows		= $this->article->find_count($where_cond);
		
		$articles 		= $this->article->find($where_cond, $order_by, $per_page, $offset);
		$article_files 	= $this->article_file->find();
		
		$buffers_files	= array();
		foreach($article_files as $files) {
			$buffers_files[$files->article_id] = $files;
		}
		$article_files = $buffers_files;
		unset($buffers_files);
		
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
									'upload_path' => $this->upload_path,
									'upload_url' => $this->upload_url,
									'acategory_upload_path' => $this->acategory_upload_path,
									'acategory_upload_url' => $this->acategory_upload_url,
									'articles' => $articles,
									'article_files' => $article_files,
									'aupload_path' => $this->aupload_path,
									'aupload_url' => $this->aupload_url,
									'page_url'		=> $page_url,
									'page_index'	=> $offset,
									//'params'		=> $params,
									'total_record'  => $total_rows,
									'pagination'	=> $pagination
									);

		$content			= View::factory('site/articles_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($page_category->description);
		
		$this->template->meta_description	= 'Article Page - ' . strip_tags($page_category->title);
		
		$this->template->page_title	= 'Article Page - ' . Lib::config('site.title');
		
		$this->template->content	= $content; 
	}
	
	public function action_category () {
		// Home Page Categories --- id = 1
		
		$category_detail		= $this->acategory->load_by_name($this->id1);
		$category_files			= $this->acategory_file->find(array('category_id'=>$category_detail->id));
		
		$buffers_files	= array();
		foreach($category_files as $files) {
			$buffers_files[$files->category_id] = $files;
		}
		$category_files = $buffers_files;
		unset($buffers_files);
		
		// Default Conditions
		$where_cond = array('category_id'=>$category_detail->id, 'status'=>'publish', 'status !='=>'draft');
		$order_by	= array('added'=>'desc');
		
		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		
		$per_page	= Lib::config('site.item_per_page');
		//$per_page	= 2;
		$page_url	= isset($_GET['page']) ? '?page='.$_GET['page'] : '';
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;
		
		/** Execute list query **/

		$total_rows				= $this->article->find_count($where_cond);
		
		$articles				= $this->article->find($where_cond, $order_by, $per_page, $offset);
		$article_files			= $this->article_file->find();
		
		$buffers_files	= array();
		foreach($article_files as $files) {
			$buffers_files[$files->article_id] = $files;
		}
		$article_files = $buffers_files;
		unset($buffers_files);
	
		/** Initialize pagination **/

		$pagination = Pagination::factory(array(
				'total_items' 		=> $total_rows,
				'items_per_page' 	=> $per_page,
				'view'              => 'pagination/default'
			 )
		);
		
		/** Views Vars **/
		
		$content_vars		= array(
									'pagination' => $pagination,
									'category_detail' => $category_detail,
									'category_files' => $category_files,
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'upload_path' => $this->upload_path,
									'upload_url' => $this->upload_url,
									'acategory_upload_path' => $this->acategory_upload_path,
									'acategory_upload_url' => $this->acategory_upload_url,
									'articles' => $articles,
									'article_files' => $article_files,
									'aupload_path' => $this->aupload_path,
									'aupload_url' => $this->aupload_url,
								);

		$content			= View::factory('site/articles_category_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($category_detail->description);
		
		$this->template->meta_description	= 'Article Category - ' . strip_tags($category_detail->title);
		
		$this->template->page_title	= $category_detail->title . ' | Article Category - ' . Lib::config('site.title');
		
		$this->template->content	= $content; 
	}	
	
	public function action_read () {
		
		// Home Page Categories --- id = 1

		$article_detail		= $this->article->load_by_name($this->id1);
		$article_files		= $this->article_file->find(array('article_id'=>$article_detail->id));
		
		$buffers_files	= array();
		foreach($article_files as $files) {
			$buffers_files[$files->article_id] = $files;
		}
		$article_files = $buffers_files;
		unset($buffers_files);
		
		
		/** Count Viewers **/

		$this->_count_viewers($article_detail->id);

		
		/** Views Vars **/
		
		$content_vars		= array(
									'article_detail' => $article_detail,
									'article_files' => $article_files,
									'aupload_path' => $this->aupload_path,
									'aupload_url' => $this->aupload_url,
								);

		$content			= View::factory('site/articles_detail_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= Lib::_explode_keywords($article_detail->text);
		
		$this->template->meta_description	= 'Read Article - ' . strip_tags($article_detail->subject);
		
		$this->template->page_title	= $article_detail->subject . ' | Articles - ' . Lib::config('site.title');
		
		$this->template->content	= $content; 
	}

	protected function _count_viewers($id = '') {	
		if (!$id)
			return;
		
		$article = $this->article->load($id);
		$article->count = $article->count + 1;
		$article->update();
	}
	
}
