<?php 
/**
 * @package  wp-todo
 */

namespace Inc\Pages;

use \Inc\Base\Base_Controller;

class Admin extends Base_Controller
{
	public function register() {
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
	}

	public function add_admin_pages() {
		add_menu_page( 'WP Todo Plugin', 'WP Todo', 'manage_options', 'wp_todo_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
	}

	public function admin_index() {
		require_once $this->plugin_path . 'templates/admin.php';
	}
}