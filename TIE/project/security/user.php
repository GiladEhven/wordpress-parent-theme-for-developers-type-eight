<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../security.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_User' ) ) {

        abstract class TIE_User extends TIE_Security {

            public function __construct() {

                parent::__construct();

            }

        }

    }
