<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    abstract class CORE_Template extends CORE_Website {

        protected function __construct() {

            parent::__construct();

            $this->set_browser_classes();

            $this->set_template_properties();

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
