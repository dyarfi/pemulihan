<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_LinksType extends Controller_Backend_BaseAdmin {
    
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
		
        $this->linkstype    = new Model_LinksType;
		$this->file     = new Model_LinksFile;
		$this->user		= new Model_User;
		$this->session	= Session::instance();
		
        $this->now      = time();
        
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		//$this->_module_name		= Request::$current->controller();
		$this->_module_name		= 'links';
		$this->_class_name		= strtolower(str_replace('Controller_Backend_', '', get_class($this)));	
		$this->_module_menu		= $this->acl->module_menu;
				
		$this->_prefs			= (Kohana::$config->load($this->_module_name.'.'.$this->_class_name.'_fields') !== NULL) ? Kohana::$config->load($this->_module_name.'.'.$this->_class_name.'_fields') : array();
		
		$this->_upload_path		= (Kohana::$config->load($this->_module_name.'.upload_path') !== NULL) ? Kohana::$config->load($this->_module_name.'.upload_path') : array();
		
		$this->_search_keys		= array('name'			=> 'Name',
                                        'description'	=> 'Description',
										'status'	=> 'Status');
	
		$users					= $this->user->find();
		
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
		
		unset($buffers);
    }
    
    public function action_main() { $this->template->content = 'Default Links'; }
    
    public function action_index() {       
		$where_cond	= array('status !=' => 'deleted');
		//$this->linkstype->find($where_cond);
		//exit();
		//$order_by	= array('added' => 'DESC');

		/** Find & Multiple change status **/

		if ($_POST) {
			$post	= new Validation($_POST);

			if ($this->id1 == 'select_action' && isset($post['check'])) {
				$rows	= $post['check'];

				foreach ($rows as $row) {
					$this->linkstype->id	= $row;

					if (!$this->linkstype->load())
						continue;

					$this->linkstype->status	= $post['select_action'];
					$this->linkstype->update();
				}

				$redirect_url	= (strstr($this->acl->previous_url,'admin-cp')) ? $this->acl->previous_url : 'admin-cp/'.$this->_class_name.'/index';

				$this->request->redirect($redirect_url);
				return;
			}

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

		$sort		= isset($params['id2']) ? $this->id2 : 'name';
		$order		= isset($params['id4']) ? $this->id4 : $sorts[0];
		$order_by	= array($sort 	=> $order);

		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;
		$per_page	= Kohana::$config->load('admin.item_per_page');
		//$per_page	= 10;
		$page_url	= isset($_GET['page']) ? '?page='.$_GET['page'] : '';
		$base_url	= 'admin-cp/'.$this->_class_name;
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;

		$table_headers	= array('name'				=> 'Name',
								'description'		=> 'Description',
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

		//$total_rows	= $this->linkstype->find_count($where_cond);
		
		$total_rows		= $this->linkstype->find_count($where_cond);
		$total_record 	= $total_rows;
		
		//$listings	= $this->linkstype->find($where_cond, array_merge($order_by, array('subject'=>'asc')), $per_page, $offset);
		
		$listings	= $this->linkstype->find($where_cond, $order_by, $per_page, $offset);
		
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
									'class_name'	=> $this->_class_name,
									'search_keys'	=> $this->_search_keys,
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
		$content			= View::factory($this->_module_name.'/backend/'.$this->_class_name.'_index');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content; 
    }
    
    public function action_add() {
			$media_id	= $this->id1;
			$fields	= array('name'			=> '',
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
			$fields['media_id']	= $media_id;	
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
					$params	= array('name'			=> $fields['name'],
									'description'	=> $fields['description'],
									'user_id'		=> (isset($this->acl->logged_user->id)) ? $this->acl->logged_user->id : 0,
									'status'		=> $fields['status']);
					$id		= $this->linkstype->add($params);

					$this->session->set('function_add', 'success');
			
					if (isset($post['add_another'])) {
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
							$buffers[$row_key]	= Kohana::$config->load('admin.error_field_open').ucfirst($row_val).Kohana::$config->load('admin.error_field_close');
						} else {
							$buffers[$row_key]	= $row_val;
						}
					}
					$errors		= $buffers;
			}
		}
		/** Views **/
		$content_vars		= array('errors'	=> $errors,
									'fields'	=> $fields,
									'statuses'	=> $this->statuses,
									'module_menu'	=> $this->_module_menu,
									'module_name' 	=> $this->_module_name,
									'class_name' 	=> $this->_class_name);
		$content_vars		= array_merge($content_vars, $this->_prefs);
		$content			= View::factory($this->_module_name.'/backend/'.$this->_class_name.'_add');
		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;	
		}
		
		$this->template->content		= $content;
    }
    
	public function action_edit () {
		$this->linkstype->id	= $this->id1;

		if (!$this->linkstype->load()) {
			$this->request->redirect('admin-cp/'.$this->_class_name.'/error/invalid_request');
			return;
		}

		$fields	= array(
						'name'				=> '',
						'description'		=> '',
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

			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
					// if (isset($row_params['file_type']))
						// $post->add_rules(substr($post[$row_name]['type'], strpos($post[$row_name]['type'], '/') + 1), 'upload::type['.$row_params['file_type'].']');

					// if (isset($row_params['max_file_size']))
						// $post->add_rules(round($post[$row_name]['size'] / 1024, 2).'KB', 'upload::size['.$row_params['max_file_size'].']');
						
					if (!File::exts_by_mime($post[$row_name]['type']))
						continue;
				}
			}

//			$post->add_callbacks('name', array($this, '_unique_name'));

			if ($post->check()) {
				$fields	= $post->as_array();
	
				//$fields['name']	= $this->_remove_tag($fields['name']);

				$params	= array(
								'name'		  => $fields['name'],
								'description' => $fields['description'],
								'status'	=> $fields['status'],
								'user_id'	=> !empty($fields['user_id']) ? $fields['user_id'] : $this->_uid
						);

				foreach ($params as $var => $val) {
					$this->linkstype->$var	= $val;
				}

				$this->linkstype->update();

				if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {
					$where_cond			= array('link_id'	=> $this->linkstype->id);
					$files				= $this->file->find($where_cond);
					$buffers			= array();

					foreach ($files as $row) {
						$buffers[$row->field_name]	= $row;
					}

					$files				= $buffers;

					unset($buffers);

					foreach ($this->_prefs['uploads'] as $row_name => $row_params) {
						if (isset($fields['delete_'.$row_name]) && $fields['delete_'.$row_name] == 1 && isset($files[$row_name])) {
							$this->file->id	= $files[$row_name]->id;
							$this->file->load();
							$this->file->delete();
						}
						
						if($row_params['caption'] == true && empty($_FILES[$row_name]['size']) && !empty($files[$row_name]->id)) {
							$this->file->id	= $files[$row_name]->id;
							$this->file->load();
							$this->file->caption = ($this->file->caption == $fields[$row_name.'_caption']) ? $this->file->caption : $fields[$row_name.'_caption']; 								
							$this->file->update();
						}
						
						//! Upload::valid($image) OR
						//! Upload::not_empty($image) OR
						//! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
						
						
			
						/*
						if (!isset($_FILES[$row_name]) || (isset($_FILES[$row_name]) && !Upload::type($_FILES[$row_name],explode(',',$row_params['file_type'])) || !Upload::valid($_FILES[$row_name])))
							continue;
						*/
						
						if (!Upload::not_empty($post[$row_name]) || !Upload::type($post[$row_name],explode(',',$row_params['file_type'])) || !Upload::valid($post[$row_name]))
							continue;
						
						$file_hash	= md5(time() + rand(100, 999));
						$file_data	= pathinfo($post[$row_name]['name']);
						
						//print_r($file_data); exit();
						
						$file_name	= Lib::_upload_to($post[$row_name], $file_hash.'.'.$file_data['extension'], Kohana::$config->load($this->_module_name.'.upload_path'),0755);
						$file_data	= pathinfo($file_name);
						$file_mime	= $post[$row_name]['type'];
						
						if (!isset($files[$row_name])) {
							$params			= array('link_id'		=> $this->linkstype->id,
													'field_name'	=> $row_name,
													'file_name'		=> $file_data['basename'],
													'file_type'		=> $file_mime,
													'caption'		=> isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');
							
							$this->file->add($params);
						} else {
						
							$this->file->id	= $files[$row_name]->id;
							$this->file->load();

							$params			= array('link_id'		=> $this->linkstype->id,
													'field_name'	=> $row_name,
													'file_name'		=> $file_data['basename'],
													'file_type'		=> $file_mime,
													'caption'		=> isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');
							
							foreach ($params as $var => $val) {
								$this->file->$var	= $val;
							}

							$this->file->update();
						}

					}
				}

				$this->request->redirect('admin-cp/'.$this->_class_name.'/view/'.$this->linkstype->id);
				return;
			} else {
				$fields		= Arr::overwrite($fields, $post->as_array());
				$errors 	= Arr::overwrite($errors, $post->errors('validation'));
				$buffers	= $errors;

				foreach ($errors as $row_key => $row_val) {
					if ($row_val != '')
						$buffers[$row_key]	= Kohana::$config->load('admin.error_field_open').ucfirst($row_val).Kohana::$config->load('admin.error_field_close');
					else
						$buffers[$row_key]	= $row_val;
				}

				$errors		= $buffers;
			}
		} else {
			$fields	= array(
							'name'				=> $this->linkstype->name,
							'description'		=> $this->linkstype->description,
							'status'			=> $this->linkstype->status);

			$where_cond			= array('link_id'	=> $this->linkstype->id);
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
									'module_menu'	=> $this->_module_menu,
									'module_name'	=> $this->_module_name,
									'class_name'	=> $this->_class_name,
									'users'			=> $this->_users,
									'links'			=> $this->linkstype,
									'files'			=> !empty($files) ? $files : '' ,
									'statuses'		=> $this->statuses,
									'readable_mime'	=> Kohana::$config->load($this->_module_name.'.readable_mime'));

		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_module_name.'/backend/'.$this->_class_name.'_edit');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content;
	}
	
	// Action for ordering item list
	public function action_order() {
		if (empty($this->id2) && empty($this->id3))
			continue;
			
		if ($this->id1 == 'up' && $this->id2 && $this->id3 && $this->id4) {
			
			$where_cond = array('order'=>$this->id3 + 1, 'release_id'=>$this->id4);
			$order_by   = array('order'=>'asc');
			
			$order_default = $this->media->find($where_cond,$order_by,1);
			
			if (!empty($order_default)) {
				foreach ($order_default as $default) {
					$default->order  = ($default->order != $this->media->first_order($default->release_id)) ? $default->order - 1 : 0;
					$default->update();
				}
			}
			$this->media->id = $this->id2;
			$this->media->load();
			$this->media->order = $this->id3 + 1;
			$this->media->update();
		} 
		if ($this->id1 == 'down' && $this->id2 && $this->id3 && $this->id4) {
			
			$where_cond = array('order'=>$this->id3 - 1,'release_id'=>$this->id4);
			$order_by	= array('order'=>'asc');
			
			$order_default = $this->media->find($where_cond,$order_by,1);
			
			if (!empty($order_default)) {
				foreach ($order_default as $default) {
					
					$default->order  = ($default->order != $this->media->last_order($default->release_id)) ? $default->order + 1 : 1;
					$default->update();
				}
			}
			$this->media->id = $this->id2;
			$this->media->load();
			$this->media->order = $this->id3 - 1;
			$this->media->update();
		}
		if ($this->request->is_ajax()) {
			echo 1;
			exit();
		}
		$this->request->redirect('admin-cp/'.$this->_class_name);	
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
    
	public function action_download() {
		$files		= $this->id1;
		
		$where_cond	= array('file_name'	=> $files);

		$files		= $this->file->find($where_cond);

		foreach ($files as $row) {
			Lib::_download(Kohana::$config->load($this->_class_name.'.upload_url').$row->file_name);
		}
	}
	
    public function action_view() {

		$this->linkstype->id	= $this->id1;
		
		if (!$this->linkstype->load()) {
			$this->request->redirect('admin-cp/'.$this->_class_name.'/index');
			return;
		}
		
		$where_cond			= array('link_id'	=> $this->linkstype->id);
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
									'links'	  => $this->linkstype,
									'module_menu' => $this->_module_menu,
									'module_name' => $this->_module_name,
									'class_name' => $this->_class_name,
									'readable_mime'	=> Kohana::$config->load($this->_class_name.'.readable_mime')
									);
		
		$content_vars		= array_merge($content_vars, $this->_prefs);

		$content			= View::factory($this->_module_name.'/backend/'.$this->_class_name.'_view');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->content		= $content; 
    }
    
    public function action_delete() {
	
		$this->linkstype->id	= $this->id1;

		if (!$this->linkstype->load()) {
			$this->request->redirect('admin-cp/'.$this->_class_name.'/index');
			return;
		}
		
		// Set is_deleted / status to TRUE
		// $this->linkstype->status	= 'deleted';
		
		// if($this->linkstype->update())
			// echo 1;
		// else
			// echo 0;
			
		
		// This is used for only Ajax Request		
		if ($this->request->is_ajax()) {
		
			// Set is_deleted / status to TRUE
			$this->linkstype->status	= 'deleted';
			if($this->linkstype->update())
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
		
		$name_check =  $this->linkstype->load_by_name($_POST['name']);
		
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
				$this->linkstype->id	= $row;
				if (!$this->linkstype->load())
					continue;
				$this->linkstype->status	= $this->request->post('select_action');
				$this->linkstype->update();
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
		
		$name = Model_LinksType::instance()->find_count(array('name' => $array[$field]));
		
		if ($name)
			return $array->error($field, 'unique_name');
	}

} // End Event
