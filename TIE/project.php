<?php

	namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Project' ) ) {

        abstract class TIE_Project {

            public    $object_counter     = 0;

            protected $site_fqdn          = '';

            protected $server_os          = '';
            protected $server_type        = '';
            protected $server_version     = '';

            protected $social_facebook    = '';
            protected $social_github      = '';
            protected $social_instagram   = '';
            protected $social_linkedin    = '';
            protected $social_pinterest   = '';
            protected $social_twitter     = '';

            public function __construct() {

                $this->object_counter++;

                $this->constants();
                $this->contacts();
                $this->implementations();
                $this->menus();
                $this->support();

            }

            protected function constants() {

                // ------------------------------------------------------------------------------------------------------------------------------------------- //
                // ----------------------------------------------------  A P P L I C A T I O N   K E Y S  ---------------------------------------------------- //
                // ------------------------------------------------------------------------------------------------------------------------------------------- //

                if ( ! defined( 'GILAD_TGM' ) )                        define( 'GILAD_TGM',                       'UNSPECIFIED_GTM_CONTAINER_ID' );

                if ( ! defined( 'GILAD_CHILD_DIR' ) )                  define( 'GILAD_CHILD_DIR',                 get_stylesheet_directory() );
                if ( ! defined( 'GILAD_CHILD_URL' ) )                  define( 'GILAD_CHILD_URL',                 get_stylesheet_directory_uri() );

                if ( ! defined( 'GILAD_PARENT_DIR' ) )                 define( 'GILAD_PARENT_DIR',                get_template_directory() );
                if ( ! defined( 'GILAD_PARENT_URL' ) )                 define( 'GILAD_PARENT_URL',                get_template_directory_uri() );

                if ( ! defined( 'GILAD_PLUGINS_DIR' ) )                define( 'GILAD_PLUGINS_DIR',               '' );
                if ( ! defined( 'GILAD_PLUGINS_URL' ) )                define( 'GILAD_PLUGINS_URL',               '' );

                if ( ! defined( 'GILAD_PLUGINS_MU_DIR' ) )             define( 'GILAD_PLUGINS_MU_DIR',            '' );
                if ( ! defined( 'GILAD_PLUGINS_MU_URL' ) )             define( 'GILAD_PLUGINS_MU_URL',            '' );

                if ( ! defined( 'GILAD_THEME_FILES_ADMIN' ) )          define( 'GILAD_THEME_FILES_ADMIN',          get_template_directory() . '/admin' );
                if ( ! defined( 'GILAD_THEME_FILES_COMMON' ) )         define( 'GILAD_THEME_FILES_COMMON',         get_template_directory() . '/common' );
                if ( ! defined( 'GILAD_THEME_FILES_PUBLIC' ) )         define( 'GILAD_THEME_FILES_PUBLIC',         get_template_directory() . '/public' );

                if ( ! defined( 'GILAD_TIE' ) )                        define( 'GILAD_TIE',                        get_template_directory() . '/TIE' );
                if ( ! defined( 'GILAD_TIE_CLASS_DOCUMENT' ) )         define( 'GILAD_TIE_CLASS_DOCUMENT',         get_template_directory() . '/TIE/project/interface/template/type/default/document.php' );
                if ( ! defined( 'GILAD_TIE_CLASS_ERROR' ) )            define( 'GILAD_TIE_CLASS_ERROR',            get_template_directory() . '/TIE/project/interface/template/type/default/error.php' );
                if ( ! defined( 'GILAD_TIE_CLASS_FRONT' ) )            define( 'GILAD_TIE_CLASS_FRONT',            get_template_directory() . '/TIE/project/interface/template/type/default/front.php' );
                if ( ! defined( 'GILAD_TIE_CLASS_LIST' ) )             define( 'GILAD_TIE_CLASS_LIST',             get_template_directory() . '/TIE/project/interface/template/type/default/list.php' );
                if ( ! defined( 'GILAD_TIE_CLASS_MEDIA' ) )            define( 'GILAD_TIE_CLASS_MEDIA',            get_template_directory() . '/TIE/project/interface/template/type/default/media.php' );
                if ( ! defined( 'GILAD_TIE_CLASS_PARTIAL' ) )          define( 'GILAD_TIE_CLASS_PARTIAL',          get_template_directory() . '/TIE/project/interface/template/type/default/partial.php' );
                if ( ! defined( 'GILAD_TIE_CLASS_VIEW' ) )             define( 'GILAD_TIE_CLASS_VIEW',             get_template_directory() . '/TIE/project/interface/template/view.php' );

                // ------------------------------------------------------------------------------------------------------------------------------------------- //
                // -----------------------------------------------------  O P E R A T I O N S   K E Y S  ----------------------------------------------------- //
                // ------------------------------------------------------------------------------------------------------------------------------------------- //

                if ( ! defined( 'GILAD_ENVIRONMENT' ) )                define( 'GILAD_ENVIRONMENT',                'PRODUCTION' );

                if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )              define( 'GILAD_WEBSITE_PHASE',              'DEV' );

            }

            protected function contacts() {

                add_filter( 'user_contactmethods', function( $user_contact ) {

                    $user_contact['facebook']  = __( 'Facebook' );
                    $user_contact['github']    = __( 'GitHub' );
                    $user_contact['instagram'] = __( 'Instagram' );
                    $user_contact['linkedin']  = __( 'LinkedIn' );
                    $user_contact['pinterest'] = __( 'Pinterest' );
                    $user_contact['skype']     = __( 'Skype' );
                    $user_contact['twitter']   = __( 'Twitter' );

                    return $user_contact;

                });

            }

            protected function implementations() {

                if ( is_admin() ) {

                    //

                    foreach( glob( GILAD_THEME_FILES_ADMIN . "/classes/*.php" ) as $file ) {

                        require_once( $file );

                    }

                    //

                } else {

                    //

                    foreach( glob( GILAD_THEME_FILES_PUBLIC . "/classes/*.php" ) as $file ) {

                        require_once( $file );

                    }

                    //

                }

                //

                foreach( glob( GILAD_THEME_FILES_COMMON . "/classes/*.php" ) as $file ) {

                    require_once( $file );

                }

                //

            }

            protected function support() {

                add_action( 'after_setup_theme', function() {

                    add_theme_support( 'automatic-feed-links' );

                    add_theme_support(
                        'post-formats',
                        array(
                            'aside',
                            'audio',
                            'chat',
                            'gallery',
                            'image',
                            'link',
                            'quote',
                            'status',
                            'video',
                        )
                    );

                    add_theme_support(
                        'post-thumbnails',
                        array(
                            'gilad-cpt-faq',
                            'gilad-cpt-portfolio',
                            'gilad-cpt-recommend',
                            'gilad-cpt-resume',
                            'gilad-cpt-subscript',
                            'gilad-cpt-testimonia',
                            'page',
                            'post',
                        )
                    );

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

                    add_theme_support( 'title-tag' );

                    add_editor_style( 'admin/css/editor.css' );

                    load_theme_textdomain( 'gilad-ehven', get_template_directory() . '/public/mo' );

                } );

                add_action( 'init', function() {

                    add_post_type_support( 'page', 'excerpt' );

                } );

                add_filter( 'pre_option_link_manager_enabled', '__return_true' );

            }

            protected function filter_title_tag() {

                // TODO: 404, etc...

            }

            protected function menus() {

                register_nav_menus
                (
                    array
                    (
                        'menu-1'  => 'Menu 1',
                        'menu-2'  => 'Menu 2',
                        'menu-3'  => 'Menu 3',
                        'menu-4'  => 'Menu 4',
                        'menu-5'  => 'Menu 5',
                        'menu-6'  => 'Menu 6',
                        'menu-7'  => 'Menu 7',
                        'menu-8'  => 'Menu 8',
                        'menu-9'  => 'Menu 9',
                        'menu-10' => 'Menu 10',
                    )
                );

            }

        }

	}
