<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Video extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_video_properties();

        }

        protected function set_video_properties() {

            $this->video_x          = '-----------------------------------------------------------------------------------------------';
            $this->video_y          = '----------------------------------  C O R E   :   A U D I O  ----------------------------------';
            $this->video_z          = '-----------------------------------------------------------------------------------------------';
            $this->video_test_value = 'From CORE_Video class...';

        }

    }
