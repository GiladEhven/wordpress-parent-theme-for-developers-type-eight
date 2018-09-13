<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Resource' ) ) {

        abstract class TIE_Resource extends TIE_Public {

            public function __construct() {

                parent::__construct();

            }

        }

    }
