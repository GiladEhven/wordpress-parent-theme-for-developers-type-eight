<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../admin.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Menu' ) ) {

        abstract class TIE_Menu extends TIE_Admin {

            public function __construct() {

                parent::__construct();

            }

        }

    }
