<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Archive_FAQ' ) ) {

        class Template_Archive_FAQ {

            private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

            public static $object_counter = 0;

            public function __construct() {

            	$data = $this->package_data_for_view();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-archive-gilad-example-cpt.php' );
                $view_archive_faq = new View_Archive_Example( $data );

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

                    <?php

                        $template_archive_example = new Template_Archive_Example();

                    ?>

                </div><!-- / # main -->

    <?php get_footer();
