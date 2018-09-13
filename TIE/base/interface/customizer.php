<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../interface.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Customizer' ) ) {

        abstract class TIE_Customizer extends TIE_Interface {

            public function __construct() {

                parent::__construct();

            }

        }

    }
