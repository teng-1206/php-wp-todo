<?php
/**
 * @package wp-todo
 */

namespace Inc\Base;

class Enqueue
{
    public function register()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function enqueue()
    {
        wp_enqueue_style( 'wp-todo-css', PLUGIN_URL . 'assets/css/wp-todo-css.css' );
		wp_enqueue_script( 'wp-todo-js', PLUGIN_URL . 'assets/js/wp-todo-js.js' );
    }
}