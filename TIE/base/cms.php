<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../base.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_CMS' ) ) {

        abstract class TIE_CMS extends TIE_Base {

            public function __construct() {

                parent::__construct();

            }

        }

    }