<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../resource.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Script' ) ) {

        abstract class TIE_Script extends TIE_Resource {

            public function __construct() {

                parent::__construct();

            }

        }

    }
