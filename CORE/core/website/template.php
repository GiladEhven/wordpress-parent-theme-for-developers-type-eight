<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    abstract class CORE_Template extends CORE_Website {

        protected function __construct() {

            parent::__construct();

            $this->set_template_properties();

        }

        protected function set_template_properties() {

            $this->template_x          = '-----------------------------------------------------------------------------------------------';
            $this->template_y          = '-------------------------------  C O R E   :   T E M P L A T E  -------------------------------';
            $this->template_z          = '-----------------------------------------------------------------------------------------------';
            $this->template_test_value = 'From CORE_Template class...';

        }

    }
