<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../template.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Custom' ) ) {

        abstract class TIE_Custom extends TIE_Template {

            public function __construct() {

                parent::__construct();

            }

        }

    }
