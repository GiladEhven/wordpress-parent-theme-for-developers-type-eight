<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../component.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Nav' ) ) {

        abstract class TIE_Nav extends TIE_Component {

            public function __construct() {

                parent::__construct();

            }

        }

    }
