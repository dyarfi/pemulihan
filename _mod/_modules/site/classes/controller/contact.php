<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Contact extends Controller_Themes_Default {
	protected $page_category;
	protected $category_file;
	protected $id1;
	protected $id2;
	protected $id3;
	protected $id4;
	protected $settings;

	public function before () {
		parent::before();
		
        $this->_class_name		= Request::$current->controller();
		
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		// Load necessary Model
		$this->page_category	= new Model_PageCategory();
		$this->category_files	= new Model_PageCategoryFile();
		
		$this->article			= new Model_Article();
		$this->article_file		= new Model_ArticleFile();
		$this->article_category = new Model_ArticleCategory();
		$this->category_file 	= new Model_ArticleCategory();
		
		// Load Config
		$this->_config	= Lib::config('page');
		
		// Page Fields Config
		$this->page_category_fields	= $this->_config->page_category_fields;
		
		// Upload Path Config
		$this->category_upload_path	= $this->_config->category_upload_path;
		
		// Upload Url Config
		$this->category_upload_url	= $this->_config->category_upload_url;
		
	}
    
	public function action_index () {
		
		// Contac Page Category -name || -category_id = contact | 8
		// $page_category	= $this->page_category->find(array('name' => 'media'),array('added'=>'desc'),1);
		$page_category	= $this->page_category->load_by_name('contact-us');
		$category_files	= $this->category_files->find(array('category_id'=>$page_category->id),'',1);
		
		$buffers = array();
		foreach ($category_files as $cfile){
			$buffers[$cfile->category_id] = $cfile;
		}
		$category_files = $buffers;
		
		// Set Contact address with email
		$where_cond		= array('parameter LIKE' => '%email_%','status'=>'publish');
		$email_contact	= Model_Setting::instance()->find($where_cond);
		
		$articles 		= $this->article->find();
		$article_files 	= $this->article_file->find();
		
		$buffers_files	= array();
		foreach($article_files as $files) {
			$buffers_files[$files->article_id] = $files;
		}
		$article_files = $buffers_files;
		unset($buffers_files);
		
		$fields	= array(
					'contacting' => '',
					'name'   => '',
					'email'		=> '',
					'message'	=> '',
				);
		
		$result = null;
		$errors	= $fields;	
	
		if ($_POST) {
			$post	= new Validation($_POST);
			
				$post->rule('contacting', 'not_empty');
                $post->rule('name', 'not_empty');
                $post->rule('name', 'min_length', array(':value', 4));
                $post->rule('message', 'not_empty');
				$post->rule('message', 'min_length', array(':value', 4));
				$post->rule('email', 'Valid::email');
				$post->rule('email', 'not_empty');
                $post->rule('email', 'min_length', array(':value', 4));
				
				$post->rule('name', 'regex', array(':value', '/^[0-9a-z_.\s\-]++$/iD'));
				$post->rule('message', 'regex', array(':value', '/^[0-9a-z_.\s\-]++$/iD'));
				
				if ($post->check()) {
						$fields	= $post->as_array();
						
						//print_r($_POST); exit();
						//print_r($this->data); exit();
						
						$content_vars	= array(
										'contacting' => $fields['contacting'],
										'name'		 => $fields['name'],
										//'company'	 => $fields['company'],
										'email'		 => $fields['email'],
										'message'	 => $fields['message'],
										'site_name'  => $this->settings['title_name'],
										'registered_mark' => $this->data['registered'],
										);
				
						//----------- Admin data email template -----------
						$email_view		= View::factory('email/contact_form_admin');

						foreach ($content_vars as $var => $val) {
							$email_view->$var	= $val;
						}		

						$_name	= trim(strip_tags(ucfirst(strstr(base64_decode($fields['contacting']), '@')))); 
						$_mail	= trim(strip_tags(base64_decode($fields['contacting'])));
						
						//print_r($_mail);
						//print_r($_mail); exit();
						
						$to			= array($_mail, $_name);  // Address can also be array('to@example.com', 'Name')
						//$to			= $_mail;  // Address can also be array('to@example.com', 'Name')
						$from		= Lib::config('site.email_address');
						$subject	= Lib::config('site.email_contact_subject');

						$message	= $email_view->render();

						if(Email::send($to, $from, $subject, $message, TRUE)){
						//if (Helper_Common::sending_email($to, $from, $subject, $message)) {	

							//----------- Public data email template -----------
							$email_view		= View::factory('email/contact_form_public');

							foreach ($content_vars as $var => $val) {
								$email_view->$var	= $val;
							}

							//$to		= $fields['email'];  // Address can also be array('to@example.com', 'Name')
							//$to		= array($fields['email'], $fields['name']);  // Address can also be array('to@example.com', 'Name')
							$to			= $fields['email'];
							$from		= Lib::config('site.email_address');
							$subject	= Lib::config('site.email_contact_subject');

							$message	= $email_view->render();

							/*** Using Email library with headers manipulation ***/
							
							// Helper_Common::sending_email($recepient_email,$subject,$message_public,$from);
							// Helper_Common::sending_email($recepient_email,$subject,$message_admin,$from);
							
							//Helper_Common::sending_email($to, $from, $subject, $message);
							
							// The real email function
							Email::send($to, $from, $subject, $message, TRUE);
						}

						// set flash session data
						$this->session->set('result', 'Thank you for contacting us. Your message has been sent successfully to our team. We will consider it in advance and will immediately contact you.');

						$this->request->redirect('contact');
						//url::redirect(str_replace('{member}', $this->session->get('member_list.member_id'), Kohana::config('member.default_page')));
						return;
						
				} else {
						$fields		= Arr::overwrite($fields, $post->as_array());
						$errors 	= Arr::overwrite($errors, $post->errors('validation'));
						$buffers	= $errors;
						foreach ($errors as $row_key => $row_val) {
							if ($row_val != '') {
								$buffers[$row_key]	= Lib::config('site.error_field_open').ucfirst($row_val).Lib::config('site.error_field_close');
							} else {
								$buffers[$row_key]	= $row_val;
							}
						}
						$errors		= $buffers;
						//Session::instance()->set('result','');
				}
				// Check session result before
				//if($this->session->get('result') != '') {
					
				//}	
		}
		
		// Apply result data
		$result = Session::instance()->get('result');
		
		$content_vars		= array(
									'category_upload_path' => $this->category_upload_path,
									'category_upload_url' => $this->category_upload_url,
									'page_category' => $page_category,
									'category_files' => $category_files,			
									'email_contact' => $email_contact,
									'articles'		=> $articles,
									'article_files' => $article_files,
									'errors'		=> $errors,
									'fields'		=> $fields,
									'result'		=> $result);

		$content			= View::factory('site/contact_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}
		
		$this->template->meta_keywords		= trim(str_replace(' ',', ',strip_tags('Contact Us Message')),"\n\r\x00..\x1F");
		
		$this->template->meta_description	= 'Contact Us Page ' . strip_tags('Contact Us');		
		
		$this->template->page_title		= 'Contact - ' . Lib::config('site.title');
		
		$this->template->content		= $content; 
	}

}
