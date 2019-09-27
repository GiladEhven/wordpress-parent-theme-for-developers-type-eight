<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Attachment extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_attachment_properties();

        }

        protected function set_attachment_properties() {

            $this->attachment_x          = '-----------------------------------------------------------------------------------------------';
            $this->attachment_y          = '-----------------------------  C O R E   :   A T T A C H M E N T  -----------------------------';
            $this->attachment_z          = '-----------------------------------------------------------------------------------------------';
            $this->attachment_test_value = 'From CORE_Attachment class...';

        }

    }
