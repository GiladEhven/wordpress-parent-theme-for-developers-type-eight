<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

//  require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-wordpress-page.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Abstract_WordPress_Fragment' ) ) {

//      abstract class Abstract_WordPress_Fragment extends Abstract_WordPress_Page {
        abstract class Abstract_WordPress_Fragment {

            //  ------------------------------  PROPERTIES  -----------------------------  //

            protected $object_counter = 0;

            //  ----------------------------  HOUSEKEEPING  -----------------------------  //

            public function __construct() {

                $this->packaged_data_for_fragment = $this->package_data_for_fragment_view();

                $this->scaffold();

                $this->object_counter++;

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            protected function scaffold() {

                $this->build();

            }

            //  ------------------------------  ABSTRACTS  ------------------------------  //

            abstract protected function build();

        }

    }
