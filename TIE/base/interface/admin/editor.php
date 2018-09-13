<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../admin.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Editor' ) ) {

        abstract class TIE_Editor extends TIE_Admin {

            public function __construct() {

                parent::__construct();

            }

        }

    }
