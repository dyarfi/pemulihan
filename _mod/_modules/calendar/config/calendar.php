<?php defined('SYSPATH') or die('No direct script access.');

// Model List
$config['models']		= array('CalendarType','Calendar','CalendarFile');

// Module Menu List
$config['module_menu']	= array(
							'calendartype/index'      => 'Calendar Type Listings',
							'calendar/index'          => 'Calendar Listings',
						);

// Module Function
$config['module_function']	= array(
                                        'calendar/add'		=> 'Add New Calendar',
                                        'calendar/view'	=> 'View Calendar Details',
                                        'calendar/edit'	=> 'Edit Calendar Details',
                                        'calendar/delete'	=> 'Delete Calendar',
										'calendar/change'	=> 'Update Calendar Status',
                                        // 'calendar/index'  => 'Calendar Listings',
										'calendartype/add'		=> 'Add New Calendar Type',
                                        'calendartype/view'	=> 'View Calendar Type Details',
                                        'calendartype/edit'	=> 'Edit Calendar Type Details',
                                        'calendartype/delete'	=> 'Delete Calendar Type',
										'calendartype/change'	=> 'Update Calendar Type Status',
                                    );

$config['upload_path'] = DOCROOT.'uploads/calendar/';
$config['upload_url']  = 'uploads/calendar/';

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

// Calendar Field in form
$config['calendar_fields'] = array(
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
            'view'=> 'calendar/default',
        );

return array_merge_recursive (
	$config
);