<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../admin.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Component' ) ) {

        abstract class TIE_Component extends TIE_Admin {

            public function __construct() {

                parent::__construct();

            }

        }

    }
