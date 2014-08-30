<?php defined('SYSPATH') or die('No direct script access.');

// Model List
$config['models']		= array('LinksType','Links','LinksFile');

// Module Menu List
$config['module_menu']	= array(
							'linkstype/index'      => 'Links Type Listings',
							'links/index'          => 'Links Listings',
						);

// Module Function
$config['module_function']	= array(
                                        'links/add'		=> 'Add New Links',
                                        'links/view'	=> 'View Links Details',
                                        'links/edit'	=> 'Edit Links Details',
                                        'links/delete'	=> 'Delete Links',
										'links/change'	=> 'Update Link Status',
                                        // 'links/index'  => 'Links Listings',
										'linkstype/add'		=> 'Add New Links Type',
                                        'linkstype/view'	=> 'View Link Type Details',
                                        'linkstype/edit'	=> 'Edit Link Type Details',
                                        'linkstype/delete'	=> 'Delete Link Type',
										'linkstype/change'	=> 'Update Link Type Status',
                                    );

$config['upload_path'] = DOCROOT.'uploads/links/';
$config['upload_url']  = 'uploads/links/';

// Readable mime Properties
$config['readable_mime'] = array(
    'image/gif',
    'image/jpg',
    'image/jpeg',
    'image/png',
    'video/x-flv',
    'video/flv',
    'audio/mpeg'
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

// Image Thumbs and Crop Properties
$config['image'] = array(
			'ratio' => 'auto',
			'thumbnails' => array(
				'380x290',
				'460x370'
			),
			'crop'	=> array(
					array(
							'380x290',
							'460x370'
						),
					'center',
					)
		);

// Links Field in form
$config['links_fields'] = array(
			'show_synopsis' => TRUE,
			'show_upload' => FALSE,
			'uploads' => array(
				'image_1' => array(
					'label' => 'Image 1',
					'caption' => FALSE,
					'optional' => TRUE,
					'file_type' => 'gif,jpg,png',
					'max_file_size' => '1M',
					'note' => 'Allowed file types are gif, jpg ,png. Best Resolution is up to '.$config['image']['thumbnails'][1].'px',
					'image_manipulation' =>$config['image'],
				),
			)
		);

// Default Views
$config['default'] = array (
            'view'=> 'links/default',
        );

return array_merge_recursive (
	$config
);