<?php defined('SYSPATH') OR die('No direct access allowed.');

$username = 	'myclub_client';
$password = 	'xi@Nix';
$hostname = 	'localhost';
$db = 			'my_club';
$persistent = 	FALSE;
$caching = 		FALSE;
$table_prefix = '';
$charset = 		'utf8';

$services_json = json_decode(getenv("VCAP_SERVICES"), TRUE);

if ($services_json)
{
	$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

	$username = $mysql_config["username"];
	$password = $mysql_config["password"];
	$hostname = $mysql_config["hostname"];
	$db = 		$mysql_config["name"	];
	
	/**
	 * Turn off errors on servers with VCAP_SERVICES
	 */
	Kohana::$errors = FALSE;
	Kohana::$environment = Kohana::PRODUCTION;
}

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			'hostname'   => $hostname,
			'database'   => $db,
			'username'   => $username,
			'password'   => $password,
			'persistent' => $persistent,
		),
		'table_prefix' => $table_prefix,
		'charset'      => $charset,
		'caching'      => $caching,
	),
	'alternate' => array(
		'type'       => 'PDO',
		'connection' => array(
			/**
			 * The following options are available for PDO:
			 *
			 * string   dsn         Data Source Name
			 * string   username    database username
			 * string   password    database password
			 * boolean  persistent  use persistent connections?
			 */
			'dsn'        => 'mysql:host='.$hostname.';dbname='.$db,
			'username'   => $username,
			'password'   => $password,
			'persistent' => $persistent,
		),
		/**
		 * The following extra options are available for PDO:
		 *
		 * string   identifier  set the escaping identifier
		 */
		'table_prefix' => $table_prefix,
		'charset'      => $charset,
		'caching'      => $caching,
	),
);
