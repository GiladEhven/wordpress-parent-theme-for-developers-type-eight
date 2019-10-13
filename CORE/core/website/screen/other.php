<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '.php' );

    class CORE_Other extends CORE_Screen {

        public function __construct() {

            parent::__construct();

            $this->set_other_properties();

        }

        protected function set_other_properties() {

            $this->other_x          = '-----------------------------------------------------------------------------------------------';
            $this->other_y          = '----------------------------------  C O R E   :   O T H E R  ----------------------------------';
            $this->other_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_other = new CORE_Other();
    $data = get_object_vars( $core_other );

    $core_other->dump( $data );
