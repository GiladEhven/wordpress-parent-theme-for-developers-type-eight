<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Single_Example' ) ) {

        class Template_Single_Example {

            private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

            public static $object_counter = 0;

            public function __construct() {

            	$data = $this->package_data_for_view();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-single-prefix-example-cpt.php' );
                $view_single_example = new View_Single_Example( $data );

                self::$object_counter++;

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

                	This is a Single FAQ (pumped in via view)... 

                    <?php

                        $template_single_example = new Template_Single_Example();

                    ?>

                </div><!-- / # main -->

    <?php get_footer();
