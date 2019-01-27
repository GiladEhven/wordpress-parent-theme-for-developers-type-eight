<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../rest.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_REST' ) ) {

        abstract class TIE_REST extends TIE_Data {

            public function __construct() {

                parent::__construct();

            }

        }

    }
