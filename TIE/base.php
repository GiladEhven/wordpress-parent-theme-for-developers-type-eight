<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Base' ) ) {

        abstract class TIE_Base {

            protected $object_counter = 0;

            public function __construct() {

                $this->object_counter++;

//              $this->load_project_specific_implementations();

            }

            protected function load_project_specific_implementations() {

                if ( is_admin() ) {

                    //

                    foreach( glob( GILAD_PATH_DIR_ADMIN . "/classes/*.php" ) as $file ) {

                        require_once( $file );

                    }

                    //

                } else {

                    //

                    foreach( glob( GILAD_PATH_DIR_PUBLIC . "/classes/*.php" ) as $file ) {

                        require_once( $file );

                    }

                    //

                }

                //

                foreach( glob( GILAD_PATH_DIR_COMMON . "/classes/*.php" ) as $file ) {

                    require_once( $file );

                }

                //

            }

        }

	}
