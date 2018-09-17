<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../toolset.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Shell' ) ) {

        abstract class TIE_Shell extends TIE_Toolset {

            protected $view;

            public function __construct( $view ) {

                parent::__construct();

                $this->set_view( $view );

            }

            public function get_view() {

                $view = $this->view;

                $public_view = get_stylesheet_directory() . '/public/views/class-view-' . $view;
                $tie_view    = GILAD_TIE . '/app/views/class-view-' . $view;

                if ( file_exists( $public_view ) ) {
                    require_once( $public_view );
                } else {
                    require_once( $tie_view );
                }

            }

            public function set_view( $view ) {

                $this->view = $view;

            }

        }

    }