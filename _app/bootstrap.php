<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Asia/Jakarta');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */

Kohana::init(array(
    'base_url'   => BS_URL,
    'index_file' => '',
	/* @see .htaccess for $_SERVER['KOHANA_ENV'] */
    'errors' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
// Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
 
Kohana::modules(array(
	//'auth'				=> MODPATH . 'auth',		// Basic authentication
	
	'database'			=> MODPATH . 'database',		// Database access
	'email'				=> MODPATH . 'email',			// Email System
	
	// 'orm'				=> MODPATH . 'orm',			// Object Relationship Mapping
	// 'cache'				=> MODPATH . 'cache',			// Caching with multiple backends
	// 'codebench'			=> MODPATH . 'codebench',		// Benchmarking tool
	// 'unittest'			=> MODPATH . 'unittest',		// Unit testing
	// 'userguide'			=> MODPATH . 'userguide',		// User guide and API documentation
	// 'phpexcel'			=> MODPATH . 'phpexcel',		// Php for Excel 
	// 'profilertoolbar'		=> MODPATH . 'profilertoolbar', 	// Profiler toolbar
	
	'error'			=> MODPATH . 'error',			// Error handling files @see .htaccess for $_SERVER['KOHANA_ENV']
	'image'			=> MODPATH . 'image',			// Image manipulation 
	'pagination'	=> MODPATH . 'pagination',		// Paging of results
	'security'		=> MODPATH . 'security',		// For web security using HTML Purifier      
	'captcha'		=> MODPATH . 'captcha',			// For Captcha in form
	//'compress'		=> MODPATH . 'compress',			// Assets Compress Module for Css and Javascript
	
	// ========== [start] == Modules App bootstraping WebArq ======= 
	'user'			=> MODPATH . APPMOD . DS . 'user',		// User Administrator, Levels, Dashboard account
    'page'          => MODPATH . APPMOD . DS . 'page',		// News
	'article'		=> MODPATH . APPMOD . DS . 'article',	// Article
	'links'			=> MODPATH . APPMOD . DS . 'links',		// Links
	'member'		=> MODPATH . APPMOD . DS . 'member',	// Members
	'media'			=> MODPATH . APPMOD . DS . 'media',		// Media
	'download'		=> MODPATH . APPMOD . DS . 'download',  // Download
	'calendar'		=> MODPATH . APPMOD . DS . 'calendar',	// Calendar
    'setting'		=> MODPATH . APPMOD . DS . 'setting',	// WebApp Setting
	'site'			=> MODPATH . APPMOD . DS . 'site'
    // ========== [end] == Modules App bootstraping WebArq ======= 
));

// Set Cookies salt
Cookie::$salt = 'Your-Salt-Goes-Here';

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

// =============== API Classes Directory Route === start
Route::set('apiv2', 'apiv2(/<controller>(/<action>(/<id1>(/<id2>(/<id3>(/<id4>))))))',
    array(
//		'directory'		=> 'apiv2',
		'action'		=> 'index',
    ))
    ->defaults(array(
      'controller' => 'apiv2',
      'action'     => '[a-zA-Z0-9\-\_\.]++',
		'id1'	=> '[a-zA-Z0-9\-\_\.]++',
		'id2'	=> '[a-zA-Z0-9\-\_\.]++',
		'id3'	=> '[a-zA-Z0-9\-\_\.]++',
		'id4'	=> '[a-zA-Z0-9\-\_\.]++',
    ));
// =============== API Classes Directory Route === end

/*** MAINTENANCE MODE ***/

Route::set('maintenance', 'maintenance(/<controller>(/<action>(/<id1>(/<id2>(/<id3>(/<id4>))))))',
		array(
			'id1' => '[a-zA-Z0-9\_\.]++',
			'id2' => '[a-zA-Z0-9\_\.]++',
			'id3' => '[a-zA-Z0-9\_\.]++',
			'id4' => '[a-zA-Z0-9\_\.]++',
			))
	->defaults(array(
        'directory'  => 'backend',
        'controller' => 'maintenance',
        'action'     => 'index',
	));
	

/*** ADMIN-CP ***/

Route::set('admin-cp', 'admin-cp(/<controller>(/<action>(/<id1>(/<id2>(/<id3>(/<id4>(/<id5>)))))))',
		array(
			'id1' => '[a-zA-Z0-9\=\_\.]++',
			'id2' => '[a-zA-Z0-9\=\_\.]++',
			'id3' => '[a-zA-Z0-9\=\_\.]++',
			'id4' => '[a-zA-Z0-9\=\_\.]++',
			'id5' => '[a-zA-Z0-9\=\_\.]++',
			))
	->defaults(array(
        'directory'  => 'backend',
        'controller' => 'baseadmin',
        'action'     => 'index',
	));
	
/*** ADMIN-CP ***/

/*** SEARCH ***/
Route::set('search', 'search/<id1>',
		array(
			'controller' => 'search', 
			'action' => 'index', 
			'id1'	=> '[a-zA-Z0-9\-\_\.]++',
			)
		)
	->defaults(array(
		'controller' => 'search',
		'action'     => 'index',
		'id1'	=> '[a-zA-Z0-9\-\_\.]++',
	));

/*** MEMBER LOGIN ***/
Route::set('login', 'login',
		array(
			'controller' => 'member',
		))
	->defaults(array(
		'controller' => 'member',
		'action' => 'login'
		));

// Controller Specific for members
Route::set('member/<action>/<id1>', 'member(/<action>(/<id1>))', 
		array(
			'controller' => 'member', 
			'action' => '[a-zA-Z0-9\=\-\_\.]++',
			'id1'	=> '[a-zA-Z0-9\=\-\_\.]++',
			)
		)
	->defaults(array(
		'controller' => 'member', 
		));
		
// Controller
Route::set('<controller>', '<controller>(/<action>(/<id1>(/<id2>(/<id3>(/<id4>)))))', 
		array(
			'controller' => '[a-zA-Z0-9\-\_\.]++', 
			'action' => 'index',
			'id1'	=> '[a-zA-Z0-9\-\_\.]++',
			'id2'	=> '[a-zA-Z0-9\-\_\.]++',
			'id3'	=> '[a-zA-Z0-9\-\_\.]++',
			'id4'	=> '[a-zA-Z0-9\-\_\.]++',
			)
		)
	->defaults(array(
		'controller' => '[a-zA-Z0-9\-\_\.]++',
		'action' => 'index', 
		'id1'	=> '[a-zA-Z0-9\-\_\.]++',
		'id2'	=> '[a-zA-Z0-9\-\_\.]++',
		'id3'	=> '[a-zA-Z0-9\-\_\.]++',
		'id4'	=> '[a-zA-Z0-9\-\_\.]++',
		));

// Controller Categories
Route::set('<controller>/<id1>', '<controller>/<id1>', 
		array(
			'controller' => '[a-zA-Z0-9\-\_\.]++', 
			'action' => 'category', 
			'id1'	=> '[a-zA-Z0-9\-\_\.]++',
			)
		)
	->defaults(array(
		'controller' => '[a-zA-Z0-9\-\_\.]++', 
		'action' => 'category', 
		'id1'	=> '[a-zA-Z0-9\-\_\.]++',
		));

// Controller detail
Route::set('<controller>/read/<id1>', '<controller>/<action>/<id1>', 
		array(
			'controller' => '[a-zA-Z0-9\-\_\.]++', 
			'action' => 'read', 
			'id1'	=> '[a-zA-Z0-9\-\_\.]++',
			'id2'	=> '[a-zA-Z0-9\-\_\.]++',
			'id3'	=> '[a-zA-Z0-9\-\_\.]++',
			'id4'	=> '[a-zA-Z0-9\-\_\.]++',
			)
		)
	->defaults(array(
		'controller' => '[a-zA-Z0-9\-\_\.]++',
		'action' => 'read', 
		'id1'	=> '[a-zA-Z0-9\-\_\.]++',
		'id2'	=> '[a-zA-Z0-9\-\_\.]++',
		'id3'	=> '[a-zA-Z0-9\-\_\.]++',
		'id4'	=> '[a-zA-Z0-9\-\_\.]++',
		));

// Default
Route::set('default', '(<controller>(/<action>(/<id1>(/<id2>(/<id3>(/<id4>))))))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));
