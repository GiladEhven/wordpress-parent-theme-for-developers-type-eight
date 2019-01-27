<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../toolset.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_CLI' ) ) {

        abstract class TIE_CLI extends TIE_Toolset {

            public function __construct() {

                parent::__construct();

            }

        }

    }
