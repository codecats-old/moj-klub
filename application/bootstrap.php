<?php defined('SYSPATH') OR die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
//date_default_timezone_set('America/Chicago');
date_default_timezone_set('Europe/Warsaw');
/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
//setlocale(LC_ALL, 'en_US.utf-8');
setlocale(LC_ALL, 'pl_PL.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

/**
 * Enable Composer's autoloader
 */
require_once './vendor/autoload.php';

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');
I18n::lang('pl-pl');

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
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'  => '/',
	
	'errors' 	=> FALSE,
	'profile' 	=> FALSE,
	'caching' 	=> TRUE
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Salt.
 */
require_once APPPATH . 'config/crypt.php';
Cookie::$salt = COOKIE_SALT;

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(
	array(
		'auth'       	=> MODPATH.'auth',       	// Basic authentication
		'cache'      	=> MODPATH.'cache',      	// Caching with multiple backends
		'database'   	=> MODPATH.'database',   	// Database access
		'image'      	=> MODPATH.'image',      	// Image manipulation
		'orm'        	=> MODPATH.'orm',        	// Object Relationship Mapping
		'captcha'		=> MODPATH.'captcha',	 	// Captha module
		'message'		=> MODPATH.'message',	 	// Flash messages
		'manager'		=> MODPATH.'manager',	 	// Manipulate model and post data
		'menu'			=> MODPATH.'menu',		 	// Menu creator by roles based on Zend Acl module
		'coder'			=> MODPATH.'coder',		 	// Module helps protect urls from CSRF attack
		'pagination'	=> MODPATH.'pagination', 	// Pagination module
		'notificator'	=> MODPATH.'notificator' 	// Messages notificator
	)
);

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
require_once APPPATH.'routes'.EXT;

/**
 * Basedir in cookie for enable all functions on client site.
 */
$basedir = Cookie::get('basedir');
if (! $basedir OR $basedir != Kohana::$base_url)
{
	Cookie::set('basedir', Kohana::$base_url);
}
