<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_FRONT . '.php' );

    abstract class CORE_Front_Page extends CORE_Front {

        protected function __construct() {

            parent::__construct();

            $this->set_front_page_properties();

        }

        protected function set_front_page_properties() {

            $this->front_page_x          = '-----------------------------------------------------------------------------------------------';
            $this->front_page_y          = '-----------------------------  C O R E   :   F R O N T   P A G E  -----------------------------';
            $this->front_page_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
