<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Themes_DefaultRESTFul extends Controller_Template {
	
	public $auto_render = TRUE;
	public $template = 'themes/defaultapi';
	public $is_mobile = '';
	public $member;
	public $data;
	
	/**
		* Initialize properties before running the controller methods (actions),
		* so they are available to our action.
	**/
	
	public function before() {
		
		// Load Access Controller List Class
		//$this->acl			= ACL::instance();
		$this->session		= Session::instance();
		
		// Checking ajax requests
		if ($this->request->is_ajax()) {
			$this->auto_render = FALSE;
			$this->response->headers(
				array(					
					'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate',
					'Content-Type' => 'application/json; charset=utf-8',
					'Expires' => 'Mon, 26 Jul 1997 05:00:00 GMT',
					'Access-Control-Max-Age'=> '3628800',
					'Access-Control-Allow-Methods'=>' GET, POST, PUT, DELETE',
					'Pragma' => 'no-cache',
				)
			);
			$this->template    = CP.'ajaxdefault';
		}
		// If this is a normal http request
		else {
			$this->auto_render = FALSE;			
			$this->response->headers(
				array(					
					'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate',
					'Content-Type' => 'application/json; charset=utf-8',
					'Expires' => 'Mon, 26 Jul 1997 05:00:00 GMT',
					'Access-Control-Max-Age'=> '3628800',
					'Access-Control-Allow-Methods'=>' GET, POST, PUT, DELETE',
					'Pragma' => 'no-cache',
				)
			);
			$this->template    = CP.'ajaxdefault';
			// Run anything that need ot run before this after checking ajax requested
			parent::before();

		}
	}
	/**
		* Fill in default values for our properties before rendering the output.
	**/
	public function after() {
		if ($this->request->is_ajax()) {
			//$this->auto_render = FALSE;
			//$this->template->content = $this->template->render();
			//$this->template    = CP.'ajaxdefault';
		} else {
		if($this->auto_render) :
			// Blank page
		endif;
		}
		
		// Run anything that needs to run after this.
		parent::after();
	}
}
