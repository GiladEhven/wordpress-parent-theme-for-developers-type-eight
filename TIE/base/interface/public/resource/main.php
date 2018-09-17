<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../resource.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Main' ) ) {

        abstract class TIE_Main extends TIE_Resource {

            public function __construct() {

                parent::__construct();

            }

        }

    }
