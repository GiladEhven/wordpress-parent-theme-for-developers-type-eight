<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

            protected $data = array
            (
                'error' => array
                (
                    'code'        => 'E0101',
                    'message'     => 'NO DATA PUSHED FROM TEMPLATE!',
                    'description' => 'Template [file] class has been instantiated, but no data captured or pushed in array via [set_data] to the [data] property. This means that the object representing this WordPress Template (type/role) contains no content for display on the front end. Note also that this error data is generated within the same [data] property in the form of default field value (overwritten/replaced automatically upon data push from template into [set_data] instance method.',
                    'resolution'  => 'At template file, any time after template class instantiation, call [set_data] and pass array of content data.',
                )
            );

            protected $view;

            public function __construct() {

                parent::__construct();

        //      $this->cleanup_scripts();

            }

            public function get_data() {

                return $this->data;

            }

            public function build_and_render( $view, $shell ) {

                $generic_shell = GILAD_TIE . '/app/shells/class-shell-sitewide.php';
                $public_shell  = get_stylesheet_directory() . '/public/shells/class-shell-' . $shell . '.php';
                $tie_shell     = GILAD_TIE . '/app/shells/class-shell-' . strtolower( $shell ) . '.php';

                if ( file_exists( $public_shell ) ) {
                    require_once( $public_shell );
                } elseif ( file_exists( $tie_shell ) ) {
                    require_once( $tie_shell );
                } else {
                    require_once( $generic_shell );
                }

                $shell_class = __NAMESPACE__ . '\Shell_' . $shell;

                get_header();

                ?>

                                <!--  ------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                --------------------------                                                                          --------------------------
                                --------------------------           START TEMPLATE: BASE / INTERFACE / PUBLIC / Template           --------------------------
                                --------------------------                                                                          --------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                -------------------------------------------------------------------------------------------------------------------------  -->



                <?php $shell_object = new $shell_class( $view ); ?>



                                <!--  ------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                --------------------------                                                                          --------------------------
                                --------------------------                               END TEMPLATE                               --------------------------
                                --------------------------                                                                          --------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                -------------------------------------------------------------------------------------------------------------------------  -->

                <?php

                get_footer();

            }

            public function set_data( $data ) {

                $this->data = $data;

            }

            public function cleanup() {

                add_action( 'wp_enqueue_scripts', function() {
                    wp_deregister_script( 'wp-embed' );
                });

                // TODO: Move first two cleanups to TIE_Screen or similar

                remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
                remove_action( 'admin_print_styles', 'print_emoji_styles' );

                remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
                remove_action( 'wp_print_styles', 'print_emoji_styles' );

            }

            public function enable_bootstrap( $version, $resource ) {

                $popper = 0;

                switch ( $version ) {

                    case '4.1.3':    $popper = '1.14.3';    break;
                    case '4.1.3':    $popper = '1.14.3';    break;

                    default:         $popper = '1.14.3';    break;

                }

                add_action( 'wp_enqueue_scripts', function() use( $version, $resource, $popper ) {

                    if ( ( $resource == 'both' ) || ( $resource == 'css' ) ) {

                        if ( strtolower( GILAD_ENVIRONMENT ) == 'localhost' ) {
                            $dependencies = array();
                            $for          = 'all';
                            $handle       = 'localhost-bootstrap';
                            $source       = get_stylesheet_directory_uri() . '/public/styles/localhost/bootstrap.css';
                        } else {
                            $dependencies = array();
                            $handle       = 'bootstrap';
                            $source       = 'https://stackpath.bootstrapcdn.com/bootstrap/' . $version . '/css/bootstrap.min.css';
                        }

                        wp_enqueue_style( $handle, $source, $dependencies );

                    }

                    if ( ( $resource == 'both' ) || ( $resource == 'js' ) ) {

                        if ( strtolower( GILAD_ENVIRONMENT ) == 'localhost' ) {

                            $deps_bootstrap   = array( 'localhost-jquery', 'localhost-popper' );
                            $handle_bootstrap = 'localhost-bootstrap';
                            $source_bootstrap = get_stylesheet_directory_uri() . '/public/scripts/localhost/bootstrap.js';

                            $deps_popper      = array( 'localhost-jquery' );
                            $handle_popper    = 'localhost-popper';
                            $source_popper    = get_stylesheet_directory_uri() . '/public/scripts/localhost/popper.js';

                        } else {

                            $deps_bootstrap   = array( 'jquery', 'popper' );
                            $handle_bootstrap = 'bootstrap';
                            $source_bootstrap = 'https://stackpath.bootstrapcdn.com/bootstrap/' . $version . '/js/bootstrap.min.js';

                            $deps_popper      = array( 'jquery' );
                            $handle_popper    = 'popper';
                            $source_popper    = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/' . $popper . '/umd/popper.min.js';

                        }

                        wp_enqueue_script( $handle_bootstrap, $source_bootstrap, $deps_bootstrap );
                        wp_enqueue_script( $handle_popper, $source_popper, $deps_popper );
                    }

                });

                add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) use( $version, $popper ) {

                    $integrity = '';
                    $payload   = 0;

                    if ( ( $handle == 'bootstrap' ) || ( $handle == 'popper' ) ) {

                        if ( ( $handle == 'bootstrap' ) ) {

                            if (   $version == '3.3.7' ) $payload = 101;
                            if (   $version == '4.1.3' ) $payload = 102;

                            switch ( $payload ) {

                                case 101: $integrity = 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa'; break;
                                case 102: $integrity = 'sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy'; break;
                                default:  $integrity = '';

                            }

                        } elseif ( ( $handle == 'popper' ) ) {

                            if (   $popper == '1.14.3' ) $payload = 201;

                            switch ( $payload ) {

                                case 201: $integrity = 'sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49'; break;
                                default:  $integrity = '';

                            }

                        }

                        $tag = '<script id="' . $handle . '-js" src="' . $src . '" type="text/javascript" crossorigin="anonymous" integrity="' . $integrity . '"></script>' . "\n";

                    }

                    return $tag;

                }, 10, 3 );

            }

            protected function load_document_resources( $ids, $resource ) {

                // $ids  = array()

                // $resource = 'css', 'js', or 'both'

            }

            protected function load_main_resources( $resource ) {

                // $resource = 'css', 'js', or 'both'

            }

            protected function load_template_resources( $template, $resource ) {

                // Can we get $template automatically instead of passing it?

                // $resource = 'css', 'js', or 'both'

            }

            protected function load_type_resources( $type, $resource ) {

                // Can we get $type automatically instead of passing it?

                // $resource = 'css', 'js', or 'both'

            }

            protected function render( $variable ) {

                //  TODO: Account for captured sub-arrays no longer called $data[]...

                if ( isset( $this->packaged_data[$variable] ) ) {

                    echo $this->packaged_data[$variable];

                } else {

                    echo '<span class="gilad-render-none">Not Found: [ ' . $variable . ' ]</span>';

                }

            }

            protected function update_jquery( $version, $flavor ) {

                add_action( 'wp_enqueue_scripts', function() use( $version, $flavor ) {

                    if ( $flavor ) $flavor = $flavor . '.';

                    wp_deregister_script( 'jquery' );
                    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-' . $version . '.' . $flavor . 'min.js', array(), 'CURRENT-NEW', true );
                    wp_enqueue_script( 'jquery' );

                });

                add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) use( $version, $flavor ) {

                    $integrity = '';
                    $payload = 0;

                    if ( $handle == 'jquery' ) {

                        if (   $version == '1.12.4' )                             $payload = 101;
                        if (   $version == '2.2.4'  )                             $payload = 102;
                        if (   $version == '3.3.1'  )                             $payload = 103;
                        if ( ( $version == '3.3.1'  )  && ( $flavor == 'slim' ) ) $payload = 104;

                        switch ( $payload ) {

                            case 101: $integrity   = 'sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ='; break;
                            case 102: $integrity   = 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44='; break;
                            case 103: $integrity   = 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8='; break;
                            case 104: $integrity   = 'sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E='; break;
                            default:  $integrity   = '';

                        }

                        $tag = '<script id="' . $handle . '" src="' . $src . '" type="text/javascript" crossorigin="anonymous" integrity="' . $integrity . '"></script>' . "\n";

                    }

                    return $tag;

                }, 10, 3 );

            }

            //  UGLY!

            //  -------------------------------------  BEGIN AND END : TEMPLATES  -------------------------------------  //

            public function gilad_body_begin()           { do_action( 'gilad_body_begin' );           }

            public function gilad_body_end()             { do_action( 'gilad_body_end' );             }

            public function gilad_footer_begin()         { do_action( 'gilad_footer_begin' );         }

            public function gilad_footer_end()           { do_action( 'gilad_footer_end' );           }

            public function gilad_header_begin()         { do_action( 'gilad_header_begin' );         }

            public function gilad_header_end()           { do_action( 'gilad_header_end' );           }

            public function gilad_main_begin()           { do_action( 'gilad_main_begin' );           }

            public function gilad_main_end()             { do_action( 'gilad_main_end' );             }

            public function gilad_wrapper_begin()        { do_action( 'gilad_wrapper_begin' );        }

            public function gilad_wrapper_end()          { do_action( 'gilad_wrapper_end' );          }

            //  -----------------------------------  BEGIN AND END : DEFAULT LOOPS  -----------------------------------  //

            public function gilad_else_posts_begin()     { do_action( 'gilad_else_posts_begin' );     }

            public function gilad_else_posts_end()       { do_action( 'gilad_else_posts_end' );       }

            public function gilad_if_posts_begin()       { do_action( 'gilad_if_posts_begin' );       }

            public function gilad_if_posts_end()         { do_action( 'gilad_if_posts_end' );         }

            public function gilad_while_posts_begin()    { do_action( 'gilad_while_posts_begin' );    }

            public function gilad_while_posts_end()      { do_action( 'gilad_while_posts_end' );      }

            //  ------------------------------------------  BEFORE AND AFTER  -----------------------------------------  //

            public function gilad_gtm_after()            { do_action( 'gilad_gtm_after' );            }

            public function gilad_gtm_before()           { do_action( 'gilad_gtm_before' );           }

            //  --------------------------------------------  ADD ANOTHER  --------------------------------------------  //

            public function gilad_link_add()             { do_action( 'gilad_link_add' );             }

            public function gilad_meta_add()             { do_action( 'gilad_meta_add' );             }

            //  -------------------------------------------------------------------------------------------------------  //

        }

    }
