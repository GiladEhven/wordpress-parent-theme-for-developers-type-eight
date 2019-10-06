<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Page extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_page_properties();

        }

        protected function set_page_properties() {

            $this->page_x          = '-----------------------------------------------------------------------------------------------';
            $this->page_y          = '-----------------------------------  C O R E   :   P A G E  -----------------------------------';
            $this->page_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
