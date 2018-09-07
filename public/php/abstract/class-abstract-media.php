<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-wordpress-page.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Abstract_Media' ) ) {

        abstract class Abstract_Media extends Abstract_WordPress_Page {

            //  ------------------------------  PROPERTIES  -----------------------------  //

            //  ----------------------------  HOUSEKEEPING  -----------------------------  //

            public function __construct() {

                parent::__construct();

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

        }

    }
