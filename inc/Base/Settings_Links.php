<?php
/**
 * @package wp-todo
 */

namespace Inc\Base;

class Settings_Links
{
    protected $plugin_name;

    public function __construct()
    {
        $this->plugin_name = PLUGIN_NAME;
    }

    public function register()
    {

    }

    public function settings_links( $links )
    {
        $settings_link = '<a href="admin.php?page=wp_todo_plugin">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
    }
}