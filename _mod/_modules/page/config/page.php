<?php defined('SYSPATH') or die('No direct script access.');
$config['models'] = array(
    'page',
    'pageFile',
    'pageCategory',
	'pageCategoryFile'
);
$config['upload_path'] = DOCROOT.'uploads/pages/';
$config['upload_url'] = 'uploads/pages/';
$config['category_upload_path'] = DOCROOT.'uploads/page_categories/';
$config['category_upload_url'] = 'uploads/page_categories/';
$config['readable_mime'] = array(
    'image/gif',
    'image/jpg',
    'image/jpeg',
    'image/png',
    'application/x-sh'
);
$config['mime_icon'] = array(
    'image/gif' => 'picture.png',
    'image/jpg' => 'picture.png',
    'image/jpeg' => 'picture.png',
    'image/png' => 'picture.png',
    'video/x-flv' => 'film.png',
    'video/flv' => 'film.png',
    'audio/mpeg' => 'sound.png'
);
$config['image'] = array(
    'ratio' => 'auto',
    'thumbnails' => array(
		'540x121',
        '640x121'// New Banner
    ),
	'crop'	=> array(
			array(
				'540x121',
				'640x121'),
				'center'
			)
);
$config['page_fields'] = array(
    'show_category' => TRUE,
    'show_synopsis' => TRUE,
    'show_publish_date' => FALSE,
	'show_attribute' => FALSE,
    'show_unpublish_date' => FALSE,
    'show_allow_comment' => TRUE,
    'show_tags' => FALSE,
    'show_order' => FALSE,
    'show_upload' => TRUE,
    'uploads' => array(
        'image_1' => array(
            'label' => 'Thumb Image',
            'caption' => FALSE,
            'optional' => TRUE,
            'file_type' => 'gif,jpg,png',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is up to '.$config['image']['thumbnails'][1].'px',
            'image_manipulation' => $config['image']
        ),/*
		'image_2' => array(
            'label' => 'Other Image',
            'caption' => FALSE,
            'optional' => TRUE,
            'file_type' => 'gif,jpg,png',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is up to '.$config['image']['thumbnails'][1].'px',
            'image_manipulation' => $config['image']
        )*/
    )
);
$config['page_category_fields'] = array(
    'show_position' => FALSE,
	'show_enable_edit' => FALSE,
	'show_enable_delete' => FALSE,
	'show_enable_add' => TRUE,
    'show_category_upload' => TRUE,
    'uploads' => array(
        'image_1' => array(
            'label' => 'Banner Image',
            'caption' => FALSE,
            'optional' => TRUE,
            'file_type' => 'gif,jpg,png',
            'max_file_size' => '1M',
            'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is '.$config['image']['thumbnails'][1].'px',
            'image_manipulation' => $config['image'],
        ),
    )
);
$config['module_menu'] = array(
    'pagecategory/index' => 'Page Categories Listings',
    'page/index' => 'Page Listings'
    //'page/add'					=> 'Add New Page',
    //'page_category/add'			=> 'Add New Page Category'
);
$config['module_function'] = array(
    // 'page/index' => 'Page Listings',
    'page/add' => 'Add New Page',
    'page/view' => 'View Page Details',
    'page/edit' => 'Edit Page Details',
    'page/delete' => 'Delete Page',
	'page/change' => 'Update Page Status',
    // 'pagecategory/index' => 'Category Listings',
    'pagecategory/add' => 'Add New Category',
    'pagecategory/view' => 'View Category Details',
    'pagecategory/edit' => 'Edit Category Details',
    'pagecategory/delete' => 'Delete Category',
	'pagecategory/change' => 'Update Category Status',
);
$config['default'] = array (
    'view'=> 'page/default',
);
		
 return array_merge_recursive (
	$config
 );