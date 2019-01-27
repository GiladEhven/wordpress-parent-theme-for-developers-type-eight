<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../nav.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Navigator_Lists' ) ) {

        abstract class TIE_Navigator_Lists extends TIE_Nav {

            public function __construct() {

                parent::__construct();

            }

        }

    }
