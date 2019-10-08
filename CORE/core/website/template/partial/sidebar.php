<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '.php' );

    abstract class CORE_Sidebar extends CORE_Partial {

        protected function __construct() {

            parent::__construct();

            $this->set_sidebar_properties();

        }

        protected function set_sidebar_properties() {

            $this->sidebar_x          = '-----------------------------------------------------------------------------------------------';
            $this->sidebar_y          = '--------------------------------  C O R E   :   S I D E B A R  --------------------------------';
            $this->sidebar_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
