<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_Front extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            $this->set_front_properties();

        }

        protected function set_front_properties() {

            $this->front_x          = '-----------------------------------------------------------------------------------------------';
            $this->front_y          = '----------------------------------  C O R E   :   F R O N T  ----------------------------------';
            $this->front_z          = '-----------------------------------------------------------------------------------------------';
            $this->front_test_value = 'From CORE_Front class...';

        }

    }
