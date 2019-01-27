<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../template.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_View' ) ) {

        abstract class TIE_View extends TIE_Template {

            public function __construct() {

                parent::__construct();

                $this->load_project_specific_implementations();

            }

            protected function load_project_specific_implementations() {

                foreach( glob( GILAD_THEME_FILES_PUBLIC . "/classes/assemblies/*.php" ) as $file ) {

                    require_once( $file );

                }

            }

        }

    }
