<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../rss.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Example' ) ) {

        abstract class TIE_Example extends TIE_RSS {

            public function __construct() {

                parent::__construct();

            }

        }

    }
