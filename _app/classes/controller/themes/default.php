<?php defined('SYSPATH') or die('No direct script access.');class Controller_Themes_Default extends Controller_Template {		public $auto_render = TRUE;	public $template = 'themes/default';	public $is_mobile = '';	public $member='';	public $data;		/**		* Initialize properties before running the controller methods (actions),		* so they are available to our action.	**/		public function before() {		/** Load Access Controller List Class **/		//$this->acl			= ACL::instance();				/** Load Session Class **/		$this->session		= Session::instance('native');						/** Set Initialize Variable **/		$maintenance_mode	= Model_Configuration::instance()->load('maintenance');				/** Get User Id Session **/		$member_id		= ($this->session->get('member_id') != '') ? $this->session->get('member_id') : '';					/** Set User Member Data **/		$this->member	= (!empty($member_id)) ? Lib::to_object(get_object_vars(Model_User::instance()->load($member_id))) : '';		/** SET MAINTENANCE MODE template **/		if (!empty($maintenance_mode->value)) {			/** Set redirect for maintenance **/			Request::$current->redirect(URL::site('maintenance'));		}					/** SET IS MOBILE MODE template **/		if (Request::$current->user_agent('mobile')) {				if (Session::instance()->get('is_mobile') !== '') {				// Set is_mobile object to true				$this->is_mobile	= TRUE;								// Set template for mobile				$this->template		= 'themes/defaultmobile';				}			// Check if version is requested			if (Request::$current->query('ver') != '') {				// Set return value				$return = '';								// Check reqiested version value				if (Request::$current->query('ver') == 'website') {					// Set client set for website version					Session::instance()->set('is_mobile', '');					$return = 1;				} else if (Request::$current->query('ver') == 'mobile') {					// Set client set for mobile version					Session::instance()->set('is_mobile', 1);					$return = 1;				} else {					// Set client set for default version					Session::instance()->set('is_mobile', 1);				}								if ($this->request->is_ajax()) { }								// Set Redirect after request				$this->request->redirect(URL::site());			} 		}		/** Checking ajax requests **/		if ($this->request->is_ajax()) {			$this->auto_render	= FALSE;            $this->template		= CP.'ajaxdefault';		} else {			// Run anything that need ot run before this after checking ajax requested			parent::before();						//--- Set data (array) to be sent into view template ---//			// Social media data taken from setting table 			$where_cond   = array('status'=>'publish', 'parameter LIKE' => '%socmed_%');			$social_media =	Model_Setting::instance()->find($where_cond);			$buffers = array();			foreach ($social_media as $socmed) {				$socmed->value = strip_tags($socmed->value);				$buffers[$socmed->parameter] = $socmed;			}						//--- Menu Social Media In Header home center ---//			$this->data					= $buffers;			unset($buffers);						//--- Member data for home ---//			$this->data['member']			= $this->member;			$this->data['members']			= Model_User::instance()->find_count(array('level_id'=>99,'status'=>'active'));									//--- Left menu data			// Article Category Lists - parent_id = 0			$article_cat_list = Model_ArticleCategory::instance()->find(array('status'=>'publish'),array('id'=>'asc'),6);			$this->data['left_menu']		= $article_cat_list;			$this->data['default_menus']	= Lib::config('site.default_menus');			$this->data['article_menus']	= Model_ArticleCategory::instance()->find(array('parent_id'=>0,'status'=>'publish'),array('id'=>'asc'));						// Set Site Counter			if (!Session_Cookie::instance()->get('session')) Model_Setting::instance()->count_visitor();						// Get Email Info 			$emailadmin= Model_Setting::instance()->load_by_parameter('email_info');			$this->data['email_info']	= Lib::_trim_strip(@$emailadmin->value);							// Get Site Counter 			$counter = Model_Setting::instance()->load_by_parameter('counter');			$this->data['counter']	= Lib::_trim_strip(@$counter->value);							// Site Title Default			$titledefault = Model_Setting::instance()->load_by_parameter('title_default');			$this->data['title_default']	= Lib::_trim_strip(@$titledefault->value);						// Site Quote Default			$sitequote = Model_Setting::instance()->load_by_parameter('site_quote');			$this->data['site_quote']	= Lib::_trim_strip(@$sitequote->value);						// Set Site Copyright			$copyright = Model_Setting::instance()->load_by_parameter('copyright');			$this->data['copyright']	= Lib::_trim_strip(@$copyright->value);							// Set Site Copyright			$registered = Model_Setting::instance()->load_by_parameter('registered_mark');			$this->data['registered']	= Lib::_trim_strip(@$registered->value);						// Set initialize site counter			$this->setting		= Model_Setting::instance();			$this->setting->counter();						// Media Release 			$where_cond		= array('status' => 'publish');			$order_by		= array('added' => 'desc');			$media_releases	= Model_MediaRelease::instance()->find($where_cond,$order_by,1);						// Media Release Files			$where_cond = array('id !=' => 0, 'field_name' => 'image_1');			$order_by	= array('added' => 'desc');			$_media_release_files	= Model_MediaReleaseFile::instance()->find($where_cond);			$buffers = array();			foreach($_media_release_files as $files) {				$buffers[$files->release_id] = $files;			}			$media_release_files = $buffers;			// Media Release Data and files			$this->data['media_releases']		= $media_releases;			$this->data['media_release_files']	= $media_release_files;			// Upload path and Upload Url			$this->data['media_upload_path']	= Lib::config('media.upload_path');			$this->data['media_upload_url']		= Lib::config('media.upload_url');						// Set default page title, keywords and description			$page_title			= i18n::get('page_title') != 'page_title' ? i18n::get('page_title') : SITE_NAME;			$meta_keywords		= '';			$meta_description	= '';			$meta_copyright		= i18n::get('meta_copyright') != 'meta_copyright' ? i18n::get('meta_copyright') : SITE_NAME;						if($this->auto_render) :				// Initialize default / empty values for template							$content_vars_view	= array(												'page_title'        => $page_title,								'meta_keywords'     => $meta_keywords,								'meta_description'  => $meta_description,								'meta_copyright'	=> $meta_copyright,								'header'			=> '',								'content'			=> '',								'footer'			=> '',								'styles'            => array(),								'scripts'           => array(),								'data'				=> $this->data,							);				foreach ($content_vars_view as $var => $val) {					$this->template->$var	= $val;				}			endif;		}	}	/* 		* Fill in default values for our properties before rendering the output.	*/	public function after() {		if ($this->request->is_ajax()) {			// $this->template->content = $this->template->render();			//$this->template->render();		} else {			if($this->auto_render) :				// Define defaults css and js load				// Define all css and js loads in site/config/site.php				$config = 'site';				if (Request::$current->user_agent('mobile') && $this->is_mobile == TRUE) {					// Define all css and js loads in site/config/mobile.php					$config = 'mobile';				}						$styles		= Lib::config($config.'.css');				$scripts	= Lib::config($config.'.js');								// Add defaults to template variables.				$this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));				$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));			endif;		}		// Run to clean sessions, anything that needs to run after this.		// Run anything that needs to run after this.		parent::after();	}}