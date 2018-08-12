<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Admin_Resources' ) ) {

        class Admin_Resources {

            private $text_domain;

            private $theme_version;

            public static $object_counter = 0;

            public function __construct() {

                $this->enqueue_css();

                self::$object_counter++;

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            protected function set_theme_descriptors() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            private function enqueue_css() {
                add_action( 'admin_enqueue_scripts', function() {

                    wp_enqueue_style( $this->text_domain . '-main',   get_stylesheet_directory_uri() . '/admin/css/main.css',   array(), $this->theme_version, 'all' );

                    if ( GILAD_WEBSITE_PHASE == 'dev' ) {
                    wp_enqueue_style( $this->text_domain . '-design', get_stylesheet_directory_uri() . '/admin/css/design.css', array(), $this->theme_version, 'all' );
                    }

                });

            }

        }

    }
