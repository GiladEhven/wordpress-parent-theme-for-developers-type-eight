<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Date extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_date_properties();

        }

        protected function set_date_properties() {

            $this->date_x          = '-----------------------------------------------------------------------------------------------';
            $this->date_y          = '-----------------------------------  C O R E   :   D A T E  -----------------------------------';
            $this->date_z          = '-----------------------------------------------------------------------------------------------';
            $this->date_test_value = 'From CORE_Date class...';

        }

    }
