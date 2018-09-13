<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../component.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Bar' ) ) {

        abstract class TIE_Bar extends TIE_Component {

            public function __construct() {

                parent::__construct();

            }

        }

    }
