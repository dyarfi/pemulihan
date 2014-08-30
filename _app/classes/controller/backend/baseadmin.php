<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_BaseAdmin extends Controller_Themes_DefaultAdmin {

    protected $admin;

    public function before() {

		// Parent Before in DefaultAdmin
        parent::before();		
		
		// Load Session Controller List Class
		$this->session	= Session::instance('native');
		
		// Define Controller and action
		$controller 	= $this->request->controller();
		$action			= $this->request->action();
		
		// Check User Action Module List Permission Based on User Level ID
		$this->acl->check_module_permission($controller, $action);

		// Check User Action Module List Permission Based on User Level ID
		$this->acl->user_history($controller, $action);			
		
    }

    public function action_index() { 
		if ($this->acl->logged_user->id =='') {
			// Delete available sessions
			$this->session->delete('level_id','module_list','module_function_list');
			// Redirect to authentication
			Request::$current->redirect('admin-cp/authentication');
        } else {
			// Redirect to dashboards
			Request::$current->redirect('admin-cp/userdashboard/index');
		}
    }

	public function after() { 
		// Parent After in DefaultAdmin
		parent::after();
				
	}

} 
