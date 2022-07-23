<?php
/**
 * @package wp-todo
 */

namespace Inc;

final class init
{
    public static function get_classes()
    {
        $classes = array(
            Base\Custom_Post_Type::class,
            Base\Enqueue::class,
            Base\Settings_Links::class,
            Pages\Admin::class
        );
        return $classes;
    }

    public static function register_classes()
    {
        $classes = self::get_classes();
        foreach ( $classes as $class ) {
            $class = self::instantiate( $class );
            ( method_exists( $class, 'register' ) ) ? $class->register() : null;
        }
    }

    public static function instantiate( $class )
    {
        $new_class = new $class();
        return $new_class;
    }
}