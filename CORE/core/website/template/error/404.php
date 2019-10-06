<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_ERROR . '.php' );

    abstract class CORE_404 extends CORE_Error {

        protected function __construct() {

            parent::__construct();

            $this->set_404_properties();

        }

        protected function set_404_properties() {

            $this->e404_x          = '-----------------------------------------------------------------------------------------------';
            $this->e404_y          = '------------------------------------  C O R E   :   4 0 4  ------------------------------------';
            $this->e404_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
