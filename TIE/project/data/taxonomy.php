<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../data.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Taxonomy' ) ) {

        abstract class TIE_Taxonomy extends TIE_Data {

            public function __construct() {

                parent::__construct();

            }

        }

    }
