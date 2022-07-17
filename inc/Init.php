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

        );
        return $classes;
    }

    public static function register_classes()
    {
        $classes = self::register_classes();
        foreach ( $classes as $class ) {
            $class = self::instantiate( $class );
            ( method_exists( $class, 'register' ) ) ? $class->register() : null;
        }
    }

    public static function instantiate( $class )
    {
        $class = new $class();
        return $class;
    }
}