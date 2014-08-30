<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Themes_DefaultAdmin extends Controller_Template {
	
	public $auto_render = TRUE;
	public $template = 'themes/defaultadmin';
	
	/**
		* Initialize properties before running the controller methods (actions),
		* so they are available to our action.
	**/
	
	public function before() {
		/** Load Default Access Controller List Class **/
		$this->acl			= ACL::instance();
		
		/** Load Widget Class **/
		$this->widget		= Widget::instance();
		
		/** Load Default Session Class **/
		Session::instance('native');
		
		/** Regenerate session_id **/
		Session::instance()->regenerate();
		
		// Checking ajax requests
		if ($this->request->is_ajax()) {
			$this->auto_render = FALSE;
			$this->template    = CP.'ajaxdefault';
		} else {
			// Run anything that need ot run before this.
			parent::before();
			$lang		= Session::instance()->get('lang', 'id');
			i18n::lang("$lang");
			$page_title         = i18n::get('page_title') != 'page_title' ? i18n::get('page_title') : 'Welcome to Kohana';
			$meta_keywords      = i18n::get('meta_keywords') != 'meta_keywords' ? i18n::get('meta_keywords') : 'Kohana, PHP Framework, Light Code, Simple';
			$meta_description   = i18n::get('meta_description') != 'meta_description' ? i18n::get('meta_description') : 'Kohana PHP Framework';
			$meta_copyright     = i18n::get('meta_copyright') != 'meta_copyright' ? i18n::get('meta_copyright') : 'Kohana Developer Team';
			if($this->auto_render) :
				// Initialize default / empty values for template			
				$content_vars_view	= array(				
								'page_title'        => $this->acl->module_menu.' - '.Lib::config('user.title'),
								'meta_keywords'     => $meta_keywords,
								'meta_description'  => $meta_description,
								'meta_copyright'	=> $meta_copyright,
								'header'			=> '',
								'content'			=> '',
								'footer'			=> '',
								'styles'            => array(),
								'scripts'           => array(),
								'copyright'			=> $meta_copyright
							);

				foreach ($content_vars_view as $var => $val) {
					$this->template->$var	= $val;
				}
				
			endif;
		}
	}
	
	/**
		* Fill in default values for our properties before rendering the output.
	**/
	public function after() {
		if ($this->request->is_ajax()) {
			//$this->template->content = $this->template->render();
		} else {
		if($this->auto_render) :
			// Define defaults css and js load
			$styles		= Lib::config('admin.css');
			$scripts	= Lib::config('admin.js');
			/*	
				$buffers = array();
				foreach ($styles as $style) {
					$buffers[] = Compress::instance('stylesheets')->styles(array(CSS.$style));
				}
				$styles = $buffers;
				unset($buffers);
			*/
			/*
				$buffers = array();
				foreach ($scripts as $script) {
					$buffers[] = Compress::instance('javascripts')->scripts(array($script));
				}
				$scripts = $buffers;
			*/	
			// Add defaults to template variables.
			$this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
			$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
		endif;
		}
		
		// Run to clean sessions, anything that needs to run after this.
		/*
		$this->session->set('flash','');
		$this->session->set('result','');
		$this->session->set('register_info','');
		$this->session->set("auth_error",'');
		$this->session->set("acl_error",''); 
		*/
		
		// Run anything that needs to run after this.
		parent::after();
		
	}
}
    