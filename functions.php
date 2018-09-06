<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! defined( 'GILAD_TGM_CONTAINER_ID' ) ) define( 'GILAD_TGM_CONTAINER_ID', 'UNSPECIFIED_GTM_CONTAINER_ID' );
    if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )    define( 'GILAD_WEBSITE_PHASE',    '' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Core' ) ) {

        class Theme_Core {

            private $theme_name;

            private $theme_version;

            public static $object_counter = 0;

            public function __construct() {

                $this->set_theme_name();
                $this->set_theme_version();

                if ( is_admin() ) {

                    require_once( get_stylesheet_directory() . '/admin/php/loaders/class-admin-resources.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-admin.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-media.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-navigation.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-support.php' );

                    $admin_resources    = new Admin_Resources;
                    $theme_admin        = new Theme_Admin;
                    $theme_media        = new Theme_Media;
                    $theme_navigation   = new Theme_Navigation;
                    $theme_support      = new Theme_Support;

                } else {

                    require_once( get_stylesheet_directory() . '/public/php/class-public-hooks.php' );
                    require_once( get_stylesheet_directory() . '/public/php/loaders/class-public-resources.php' );
                    require_once( get_stylesheet_directory() . '/public/php/theme/class-theme-navigation.php' );

                    require_once( get_stylesheet_directory() . '/public/php/class-public-utilities.php' );

                    $public_hooks      = new Public_Hooks;
                    $public_resources  = new Public_Resources;
                    $theme_navigation   = new Theme_Navigation;

                }

//              require_once( get_stylesheet_directory() . '/common/php/types/class-cpt-example.php' );
//              $cpt_example = new CPT_Example;

                self::$object_counter++;

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            public function get_theme_name() {
                return $this->theme_name;
            }

            public function get_theme_version() {
                return $this->theme_version;
            }

            protected function set_theme_name() {
                $theme_object = wp_get_theme();
                $this->theme_name = $theme_object->get( 'Name' );
            }

            protected function set_theme_version() {
                $theme_object = wp_get_theme();
                $this->theme_version = $theme_object->get( 'Version' );
            }

        }

    }

    $theme_core = new Theme_Core();
