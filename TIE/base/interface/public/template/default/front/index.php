<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../front.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Index' ) ) {

        abstract class TIE_Index extends TIE_Front {

            public function __construct() {

                parent::__construct();

            }
        }

    }