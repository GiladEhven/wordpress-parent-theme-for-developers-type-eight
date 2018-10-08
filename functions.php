<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_CLASS' ) )    define( 'GILAD_ENABLE_SCRIBE_FOR_CLASS',    true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_QUERY' ) )    define( 'GILAD_ENABLE_SCRIBE_FOR_QUERY',    true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_REST' ) )     define( 'GILAD_ENABLE_SCRIBE_FOR_REST',     true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_VIEW' ) )     define( 'GILAD_ENABLE_SCRIBE_FOR_VIEW',     true );

    if ( ! defined( 'GILAD_ENVIRONMENT' ) )                define( 'GILAD_ENVIRONMENT',                'PRODUCTION' );

    if ( ! defined( 'GILAD_ID_TGM' ) )                     define( 'GILAD_ID_TGM',                     'UNSPECIFIED_GTM_CONTAINER_ID' );

    if ( ! defined( 'GILAD_PATH_CHILD' ) )                 define( 'GILAD_PATH_CHILD',                 get_stylesheet_directory() );
    if ( ! defined( 'GILAD_PATH_PARENT' ) )                define( 'GILAD_PATH_PARENT',                get_template_directory() );
    if ( ! defined( 'GILAD_PATH_PLUGINS' ) )               define( 'GILAD_PATH_PLUGINS',               '' );
    if ( ! defined( 'GILAD_PATH_MUP' ) )                   define( 'GILAD_PATH_MUP',                   '' );
    if ( ! defined( 'GILAD_PATH_CONTENT' ) )               define( 'GILAD_PATH_CONTENT',               '' );

    if ( ! defined( 'GILAD_TIE' ) )                        define( 'GILAD_TIE',                        get_stylesheet_directory() . '/TIE' );
    if ( ! defined( 'GILAD_TIE_CLASS_BASE' ) )             define( 'GILAD_TIE_CLASS_BASE',             get_stylesheet_directory() . '/TIE/base.php' );
    if ( ! defined( 'GILAD_TIE_CLASS_CPT' ) )              define( 'GILAD_TIE_CLASS_CPT',              get_stylesheet_directory() . '/TIE/base/cms/cpt.php' );
    if ( ! defined( 'GILAD_TIE_CLASS_USER' ) )             define( 'GILAD_TIE_CLASS_USER',             get_stylesheet_directory() . '/TIE/base/cms/user.php' );

    if ( ! defined( 'GILAD_URL_CHILD' ) )                  define( 'GILAD_URL_CHILD',                  get_stylesheet_directory_uri() );
    if ( ! defined( 'GILAD_URL_PARENT' ) )                 define( 'GILAD_URL_PARENT',                 get_template_directory_uri() );

    if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )              define( 'GILAD_WEBSITE_PHASE',              '' );

    if ( ! defined( 'GILAD_SEPARATOR_SHELL_END' ) )        define( 'GILAD_SEPARATOR_SHELL_END',        '                        <!--  ========================================================================================================================' . "\r\n" . '                                =========================================================  END SHELL  ========================================================' . "\r\n" . '                                =========================================================================================================================  -->' . "\r\n" );
    if ( ! defined( 'GILAD_SEPARATOR_SHELL_START' ) )      define( 'GILAD_SEPARATOR_SHELL_START',      '                <!--  ========================================================================================================================' . "\r\n" . '                                ======================================  START SHELL: APP / SHELLS / [DEFAULT] SITEWIDE  ======================================' . "\r\n" . '                                =========================================================================================================================  -->' );



    if ( ! class_exists( __NAMESPACE__ . 'Theme_Core' ) ) {

        class Theme_Core {

            public function __construct() {

                if ( is_admin() ) {

            //      require_once( get_stylesheet_directory() . '/admin/php/loaders/class-admin-resources.php' );
            //      require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-admin.php' );
            //      require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-media.php' );
            //      require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-navigation.php' );
            //      require_once( get_stylesheet_directory() . '/admin/php/theme/class-theme-support.php' );

            //      $admin_resources  = new Admin_Resources;
            //      $theme_admin      = new Theme_Admin;
            //      $theme_media      = new Theme_Media;
            //      $theme_navigation = new Theme_Navigation;
            //      $theme_support    = new Theme_Support;

                    // ---------------------------------------------------------------------------------------- //
                    // -------------------------- TODO: MIGRATE INWARD (MOST TO TIE) -------------------------- //
                    // ---------------------------------------------------------------------------------------- //

                    add_filter( 'admin_footer_text', function() {

                        // TODO: Customize messages for different user caps (and user ID's?)

                        // TODO: Include default message + passable and/or key settable

                        echo 'WordPress Theme Starter Type Eight';
                    });

                    // ---------------------------------------------------------------------------------------- //

                    add_action( 'admin_menu', function() {

                        global $menu;

                        $restricted = array
                        (
                    //      __('Dashboard'),
                    //      __('Posts'),
                    //      __('Media'),
                    //      __('Links'),
                    //      __('Pages'),
                    //      __('Appearance'),
                    //      __('Tools'),
                    //      __('Users'),
                    //      __('Settings'),
                    //      __('Comments'),
                    //      __('Plugins')
                        );

                        end ($menu); 
                         
                        while ( prev( $menu ) ) {

                            $value = explode( ' ', $menu[key($menu)][0] ); 

                            if( in_array( $value[0] != NULL?$value[0]:"" , $restricted ) ) {

                                unset($menu[key($menu)]);

                            }

                        } 

                    });

                    // ---------------------------------------------------------------------------------------- //

                    add_action( 'admin_menu', function() {
                //      global $submenu;
                //      unset( $submenu['index.php'][10] );           // Updates
                //      unset( $submenu['themes.php'][5] );           // Themes
                //      unset( $submenu['options-general.php'][15] ); // Writing
                //      unset( $submenu['options-general.php'][25] ); // Discussion
                    });

                    // ---------------------------------------------------------------------------------------- //

                    add_action( 'admin_menu', function() {

                        // TODO: Check user caps and/or ID/s
                        // TODO: Invoke/enable/disable via key? Else?

                        remove_action( 'admin_notices', 'update_nag', 3 );
                    });

                    // ---------------------------------------------------------------------------------------- //

                    add_action( 'load-page-new.php', 'add_help_content' );
                    add_action( 'load-page.php', 'add_help_content' );

                    function add_help_content() { 

                        add_filter('contextual_help','custom_page_help'); 

                    }

                    function custom_page_help( $help ) { 

                        // Keep/echo existing help content:
                        echo $help; 

                        // Add/echo new/custom content
                        echo "<h5>Custom Help Content</h5>";
                        echo "<p>This is custom help content...</p>"; 

                        // TODO: Replace "manual" echo with check for file/view/content file, and require_once if found
                        // TODO: Color help tab

                    }

                    // ---------------------------------------------------------------------------------------- //

                    function the_breadcrumb() {

                        echo '<ul id="crumbs">';

                        if (!is_home()) {

                            echo '<li><a href="';
                            echo get_option('home');
                            echo '">';
                            echo 'Home';
                            echo "</a></li>";

                            if (is_category() || is_single()) {

                                echo '<li>';
                                the_category(' </li><li> ');

                                if (is_single()) {

                                    echo "</li><li>";
                                    the_title();
                                    echo '</li>';

                                    }

                            } elseif ( is_page() ) {

                                echo '<li>';
                                echo the_title();
                                echo '</li>';

                            }

                        }
                     
                        elseif ( is_tag() )    { single_tag_title(); }

                        elseif ( is_day() )    { echo "<li>Archive for "; the_time('F jS, Y'); echo '</li>'; }

                        elseif ( is_month() )  { echo "<li>Archive for "; the_time('F, Y');    echo '</li>'; }

                        elseif ( is_year() )   { echo "<li>Archive for "; the_time('Y');       echo '</li>'; }

                        elseif ( is_author() ) { echo "<li>Author Archive"; echo'</li>'; }

                        elseif ( isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>'; }

                        elseif ( is_search())  { echo"<li>Search Results"; echo'</li>'; }

                        echo '</ul>';

                    }

                    // ---------------------------------------------------------------------------------------- //

                    add_action( 'admin_print_styles', function() {
                        echo '
                        <style type="text/css"> 
                            #editorcontainer textarea#content {
                                font-family: Monaco, Consolas, \"Andale Mono\", \"Dejavu Sans Mono\", monospace;
                                font-size: 14px;
                                color:#333;
                            }
                        </style>
                        ';
                    });

                    // ---------------------------------------------------------------------------------------- //

                    add_action( 'publish_post', function() {

                        global $post;
                        $title = $post->post_title; 
                         
                        if (str_word_count( $title ) >= 10 ) {
                            wp_die( __( 'Error: Post title too long! Maximum word count exceeded!' ) ); 
                        }

                    }); 

                    // ---------------------------------------------------------------------------------------- //

                    // ALSO: GWP

                    // ALSO: http://www.wprecipes.com/how-to-enlight-searched-text-in-search-results

                    // ---------------------------------------------------------------------------------------- //

                } else {

                    // IF IS NOT ADMIN

                }

            }

            public function requirements() {

                // TYPE     MANDATE                 PRIMARY (MUST EXIST)         SECONDARIES (IF EXISTS)    RECOMMENDATIONS: Performance, Security, SEO

                // One      Mono Object             None                         ACF

                // Two      No Shells, No Views     None                         ACF

                // Three    Native API's            None                         ACF

                // Four     Tavnit                  None                         ACF

                // Five     Timber                  Timber                       ACF

                // Six      ACF Page Builder        ACF

                // Seven    BB                      Beaver Builder               ACF

                // Eight    Strings                 None                         ACF

                // Nine     Gutenberg               Gutenberg                    ACF

                // Ten      ?

            }

        }

    }

    $theme_core = new Theme_Core();
