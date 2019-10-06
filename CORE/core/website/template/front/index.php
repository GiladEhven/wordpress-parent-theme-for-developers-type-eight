<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_FRONT . '.php' );

    abstract class CORE_Index extends CORE_Front {

        protected function __construct() {

            parent::__construct();

            $this->set_index_properties();

        }

        protected function set_index_properties() {

            $this->index_x          = '-----------------------------------------------------------------------------------------------';
            $this->index_y          = '----------------------------------  C O R E   :   I N D E X  ----------------------------------';
            $this->index_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
