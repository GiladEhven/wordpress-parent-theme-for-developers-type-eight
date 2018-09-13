<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../document.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Type' ) ) {

        abstract class TIE_Type extends TIE_Document {

            public function __construct() {

                parent::__construct();

            }

        }

    }
