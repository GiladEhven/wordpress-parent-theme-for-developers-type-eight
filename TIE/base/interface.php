<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../base.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Interface' ) ) {

        abstract class TIE_Interface extends TIE_Base {

            protected $text_domain;

            protected $theme_version;

            protected $project_prop_theme_author       = '';
            protected $project_prop_theme_author_uri   = '';
            protected $project_prop_theme_contributors = '';
            protected $project_prop_theme_description  = '';
            protected $project_prop_theme_domain_path  = '';
            protected $project_prop_theme_license      = '';
            protected $project_prop_theme_license_uri  = '';
            protected $project_prop_theme_name         = '';
            protected $project_prop_theme_template     = '';
            protected $project_prop_theme_text_domain  = '';
            protected $project_prop_theme_uri          = '';
            protected $project_prop_theme_version      = '';

            public function __construct() {

                parent::__construct();

                $this->set_text_domain();
                $this->set_theme_version();

                $this->set_theme_props();

                $this->set_body_classes();

            }

            protected function set_body_classes() {

                add_filter('body_class', function( array $classes ) {

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

/*
            protected function set_theme_descriptors() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }
*/

            protected function set_text_domain() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
//              $this->theme_version = $theme_object->get( 'Version' );
            }

            protected function set_theme_version() {
                $theme_object = wp_get_theme();
//              $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }

            protected function set_theme_props() {
                $theme_object = wp_get_theme();
                $this->project_prop_theme_author       .= $theme_object->get( 'Author' );
                $this->project_prop_theme_author_uri   .= $theme_object->get( 'AuthorURI' );
            //  $this->project_prop_theme_contributors .= $theme_object->get( '' );
                $this->project_prop_theme_description  .= $theme_object->get( 'Description' );
                $this->project_prop_theme_domain_path  .= $theme_object->get( 'DomainPath' );
            //  $this->project_prop_theme_license      .= $theme_object->get( '' );
            //  $this->project_prop_theme_license_uri  .= $theme_object->get( '' );
                $this->project_prop_theme_name         .= $theme_object->get( 'Name' );
                $this->project_prop_theme_template     .= $theme_object->get( 'Template' );
                $this->project_prop_theme_text_domain  .= $theme_object->get( 'TextDomain' );
                $this->project_prop_theme_uri          .= $theme_object->get( 'ThemeURI' );
                $this->project_prop_theme_version      .= $theme_object->get( 'Version' );
            }








        }

    }
