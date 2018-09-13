<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../toolset.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Scribe' ) ) {

        abstract class TIE_Scribe extends TIE_Toolset {

            public function __construct() {

                parent::__construct();

            }

        }

    }
