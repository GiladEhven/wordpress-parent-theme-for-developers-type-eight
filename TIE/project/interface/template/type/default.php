<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../type.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Default' ) ) {

        abstract class TIE_Default extends TIE_Type {

            public function __construct() {

                parent::__construct();

            }

        }

    }
