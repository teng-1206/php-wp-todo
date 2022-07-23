<?php
/**
 * @package wp-todo
 */

namespace Inc\Base;

use \Inc\Base\Base_Controller;

class Enqueue extends Base_Controller
{
    public function register()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function enqueue()
    {
        wp_enqueue_style( 'wp-todo-css', $this->plugin_url . 'assets/css/wp-todo-css.css' );
		wp_enqueue_script( 'wp-todo-js', $this->plugin_url . 'assets/js/wp-todo-js.js' );
    }
}