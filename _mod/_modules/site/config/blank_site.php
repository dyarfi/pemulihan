<?php defined('SYSPATH') or die('No direct script access.');

/** Frontend Configs **/
$config['css'] = array(
			'general.css' => 'screen',
			'reset.css' => 'screen',
			'helper.css' => 'screen',
			'jquery/jquery-ui-1.9.1/jquery.ui.all.css' => 'screen',
		);
		
$config['js'] = array(
				'library_blank.js',
				'fabric/jquery-ui-1.9.1/jquery.ui.core.min.js',
				'fabric/jquery-ui-1.9.1/jquery.ui.datepicker.min.js',
				'jquery-1.8.2.min.js',
				);	

 return array_merge_recursive  (
	$config
 );
