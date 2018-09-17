<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../integration.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_WISDOMMM' ) ) {

        abstract class TIE_WISDOMMM extends TIE_Integration {

            public function __construct() {

                parent::__construct();

            }

        }

    }
