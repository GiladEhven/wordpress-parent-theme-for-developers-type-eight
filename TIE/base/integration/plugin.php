<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../integration.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Plugin' ) ) {

        abstract class TIE_Plugin extends TIE_Integration {

            public function __construct() {

                parent::__construct();

            }

        }

    }
