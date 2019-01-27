<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../screen.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Type' ) ) {

        abstract class TIE_Type extends TIE_Screen {

            public function __construct() {

                parent::__construct();

            }

        }

    }
