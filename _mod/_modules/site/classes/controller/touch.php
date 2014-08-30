<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Touch extends Controller_Themes_DefaultBlank {
	protected $id1;
	protected $id2;
	protected $id3;
	protected $id4;

	public function before () {
		parent::before();

		//if (!$this->request->is_ajax())
			//$this->request->redirect (URL::site());
		
        $this->id1 = Request::$current->param('id1');
        $this->id2 = Request::$current->param('id2');
        $this->id3 = Request::$current->param('id3');
		$this->id4 = Request::$current->param('id4');
        
		$this->media			= new Model_Media;
		$this->mediafile		= new Model_MediaFile;
		$this->mediarelease		= new Model_MediaRelease;
		$this->mediareleasefile	= new Model_MediaReleaseFile;
		
		$mediareleasefile		= $this->mediareleasefile->find(array('field_name'=>'image_2'));
		$buffers = array();
		foreach ($mediareleasefile as $releasefile) {
			$buffers[$releasefile->release_id] = $releasefile;
		}
		$this->mediareleasefiles = $buffers;
		unset($buffers);

		$this->downloadfile		= new Model_DownloadFile;
//		$this->mediarelease		= new Model_MediaRelease;
//		$this->mediareleasefile	= new Model_MediaReleaseFile;
		
		//$downloadfiles			= $this->downloadfile->find(array('status'=>'publish'));
		//$buffers = array();
		//foreach ($downloadfiles as $downloadfile) {
			//$buffers[$downloadfile->type_id] = $downloadfile;
			//$buffers[] = $downloadfile;
		//}
		//$this->downloadfiles = $buffers;
		//unset($buffers);		
		//print_r($this->downloadfiles );
		
		// Load Config
		//--------------------------- Media - Start ---------------------------//
		$this->_config_media	= Lib::config('media');
		// Media Upload Path Config
		$this->media_upload_path	= $this->_config_media->upload_path;
		// Media Upload Url Config
		$this->media_upload_url		= $this->_config_media->upload_url;
		// Media Upload Path Config
		$this->mediafile_upload_path	= $this->_config_media->mediafile_upload_path;	
		// Media Upload Url Config
		$this->mediafile_upload_url		= $this->_config_media->mediafile_upload_url;
		//--------------------------- Media - End ---------------------------//			
		
		// Get logged member
		$this->_member		= !empty($this->member) ? $this->member : '';	
		
	}
    
	public function action_index () {
		
//		if (Request::$current->query('ref') == 'media') {
//			//	Cookie::set('is_mobile', '');
//			//print_r(Request::$current->query('ref'));
//		} else if(Request::$current->query('ref') == 'download') {
//			
//		}
//		
		$mediarelease = $this->mediarelease->load_by_name('arus-hayat-voice-note');
		//$mediarelease = $this->mediarelease->load_by_name($this->id1);
		
		// Default Conditions
		$where_cond = array('release_id'=>$mediarelease->id,'status'=>'publish');
		$order_by	= array('order'=>'desc');

		$page_index	= isset($_GET['page']) ? $_GET['page'] - 1: 0;		
		//$per_page	= Lib::config('site.item_per_page');
		$per_page	= 10;
		$offset		= ($page_index == 0) ? '' : $page_index * $per_page;
		
		/** Execute list query **/

		$total_rows	= $this->media->find_count($where_cond);
		$medias		= $this->media->find($where_cond, $order_by, $per_page, $offset);	
		
		$order_by	 = array('field_name'=>'desc');
		$_mediafiles = $this->mediafile->find('',$order_by);
		$mediafiles = array();
		$buffers = array();
		foreach($_mediafiles as $mfiles) {
			$buffers[$mfiles->media_id][] = $mfiles;
		}
		$mediafiles = $buffers;
		
		/** Initialize pagination **/

		$pagination = Pagination::factory(array(
				'total_items' 		=> $total_rows,
				'items_per_page' 	=> $per_page,
				'view'              => 'pagination/default'
			 )
		);
		
		/** Views Vars **/
		
		$content_vars		= array(						
									'data'				=> $this->data,			
		
									'medias'			=> $medias,
									'mediarelease'		=> $mediarelease,
									'mediafiles'		=> $mediafiles,
			
									'media_upload_path' => $this->media_upload_path,
									'media_upload_url'	=> $this->media_upload_url,
			
									'mediafile_upload_url' => $this->mediafile_upload_url,
									'mediafile_upload_path' => $this->mediafile_upload_path,
			
									'total_record'  => $total_rows,
									'pagination'	=> $pagination
									);

		
		$content			= View::factory('site/touch_page');

		foreach ($content_vars as $var => $val) {
			$content->$var	= $val;
		}

		$this->template->content		= $content; 
		
	}

	public function action_media() {
		
	}
}
