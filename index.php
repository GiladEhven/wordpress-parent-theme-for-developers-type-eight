<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Index' ) ) {

        class Template_Index {

            private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

            public static $object_counter = 0;

            public function __construct() {

                $this->set_requested_resource();

            	$data = $this->package_data_for_view();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-index.php' );
                $view_index = new View_Index( $data );

                self::$object_counter++;

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function package_data_for_view() {

                    $data = array();

                    return $data;

            }

        }

    }

    get_header(); ?>

                <div id="main">

                    <?php $template_index = new Template_Index(); ?>

                </div><!-- / # main -->

    <?php get_footer();
