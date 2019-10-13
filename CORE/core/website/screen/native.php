<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '.php' );

    class CORE_Native extends CORE_Screen {

        public function __construct() {

            parent::__construct();

            $this->set_native_properties();

        }

        protected function set_native_properties() {

            $this->native_x          = '-----------------------------------------------------------------------------------------------';
            $this->native_y          = '---------------------------------  C O R E   :   N A T I V E  ---------------------------------';
            $this->native_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_native = new CORE_Native();
    $data = get_object_vars( $core_native );

    $core_native->dump( $data );
