<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_List' ) ) {

        abstract class TIE_List extends TIE_Default {

            public function __construct() {

                parent::__construct();

            }

        }

    }
