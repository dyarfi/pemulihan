<?php defined('SYSPATH') OR die('No direct access allowed.');class Controller_Backend_Media extends Controller_Backend_BaseAdmin {	protected $_module_name;	protected $_class_name;	protected $_search_keys;	protected $_prefs;	protected $media;	protected $release;	protected $releases;	protected $file;	protected $statuses;		public function before () {		parent::before();		$this->session = Session::instance();		$this->_search_keys = array('name' => 'Name', 'subject' => 'Subject', 'description' => 'Description', 'status' => 'Status');		$this->now = time();				$this->id1 = Request::$current->param('id1');		$this->id2 = Request::$current->param('id2');		$this->id3 = Request::$current->param('id3');		$this->id4 = Request::$current->param('id4');				$this->_module_name 	= Request::$current->controller();		$this->_class_name 		= strtolower(str_replace('Controller_Backend_', '', get_class($this)));		$this->_module_menu		= $this->acl->module_menu;				$this->_prefilter_keys = array('release_id');		$this->_prefs = (Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') !== NULL) ? Lib::config($this->_module_name.'.'.$this->_class_name.'_fields') : array();		$this->_upload_path = (Lib::config($this->_module_name.'.mediafile_upload_path') !== NULL) ? Lib::config($this->_module_name.'.mediafile_upload_path') : array();		$this->_upload_url = (Lib::config($this->_module_name.'.mediafile_upload_url') !== NULL) ? Lib::config($this->_module_name.'.mediafile_upload_url') : array();				$this->media	= new Model_Media;		$this->file		= new Model_MediaFile;		$this->release	= new Model_MediaRelease;		$release		= new Model_MediaRelease;				$releases		= $release->find();		$buffers = array();		foreach ($releases as $row) {			$buffers[$row->id] = $row;		} 		$this->releases = $buffers;		$this->statuses = array('publish', 'unpublish');   				// Config Visible to member		$this->_visible			= Lib::config('media.visible');				unset($release, $releases, $buffers);	}		public function action_index () {			$release_id		= !empty($this->id1) ? $this->id1 : '';		$this->release->id	= $release_id;		if ($release_id != '' && !$this->release->load())			$release_id	= '';		$where_cond	= array('status !='	=> 'deleted');		if ($release_id != '')			$where_cond['release_id']	= $release_id;		//if($this->session->get('level_id'.ADMIN_SESSION) <= 2)		//unset($where_cond['status !=']);		if ($release_id != '')		//$where_cond['release_id']	= $release_id;				/** Find & Multiple change status **/		if ($_POST) {						$post	= new Validation($_POST);			if (isset($post['field']) || isset($post['keyword'])) {				$post->rule('keyword', 'regex', array(':value', '/^[a-z0-9_.\-]++$/iD'));				if ($post->check()) {					if (!in_array($post['field'], $this->_prefilter_keys))						$where_cond[$post['field'] . ' LIKE']	= $post['keyword'].'%';					else						$where_cond[$post['field'] . ' IN']	= call_user_func(array($this, '_'.$post['field']), $post['keyword']);					$filters	= array('f'	=> $post['field'], 'q'	=> $post['keyword']);										$this->session->set($this->_class_name.'_filter', serialize($filters));								} else if (isset($post['find'])) {					$this->session->delete($this->_class_name.'_filter');				}			}				if ($this->session->get($this->_class_name.'_filter') !== FALSE) {				$filters	= unserialize($this->session->get($this->_class_name.'_filter'));				if (in_array($filters['f'], array_keys($this->_search_keys)) && $filters['q'] != '') {					if (!in_array($filters['f'], $this->_prefilter_keys))						$where_cond[$filters['f'] . ' LIKE']	= $filters['q'].'%';					else						$where_cond[$filters['f'] . ' IN']	= call_user_func(array($this, '_'.$filters['f']), $filters['q']);					}					}				if(isset($post['per_page'])) {						$this->session->set($this->_class_name.'_per_page', (($post['per_page'] != 0) ? $post['per_page'] : Lib::config('admin.item_per_page')));							}			}					/** Table sorting **/			//if ($release_id != '')						//$params		= $this->uri->segment_array(4, TRUE);			//else						//$params		= $this->uri->segment_array(3, TRUE);					$params		= Request::$current->param();					$sorts		= array('asc', 'desc');					$sort		= isset($params['id2']) ? $this->id2 : 'order';			$order		= isset($params['id4']) ? $this->id4 : $sorts[1];			$order_by	= array($sort 	=> $order);			$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;			$per_page	= Lib::config('admin.item_per_page');				//$per_page	= 10;			$page_url	= isset($_GET['page']) ? '?page='.$_GET['page'] : '';			$base_url	= 'admin-cp/'.$this->_class_name;			$offset		= ($page_index == 0) ? '' : $page_index * $per_page;			$table_headers	= array('subject'		=> 'Subject',									'description'	=> 'Description',									'release_id'	=> 'Release',									'visible'		=>	'Visible to (Members)',										'status'		=> 'Status',									'added'			=> 'Added',									'modified'		=> 'Modified');			if (isset($params['sort']) && isset($params['order'])) {				$headers	= array_keys($table_headers);				$sort		= (isset($params['sort']) && in_array(strtolower($params['sort']), $headers)) ? strtolower($params['sort']) : $headers[0];				$order		= (isset($params['order']) && in_array(strtolower($params['order']), $sorts)) ? strtolower($params['order']) : $sorts[0];				$order_by	= array($sort=> $order);				if ($release_id != '')					$base_url	= 'admin-cp/'.$this->_class_name.'/index/'.$release_id.'/sort/' . $params['sort'] . '/order/' . $params['order'] . '/page/';				else					$base_url	= 'admin-cp/'.$this->_class_name.'/index/sort/' . $params['sort'] . '/order/' . $params['order'] . '/page/';			}					/** Execute list query **/			$field		= isset($filters['f']) ? $filters['f'] : '';			$keyword	= isset($filters['q']) ? $filters['q'] : '';			$where_cond	= isset($where_cond) ? $where_cond : '';			$default_order	= array('release_id'=>'asc');			$order_by		= array_merge($default_order, $order_by);			$total_rows	= count($this->media->find($where_cond));			$total_record 	= $total_rows;			$listings	= $this->media->find($where_cond, $order_by, $per_page, $offset);			$pagination = Pagination::factory(array(					'total_items' 		=> $total_rows,					'items_per_page' 	=> $per_page,				)			);				/** Views **/			$content_vars = array('listings'	=> $listings,								'table_headers'	=> $table_headers,								'statuses'		=> $this->statuses,								'search_keys'	=> $this->_search_keys,										'visible'		=> $this->_visible,								'field'			=> $field,								'keyword'		=> $keyword,								'order'			=> $order,								'sort'			=> $sort,								'page_url'		=> $page_url,								'page_index'	=> $offset,								'per_page'		=> $per_page,								'params'		=> $params,								'pagination'	=> $pagination,																'set_order'		=> $this->media,								'module_menu'	=> $this->_module_menu,								'module_name'	=> $this->_module_name,								'class_name'	=> $this->_class_name,								'total_record'	=> $total_record,												'releases'		=> $this->releases,								'release_id'	=> $release_id);			$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_index');			foreach ($content_vars as $var => $val) {				$content->$var	= $val;					}			$this->template->content		= $content; 			}				public function action_add () {				$release_id	= $this->id1;			$fields	= array('release_id'	=> '',							'subject'		=> '',							'name'			=> '',							'description'	=> '',							'visible'		=> '',							'status'		=> '');			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {					$fields[$row_name]	= '';					if (isset($row_params['caption']) && $row_params['caption'])						$fields[$row_name.'_caption']	= '';				}			}			$errors	= $fields;			$fields['release_id']	= $release_id;				if ($_POST) {				if ($_FILES) 					$post	= Validation::factory(array_merge($_POST,$_FILES));				else					$post	= Validation::factory($_POST);				$post->rule('release_id', 'not_empty');				$post->rule('subject', 'not_empty');                $post->rule('subject', 'min_length', array(':value', 4));                $post->rule('name', 'not_empty');                $post->rule('name', 'min_length', array(':value', 4));                $post->rule('description', 'not_empty');                $post->rule('description', 'min_length', array(':value', 4));                $post->rule('status', 'not_empty');				$post->rule('name', array($this, '_unique_name'), array(':validation', 'name'));				if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {					foreach ($this->_prefs['uploads'] as $row_name => $row_params) {						// Set if this is optional or not, return true						if (!isset($row_params['optional'])) {							$post->rule($row_name, 'Upload::not_empty');						}						// Set if this is not the right file type, return true						if (isset($row_params['file_type'])) {							$post->rule($row_name, 'Upload::type', array(':value', array($row_params['file_type'])));						} 						// Set if this is not the right max file size, return true						if (isset($row_params['max_file_size'])) {							$post->rule($row_name, 'Upload::size', array(':value', $row_params['max_file_size']));						} 						// Set if this file has valid name in database, return true						if (isset($post[$row_name]['name'])) {							$post->rule($row_name, array($this, '_unique_filename'), array(':validation', $row_name));						}					}				}				if ($post->check()) {					$fields	= $post->as_array();					$params	= array('release_id'	=> $fields['release_id'],									'subject'		=> $fields['subject'],									'name'			=> $fields['name'],									'description'	=> $fields['description'],									'visible'		=> !empty($fields['visible']) ? $fields['visible'] : 0,									'order'			=> !empty($fields['order']) ? $fields['order'] : $this->media->set_order($fields['release_id'],'','MAX') + 1,									'user_id'		=> (isset($this->acl->logged_user->id)) ? $this->acl->logged_user->id : 0,									'status'		=> $fields['status']);					$id		= $this->media->add($params);					if ($id !== FALSE && isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {						foreach ($this->_prefs['uploads'] as $row_name => $row_params) {						//if (!Upload::not_empty($post[$row_name]) || !Upload::type($post[$row_name],explode(',',$row_params['file_type'])) || !Upload::valid($post[$row_name]))							//continue;							if (!$post[$row_name]['name'])								continue;							$file_data	= pathinfo($post[$row_name]['name']);							if ($this->_prefs['show_filename'] == TRUE) {								// This will provide real filename								$filename_upload	= preg_replace('/\.[^.]*$/', '', $file_data['basename']);								// This will provide real filename based on Upload::save but with addition random char								// $filename_upload	= NULL;							}							else {								$filename_upload	= md5(time() + rand(100, 999)) . '.' . $file_data['extension'];							}							$file_name	= Lib::_upload_to($post[$row_name], $filename_upload.'.'.$file_data['extension'], $this->_upload_path, 0755);							$file_data	= pathinfo($file_name);							$file_mime	= $post[$row_name]['type'];							if ($file_name != '') {								$params = array(									'media_id'	 => $id,									'field_name' => $row_name,									'file_name'	 => $file_data['basename'],									'file_type'	 => $file_mime,									'caption'	 => isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '',									'user_id'	 => isset($this->acl->logged_user->id) ? $this->acl->logged_user->id : '');								$this->file->add($params);							}						}					}					$this->session->set('function_add', 'success');					if (isset($post['add_another'])) {						$this->request->redirect('admin-cp/'.$this->_class_name.'/add');						return;					}					$this->request->redirect('admin-cp/'.$this->_class_name.'/view/'.$id);					return;					} else {					$fields		= Arr::overwrite($fields, $post->as_array());					$errors 	= Arr::overwrite($errors, $post->errors('validation'));					$buffers	= $errors;					foreach ($errors as $row_key => $row_val) {						if ($row_val != '') {							$buffers[$row_key]	= Lib::config('admin.error_field_open').ucfirst($row_val).Lib::config('admin.error_field_close');						} else {							$buffers[$row_key]	= $row_val;						}					}					$errors		= $buffers;			}		}		/** Views **/		$content_vars		= array('errors'	=> $errors,									'fields'	=> $fields,									'statuses'	=> $this->statuses,									'visible'	=> $this->_visible,									'releases'		=> $this->releases,									'module_name' 	=> $this->_module_name,									'module_menu'	=> $this->_module_menu);		$content_vars		= array_merge($content_vars, $this->_prefs);		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_add');		foreach ($content_vars as $var => $val) {			$content->$var	= $val;			}		$this->template->content		= $content;	}		public function action_view () {		$id = $this->id1;		$release_id = $this->id2;		$this->media->id	= $id;				if (!$this->media->load()) {			$this->request->redirect('admin-cp/'.$this->_class_name.'/error/invalid_request');			return;				}				/** Views **/		if ($this->media->release_id != 0) {			$release		= $this->release->load($this->media->release_id);			$release		= HTML::chars($release->subject, TRUE);		} else {			$release		= 'This media doesn\'t have category';		}		$where_cond			= array('media_id'	=> $this->media->id);		$files				= $this->file->find($where_cond);		$buffers			= array();		foreach ($files as $row) {			$buffers[$row->field_name]	= $row;		}		$files				= $buffers;		unset($buffers);		$content_vars		= array(									'files'	  => $files,									'media' => $this->media,									'release'		=> $release,									'release_id'	=> $release_id,									'upload_path'	=> $this->_upload_path,									'upload_url'	=> $this->_upload_url,									'module_name'	=> $this->_module_name,									'module_menu'	=> $this->_module_menu,																		'visible'		=> $this->_visible,									'readable_mime'	=> Lib::config($this->_module_name.'.readable_mime')									);		$content_vars		= array_merge($content_vars, $this->_prefs);		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_view');		foreach ($content_vars as $var => $val) {			$content->$var	= $val;			}		$this->template->content		= $content;     	}			public function action_edit () {		$id = $this->id1;		$this->media->id	= $id;		if (!$this->media->load()) {			$this->request->redirect('admin-cp/'.$this->_class_name.'/error/invalid_request');			return;		}						$release_id = $this->media->release_id;				$fields	= array('release_id'	=> '',						'subject'		=> '',						'name'			=> '',						'description'	=> '',						'visible'		=> '',						'status'		=> '');				if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {			foreach ($this->_prefs['uploads'] as $row_name => $row_params) {				$fields[$row_name]	= '';				if (isset($row_params['caption']) && $row_params['caption'])					$fields[$row_name.'_caption']	= '';			}		}		$errors	= $fields;		if ($_POST) {			if ($_FILES) 				$post	= Validation::factory(array_merge($_POST,$_FILES));			else				$post	= Validation::factory($_POST);			$post->rule('release_id', 'not_empty');			$post->rule('subject', 'not_empty');			$post->rule('subject', 'min_length', array(':value', 4));			$post->rule('name', 'not_empty');			$post->rule('name', 'min_length', array(':value', 4));			$post->rule('description', 'not_empty');			$post->rule('description', 'min_length', array(':value', 4));			$post->rule('status', 'not_empty');			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {					// Set if this is not the right file type, return true					if (isset($row_params['file_type'])) {						$post->rule($row_name, 'Upload::type', array(':value', array($row_params['file_type'])));					} 					// Set if this is not the right max file size, return true					if (isset($row_params['max_file_size'])) {						$post->rule($row_name, 'Upload::size', array(':value', $row_params['max_file_size']));					}					// Set if this file has valid name in database, return true					if (isset($post[$row_name]['name'])) {						$post->rule($row_name, array($this, '_unique_filename'), array(':validation', $row_name));					}									}			}			if ($post->check()) {				$fields	= $post->as_array();												$fields['release_id'] = (empty($fields['release_id'])) ? '0' : $fields['release_id'];																$params	= array('release_id'	=> $fields['release_id'],								'subject'		=> $fields['subject'],								'name'			=> $fields['name'],								'description'	=> $fields['description'],								'visible'		=> !empty($fields['visible']) ? $fields['visible'] : 0,								'order'			=> ($post['current_rid'] != $fields['release_id']) 														? $this->media->set_order($fields['release_id'],'','MAX') + 1															: $fields['order'],								'status'		=> $fields['status']);				foreach ($params as $var => $val) {					$this->media->$var	= $val;				}				$this->media->update();				if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {					$where_cond			= array('media_id'	=> $this->media->id);					$files				= $this->file->find($where_cond);					$buffers			= array();					foreach ($files as $row) {						$buffers[$row->field_name]	= $row;					}					$files				= $buffers;					unset($buffers);					foreach ($this->_prefs['uploads'] as $row_name => $row_params) {						if (isset($fields['delete_'.$row_name]) && $fields['delete_'.$row_name] == 1 && isset($files[$row_name])) {							$this->file->id	= $files[$row_name]->id;							$this->file->load(); 							// Unlink physical file and delete in database							@unlink($this->_upload_path.$this->file->file_name);							$this->file->delete();						}						if($row_params['caption'] == true && empty($post[$row_name]['size']) && !empty($files[$row_name]->id)) {							$this->file->id	= $files[$row_name]->id;							$this->file->load();							$this->file->caption = ($this->file->caption == $fields[$row_name.'_caption']) ? $this->file->caption : $fields[$row_name.'_caption']; 															$this->file->update();						}						if (!Upload::not_empty($post[$row_name]) || !Upload::type($post[$row_name],explode(',',$row_params['file_type'])) || !Upload::valid($post[$row_name]))							continue;						if (!$post[$row_name]['name'])								continue;							$file_data	= pathinfo($post[$row_name]['name']);						if ($this->_prefs['show_filename'] == TRUE) {							// This will provide real filename							$filename_upload	= preg_replace('/\.[^.]*$/', '', $file_data['basename']);							// This will provide real filename based on Upload::save but with addition random char							// $filename_upload	= NULL;						}						else {							$filename_upload	= md5(time() + rand(100, 999)) . '.' . $file_data['extension'];						}						$file_name	= Lib::_upload_to($post[$row_name], $filename_upload.'.'.$file_data['extension'], $this->_upload_path, 0755);						$file_data	= pathinfo($file_name);						$file_mime	= $post[$row_name]['type'];						if (!isset($files[$row_name])) {							$params			= array('media_id'		=> $this->media->id,													'field_name'	=> $row_name,													'file_name'		=> $file_data['basename'],													'file_type'		=> $file_mime,													'caption'		=> isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');							$this->file->add($params);						} else {							$this->file->id	= $files[$row_name]->id;							$this->file->load();							// Unlink physical file and delete in database							@unlink($this->_upload_path.$this->file->file_name);							$params			= array('media_id'		=> $this->media->id,													'field_name'	=> $row_name,													'file_name'		=> $file_data['basename'],													'file_type'		=> $file_mime,													'caption'		=> isset($fields[$row_name.'_caption']) ? $fields[$row_name.'_caption'] : '');							foreach ($params as $var => $val) {								$this->file->$var	= $val;							}							$this->file->update();						}					}				}				$this->request->redirect('admin-cp/'.$this->_class_name.'/view/'.$id);				return;			} else {				$fields		= Arr::overwrite($fields, $post->as_array());				$errors 	= Arr::overwrite($errors, $post->errors('validation'));				$buffers	= $errors;				foreach ($errors as $row_key => $row_val) {					if ($row_val != '') {						$buffers[$row_key]	= Lib::config('admin.error_field_open').ucfirst($row_val).Lib::config('admin.error_field_close');					} else {						$buffers[$row_key]	= $row_val;					}				}				$errors		= $buffers;			}					} else {			$fields	= array('release_id'		=> $this->media->release_id,							'subject'			=> $this->media->subject,							'name'				=> $this->media->name,							'description'		=> $this->media->description,							'visible'			=> $this->media->visible,							'status'			=> $this->media->status);			$where_cond			= array('media_id'	=> $this->media->id);			$files				= $this->file->find($where_cond);			$buffers			= array();			foreach ($files as $row) {				$buffers[$row->field_name]	= $row;			}			$files				= $buffers;			unset($buffers);			if (isset($this->_prefs['show_upload']) && $this->_prefs['show_upload'] && isset($this->_prefs['uploads'])) {				foreach ($this->_prefs['uploads'] as $row_name => $row_params) {					$fields[$row_name]	= '';					if (isset($row_params['caption']) && $row_params['caption'])						$fields[$row_name.'_caption']	= (isset($files[$row_name])) ? $files[$row_name]->caption : '';				}			}			}				/** Views **/		$where_cond			= array('status !='		=> 'deleted');		$order_by			= array('release_id'	=> 'ASC');		$orders				= $this->media->find($where_cond, $order_by);		$content_vars		= array('errors'		=> $errors,									'fields'		=> $fields,									'media'			=> $this->media,									'releases'		=> $this->releases,									'statuses'		=> $this->statuses,									'release_id'	=> $release_id,									'files'			=> !empty($files) ? $files : '' ,									'upload_path'	=> $this->_upload_path,									'upload_url'	=> $this->_upload_url,									'module_name'	=> $this->_module_name,									'module_menu'	=> $this->_module_menu,									'statuses'		=> $this->statuses,									'visible'		=> $this->_visible,									'readable_mime'	=> Lib::config($this->_module_name.'.readable_mime'));		$content_vars		= array_merge($content_vars, $this->_prefs);		$content			= View::factory($this->_module_name.'/backend/'.$this->_module_name.'_edit');		foreach ($content_vars as $var => $val) {			$content->$var	= $val;				}		$this->template->content		= $content;		}	    public function action_delete() {		$this->media->id	= $this->id1;		if (!$this->media->load()) {			$this->request->redirect('admin-cp/'.$this->_class_name.'/index');			return;		}		// This is used for only Ajax Request				if ($this->request->is_ajax()) {				$release_id= $this->media->release_id;				$update = new Model_Media;				// This is to reset all order				$i=1;				$update_order = $update->find(array('id !='=>$this->id1,'release_id'=>$release_id),array('order'=>'asc'));				foreach ($update_order as $order) {										$order->order = $i;					$order->update();					$i++;				}			// This setting is used for deleting all file included			if (Model_Media::instance()->delete($this->id1)) {				$where_cond = array('media_id'=>$this->id1);				$mediafiles = Model_MediaFile::instance()->find($where_cond);				foreach ($mediafiles as $files){					if (is_readable($this->_upload_path.$files->file_name)) {						@unlink($this->_upload_path.$files->file_name);						Model_MediaFile::instance()->delete($files->id);					}				}				echo 1;			} else {				echo 0;			}			} else {			$this->request->redirect('admin-cp/'.$this->request->controller());		}		exit();    }		public function action_download() {		if (!$this->id1)			return;				// Retrieve Raw File		$fileraw = base64_decode($this->id1);		// Set filename to original		$filename = '';				return Lib::_download($fileraw);	}		/*** Function Access ***/	// Action for update item status	public function action_change() {			if ($this->request->post('check') !='') {			$rows	= $this->request->post('check');			foreach ($rows as $row) {				$this->media->id	= $row;				if (!$this->media->load())					continue;				$this->media->status	= $this->request->post('select_action');				$this->media->update();			}			$redirect_url	= (strstr($this->acl->previous_url,'admin-cp')) ? $this->acl->previous_url : 'admin-cp/'.$this->_class_name.'/index';			$this->request->redirect($redirect_url);		} else {				$this->request->redirect('admin-cp/'.$this->_class_name);			}	}		// Action for ordering item list	public function action_order() {		if (empty($this->id2) && empty($this->id3))			continue;					if ($this->id1 == 'up' && $this->id2 && $this->id3) {						$where_cond = ($this->id4) ? array('order'=>$this->id3 + 1, 'release_id'=>$this->id4) : array('order'=>$this->id3 + 1);			$order_by   = array('order'=>'asc');						$order_default = $this->media->find($where_cond,$order_by,1);						if (!empty($order_default)) {				foreach ($order_default as $default) {					$default->order  = ($default->order != $this->media->set_order($default->release_id,'','MIN')) ? $default->order - 1 : 0;					$default->update();				}			}			$this->media->id = $this->id2;			$this->media->load();			$this->media->order = $this->id3 + 1;			$this->media->update();		} 		if ($this->id1 == 'down' && $this->id2 && $this->id3) {						$where_cond = ($this->id4) ? array('order'=>$this->id3 - 1, 'release_id'=>$this->id4) : array('order'=>$this->id3 + 1);			$order_by	= array('order'=>'asc');						$order_default = $this->media->find($where_cond,$order_by,1);						if (!empty($order_default)) {				foreach ($order_default as $default) {					$default->order  = ($default->order != $this->media->set_order($default->release_id,'','MAX')) ? $default->order + 1 : 1;					$default->update();				}			}			$this->media->id = $this->id2;			$this->media->load();			$this->media->order = $this->id3 - 1;			$this->media->update();		}				if ($this->request->is_ajax()) {			echo $this->id2;			exit();		}			$this->request->redirect(ADMIN.$this->_class_name);			}		// Action for looking file object data	public function action_lookup() {		if ($this->request->is_ajax()) {			//usleep(1000000);			if (!$this->id1)				return;			echo json_encode($this->file->load_by_media_id($this->id1));		}	}		/** CALLBACKS **/		public function _valid_release_id (Validation $array, $field) {		if ($array[$field] == 0)			return TRUE;		$where_cond		= array('id'	=> $array[$field]);				$parent_exists	= ($this->release->find_count($where_cond) != 0);		if (!$parent_exists)			$array->error($field, 'invalid_release_id');		}			/** CALLBACKS **/ 	public function _unique_filename (Validation $array, $field) {		if (!isset($array[$field]['name']))			return;		$filename = $this->file->load_by_filename(preg_replace('/\s+/u', '_', $array[$field]['name']));		if ($filename)			return $array->error($field, 'unique_filename');	}	    public function _unique_name (Validation $array, $field) {		if (!isset($array[$field]))			return;		$name = Model_Media::instance()->find_count(array('name' => $array[$field]));		if ($name)			return $array->error($field, 'unique_name');	}		public function _valid_status (Validation $array, $field) {		if (!in_array($array[$field], $this->statuses))			$array->add_error($field, 'invalid_status');			}			/** PRE FILTER **/	public function _reverse_date ($value = '') {				if (strpos($value, '/') != 0)			return (implode('-', array_reverse(explode('/', $value))));		else			return (implode('/', array_reverse(explode('-', $value))));		}			public function _release_id ($value = '') {		$where_cond	= array('name LIKE'	=> '%'.$value.'%','status !='	=> 'deleted');		$buffers	= $this->release->find($where_cond);		$ids		= array();				foreach ($buffers as $row) {			$ids[]	= $row->id;			}		return $ids;		}}