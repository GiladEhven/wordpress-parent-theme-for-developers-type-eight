<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../integration.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Theme' ) ) {

        abstract class TIE_Theme extends TIE_Integration {

            public function __construct() {

                parent::__construct();

            }

        }

    }
