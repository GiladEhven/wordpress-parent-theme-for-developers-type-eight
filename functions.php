<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    class TypeEight {

        public function __construct() {

            define( 'TYPE8_CORE_CORE',     get_stylesheet_directory() . '/CORE/core' );
            define( 'TYPE8_CORE_DOCUMENT', get_stylesheet_directory() . '/CORE/core/website/template/document' );
            define( 'TYPE8_CORE_ERROR',    get_stylesheet_directory() . '/CORE/core/website/template/error' );
            define( 'TYPE8_CORE_FRONT',    get_stylesheet_directory() . '/CORE/core/website/template/front' );
            define( 'TYPE8_CORE_LIST',     get_stylesheet_directory() . '/CORE/core/website/template/list' );
            define( 'TYPE8_CORE_TEMPLATE', get_stylesheet_directory() . '/CORE/core/website/template' );
            define( 'TYPE8_CORE_WEBSITE',  get_stylesheet_directory() . '/CORE/core/website' );

            if ( ! defined( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_AREA' ) )   define( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_AREA',   'col-12' );
            if ( ! defined( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_HEADER' ) ) define( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_HEADER', 'col-12' );
            if ( ! defined( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_LIST' ) )   define( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_LIST',   'col-12' );
            if ( ! defined( 'TYPE8_SET_COMMENTS_STYLE' ) )              define( 'TYPE8_SET_COMMENTS_STYLE',              'ol' );
            if ( ! defined( 'TYPE8_SET_COMMENTS_AVATAR_SIZE' ) )        define( 'TYPE8_SET_COMMENTS_AVATAR_SIZE',        '64' );
            if ( ! defined( 'TYPE8_SET_COMMENTS_REVERSE_CHILDREN' ) )   define( 'TYPE8_SET_COMMENTS_REVERSE_CHILDREN',   false );
            if ( ! defined( 'TYPE8_SET_COMMENTS_TYPE' ) )               define( 'TYPE8_SET_COMMENTS_TYPE',               'comment' );
            if ( ! defined( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_FOOTER' ) ) define( 'TYPE8_CSS_CLASSES_FOR_COMMENTS_FOOTER', 'col-12' );

        }

    }

    $type_eight = new TypeEight();
