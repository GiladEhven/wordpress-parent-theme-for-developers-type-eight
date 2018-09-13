<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../media.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Generic' ) ) {

        abstract class TIE_Generic extends TIE_Media {

            public function __construct() {

                parent::__construct();

            }

        }

    }
