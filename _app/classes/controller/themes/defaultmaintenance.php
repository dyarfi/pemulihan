<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Themes_DefaultMaintenance extends Controller_Template {

	public $auto_render = TRUE;
	public $template = 'themes/defaultmaintenance';
	public $is_mobile = '';
	public $is_maintenance = FALSE;
	public $member;
	public $data;

	/**
		* Initialize properties before running the controller methods (actions),
		* so they are available to our action.
	**/

	public function before() {
		
		/** Load Access Controller List Class **/
		$this->acl			= ACL::instance();

		/** Load Session Class **/
		$this->session		= Session::instance('native');					
		
		/** Set Initialize Variable **/
		$maintenance_mode	= Model_Configuration::instance()->load('maintenance');
		
		/** Get User Id Session **/
		$member_id		= ($this->session->get('member_id') != '') ? $this->session->get('member_id') : 0;	
		
		/** Set User Member Data **/
		$this->member	= !(empty($member_id)) ? Lib::to_object(get_object_vars(Model_User::instance()->load($member_id))) : '';
		
		/** SET MAINTENANCE MODE template **/
		if (!empty($maintenance_mode->value)) {
			$this->is_maintenance = TRUE;
		}		

		/** SET IS MOBILE MODE template **/
		if (Request::$current->user_agent('mobile') && Session_Cookie::instance()->get('is_mobile') != '') {
			// Set Session cookies is_mobile to client
			Session_Cookie::instance()->set('is_mobile', 1);
			// Set is_mobile object to true
			$this->is_mobile	= TRUE;
			// Set template for mobile
			$this->template		= 'themes/defaultmobile';
		}
	
		/** Checking ajax requests **/
		if ($this->request->is_ajax()) {
			
			$this->auto_render = FALSE;
            $this->template    = CP.'ajaxdefault';
				
		} else {

			// Run anything that need ot run before this after checking ajax requested

			parent::before();
			
			
			// Set Site Counter
			if (!Session_Cookie::instance()->get('session')) Model_Setting::instance()->count_visitor();
			
			// Get Site Counter 
			$counter = Model_Setting::instance()->load_by_parameter('counter');
			$this->data['counter']	= Lib::_trim_strip($counter->value);	

			// Site Title Default
			$titledefault = Model_Setting::instance()->load_by_parameter('title_default');
			$this->data['title_default']	= Lib::_trim_strip($titledefault->value);
			
			// Set Site Copyright
			$copyright = Model_Setting::instance()->load_by_parameter('copyright');
			$this->data['copyright']	= Lib::_trim_strip($copyright->value);	

			// Set Site Copyright
			$registered = Model_Setting::instance()->load_by_parameter('registered_mark');
			$this->data['registered']	= Lib::_trim_strip($registered->value);
			

			$page_title				= i18n::get('page_title') != 'page_title' ? i18n::get('page_title') : 'Welcome to Kohana';

			$meta_keywords			= '';

			$meta_description		= '';

			$meta_copyright			= i18n::get('meta_copyright') != 'meta_copyright' ? i18n::get('meta_copyright') : 'Kohana Developer Team';
			
			// Site Title Default
			$titledefault = Model_Setting::instance()->load_by_parameter('title_default');
			$this->data['title_default']	= Lib::_trim_strip($titledefault->value);
			
			// Set Site Copyright
			$copyright = Model_Setting::instance()->load_by_parameter('copyright');
			$this->data['copyright']	= Lib::_trim_strip($copyright->value);	

			// Set initialize site counter
			$this->setting		= Model_Setting::instance();
			$this->setting->counter();
			
			if($this->auto_render) :

				// Initialize default / empty values
				$this->template->page_title          = $page_title;
				$this->template->meta_keywords       = $meta_keywords;
				$this->template->meta_description    = $meta_description;
				$this->template->meta_copyright      = $meta_copyright;
				$this->template->header              = '';
				$this->template->content             = '';
				$this->template->footer              = '';
				$this->template->styles              = array();
				$this->template->scripts             = array();
				$this->template->notemplate          = false;
				$this->template->data				 = $this->data;

			endif;

		}

	}

	/* 
		* Fill in default values for our properties before rendering the output.
	*/

	public function after() {
		
		if ($this->request->is_ajax()) {
			// $this->template->content = $this->template->render();
		} else {

			if($this->auto_render) :

				/*** Define defaults css and js load ***/
				// Define all css and js loads in site/config/site.php
				$config = 'maintenance_site';
				if (Request::$current->user_agent('mobile') && $this->is_mobile == TRUE) {
					// Define all css and js loads in site/config/mobile.php
					$config = 'maintenance_mobile';
				}		
						
				$styles		= Lib::config($config.'.css');
				$scripts	= Lib::config($config.'.js');

				// Add defaults to template variables.
				$this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
				$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));

			endif;

		}

		// Run to clean sessions, anything that needs to run after this.
		
		//Session::instance()->set('flash','');
		//Session::instance()->set('result','');
		//Session::instance()->set('register_info','');
		//Session::instance()->set('auth_error','');
		
		// Run anything that needs to run after this.
		parent::after();

	}

}

