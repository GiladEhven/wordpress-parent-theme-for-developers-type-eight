<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Navigation' ) ) {

        class Theme_Navigation {

            public static $object_counter = 0;

            public function __construct() {

                self::$object_counter++;

            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            public static function footer( $copyright_start, $copyright_owner, $copyright_level ) {

if ( has_nav_menu( 'footer-menu' ) ) {
                $locations = get_nav_menu_locations();
                $menu      = wp_get_nav_menu_object( $locations['footer-menu'] );
                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
}
                ?>

                <!--  NAV MARKUP AND LOGIC HERE (UNLESS MARKUP CAN BE PUSHED TO VIEW)  --><?php

            }


            public static function header() {

if ( has_nav_menu( 'header-menu' ) ) {
                $locations = get_nav_menu_locations();
                $menu      = wp_get_nav_menu_object( $locations['header-menu'] );
                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
}
                ?>

                <!--  NAV MARKUP AND LOGIC HERE (UNLESS MARKUP CAN BE PUSHED TO VIEW)  --><?php

            }

        }

    }
