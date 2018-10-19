<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

            public function __construct() {

                parent::__construct();

            }

            protected function set_body_classes( $shell, $view ) {

                add_filter('body_class', function( array $classes ) use( $shell, $view ) {

                    global
                        $is_chrome,
                        $is_edge,
                        $is_gecko,
                        $is_IE,
                        $is_iphone,
                        $is_lynx,
                        $is_opera,
                        $is_macIE,
                        $is_winIE,
                        $is_NS4,
                        $is_safari;
 
                    if     ( $is_chrome ) $classes[] = 'browser-chrome';
                    elseif ( $is_edge )   $classes[] = 'browser-edge';
                    elseif ( $is_gecko )  $classes[] = 'browser-gecko';
                    elseif ( $is_IE )     $classes[] = 'browser-ie';
                    elseif ( $is_lynx )   $classes[] = 'browser-lynx';
                    elseif ( $is_opera )  $classes[] = 'browser-opera';
                    elseif ( $is_NS4 )    $classes[] = 'browser-ns4';
                    elseif ( $is_safari ) $classes[] = 'browser-safari';
                    else                  $classes[] = 'browser-unknown';

                    if     ( $is_macIE )  $classes[] = 'ie-mac';
                    elseif ( $is_winIE )  $classes[] = 'ie-win';

                    if     ( $is_iphone ) $classes[] = 'mobile-iphone';

                    $classes[] = $shell;
                    $classes[] = $view;

                    return $classes;

                });
            }

            public function build_and_render( $shell, $view, $data ) {

                $generic_shell = GILAD_TIE . '/app/shells/class-shell-sitewide.php';
                $public_shell  = get_stylesheet_directory() . '/public/shells/class-shell-' . $shell . '.php';
                $tie_shell     = GILAD_TIE . '/app/shells/class-shell-' . strtolower( $shell ) . '.php';

                $shell_name    = '';
                $view_name     = pathinfo( 'view-' . $view, PATHINFO_FILENAME );

                if ( file_exists( $public_shell ) ) {
                    require_once( $public_shell );
                    $shell_name = 'shell-project-' . strtolower( $shell );
                } elseif ( file_exists( $tie_shell ) ) {
                    require_once( $tie_shell );
                    $shell_name = 'shell-tie-' . strtolower( $shell );
                } else {
                    require_once( $generic_shell );
                    $shell_name = 'shell-default-sitewide';
                }

                $this->set_body_classes( $shell_name, $view_name );

                $shell_class = __NAMESPACE__ . '\Shell_' . $shell;

                get_header();

                ?>

                                <!--  ------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                --------------------------                                                                          --------------------------
                                --------------------------                           START TEMPLATE SHELL                           --------------------------
                                --------------------------                                                                          --------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                -------------------------------------------------------------------------------------------------------------------------  -->



                <?php $shell_object = new $shell_class( $view, $data ); ?>



                                <!--  ------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                --------------------------                                                                          --------------------------
                                --------------------------                            END TEMPLATE SHELL                            --------------------------
                                --------------------------                                                                          --------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                -------------------------------------------------------------------------------------------------------------------------  -->

                <?php

                get_footer();

            }

            public function cleanup() {

                add_action( 'wp_enqueue_scripts', function() {
                    wp_deregister_script( 'wp-embed' );
                });

                // TODO: Move first two cleanups to TIE_Screen or similar

                remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
                remove_action( 'admin_print_styles', 'print_emoji_styles' );

                remove_action( 'wp_head', 'rsd_link' );
                remove_action( 'wp_head', 'wlwmanifest_link' );
                remove_action( 'wp_head', 'wp_shortlink_wp_head' );
                remove_action( 'wp_head', 'wp_generator' );

                remove_action( 'wp_head', 'start_post_rel_link' );
                remove_action( 'wp_head', 'index_rel_link' );
                remove_action( 'wp_head', 'adjacent_posts_rel_link' );

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

                //  SOURCE  https://www.google.com/search?q=add_filter+style_loader_tag
                //  SOURCE  https://wordpress.stackexchange.com/questions/176077/add-attribute-to-link-tag-thats-generated-through-wp-register-style

                add_filter( 'style_loader_tag', function( $link, $handle ) use( $version ) {

                    $integrity = '';
                    $payload   = 0;

                    if ( $handle == 'bootstrap' ) {

                        if ( $version == '4.1.3' ) $integrity = 'sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO';

                        $link = str_replace( '/>', ' crossorigin="anonymous" integrity="' . $integrity . '" />', $link );

                    }

                    return $link;

                }, 10, 2 );

            }

            public function enable_font_awesome( $version, $collections ) {

                if ( in_array( 'all', $collections ) ) {

                    add_action( 'wp_enqueue_scripts', function() use( $version ) {

                        if ( strtolower( GILAD_ENVIRONMENT ) == 'localhost' ) {

                            $handle_font_awesome = 'localhost-font-awesome-all';
                            $source_font_awesome = get_stylesheet_directory_uri() . '/public/styles/localhost/font-awesome-all.css';

                        } else {

                            $handle_font_awesome = 'font-awesome-all';
                            $source_font_awesome = 'https://use.fontawesome.com/releases/v' . $version . '/css/all.css';

                        }

                        wp_enqueue_style( $handle_font_awesome, $source_font_awesome );

                    });

                } else {

                    foreach ( $collections as $collection ) {

                        add_action( 'wp_enqueue_scripts', function() use( $version, $collection ) {

                            if ( strtolower( GILAD_ENVIRONMENT ) == 'localhost' ) {

                                $handle_font_awesome = 'localhost-font-awesome-' . $collection;
                                $source_font_awesome = get_stylesheet_directory_uri() . '/public/styles/localhost/font-awesome-' . $collection . '.css';

                            } else {

                                $handle_font_awesome = 'font-awesome-' . $collection;
                                $source_font_awesome = 'https://use.fontawesome.com/releases/v' . $version . '/css/' . $collection . '.css';

                            }

                            wp_enqueue_style( $handle_font_awesome, $source_font_awesome );

                        });

                    }

                    add_action( 'wp_enqueue_scripts', function() use( $version ) {
                        wp_enqueue_style( 'font-awesome-core', 'https://use.fontawesome.com/releases/v' . $version . '/css/fontawesome.css' );
                    });

                }

                //  SOURCE  https://www.google.com/search?q=add_filter+style_loader_tag
                //  SOURCE  https://wordpress.stackexchange.com/questions/176077/add-attribute-to-link-tag-thats-generated-through-wp-register-style

                add_filter( 'style_loader_tag', function( $link, $handle ) use( $version ) {

                    $integrity = '';
                    $payload   = 0;

                    if ( ( $handle == 'font-awesome-all' ) || ( $handle == 'font-awesome-brands' ) || ( $handle == 'font-awesome-core' ) || ( $handle == 'font-awesome-regular' ) || ( $handle == 'font-awesome-solid' ) ) {

                        if ( $handle == 'font-awesome-all' ) {

                            if ( $version == '5.0.13' ) $integrity = 'sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp';
                            if ( $version == '5.1.1' )  $integrity = 'sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ';
                            if ( $version == '5.2.0' )  $integrity = 'sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ';
                            if ( $version == '5.3.1' )  $integrity = 'sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU';
                            if ( $version == '5.4.1' )  $integrity = 'sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz';

                        } elseif ( $handle == 'font-awesome-brands' ) {

                            if ( $version == '5.0.13' ) $integrity = 'sha384-VGCZwiSnlHXYDojsRqeMn3IVvdzTx5JEuHgqZ3bYLCLUBV8rvihHApoA1Aso2TZA';
                            if ( $version == '5.1.1' )  $integrity = 'sha384-SYNjKRRe+vDW0KSn/LrkhG++hqCLJg9ev1jIh8CHKuEA132pgAz+WofmKAhPpTR7';
                            if ( $version == '5.2.0' )  $integrity = 'sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE';
                            if ( $version == '5.3.1' )  $integrity = 'sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite';
                            if ( $version == '5.4.1' )  $integrity = 'sha384-Px1uYmw7+bCkOsNAiAV5nxGKJ0Ixn5nChyW8lCK1Li1ic9nbO5pC/iXaq27X5ENt';

                        } elseif ( $handle == 'font-awesome-core' ) {

                            if ( $version == '5.0.13' ) $integrity = 'sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV';
                            if ( $version == '5.1.1' )  $integrity = 'sha384-0b7ERybvrT5RZyD80ojw6KNKz6nIAlgOKXIcJ0CV7A6Iia8yt2y1bBfLBOwoc9fQ';
                            if ( $version == '5.2.0' )  $integrity = 'sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6';
                            if ( $version == '5.3.1' )  $integrity = 'sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7';
                            if ( $version == '5.4.1' )  $integrity = 'sha384-BzCy2fixOYd0HObpx3GMefNqdbA7Qjcc91RgYeDjrHTIEXqiF00jKvgQG0+zY/7I';

                        } elseif ( $handle == 'font-awesome-regular' ) {

                            if ( $version == '5.0.13' ) $integrity = 'sha384-EWu6DiBz01XlR6XGsVuabDMbDN6RT8cwNoY+3tIH+6pUCfaNldJYJQfQlbEIWLyA';
                            if ( $version == '5.1.1' )  $integrity = 'sha384-QNorH84/Id/CMkUkiFb5yTU3E/qqapnCVt6k5xh1PFIJ9hJ8VfovwwH/eMLQTjGS';
                            if ( $version == '5.2.0' )  $integrity = 'sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I';
                            if ( $version == '5.3.1' )  $integrity = 'sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq';
                            if ( $version == '5.4.1' )  $integrity = 'sha384-4e3mPOi7K1/4SAx8aMeZqaZ1Pm4l73ZnRRquHFWzPh2Pa4PMAgZm8/WNh6ydcygU';

                        } elseif ( $handle == 'font-awesome-solid' ) {

                            if ( $version == '5.0.13' ) $integrity = 'sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe';
                            if ( $version == '5.1.1' )  $integrity = 'sha384-S2gVFTIn1tJ/Plf+40+RRAxBCiBU5oAMFUJxTXT3vOlxtXm7MGjVj62mDpbujs4C';
                            if ( $version == '5.2.0' )  $integrity = 'sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z';
                            if ( $version == '5.3.1' )  $integrity = 'sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW';
                            if ( $version == '5.4.1' )  $integrity = 'sha384-osqezT+30O6N/vsMqwW8Ch6wKlMofqueuia2H7fePy42uC05rm1G+BUPSd2iBSJL';

                        }

                        $link = str_replace( '/>', ' crossorigin="anonymous" integrity="' . $integrity . '" />', $link );

                    }

                    return $link;

                }, 10, 2 );

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
