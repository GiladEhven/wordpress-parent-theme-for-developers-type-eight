<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Navigation' ) ) {

        class Theme_Navigation {

            public static $object_counter = 0;

            public function __construct() {

                $this->menus();

                self::$object_counter++;

            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function menus() {

                register_nav_menus
                (
                    array
                    (
                        'header-menu' => 'Header Menu',
                        'footer-menu' => 'Footer Menu',
                    )
                );

            }

        }

    }
