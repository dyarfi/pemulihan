<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Calendar extends Controller_Backend_BaseAdmin {
    
	protected $_module_name;
	protected $_class_name;
	protected $_search_keys;
	protected $_prefs;
	protected $_upload_path;

	
	protected $links;
    protected $_users;
	protected $_uid;
	
    protected $factory;
    protected $id1; 
	protected $id2; 
	protected $id3;
	protected $id4;
    
    public function before() {
        parent::before();
        
		$this->lang     = i18n::$lang;
		
        $this->calendar		= new Model_Calendar;
		$this->calendartype	= new Model_CalendarType;
		$this->file     = new Model_CalendarFile;
		$this->user		= new Model_User();
		$this->session	= Session::instance();
		
        $this->now      = time();
        
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		$this->_module_name		= Request::$current->controller();
		$this->_class_name		= strtolower(str_replace('Controller_Backend_', '', get_class($this)));	
		$this->_module_menu		= $this->acl->module_menu;
				
		$this->_prefs			= (Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') : array();
		
		$this->_upload_path		= (Lib::config($this->_module_name.'.upload_path') !== NULL) ? Lib::config($this->_module_name.'.upload_path') : array();
		
		$this->_search_keys		= array('name'			=> 'Name',
                                        'description'	=> 'Description',
										'status'		=> 'Status');
	
		$users					= $this->user->find();
		
		$buffers			= array();
		$linkstypes			= $this->calendartype->find(array('status'=>'publish'));
		foreach ($linkstypes as $types){
			$buffers[$types->id] = $types;
		}
		$this->calendartypes		= $buffers;
		unset($buffers);
		
		$buffers				= array();
		foreach ($users as $user){
			$buffers[$user->id] = $user;
		}
		$this->_users			= $buffers;		
		
		//-- User id from user login session 'user_id'
		$this->_uid				= $this->session->get('user_id');
		
		//-- Default links statuses
		$this->statuses			= array('publish','unpublish');
		
		//-- Bypassing action to ACL 
		$this->acl->allow(
							'download',
							'exsport'
						  );
		
		$this->_current_menu = $this->session->get('current');
		
		unset($buffers);
		
		//print_r($this->acl->allow('download'));
    }
    
    public function action_main() { $this->template->content = 'Default Calendar'; }
    
    public function action_index() {       
		$where_cond	= array('status !=' => 'deleted');
		//$this->calendar->find($where_cond);
		//exit();
		//$order_by	= array('added' => 'DESC');

		/** Find & Multiple change status **/

		if ($_POST) {
			$post	= new Validation($_POST);

			if (isset($post['field']) || isset($post['keyword'])) {
				$post->rule('keyword', 'regex', array(':value', '/^[a-z0-9_.\-]++$/iD'));

				if ($post->check()) {
					$where_cond[$post['field'] . ' LIKE']	= $post['keyword'] . '%';

					$filters	= array('f'	=> $post['field'],
										'q'	=> $post['keyword']);

					$this->session->set($this->_class_name.'_filter', serialize($filters));
				} else if (isset($post['find'])) {
					$this->session->delete($this->_class_name.'_filter');
				}
			}

			if ($this->session->get($this->_class_name.'_filter') !== FALSE) {
				$filters	= unserialize($this->session->get($this->_class_name.'_filter'));

				if (in_array($filters['f'], array_keys($this->_search_keys)) && $filters['q'] != '')
					$where_cond[$filters['f'] . ' LIKE']	= '%' . $filters['q'] . '%';
			}
		}

		/** Table sorting **/

		$params		= Request::$current->param();
		$sorts		= array('asc', 'desc');

		$sort		= isset($params['id2']) ? $this->id2 : 'order';
		$order		= isset($params['id4']) ? $this->id4 : $sorts[1];
		$order_by	= array($sort 	=> $order);

		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		$per_page	= Lib::config('admin.item_per_page');
		//$per_page	= 10;
		$page_url	= isset($_GET['page']) ? '?page='.$_GET['page'] : '';
		$base_url	= 'admin-cp/'.$this->_class_name;
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;

		$table_headers	= array('name'				=> 'Name',
								'description'		=> 'Description',
								'type_id'			=> 'Type',
								'order'				=> 'Order',
								'status'			=> 'Status',
								'added'				=> 'Added',
								'modified'			=> 'Modified');

		if (isset($params['sort']) && isset($params['order'])) {
			$headers	= array_keys($table_headers);

			$sort		= (isset($params['sort']) && in_array(strtolower($params['sort']), $headers)) ? strtolower($params['sort']) : $headers[0];
			$order		= (isset($params['order']) && in_array(strtolower($params['order']), $sorts)) ? strtolower($params['order']) : $sorts[0];

			$order_by	= array($sort	=> $order);

			$base_url	= 'admin-cp/'.$this->_class_name.'/index/sort/' . $params['sort'] . '/order/' . $params['order'] . '/page/';
		}

		/** Execute list query **/

		$field		= isset($filters['f']) ? $filters['f'] : '';
		$keyword	= isset($filters['q']) ? $filters['q'] : '';

		$where_cond	= isset($where_cond) ? $where_cond : '';

		//$total_rows	= $this->calendar->find_count($where_cond);
		
		$default_order	= array('type_id'=>'asc');
		$order_by		= array_merge($default_order, $order_by);
		
		$total_rows		= $this->calendar->find_count($where_cond);
		$total_record 	= $total_rows;
		
		//$listings	= $this->calendar->find($where_cond, array_merge($order_by, array('subject'=>'asc')), $per_page, $offset);
		
		$listings	= $this->calendar->find($where_cond, $order_by, $per_page, $offset);
		
		/** Store index url **/

		if (count($listings) == 0 && $total_rows != 0) {
			$page_index	= ceil($total_rows / $per_page);
			//$this->request->redirect($base_url.$page_index);
			//return;
		}

		$this->session->get($this->_module_name.'_index', $base_url.$page_index);

		/** Initialize pagination **/

		$pagination = Pagination::factory(array(
				'total_items' 		=> $total_rows,
				'items_per_page' 	=> $per_page,
			 )
		);
		
		/** Views **/

		$content_vars		= array('listings'		=> $listings,
									'table_headers'	=> $table_headers,
									'statuses'		=> $this->statuses,
									'total_record'	=> $total_record,
									'module_name'	=> $this->_module_name,
									'module_menu'	=> $this->_module_menu,
									'search_keys'	=> $this->_search_keys,
									'max_order'		=> $this->calendar,
									'min_order'		=> $this->calendar,
									'linkstypes'	=> $this->calendartypes,
									'field'			=> $field,
									'keyword'		=> $keyword,
									'order'			=> $order,
									'sort'			=> $sort,
									'page_url'		=> $page_url,
									'page_index'	=> $offset,
									//'params'		=> $params,
									'total_record'	=> $total_record,
									'pagination'	=> $pagination);

		$content_vars		= array_merge($content_vars, $this->_prefs);
		
		//$content			= array();
		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_index');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content; 
    }
    
    public function action_add() {

		$fields	= array(
						'type_id'		=> '',
						'name'			=> '',
						'description'	=> '',
						'status'		=> '');

		if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
			foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
				$fields[$row_name]	= '';

				if (isset($row_params['caption']) && $row_params['caption'])
					$fields[$row_name.'_caption']	= '';
			}
		}

		$errors	= $fields;

		if ($_POST) {
			if ($_FILES) 
				$post	= Validation::factory(array_merge($_POST,$_FILES));
			else
				$post	= Validation::factory($_POST);
			
                $post->rule('name', 'not_empty');
                $post->rule('name', 'min_length', array(':value', 4));
                $post->rule('description', 'not_empty');
                $post->rule('description', 'min_length', array(':value', 4));
                $post->rule('status', 'not_empty');
                
                $post->rule('name', array($this, '_unique_name'), array(':validation', 'name'));
            
			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
					if (isset($row_params['optional']) && !$row_params['optional']) {
						//$post->add_rules($row_name, 'upload::required');
						//$post->rule($row_name, 'upload::valid');
					}
					
					if (Upload::type($post[$row_name],explode(',',$row_params['file_type'])) !== 1)
						continue;				

					//print_r($post); exit();
					//$post->rule(substr($post[$row_name]['type'], strpos($post[$row_name]['type'], '/') + 1), 'upload::type['.$row_params['file_type'].']');

					//if (isset($row_params['max_file_size']))
						//$post->rule(round($post[$row_name]['size'] / 1024, 2).'KB', 'upload::size['.$row_params['max_file_size'].']');
				}
			}

			if ($post->check()) {
				$fields	= $post->as_array();

				$params	= array(
						'type_id'		=> $fields['type_id'],
						'name'			=> $fields['name'],
                        'description'   => $fields['description'],
						'order'			=> !empty($fields['order']) ? $fields['order'] : $this->calendar->last_order($fields['type_id']) + 1,
						'user_id'		=> (isset($this->acl->logged_user->id)) ? $this->acl->logged_user->id : 0,
						'status'		=> $fields['status']);

				$id		= $this->calendar->add($params);
				//$id 	= 9;
				if ($id !== FALSE && isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
					foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
						//if (!upload::required($_FILES[$row_name]) || !File::mime_by_ext($_FILES[$row_name]))
							//continue;

						
						//print_r(!Upload::type($_FILES[$row_name],explode(',',$row_name['file_type']))); exit();
						//print_r(!File::ext_by_mime('image/jpeg')); exit();
						
						if (!File::exts_by_mime($post[$row_name]['type']))
							continue;

						
						$file_hash	= md5(time() + rand(100, 999));
						$file_data	= pathinfo($post[$row_name]['name']);
						

						$file_name	= Upload::save($post[$row_name], $file_hash.'.'.$file_data['extension'], Lib::config($this->_module_name.'.upload_path'),'0644');
								
						$file_data	= pathinfo($file_name);
						$file_mime	= $post[$row_name]['type'];

						if ($file_name != '' && isset($this->_prefs['uploads'][$row_name]['image_manipulation'])) {
							$params = array('link_id'	 => $id,
											'field_name' => $row_name,
											'file_name'	 => $file_data['basename'],
											'file_type'	 => $file_mime,
											'caption'	 => isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');

							$this->file->add($params);
						}
					}
				}
				
				$this->session->set('function_add', 'success');

				if (isset($_POST['add_another'])) {
					$this->request->redirect('admin-cp/'.$this->_class_name.'/add');
					return;
				}

				$this->request->redirect('admin-cp/'.$this->_class_name.'/view/'.$id);
				return;
			} else {
				$fields		= Arr::overwrite($fields, $post->as_array());
				$errors 	= Arr::overwrite($errors, $post->errors('validation'));
				$buffers	= $errors;
				foreach ($errors as $row_key => $row_val) {
					if ($row_val != '') {
						$buffers[$row_key]	= Lib::config('admin.error_field_open').ucfirst($row_val).Lib::config('admin.error_field_close');
					} else {
						$buffers[$row_key]	= $row_val;
					}
				}
				$errors		= $buffers;
			}
		}

		/** Generate Thumbnails **/
		
		Lib::_auto_image_manipulation($this->_upload_path, $this->file, $this->_prefs);
		
		/** Views **/

		$content_vars		= array('errors'	=> $errors,
									'fields'	=> $fields,
									'statuses'	=> $this->statuses,
									'linkstype'	=> $this->calendartypes,
									'module_name' 	=> $this->_module_name,
									'module_menu'	=> $this->_module_menu);
		
		$content_vars		= array_merge($content_vars, $this->_prefs);
		
		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_add');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content;  
    }
    
	public function action_edit () {
		$this->calendar->id	= $this->id1;

		if (!$this->calendar->load()) {
			$this->request->redirect('admin-cp/'.$this->_class_name.'/error/invalid_request');
			return;
		}

		$fields	= array(	
						'type_id'			=> '',
						'name'				=> '',
						'description'		=> 'Description',
						'status'			=> '');

		if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
			foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
				$fields[$row_name]	= '';

				if (isset($row_params['caption']) && $row_params['caption'])
					$fields[$row_name.'_caption']	= '';
			}
		}

		$errors	= $fields;

		if ($_POST) {
			if ($_FILES)
				$post	= new Validation(array_merge($_POST, $_FILES));
			else
				$post	= new Validation($_POST);

            $post->rule('name', 'not_empty');
			$post->rule('name', 'min_length', array(':value', 4));
			$post->rule('description', 'not_empty');
            $post->rule('description', 'min_length', array(':value', 4));
            $post->rule('status', 'not_empty');
			
			//$post->rule('name', array($this, '_unique_name'), array(':validation', 'name'));

			if ($post->check()) {
				$fields	= $post->as_array();
				
				$fields['order']	= ($fields['type_id'] != $fields['_type_id']) ? $this->calendar->last_order($fields['type_id']) + 1 : $this->calendar->order;
				
				$params	= array(
								'type_id'		=> $fields['type_id'],
								'name'			=> $fields['name'],
								'description'	=> $fields['description'],
								'status'	=> $fields['status'],
								'order'		=> !empty($fields['order']) ? $fields['order'] : '',
								'user_id'	=> !empty($fields['user_id']) ? $fields['user_id'] : $this->_uid
						);

				foreach ($params as $var => $val) {
					$this->calendar->$var	= $val;
				}

				$this->calendar->update();

				$this->request->redirect('admin-cp/'.$this->_class_name.'/view/'.$this->calendar->id);
				return;
			} else {
				$fields		= Arr::overwrite($fields, $post->as_array());
				$errors 	= Arr::overwrite($errors, $post->errors('validation'));
				$buffers	= $errors;

				foreach ($errors as $row_key => $row_val) {
					if ($row_val != '')
						$buffers[$row_key]	= Lib::config('admin.error_field_open').ucfirst($row_val).Lib::config('admin.error_field_close');
					else
						$buffers[$row_key]	= $row_val;
				}

				$errors		= $buffers;
			}
		} else {
			$fields	= array(
							'type_id'			=> $this->calendar->type_id,
							'name'				=> $this->calendar->name,
							'description'		=> $this->calendar->description,
							'status'			=> $this->calendar->status);

			$where_cond			= array('link_id'	=> $this->calendar->id);
			$files				= $this->file->find($where_cond);
			$buffers			= array();

			foreach ($files as $row) {
				$buffers[$row->field_name]	= $row;
			}

			$files				= $buffers;

			unset($buffers);

			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
					$fields[$row_name]	= '';

					if (isset($row_params['caption']) && $row_params['caption'])
						$fields[$row_name.'_caption']	= (isset($files[$row_name])) ? $files[$row_name]->caption : '';
				}
			}
		}

		/** Generate Thumbnails **/
		
		Lib::_auto_image_manipulation($this->_upload_path, $this->file, $this->_prefs);
		
		/** Views **/

		$content_vars		= array('errors'		=> $errors,
									'fields'		=> $fields,
									'module_name'	=> $this->_module_name,
									'module_menu'	=> $this->_module_menu,
									'users'			=> $this->_users,
									'links'			=> $this->calendar,
									'linkstype'		=> $this->calendartypes,
									'files'			=> !empty($files) ? $files : '' ,
									'statuses'		=> $this->statuses,
									'readable_mime'	=> Lib::config($this->_module_name.'.readable_mime'));

		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_edit');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content;
	}
    
    public function action_update() {
        extract($_POST);
        if (!isset($position_id) || $position_id == '' ){ $this->template->refresh = 'admin-cp/links/manage'; return; }
        
        $arr_posted = explode('-',$posted);
        $arr_closing = explode('-',$closing);
        $posted   = mktime(23,0,0,$arr_posted[1],$arr_posted[0],$arr_posted[2]);
        $closing   = mktime(23,0,0,$arr_closing[1],$arr_closing[0],$arr_closing[2]);
        
        $this->model->globalUpdate(
            array(
                'position_id'=>$position_id,
                'position_en'=>$position_en,
                'level_id'=>$level_id,
                'level_en'=>$level_en,
                'text'=>$text,
                'posted_date'=>$posted,
                'closing_date'=>$closing,
                'full_desc_id'=>$full_desc_id,
                'full_desc_en'=>$full_desc_en,
                'status'=>$status,
                'edit_time'=>$this->now
                ),
            array('linksId'=>$this->id1),'links'
        );
        $this->template->refresh = 'admin-cp/links/view/'.$this->id1;
    }
    
	// Action for ordering item list
	public function action_order() {
		if (empty($this->id2) && empty($this->id3))
			continue;
			
		if ($this->id1 == 'up' && $this->id2 && $this->id3 && $this->id4) {
			
			$where_cond = array('order'=>$this->id3 + 1, 'type_id'=>$this->id4);
			$order_by   = array('order'=>'asc');
			
			$order_default = $this->calendar->find($where_cond,$order_by,1);
			
			if (!empty($order_default)) {
				foreach ($order_default as $default) {
					$default->order  = ($default->order != $this->calendar->first_order($default->type_id)) ? $default->order - 1 : 0;
					$default->update();
				}
			}
			$this->calendar->id = $this->id2;
			$this->calendar->load();
			$this->calendar->order = $this->id3 + 1;
			$this->calendar->update();
		} 
		if ($this->id1 == 'down' && $this->id2 && $this->id3 && $this->id4) {
			
			$where_cond = array('order'=>$this->id3 - 1,'type_id'=>$this->id4);
			$order_by	= array('order'=>'asc');
			
			$order_default = $this->calendar->find($where_cond,$order_by,1);
			
			if (!empty($order_default)) {
				foreach ($order_default as $default) {
					
					$default->order  = ($default->order != $this->calendar->last_order($default->type_id)) ? $default->order + 1 : 1;
					$default->update();
				}
			}
			$this->calendar->id = $this->id2;
			$this->calendar->load();
			$this->calendar->order = $this->id3 - 1;
			$this->calendar->update();
		}
		if ($this->request->is_ajax()) {
			echo $this->id2;
			exit();
		}
		$this->request->redirect('admin-cp/'.$this->_class_name.'/?current='.$this->id2);	
	}	
	
    public function action_aupdate($id = null,$val = null){
        $this->template->notemplate = true;
        if (empty($_GET['hash']) || !isset($id) || !isset($val) || empty($_GET['field']) ):
            $this->template->content = i18n::get('error_no_direct_access').' Level : 1';
            return;
        endif;
        
        $hash = $_GET['hash'];
        
        if (helper_common::encript($id) != $hash):
            $this->template->content = i18n::get('error_no_direct_access').' Level : 2';
            return; 
        endif;
        
        $field = $_GET['field'];
                
        $this->model->globalUpdate(
            array("$field"=>$val),
            array('linksId'=>$id),'links'
        );
        $this->template->content = $id;
    }
    
	public function action_download() {
		$files		= $this->id1;
		
		$where_cond	= array('file_name'	=> $files);

		$files		= $this->file->find($where_cond);

		foreach ($files as $row) {
			Lib::_download(Lib::config($this->_module_name.'.upload_url').$row->file_name);
		}
	}
	
    public function action_view() {

		$this->calendar->id	= $this->id1;
		
		if (!$this->calendar->load()) {
			$this->request->redirect('admin-cp/'.$this->_module_name.'/index');
			return;
		}
		
		$where_cond			= array('link_id'	=> $this->calendar->id);
		$files				= $this->file->find($where_cond);
		$buffers			= array();

		foreach ($files as $row) {
			$buffers[$row->field_name]	= $row;
		}

		$files				= $buffers;

		unset($buffers);
		
		/** Generate Thumbnails **/
		
		Lib::_auto_image_manipulation($this->_upload_path, $this->file, $this->_prefs);
		
		/** Views **/
		$content_vars		= array(
									'files'	  => $files,
									'links'	  => $this->calendar,
									'linkstype'		=> $this->calendartypes,
									'module_name'	=> $this->_module_name,
									'module_menu'	=> $this->_module_menu,
									'readable_mime'	=> Lib::config($this->_module_name.'.readable_mime')
									);
		
		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_view');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->page_title		= Lib::config('admin.title');
		$this->template->content		= $content; 
    }
    
    public function action_delete() {
	
		$this->calendar->id	= $this->id1;

		if (!$this->calendar->load()) {
			$this->request->redirect('admin-cp/'.$this->_class_name.'/index');
			return;
		}
		
		// Set is_deleted / status to TRUE
		// $this->calendar->status	= 'deleted';
		
		// if($this->calendar->update())
			// echo $this->id2;
		// else
			// echo 0;
			
		
		// This is used for only Ajax Request		
		if ($this->request->is_ajax()) {
		
			// Set is_deleted / status to TRUE
			//$this->calendar->status	= 'deleted';
			if($this->calendar->delete($this->id1))
				echo 1;
			else
				echo 0;	
				
		} else {
			$this->request->redirect('admin-cp/'.$this->request->controller());
			//die();
		}

		exit();
    }
    
	public function action_check_name() {
		
		$name_check =  $this->calendar->load_by_name($_POST['name']);
		
		$result = !empty($name_check) ? 1 : 0;
		
		echo $result;
		
		exit();
	}
	
	public function _valid_search_key (Validation $array, $field) {
		if (!isset($this->_search_keys)) {
			$array->add_error($field, 'invalid_search_key');
			return;
		}

		$keys = array_keys($this->_search_keys);

		if (!in_array($array[$field], $keys))
			$array->add_error($field, 'invalid_search_key');
	}
  
	/*** Function Access ***/
	
	// Action for update item status
	public function action_change() {	
		if ($this->request->post('check') !='') {
			$rows	= $this->request->post('check');
			foreach ($rows as $row) {
				$this->calendar->id	= $row;
				if (!$this->calendar->load())
					continue;
				$this->calendar->status	= $this->request->post('select_action');
				$this->calendar->update();
			}
			$redirect_url	= (strstr($this->acl->previous_url,'admin-cp')) ? $this->acl->previous_url : 'admin-cp/'.$this->_class_name.'/index';
			$this->request->redirect($redirect_url);
		} else {	
			$this->request->redirect('admin-cp/'.$this->_class_name);			
		}
	}

	/** CALLBACKS **/  
    
    public function _unique_name (Validation $array, $field) {
		if (!isset($array[$field]))
			return;
		
		$name = Model_Calendar::instance()->find_count(array('name' => $array[$field]));
		
		if ($name)
			return $array->error($field, 'unique_name');
	}

} // End Event
