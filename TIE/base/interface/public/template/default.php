<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../template.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Default' ) ) {

        abstract class TIE_Default extends TIE_Template {

            public function __construct() {

                parent::__construct();

            }

        }

    }
