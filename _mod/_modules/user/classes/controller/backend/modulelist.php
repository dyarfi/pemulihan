<?php defined('SYSPATH') OR die('No direct access allowed.');class Controller_Backend_ModuleList extends Controller_Backend_BaseAdmin {	protected $_module_name;	protected $_class_name;	protected $_search_keys;	protected $_prefs;	protected $module;	protected $modules;	protected $statuses;		public function before() {		parent::before();		$this->_module_name		= 'modulelist';		$this->_class_name		= strtolower(str_replace('Controller_Backend_', '', get_class($this)));		$this->_module_menu		= $this->acl->module_menu;				$this->_prefs			= (Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') : array();		$this->module			= Model_ModuleList::instance();		$where_cond				= array('parent_id'		=> 0);		$this->modules			= $this->module->find($where_cond);		$user_level				= Model_UserLevel::instance();		$where_cond				= array('id !='	=> 99, 'id !='	=> 1,'backend_access'=>1,'status' => 'enable');		$this->user_level		= $user_level->find($where_cond);		//$user_level_permission  = new Model_UserLevelPermission();		//$where_cond				= array('id !='	=> 0,'status' => 'enable');		//$where_cond				= array('id !='	=> 0);		//$_user_level_permission	= $user_level_permission->find($where_cond);		// $buffers = array();		// foreach ($_user_level_permission as $key){		//		$buffers[$key->module_id] = $key;		// }		//$this->user_level_permission = $buffers;		//$this->user_level_permission = $_user_level_permission;		//print_r($this->user_level_permission);		$_module_permission		= Model_ModulePermission::instance();		$module_permission		= $_module_permission->find();		//$buffers				= array();		//foreach ($module_permission as $_module) {			//$buffers[$_module->module_id] = $_module;		//}		//$this->module_permission = $buffers;		$this->module_permission = $module_permission;		//print_r($module_permission);		//print_r($this->acl->module_current);		unset($buffers,$user_level,$user_level_permission);	}		function action_index () {		/** Table sorting **/		$table_headers	= array('module_name'	=> 'Module');		foreach($this->user_level as $row) {			$table_headers['level_id_'.$row->id]	= ucwords($row->name);		}		/** Execute list query **/		$order_by	= array('id'	=> 'ASC');		$where_cond	= array('parent_id'	=> 0);		//$where_cond	= array('id !='	=> 0);		$total_rows	= count($this->module->find($where_cond));		$listings	= $this->module->find($where_cond, $order_by);		/** Views **/		$content_vars		= array('listings'				=> $listings,									'user_level'			=> $this->user_level,									'module_permission'     => $this->module_permission,									'module_name'			=> $this->_module_name,									'module_menu'			=> $this->_module_menu,									'table_headers'			=> $table_headers);		$content			= View::factory('user/backend/'.$this->_module_name.'_index');		foreach ($content_vars as $var => $val) {			$content->$var	= $val;		}		$this->template->page_title		= 'Module List | '.Lib::config('user.title');		$this->template->content		= $content; 	}		public function action_edit() {		$fields		= $_POST;		//print_r($fields); exit();		// if (!empty($fields['user:level:permission'])) {			// $module_id = array_keys(Arr::get($fields,'user:level:permission'));			// foreach ($fields['user:level:permission'] as $keys => $levels){				// $user_level_modules = Model_UserLevelPermission::instance()->find(array('module_id'=>$module_id));				// foreach($user_level_modules as $user_level_permission) {					// //print_r($user_level_permission); exit();					// $_user_level_permitted		= new Model_UserLevelPermission();					// //print_r($user_level_permission->id); exit();					// $_user_level_permitted->id	= $user_level_permission->id;					// if (!$_user_level_permitted->load())						// continue;					// $_user_level_permitted->module_id	= $keys;					// $_user_level_permitted->level_id	= array_keys($levels); 					// $_user_level_permitted->status		= 'enable'; 					// $_user_level_permitted->update();				// }			// }			// //exit();		// }		foreach($this->user_level as $level) {			eval("\$level_id_field = 'level_id_$level->id';");			foreach($this->modules as $row) {				if(isset($fields['level_id_'.$level->id][$row->id])) {					$value	= 1;				} else {					$value	= 0;				}				// Module List				$module					= new Model_ModuleList();				$module->id				= $row->id;				if (!$module->load())					continue;				$module->$level_id_field	= $value;				$module->update();				$where_cond	= array('parent_id'	=> $row->id);				$sub_module	= $this->module->find($where_cond);				foreach($sub_module as $sub_row) {					$sub_module			= new Model_ModuleList();					$sub_module->id	= $sub_row->id;					if (!$sub_module->load())						continue;					$sub_module->$level_id_field	= $value;					$sub_module->update();				}				// Module function				foreach ($this->module_permission as $permission) {					eval("\$level_id_field_mod = 'level_id_$level->id';");					if(isset($fields['module_permission'][$level_id_field_mod][$permission->id])) {						$val	= 1;					} else {						$val	= 0;					}										$module_function					= new Model_ModulePermission();					$module_function->id				= $permission->id;					if (!$module_function->load())						continue;					$module_function->$level_id_field_mod	= $val;					$module_function->update();				}			}			// $user_level = $this->session->get('level_id');			// $module_list	= Model_ModuleList::instance()->get_modules($user_level);			// $function_list	= Model_ModulePermission::instance()->get_module_function($user_level);			// $this->session->set('module_list', $module_list);			// $this->session->set('module_function_list', $function_list);		}		$this->request->redirect('admin-cp/'.$this->_class_name.'/index');	}}