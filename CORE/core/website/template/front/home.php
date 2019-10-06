<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_FRONT . '.php' );

    abstract class CORE_Home extends CORE_Front {

        protected function __construct() {

            parent::__construct();

            $this->set_home_properties();

        }

        protected function set_home_properties() {

            $this->home_x          = '-----------------------------------------------------------------------------------------------';
            $this->home_y          = '-----------------------------------  C O R E   :   H O M E  -----------------------------------';
            $this->home_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
