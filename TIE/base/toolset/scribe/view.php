<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../scribe.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_View' ) ) {

        abstract class TIE_View extends TIE_Scribe {

            public function __construct() {

                parent::__construct();

            }

        }

    }
