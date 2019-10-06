<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Image extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_image_properties();

        }

        protected function set_image_properties() {

            $this->image_x          = '-----------------------------------------------------------------------------------------------';
            $this->image_y          = '----------------------------------  C O R E   :   A U D I O  ----------------------------------';
            $this->image_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
