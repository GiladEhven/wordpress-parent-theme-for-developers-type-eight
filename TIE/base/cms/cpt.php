<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../cms.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_CPT' ) ) {

        abstract class TIE_CPT extends TIE_CMS {

            public function __construct() {

                parent::__construct();

            }

        }

    }
