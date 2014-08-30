<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Page extends Controller_Themes_Default {
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
		
		$this->page_category = new Model_PageCategory();
	}
    
	public function action_index () {
		
		// Home Page Categories --- id = 1
		
		$home_page_category = $this->page_category->load(1);
		
		$content_vars		= array('' => '');

		$content			= View::factory('site/page_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= trim(str_replace(' ',', ',strip_tags($home_page_category->description)),"\n\r\x00..\x1F");
		
		$this->template->meta_description	= 'Page ' . strip_tags($home_page_category->subject);	
		
		$this->template->page_title	= Lib::config('site.title') . '-' . $home_page_category->subject ;
		
		$this->template->content	= $content; 
	}
	
	public function action_read () {
		
		// Home Page Categories --- id = 1
		
		$home_page_category = $this->page_category->load(1);
				
		/** Views Vars **/
		
		$content_vars		= array('' => '');

		$content			= View::factory('site/page_detail_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= trim(str_replace(' ',', ',strip_tags($home_page_category->description)),"\n\r\x00..\x1F");
		
		$this->template->meta_description	= 'Page ' . strip_tags($home_page_category->subject);	
		
		$this->template->page_title	= Lib::config('site.title') . '-' . $home_page_category->subject ;
		
		$this->template->content	= $content;  
	}

}
