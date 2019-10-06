<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_Partial extends CORE_Template {

        protected function __construct() {

            parent::__construct();

//          $query_object = get_queried_object();

//          $this->set_partial_properties( $query_object );

        }

//      protected function set_partial_properties( $query_object ) {}

    }
