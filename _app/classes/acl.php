<?php defined('SYSPATH') or die('No direct script access.');
class ACL extends Controller {
	
	protected static $_instance;
	public $logged_user;
	public $privileges;
	public $allow = array();
	public $allowedActions = array();
	
	public $actionMap = array(
		'index',
		'add',
		'edit',
		'view',
		'delete',
		'update',
		'download'
	);
	
	public $module_list;
	public $module_function_list;
	public $module_request;
	public $module_menu;
	public $previous_url;
	
	public static function instance () {
		if (self::$_instance === NULL)
			self::$_instance	= new self();
		return self::$_instance;
	}
	
	public function __construct () {
		$this->logged_user	= FALSE;
		$this->now      	= time();
		
		// ------- If User is Login set available data --- start
		if (Session::instance()->get('user_id') != '') {
			$this->logged_user			= Model_User::instance()->load(Session::instance()->get('user_id'));
			$this->userhistory			= Model_UserHistory::instance();
			$this->module_list			= json_decode(Session::instance()->get('module_list'),TRUE);
			$this->module_function_list = json_decode(Session::instance()->get('module_function_list'),TRUE);
			$this->module_request		= Request::$current->controller() .'/'. Request::$current->action();	
			$this->module_menu			= $this->check_module_menu($this->module_request);
		} 
		
		// ------- If User is Login set available data --- end
		if (strpos(Session::instance()->get('prev_url'),'admin-cp') !== FALSE 
				&& Session::instance()->get('prev_url') != Session::instance()->get('curr_url')) {
			// Set Previous URL to current URL
			Session::instance()->set('prev_url', Session::instance()->get('curr_url'));
		}	else {
			// Set current URL from current url
			Session::instance()->set('curr_url', Request::$current->detect_uri());
		}
		
		// Set previous URL from previous url session
		$this->previous_url	= Session::instance()->get('prev_url');		
		if ($this->logged_user === FALSE 
				&& strpos(Request::$current->detect_uri(),'admin-cp') !== FALSE 
				&& Request::$current->controller() != 'authentication') {
			// Redirect to authentication if direct access
			Request::$current->redirect('admin-cp/authentication');
		}	
		
		$action = strtolower(Request::$current->action());	
		$allowedActions = array_map('strtolower', $this->allowedActions);
		$this->isAllowed = (
			$this->allowedActions == array('*') ||
			in_array($action, $allowedActions)
		);
	}
	
	// public function admin_modules () {
		// if ($this->logged_user === FALSE)
			// return array();
		// if ($this->request->uri->segment(1) != 'admin-cp')
		// $modules	= array();
		// foreach (Kohana::config('config.modules') as $row) {
			// $module					= str_replace(MODPATH, '', $row);
			// $module_name			= ucwords(str_replace('_', ' ', $module));
			// if (is_file($row.'/config/'.$module.'.php'))
				// $modules[$module_name]	= Kohana::config($module.'.module_menu');
		// }
		// return $modules;
	// }
	
	// Bypassing action that need to be allowed for access
	public function allow() {
		$args = func_get_args();
		if (empty($args) || $args == array('*')) {
			$this->allowedActions = $args;
		} else {
			if (isset($args[0]) && is_array($args[0])) {
				$args = $args[0];
			}
			$this->allowedActions = array_merge( (array) $this->allowedActions, array_map('strtolower',$args));
		}
		
		return $this->allowedActions;
		
	}
	
	public function user_history ($controller='',$action='') {

		if ($this->logged_user !== FALSE) {
			
			$current_position	= !empty($controller) ? $controller : '';	

			$history_position 	= $this->userhistory->load($this->logged_user->id);

			$modules_position 	= Model_ModuleList::instance()->load_by_name($current_position);
			
			$module_name		= !empty($modules_position->module_name) ? $modules_position->module_name : $current_position;		
			if (empty($history_position)) {
				$params = array(
								'module' => $module_name,
								'user_id' => @$this->logged_user->id,
								'controller' => $controller,
								'action' => $action,
								'time' => $this->now,
								);
				$this->userhistory->add($params);
			}

			//if(!empty($history_position) && $this->logged_user->id == $history_position->user_id) {
			if(!empty($history_position) && !empty($this->logged_user->id)) {
				if ($controller != $history_position->controller && $controller !== 'ajaxmenu') {
					$params = array(
								'module' => $module_name,
								'user_id' => @$this->logged_user->id,
								'controller' => $controller,
								'action' => $action,
								'time' => $this->now,
								);

					$this->userhistory->add($params);
				}
			}
		}
	}


	// Module action permission check by user_level 
	public function check_module_permission ($controller='',$action='') {

		$disable_accessible 	= FALSE;
		
		$module_list 			= $this->module_list;

		$module_function_list 	= $this->module_function_list;

		if ($module_list && $module_function_list && strstr(Request::$current->detect_uri(), 'admin-cp/') !='') {

			if ($controller != '' && $action != '') $url_to_match = $controller .'/'. $action;	

			$function_modules 		= array_merge_recursive($module_list,$module_function_list);
			
			// Define all accessible function action into TRUE
			foreach ($function_modules as $modules) {

				if (!empty($modules[$url_to_match])) {

					$disable_accessible = TRUE;					

				}
			}	

			// Define controller or post that don't have to be checked
			if ($disable_accessible === FALSE 
					// For Bypassing admin-cp check_title method in all classes
					&& $action != 'check_title'
					// For Bypassing admin-cp lookup method in all classes
					&& $action != 'lookup'
					// For Bypassing admin-cp ordering method in all classes
					&& $action != 'order'
					// For Bypassing admin-cp download method in all classes
					&& $action != 'download'
					// For Bypassing authentication controller in @admin-cp/authentication
					&& $controller != 'authentication'
					// For Bypassing redirect in each @controller provides
					&& $controller != 'baseadmin') {
				
				if (Request::$current->is_ajax()) {
					// Send permission message to client
					echo 'You do not have permission to '.__($action);
					exit();
				}
				
				/* 
				 * Send permission message to client via session
				 * Set session 'acl_error' if action not accessible for users
				 */
				Session::instance()->set('acl_error', 'You do not have permission to '. __($action).'');
				Request::$current->redirect('admin-cp/'.$controller);

			} 

		} 

	}

	// Checking permission between module controller and action
	public function check_permission ($url = '') {

		if ($url == '')
			$url	= url::current();

		$url_segments	= explode('/', $url);

		if (strpos(Request::$current->detect_uri(),'admin-cp'))
			return TRUE;

		if ($this->logged_user === FALSE)
			return FALSE;

		$area			= 'frontend';

		$module			= $url_segments[0];

		if (strpos(Request::$current->detect_uri(),'admin-cp')) {
			$area		= 'backend';
			$module		= $url_segments[1];
		}

		$module			= str_replace(' ', '_', ucwords(str_replace('_', ' ', $module))).'_Permission_Model';

		$permission		= new $module;

		$where_cond		= array('level_id'	=> $this->logged_user->level_id,
								'module'	=> $module,
								'function'	=> '*');

		$is_accessible	= ($permission->find_count($where_cond) == 1);
		
		if ($is_accessible)
			return TRUE;

		if ($area == 'frontend' && isset($url_segments[1]))
			$function	= $url_segments[1];
		else if ($area == 'backend' && isset($url_segments[2]))
			$function	= $url_segments[2];
		else
			$function	= '';

		if ($function != '') {
			$where_cond	= array('level_id'	=> $this->logged_user->level_id,
								'module'	=> $module,
								'function'	=> $function);
		} else {
			$where_cond	= array('level_id'	=> $this->logged_user->level_id,
								'module'	=> $module);
		}

		$is_accessible	= ($permission->find_count($where_cond) == 1);

		return $is_accessible;

	}
	
	public function check_module_menu ($module_menu = '') {
		
		if (empty($module_menu))
			return;
			
		$result = (Model_ModuleList::instance()->load_by_link($module_menu) != '') 
				? @Model_ModuleList::instance()->load_by_link($module_menu)->module_name
					: @Model_ModulePermission::instance()->load_by_link($module_menu)->module_name;	
		
		return $result;
		
	}
			
	public function admin_system_modules () {

		if ($this->logged_user === FALSE)
			return array();

		$modules				= array();

		// Check admin url
		if (strpos(Request::$current->detect_uri(),'admin-cp') !== FALSE) {
			
			// Get module listings
			$modules	= $this->module_list;
		}

		return $modules;		
	}

}

