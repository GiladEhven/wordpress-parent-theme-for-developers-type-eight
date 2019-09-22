<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    class TypeEight {

        public function __construct() {
            define( 'TYPE8_CORE_CORE',     get_stylesheet_directory() . '/CORE/core' );
            define( 'TYPE8_CORE_DOCUMENT', get_stylesheet_directory() . '/CORE/core/website/template/document' );
            define( 'TYPE8_CORE_LIST',     get_stylesheet_directory() . '/CORE/core/website/template/list' );
            define( 'TYPE8_CORE_TEMPLATE', get_stylesheet_directory() . '/CORE/core/website/template' );
            define( 'TYPE8_CORE_WEBSITE',  get_stylesheet_directory() . '/CORE/core/website' );
        }

    }

    $type_eight = new TypeEight();
