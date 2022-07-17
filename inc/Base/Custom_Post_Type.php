<?php
/**
 * @package wp-todo
 */

class Custom_Post_Type
{
    public function register()
    {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

    private function custom_post_type()
    {
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
    }
}