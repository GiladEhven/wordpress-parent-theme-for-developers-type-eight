<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_Document extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            $this->set_document_properties();

        }

        protected function set_document_properties() {

            $this->document_x          = '-----------------------------------------------------------------------------------------------';
            $this->document_y          = '-------------------------------  C O R E   :   D O C U M E N T  -------------------------------';
            $this->document_z          = '-----------------------------------------------------------------------------------------------';
            $this->document_test_value = 'From CORE_Document class...';

        }

    }
