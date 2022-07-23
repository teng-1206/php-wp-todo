<?php 
/**
 * @package  wp-todo
 */

namespace Inc\Pages;

use \Inc\Base\Base_Controller;
use \Inc\Api\Settings_Api;

class Admin extends Base_Controller
{
	public $settings;
	public $pages = array();
	public $sub_pages = array();

	public function __construct()
	{
		$this->settings = new Settings_Api();

		$this->pages = array(
			array(
				'page_title' => 'WP Todo Plugin',
				'menu_title' => 'WP Todo',
				'capability' => 'manage_options',
				'menu_slug'  => 'wp_todo_plugin',
				'callback'   => function() {  },
				'icon_url'   => 'dashicons-store',
				'position'   => '110',
			),
		);

		$this->sub_pages = array(
			array(
				'parent_slug' => 'wp_todo_plugin',
				'page_title' => 'Sub 01',
				'menu_title' => 'Sub 01',
				'capability' => 'manage_options',
				'menu_slug'  => 'sub_01',
				'callback'   => function() {  },
			),
			array(
				'parent_slug' => 'wp_todo_plugin',
				'page_title' => 'Sub 02',
				'menu_title' => 'Sub 02',
				'capability' => 'manage_options',
				'menu_slug'  => 'sub_02',
				'callback'   => function() {  },
			),
			array(
				'parent_slug' => 'wp_todo_plugin',
				'page_title' => 'Sub 03',
				'menu_title' => 'Sub 03',
				'capability' => 'manage_options',
				'menu_slug'  => 'sub_03',
				'callback'   => function() {  },
			),
		);
	}

	public function register() {
		$this->settings->add_pages( $this->pages )->with_sub_page( 'General' )->add_sub_pages( $this->sub_pages )->register();
	}
}