<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Admin' ) ) {

        class Theme_Admin {

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                //

                self::$object_counter++;

            }

            //

        }

    }
