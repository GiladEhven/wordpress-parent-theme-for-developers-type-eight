<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../error.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_FourOhFour' ) ) {

        abstract class TIE_FourOhFour extends TIE_Error {

            public function __construct() {

                parent::__construct();

            }

        }

    }
