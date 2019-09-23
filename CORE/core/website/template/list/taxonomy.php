<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Taxonomy extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_taxonomy_properties();

        }

        protected function set_taxonomy_properties() {

            $this->taxonomy_x          = '-----------------------------------------------------------------------------------------------';
            $this->taxonomy_y          = '-------------------------------  C O R E   :   T A X O N O M Y  -------------------------------';
            $this->taxonomy_z          = '-----------------------------------------------------------------------------------------------';
            $this->taxonomy_test_value = 'From CORE_Taxonomy class...';

        }

    }
