<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Audio extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_audio_properties();

        }

        protected function set_audio_properties() {

            $this->audio_x          = '-----------------------------------------------------------------------------------------------';
            $this->audio_y          = '----------------------------------  C O R E   :   A U D I O  ----------------------------------';
            $this->audio_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
