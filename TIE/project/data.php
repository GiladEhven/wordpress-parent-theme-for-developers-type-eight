<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../project.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Data' ) ) {

        abstract class TIE_Data extends TIE_Project {

            public function __construct() {

                parent::__construct();

            }

        }

    }
