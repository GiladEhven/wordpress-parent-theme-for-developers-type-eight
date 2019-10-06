<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '.php' );

    abstract class CORE_Footer extends CORE_Partial {

        protected function __construct() {

            parent::__construct();

            $this->set_footer_properties();

        }

        protected function set_footer_properties() {

            $this->header_x          = '-----------------------------------------------------------------------------------------------';
            $this->header_y          = '---------------------------------  C O R E   :   F O O T E R  ---------------------------------';
            $this->header_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
