<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Author       : Anggi Ridho Agustian
 * Code Name    : Agustian
 * Copywrigth   : 2012
 * Module       : Email
 * Package      : Backend Controller
**/ 


class Controller_Backend_Email extends Controller_Themes_DefaultAdmin {
    
    protected $model;
    protected $admin;
    protected $factory;
    protected $id1; protected $id2;
    
    public function before() {
        parent::before();
        
        $this->model    = new Model_Global;
        $this->admin   = Admin::factory();
        $this->factory  = Email::factory();
        
        $this->now      = time();
        
        $this->id1 = Request::instance()->param('id');
        $this->id2 = Request::instance()->param('id2');
        $this->id3 = Request::instance()->param('id3');
        
        if ($this->admin->isAdmin === false){ 
            $this->template->refresh = 'admin-cp/auth';
        }
    }
    
    public function action_main() {
        $this->template->body = 'Default Email';
    }
    
    public function action_manage() {     
        $content['html_left'] = View::factory(CP.'menu',array('active'=>'email','sub_active'=>'email'));
        $configs = array();
        if ($this->id1 == 'sort'):
            $configs['orderby'] = array($this->id2=>$this->id3);
        endif;
        $vars = $this->factory->get($configs,true);
        $content['html_right'] = $this->factory->render(CP.'listing',$vars);
        $this->template->body = View::factory(LT.'two_column',$content);
    }
    
    public function action_new() {       
        $content['html_left'] = View::factory(CP.'menu',array('active'=>'email','sub_active'=>'email'));
        $content['html_right'] = $this->factory->render(CP.'new');
        $this->template->body = View::factory(LT.'two_column',$content);
    }
    
    public function action_save() {
        extract($_POST);
        if (!isset($name) || $name == '' ){ $this->template->refresh = 'admin-cp/email/manage'; return; }
        
        $this->model->globalInsert(
            array('name','section','email','cc','status','create_time','edit_time'),
            array($name,$section,$email,$cc,$status,$this->now,$this->now),
            'email'
        );
        $last_insert = mysql_insert_id();
        $this->template->refresh = 'admin-cp/email/view/'.$last_insert;
    }
    
    public function action_edit() {
        $content['html_left'] = View::factory(CP.'menu',array('active'=>'email','sub_active'=>'email'));
        $content['html_right'] = $this->factory->render(CP.'edit',$this->factory->get(
            array (
                'where' => array('email_id'=>$this->id1)
            )
         ));
        $this->template->body = View::factory(LT.'two_column',$content);        
    }
    
    public function action_update() {
        extract($_POST);
        if (!isset($name) || $name == '' ){ $this->template->refresh = 'admin-cp/email/manage'; return; }
        
        $this->model->globalUpdate(
            array(
                'name'=>$name,
                'section'=>$section,
                'email'=>$email,
                'cc'=>$cc,
                'status'=>$status,
                'edit_time'=>$this->now,
                ),
            array('email_id'=>$this->id1),'email'
        );
        $this->template->refresh = 'admin-cp/email/view/'.$this->id1;
    }
    
    public function action_aupdate($id = null,$val = null){
        $this->template->notemplate = true;
        if (empty($_GET['hash']) || !isset($id) || !isset($val) || empty($_GET['field']) ):
            $this->template->body = i18n::get('error_no_direct_access').' Level : 1';
            return;
        endif;
        
        $hash = $_GET['hash'];
        
        if (helper_common::encript($id) != $hash):
            $this->template->body = i18n::get('error_no_direct_access').' Level : 2';
            return; 
        endif;
        
        $field = $_GET['field'];
                
        $this->model->globalUpdate(
            array("$field"=>$val),
            array('email_id'=>$id),'email'
        );
        $this->template->body = $id;
    }
    
    public function action_view() {
        $content['html_left'] = View::factory(CP.'menu',array('active'=>'email','sub_active'=>'email'));
        $content['html_right'] = $this->factory->render(CP.'view',$this->factory->get(
            array (
                'where' => array('email_id'=>$this->id1)
            )
         ));
        $this->template->body = View::factory(LT.'two_column',$content);        
    }
    
    public function action_delete() {
        $this->model->globalDelete('email',array('email_id'=>$this->id1));
        $this->template->refresh = 'admin-cp/email/manage';
    }
    
    
} // End Event
