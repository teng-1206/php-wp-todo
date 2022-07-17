<?php 
/**
 * @package  wp-todo
 */

namespace Inc\Pages;

class Admin
{
	public function register() {
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
	}

	private function add_admin_pages() {
		add_menu_page( 'WP Todo Plugin', 'WP Todo', 'manage_options', 'wp_todo_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
	}

	private function admin_index() {
		require_once PLUGIN_PATH . 'templates/admin.php';
	}
}