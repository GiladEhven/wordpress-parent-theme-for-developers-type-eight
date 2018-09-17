<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../base.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Interface' ) ) {

        abstract class TIE_Interface extends TIE_Base {

            protected $text_domain;

            protected $theme_version;

            public function __construct() {

                parent::__construct();

                $this->set_text_domain();
                $this->set_theme_version();

            }

/*
            protected function set_theme_descriptors() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }
*/

            protected function set_text_domain() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
//              $this->theme_version = $theme_object->get( 'Version' );
            }

            protected function set_theme_version() {
                $theme_object = wp_get_theme();
//              $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }


        }

    }
