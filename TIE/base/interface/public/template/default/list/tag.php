<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Tag' ) ) {

        abstract class TIE_Tag extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }
