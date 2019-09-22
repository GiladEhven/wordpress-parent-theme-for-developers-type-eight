<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_List extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            $this->set_list_properties();

        }

        protected function set_list_properties() {

            $this->list_x          = '-----------------------------------------------------------------------------------------------';
            $this->list_y          = '-----------------------------------  C O R E   :   L I S T  -----------------------------------';
            $this->list_z          = '-----------------------------------------------------------------------------------------------';
            $this->list_test_value = 'From CORE_List class...';

        }

    }
