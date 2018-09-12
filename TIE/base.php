<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! defined( 'GILAD_DEBUG_IN_SOURCE' ) ) define( 'GILAD_DEBUG_IN_SOURCE', true );

    if ( ! defined( 'GILAD_ENVIRONMENT' ) )     define( 'GILAD_ENVIRONMENT',  'LOCALHOST' );

    if ( ! defined( 'GILAD_ID_TGM' ) )          define( 'GILAD_ID_TGM', 'UNSPECIFIED_GTM_CONTAINER_ID' );

    if ( ! defined( 'GILAD_PATH_' ) )           define( 'GILAD_PATH_', get_stylesheet_directory() . '' );

    if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )   define( 'GILAD_WEBSITE_PHASE',    '' );

    if ( ! class_exists( __NAMESPACE__ . 'Base' ) ) {

        abstract class Base {

            public function __construct() {

                $this->something();

            }

            protected function something() {

            	//

            }

        }

	}
