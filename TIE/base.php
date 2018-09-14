<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_CLASS' ) ) define( 'GILAD_ENABLE_SCRIBE_FOR_CLASS', true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_QUERY' ) ) define( 'GILAD_ENABLE_SCRIBE_FOR_QUERY', true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_REST' ) )  define( 'GILAD_ENABLE_SCRIBE_FOR_REST',  true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_VIEW' ) )  define( 'GILAD_ENABLE_SCRIBE_FOR_VIEW',  true );

    if ( ! defined( 'GILAD_ENVIRONMENT' ) )             define( 'GILAD_ENVIRONMENT',             'LOCALHOST' );

    if ( ! defined( 'GILAD_ID_TGM' ) )                  define( 'GILAD_ID_TGM',                  'UNSPECIFIED_GTM_CONTAINER_ID' );

    if ( ! defined( 'GILAD_PATH_CHILD' ) )              define( 'GILAD_PATH_CHILD',              get_stylesheet_directory() );
    if ( ! defined( 'GILAD_PATH_PARENT' ) )             define( 'GILAD_PATH_PARENT',             get_template_directory() );
    if ( ! defined( 'GILAD_PATH_PLUGINS' ) )            define( 'GILAD_PATH_PLUGINS',            '' );
    if ( ! defined( 'GILAD_PATH_MUP' ) )                define( 'GILAD_PATH_MUP',                '' );
    if ( ! defined( 'GILAD_PATH_CONTENT' ) )            define( 'GILAD_PATH_CONTENT',            '' );

    if ( ! defined( 'GILAD_TIE' ) )                     define( 'GILAD_TIE',                     get_stylesheet_directory() . '/TIE' );
    if ( ! defined( 'GILAD_TIE_CLASS_BASE' ) )          define( 'GILAD_TIE_CLASS_BASE',          get_stylesheet_directory() . '/TIE/base.php' );
    if ( ! defined( 'GILAD_TIE_CLASS_CPT' ) )           define( 'GILAD_TIE_CLASS_CPT',           get_stylesheet_directory() . '/TIE/base/cms/cpt.php' );
    if ( ! defined( 'GILAD_TIE_CLASS_USER' ) )          define( 'GILAD_TIE_CLASS_USER',          get_stylesheet_directory() . '/TIE/base/cms/user.php' );

    if ( ! defined( 'GILAD_URL_CHILD' ) )               define( 'GILAD_URL_CHILD',               get_stylesheet_directory_uri() );
    if ( ! defined( 'GILAD_URL_PARENT' ) )              define( 'GILAD_URL_PARENT',              get_template_directory_uri() );

    if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )           define( 'GILAD_WEBSITE_PHASE',           '' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Base' ) ) {

        abstract class TIE_Base {

            protected $object_counter = 0;

            public function __construct() {

                $this->something();

                $this->object_counter++;

            }

            protected function something() {

            	//

            }

        }

	}
