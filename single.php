<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-document.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Single' ) ) {

        class Template_Single extends Abstract_Document {

//          private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

//          public static $object_counter = 0;

            public function __construct() {

//              $this->set_requested_resource();

//          	$data = $this->package_data_for_view();

//              require_once( get_stylesheet_directory() . '/public/php/views/class-view-single.php' );
//              $view_single = new View_Single( $data );

//              self::$object_counter++;

                parent::__construct();

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

                    <?php

                        $template_single = new Template_Single();

                    ?>

                </div><!-- / # main -->

                <?php

                    if ( comments_open() || get_comments_number() ) {

                        comments_template();

                    }

                ?>

    <?php get_footer();
