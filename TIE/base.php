<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Base' ) ) {

        abstract class TIE_Base {

            protected $object_counter = 0;

            public function __construct() {

                $this->object_counter++;

            }

        }

	}
