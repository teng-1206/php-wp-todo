<?php
/**
 * @package wp-todo
 */

namespace Inc\Base;

use \Inc\Base\Base_Controller;

class Settings_Links extends Base_Controller
{

    public function register()
    {
        add_filter( "plugin_action_links_$this->plugin_name", array( $this, 'settings_links' ) );
    }

    public function settings_links( $links )
    {
        $settings_link = '<a href="admin.php?page=wp_todo_plugin">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
    }
}