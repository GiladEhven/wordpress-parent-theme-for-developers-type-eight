<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/error.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_404' ) ) {

        class Template_404 extends TIE_Error {

            private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

            public static $object_counter = 0;

            public function __construct() {

                $this->set_requested_resource();

                $data = $this->get_acf_data();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-404.php' );
                $view_404 = new View_404( $data );

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

            protected function get_acf_data() {

                	$data = array();

                	return $data;

            }

        }

    }

    get_header(); ?>

                <section id="main">

                    <?php $template_404 = new Template_404(); ?>

                </section><!-- / # main -->

    <?php get_footer();
