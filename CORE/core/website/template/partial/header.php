<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '.php' );

    abstract class CORE_Header extends CORE_Partial {

        protected function __construct() {

            parent::__construct();

            $this->set_header_properties();

        }

        protected function set_header_properties() {

            $this->header_x          = '-----------------------------------------------------------------------------------------------';
            $this->header_y          = '---------------------------------  C O R E   :   H E A D E R  ---------------------------------';
            $this->header_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
