<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Archive' ) ) {

        class Template_Archive extends Abstract_List {

//          private $requested_resource;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

//          public static $object_counter = 0;

            public function __construct() {

//          	$data = $this->package_data_for_view();

//              require_once( get_stylesheet_directory() . '/public/php/views/class-view-archive.php' );
//              $view_archive = new View_Archive( $data );

//              self::$object_counter++;

                parent::__construct();

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

                	THIS IS A GENERIC ARCHIVE PAGE!

                    <?php

                        $template_archive = new Template_Archive();

                    ?>

                </div><!-- / # main -->

    <?php get_footer();
