<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Public_Resources' ) ) {

        class Public_Resources {

            private $text_domain;

            private $theme_version;

            public static $object_counter = 0;

            public function __construct() {

                self::$object_counter++;

                $this->set_theme_descriptors();

                $this->dequeue_css();
                $this->dequeue_js();
                $this->enqueue_css();
                $this->enqueue_js();

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            protected function set_theme_descriptors() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            private function dequeue_css() {
            }

            private function dequeue_js() {
                add_action( 'wp_enqueue_scripts', function() {
                    wp_deregister_script( 'jquery' );
                    wp_deregister_script( 'wp-embed' );
                });
            }

            private function enqueue_css() {
                add_action( 'wp_enqueue_scripts', function() {

                    wp_enqueue_style( 'bootstrap',                   'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css',  array(), $this->theme_version, 'all' );
                    wp_enqueue_style( 'font-awesome',                'https://use.fontawesome.com/releases/v5.1.1/css/all.css',                   array(), $this->theme_version, 'all' );

                    wp_enqueue_style( $this->text_domain . '-main',   get_stylesheet_directory_uri() . '/public/css/main.css',                    array(), $this->theme_version, 'all' );

                    if ( GILAD_WEBSITE_PHASE == 'dev' ) {
                    wp_enqueue_style( $this->text_domain . '-design', get_stylesheet_directory_uri() . '/public/css/design.css',                  array(), $this->theme_version, 'all' );
                    }

                });

            }

            private function enqueue_js() {

                add_action( 'wp_enqueue_scripts', function() {
                    wp_enqueue_script( 'jquery',                     'https://code.jquery.com/jquery-3.3.1.slim.min.js',                          array(), $this->theme_version, true );
                    wp_enqueue_script( 'popper',                     'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), $this->theme_version, true );
                    wp_enqueue_script( 'bootstrap',                  'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js',    array(), $this->theme_version, true );
                    wp_enqueue_script( $this->text_domain,            get_stylesheet_directory_uri() . '/public/js/main.js',                      array(), $this->theme_version, true );
                });

                add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {

                    $add_missing_attributes = array( 'jquery', 'popper', 'bootstrap', $this->text_domain );

                    if ( in_array( $handle, $add_missing_attributes ) ) {

                        $crossorigin               = false;
                        $integrity                 = false;
                        $crossorigin_and_integrity = false;

                        switch ( $handle ) {

                            case 'jquery':
                                $crossorigin = 'anonymous';
                                $integrity   = 'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo';
                            break;

                            case 'popper':
                                $crossorigin = 'anonymous';
                                $integrity   = 'sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49';
                            break;

                            case 'bootstrap':
                                $crossorigin = 'anonymous';
                                $integrity   = 'sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em';
                            break;

                        }

                        if ( $crossorigin ) $crossorigin_and_integrity = ' crossorigin="' . $crossorigin . '" integrity="' . $integrity . '"';

                        return '<script id="' . $handle . '" src="' . $src . '" type="text/javascript"' . $crossorigin_and_integrity  . '></script>' . "\n";

                    }

                    return $tag;

                }, 10, 3 );

            }

        }

    }
