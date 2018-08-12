<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Single_CPTNAME' ) ) {

        class Template_Single_CPTNAME {

            private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

            public static $object_counter = 0;

            public function __construct() {

            	$data = $this->package_data_for_view();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-single-PREFIX-CPTNAME-cpt.php' );
                $view_single_CPTNAME = new View_Single_CPTNAME( $data );

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

                        $template_single_CPTNAME = new Template_Single_CPTNAME();

                    ?>

                </div><!-- / # main -->

    <?php get_footer();
