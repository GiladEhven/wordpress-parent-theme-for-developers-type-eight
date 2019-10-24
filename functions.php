<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    class TypeEight {

        public function __construct() {

            if ( is_admin() ) $this->admin();

            $this->constants();

            $this->harden_wordpress();

            $this->support();

        }

        public function admin() {

            $this->constants();

            add_action( 'current_screen', function() {

                $current_screen = get_current_screen();
            
                if ( $current_screen->id === "profile" ) {
            
                    require_once( get_template_directory() . '/CORE/core/website/screen/other/profile.php' );
            
                } else {

                    require_once( get_template_directory() . '/CORE/core/website/screen/other.php' );

                }

            });

        }

        public function harden_wordpress() {

            // Force login failures of all types to return the same non-telling error:

            add_filter( 'login_errors', function() {

                return 'Oops, that\'s not supposed to happen! Are you sure you belong here?';

            });

            // Reject malicious requests:

            global $user_ID;
            
            if ( $user_ID ) {

                if( !current_user_can( 'administrator' ) ) {

                    if ( strlen( $_SERVER['REQUEST_URI'] ) > 255 ||
                         stripos( $_SERVER['REQUEST_URI'], "eval(" ) ||
                         stripos( $_SERVER['REQUEST_URI'], "CONCAT" ) ||
                         stripos( $_SERVER['REQUEST_URI'], "UNION+SELECT" ) ||
                         stripos( $_SERVER['REQUEST_URI'], "base64" ) ) {
                             @header( "HTTP/1.1 414 Request-URI Too Long" );
                             @header( "Status: 414 Request-URI Too Long" );
                             @header( "Connection: Close" );
                             @exit;
                    }

                }

            }

        }

        public function constants() {

            define( 'TYPE8_CORE_CORE',     get_template_directory() . '/CORE/core' );
            define( 'TYPE8_CORE_DOCUMENT', get_template_directory() . '/CORE/core/website/template/document' );
            define( 'TYPE8_CORE_ERROR',    get_template_directory() . '/CORE/core/website/template/error' );
            define( 'TYPE8_CORE_FRONT',    get_template_directory() . '/CORE/core/website/template/front' );
            define( 'TYPE8_CORE_LIST',     get_template_directory() . '/CORE/core/website/template/list' );
            define( 'TYPE8_CORE_PARTIAL',  get_template_directory() . '/CORE/core/website/template/partial' );
            define( 'TYPE8_CORE_SCREEN',   get_template_directory() . '/CORE/core/website/screen' );
            define( 'TYPE8_CORE_TEMPLATE', get_template_directory() . '/CORE/core/website/template' );
            define( 'TYPE8_CORE_WEBSITE',  get_template_directory() . '/CORE/core/website' );

            define( 'TYPE8_UTILITIES',     get_template_directory() . '/CORE/utilities.php' );

            if ( ! defined( 'TYPE8_SET_COMMENTS_STYLE' ) )              define( 'TYPE8_SET_COMMENTS_STYLE',              'ol' );
            if ( ! defined( 'TYPE8_SET_COMMENTS_AVATAR_SIZE' ) )        define( 'TYPE8_SET_COMMENTS_AVATAR_SIZE',        '64' );
            if ( ! defined( 'TYPE8_SET_COMMENTS_REVERSE_CHILDREN' ) )   define( 'TYPE8_SET_COMMENTS_REVERSE_CHILDREN',   false );
            if ( ! defined( 'TYPE8_SET_COMMENTS_TYPE' ) )               define( 'TYPE8_SET_COMMENTS_TYPE',               'comment' );

        }

        public function support() {

            add_action( 'after_setup_theme', function() {

                add_editor_style( get_stylesheet_directory_uri() . '/statics/css/editor.css' );

                add_theme_support( 'align-wide' );

                add_theme_support( 'automatic-feed-links' );

                add_theme_support( 'editor-styles' );

                add_theme_support(
                    'html5',
                    array(
                        'caption',
                        'comment-form',
                        'comment-list',
                        'gallery',
                        'search-form',
                    )
                );

                add_theme_support(
                    'post-thumbnails',
                    array(
                        'page',
                        'post',
                    )
                );

                add_theme_support( 'responsive-embeds' );

                add_theme_support( 'title-tag' );

            } );
        
            add_action( 'init', function() {
        
                add_post_type_support( 'page', 'excerpt' );
        
            } );
        
        }

    }

    $type_eight = new TypeEight();
