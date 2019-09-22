<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Single extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_single_properties();

        }

        protected function set_single_properties() {

            $this->single_x          = '-----------------------------------------------------------------------------------------------';
            $this->single_y          = '--------------------------  C O R E   :   P O S T   ( S I N G L E )  --------------------------';
            $this->single_z          = '-----------------------------------------------------------------------------------------------';
            $this->single_test_value = 'From CORE_Single class...';

        }

    }
