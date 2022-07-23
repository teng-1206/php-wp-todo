<?php
/**
 * @package wp-todo
 */
/**
 * Plugin Name: WP Todo
 * Plugin URI: 
 * Description: A todo list in WordPress
 * Version: 1.0.0
 * Author: Ng Qi Teng
 * Author URL:
 * License:
 * License URL:
 * Text Domain:  wp-todo
 */

( ! defined( 'ABSPATH' ) ) ? exit() : null;

( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) ? require_once dirname( __FILE__ ) . '/vendor/autoload.php': null;

/**
 * The code that runs during plugin activation
 */
function activate_wp_todo_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_wp_todo_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_wp_todo_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_wp_todo_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
( class_exists( 'Inc\\Init' ) ) ? Inc\Init::register_classes() : null;
