<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../interface.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Screen' ) ) {

        abstract class TIE_Screen extends TIE_Interface {

            public function __construct() {

                parent::__construct();

            }

        }

    }
