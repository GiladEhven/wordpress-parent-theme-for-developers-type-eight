<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Text extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_text_properties();

        }

        protected function set_text_properties() {

            $this->text_x          = '-----------------------------------------------------------------------------------------------';
            $this->text_y          = '-----------------------------------  C O R E   :   T E X T  -----------------------------------';
            $this->text_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
