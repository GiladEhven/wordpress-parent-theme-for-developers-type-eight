<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '.php' );

    class CORE_Child extends CORE_Screen {

        public function __construct() {

            parent::__construct();

            $this->set_child_properties();

        }

        protected function set_child_properties() {

            $this->child_x          = '-----------------------------------------------------------------------------------------------';
            $this->child_y          = '----------------------------------  C O R E   :   C H I L D  ----------------------------------';
            $this->child_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_child = new CORE_Child();
    $data = get_object_vars( $core_child );

    $core_child->dump( $data );
