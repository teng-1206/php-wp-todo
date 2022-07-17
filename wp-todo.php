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

// ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) ? require_once dirname( __FILE__ ) . '/vendor/autoload.php': null;

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_NAME', plugin_basename( __FILE__ ) );

// use Inc\Base\Activate;
// use Inc\Base\Deactivate;

/**
 * The code that runs during plugin activation
 */
function activate_wp_todo_plugin() {
	Activate::activate();
}

/**
 * The code that runs during plugin deactivation
 */
function deactivate_wp_todo_plugin() {
	Deactivate::deactivate();
}

// register_activation_hook( __FILE__, 'activate_wp_todo_plugin' );
// register_deactivation_hook( __FILE__, 'deactivate_wp_todo_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
// ( class_exists( 'Inc\\Init' ) ) ? Inc\Init::register_classes() : null;

$labels = array(
    'name'               => _x( 'Todos', 'post type general name' ),
    'singular_name'      => _x( 'Todo', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'todo' ),
    'add_new_item'       => __( 'Add New Todo' ),
    'edit_item'          => __( 'Edit Todo' ),
    'new_item'           => __( 'New Todo' ),
    'all_items'          => __( 'All Todos' ),
    'view_item'          => __( 'View Todo' ),
    'search_items'       => __( 'Search Todos' ),
    'not_found'          => __( 'No Todos found' ),
    'not_found_in_trash' => __( 'No Todos found in the Trash' ), 
    // 'parent_item_colon'  => ,
    'menu_name'          => 'Todo'
);

$supports = array(
    'title',
    'editor',
    'thumbnail',
    'excerpt',
    'comments',
    'custom-fields'
);

$args = array(
    'labels'            => $labels,
    'description'       => 'Holds our custom article post specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => $supports,
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'query_var'         => true
);

register_post_type( 'wp_todo', $args );

add_action( 'init', register_post_type( 'wp_todo', $args ) );