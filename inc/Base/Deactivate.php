<?php
/**
 * @package wp-todo
 */

namespace Inc\Base;

class Deactivate
{
    public static function Deactivate()
    {
        flush_rewrite_rules();
    }
}