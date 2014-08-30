<?php defined('SYSPATH') or die('No direct script access.');
return array
(
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 *
			 * Ports and sockets may be appended to the hostname.
			 * 
				'hostname'   => 'localhost',
				'database'   => 'client_wa_datacell2012',
				'username'   => 'client_datacell',
				'password'   => 'webarqt2t',
			 */
			'hostname'   => 'localhost',
			'database'   => 'wa_pemulihan2012',
			'username'   => 'root',
			'password'   => '',
			'persistent' => FALSE,
		),
		'table_prefix' => 'tbl_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
	'alternate' => array(
		'type'       => 'pdo',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
			'dsn'        => 'mysql:host=localhost;dbname=webarq',
			'username'   => 'extend',
			'password'   => 'extend',
			'persistent' => FALSE,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => 'rm',
		'charset'      => 'utf8',
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);
