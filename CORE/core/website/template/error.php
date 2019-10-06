<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_Error extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            $this->set_error_properties();

        }

        protected function set_error_properties() {

            $this->error_x          = '-----------------------------------------------------------------------------------------------';
            $this->error_y          = '----------------------------------  C O R E   :   E R R O R  ----------------------------------';
            $this->error_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
