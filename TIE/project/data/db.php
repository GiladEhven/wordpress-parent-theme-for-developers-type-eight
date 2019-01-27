<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../db.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_DB' ) ) {

        abstract class TIE_DB extends TIE_Data {

            public function __construct() {

                parent::__construct();

            }

        }

    }
