<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../component.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Widget' ) ) {

        abstract class TIE_Widget extends TIE_Component {

            public function __construct() {

                parent::__construct();

            }

        }

    }
