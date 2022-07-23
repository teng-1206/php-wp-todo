<?php
/**
 * @package wp-todo
 */

namespace Inc\Api;

class Settings_Api
{

    public $admin_pages = array();
    public $admin_sub_pages = array();

    public function register()
    {
        if ( !empty( $this->admin_pages ) ) 
        {
            add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
        }
    }

    public function add_pages( array $pages )
    {
        $this->admin_pages = $pages;
        return $this;
    }

    public function add_sub_pages( array $sub_pages )
    {
        $this->admin_sub_pages = array_merge( $this->admin_sub_pages, $sub_pages );
        return $this;
    }

    public function with_sub_page( string $title = null )
    {
        if ( empty( $this->admin_pages ) )
        {
            return $this;
        }

        $admin_page = $this->admin_pages[ 0 ];

        $sub_pages = array(
            array(
                'parent_slug' => $admin_page[ 'menu_slug' ],
                'page_title'  => $admin_page[ 'page_title' ],
                'menu_title'  => ( $title ) ? $title : $admin_page[ 'menu_title' ],
                'capability'  => $admin_page[ 'capability' ],
                'menu_slug'   => $admin_page[ 'menu_slug' ],
                'callback'    => function() { echo 'sub page'; },
            ),
        );

        $this->admin_sub_pages = $sub_pages;
        
        return $this;
    }

    public function add_admin_menu()
    {
        foreach ( $this->admin_pages as $page )
        {
            add_menu_page( $page[ 'page_title' ], $page[ 'menu_title' ], $page[ 'capability' ], $page[ 'menu_slug' ], $page[ 'callback' ], $page[ 'icon_url' ], $page[ 'position' ] );
        }
        foreach ( $this->admin_sub_pages as $sub_page )
        {
            add_submenu_page( $sub_page[ 'parent_slug' ], $sub_page[ 'page_title' ], $sub_page[ 'menu_title' ], $sub_page[ 'capability' ], $sub_page[ 'menu_slug' ], $sub_page[ 'callback' ] );
        }
    }
}