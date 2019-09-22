<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Category extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_category_properties();

        }

        protected function set_category_properties() {

            $this->category_x          = '-----------------------------------------------------------------------------------------------';
            $this->category_y          = '-------------------------------  C O R E   :   C A T E G O R Y  -------------------------------';
            $this->category_z          = '-----------------------------------------------------------------------------------------------';
            $this->category_test_value = 'From CORE_Category class...';

        }

    }
