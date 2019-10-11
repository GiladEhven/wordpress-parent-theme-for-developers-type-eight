<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    abstract class CORE_Template extends CORE_Website {

        protected function __construct() {

            parent::__construct();

            $this->enqueue_bootstrap();

            $this->enqueue_font_awesome( array( 'all' ) );

            $this->enqueue_jquery();

            $this->set_browser_classes();

            $this->set_template_properties();

        }

        protected function enqueue_bootstrap() {

            add_action( 'wp_enqueue_scripts', function() {

                wp_enqueue_script( 'bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',    array( 'jquery', 'popper-script' ), null, true );
                wp_enqueue_script( 'popper-script',    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ),                  null, true );

                wp_enqueue_style(  'bootstrap-style',  'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',  array(),                            null, 'all' );

            });

            add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {

                $integrity = '';

                if ( $handle == 'bootstrap-script' ) {

                    $tag = '<script id="' . $handle . '" src="' . $src . '" type="text/javascript" crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"></script>' . "\n";

                } elseif ( $handle == 'popper-script' ) {

                    $tag = '<script id="' . $handle . '" src="' . $src . '" type="text/javascript" crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"></script>' . "\n";

                }

                return $tag;

            }, 10, 3);

            add_filter( 'style_loader_tag', function( $link, $handle ) {

                if ( $handle == 'bootstrap-style' ) {

                    $link = str_replace( 'media=\'all\' />', 'media=\'all\' crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" />', $link );

                }

                return $link;

            }, 10, 2);

        }

        protected function enqueue_font_awesome( $collections ) {

            if ( in_array( 'all', $collections ) ) {

                add_action( 'wp_enqueue_scripts', function() {

                    wp_enqueue_style( 'font-awesome-all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', array(), null, 'all' );

                });

            } else {

                foreach ( $collections as $collection ) {

                    add_action( 'wp_enqueue_scripts', function() use( $collection ) {

                        wp_enqueue_style( 'font-awesome-' . $collection, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/' . $collection . '.min.css', array(), null, 'all' );

                    });

                }

            }

            add_filter( 'style_loader_tag', function( $link, $handle ) use ( $collections ) {

                switch ( $handle ) {

                    case 'font-awesome-all'     : $integrity = 'sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ='; break;
                    case 'font-awesome-brands'  : $integrity = 'sha256-UZFVAO0Fn854ajzdWnJ2Oze6k1X4LNqE2RJPW3MBfq8='; break;
                    case 'font-awesome-regular' : $integrity = 'sha256-1xUFPzbRrl0qOLXDyBNYpuBMMThdiVPJEtZx24deLeg='; break;
                    case 'font-awesome-solid'   : $integrity = 'sha256-8DcgqUGhWHHsTLj1qcGr0OuPbKkN1RwDjIbZ6DKh/RA='; break;
                    default                     : $integrity = '';

                }

                $exploded   = explode( '-', $handle );
                $collection = end( $exploded );
                
                if ( in_array( $collection, $collections ) ) {

                    $link = str_replace( 'media=\'all\' />', 'media=\'all\' crossorigin="anonymous" integrity="' . $integrity . '" />', $link );

                }

                return $link;

            }, 10, 2);

        }

        protected function enqueue_jquery() {

            $integrity = 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=';
            $version   = '3.3.1';

            add_action( 'wp_enqueue_scripts', function() use( $version ) {

                wp_deregister_script( 'jquery' );
                wp_register_script( 'jquery', 'https://code.jquery.com/jquery-' . $version . '.min.js', array(), null, true );
                wp_enqueue_script( 'jquery' );

            });

            add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) use( $version, $integrity ) {

                if ( $handle == 'jquery' ) {

                    $tag = '<script id="' . $handle . '" src="https://code.jquery.com/jquery-' . $version . '.min.js" type="text/javascript" crossorigin="anonymous" integrity="' . $integrity . '"></script>' . "\n";

                }

                return $tag;

            }, 10, 3 );

        }

        protected function set_browser_classes() {

            add_filter( 'body_class', function( array $classes ) {

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

                return $classes;

            });

        }

        protected function set_template_properties() {

            $this->template_x          = '-----------------------------------------------------------------------------------------------';
            $this->template_y          = '-------------------------------  C O R E   :   T E M P L A T E  -------------------------------';
            $this->template_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
