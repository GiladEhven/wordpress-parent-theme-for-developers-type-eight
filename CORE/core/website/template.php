<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    abstract class CORE_Template extends CORE_Website {

        protected function __construct() {

            parent::__construct();

            $this->enqueue_bootstrap();

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
