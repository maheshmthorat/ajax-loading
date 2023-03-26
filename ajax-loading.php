<?php
/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://maheshthorat.web.app
 * @since             0.1
 * @package           WP_Ajax_loading
 *
* Plugin Name: AJAX Loading
* Plugin URI: https://wordpress.org/plugins/wp-ajax-loading/
* Description: This plugin improves your users page experience by adding ajax + cache. 
* Version: 0.2
* Author: Mahesh Thorat
* Text Domain: wp-ajax-loading
* Author URI: https://maheshthorat.web.app
**/

/**
 * Prevent file to be called directly
*/
if((!defined('ABSPATH')) || ('wp-ajax-loading.php' == basename($_SERVER['SCRIPT_FILENAME'])))
{
   die;
}

/**
 * Define Constants
*/
define('WPAJXL_PLUGIN_FULLNAME', 'AJAX Loading');
define('WPAJXL_PLUGIN_IDENTIFIER', 'wp-ajax-loading');
define('WPAJXL_PLUGIN_VERSION', '0.2');
define('WPAJXL_PLUGIN_LAST_RELEASE', '2022/12/24');
define('WPAJXL_PLUGIN_LANGUAGES', 'English');
define('WPAJXL_PLUGIN_ABS_PATH', plugin_dir_path(__FILE__));

/**
 * The core plugin class that is used to define internationalization
 * admin-specific hooks and public-facing site hooks
*/
require WPAJXL_PLUGIN_ABS_PATH.'includes/class-wp-ajax-loading-core.php';


/**
 * Begins execution of the plugin
*/
if(!function_exists('run_WP_Ajax_loading'))
{
   function run_WP_Ajax_loading()
   {
      $plugin = new WP_Ajax_loading_Core();
      $plugin->run();
   }
   run_WP_Ajax_loading();
}
