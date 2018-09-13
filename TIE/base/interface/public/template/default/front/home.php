<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../front.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Home' ) ) {

        abstract class TIE_Home extends TIE_Front {

            public function __construct() {

                parent::__construct();

            }

        }

    }
