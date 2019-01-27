<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../automation.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_CLI' ) ) {

        abstract class TIE_CLI extends TIE_Automation {

            public function __construct() {

                parent::__construct();

            }

        }

    }
