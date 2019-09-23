<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Search extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_search_properties();

        }

        protected function set_search_properties() {

            $this->search_x          = '-----------------------------------------------------------------------------------------------';
            $this->search_y          = '---------------------------------  C O R E   :   S E A R C H  ---------------------------------';
            $this->search_z          = '-----------------------------------------------------------------------------------------------';
            $this->search_test_value = 'From CORE_Search class...';

        }

    }
