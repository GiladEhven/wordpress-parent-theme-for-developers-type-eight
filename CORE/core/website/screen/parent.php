<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '.php' );

    class CORE_Parent extends CORE_Screen {

        public function __construct() {

            parent::__construct();

            $this->set_parent_properties();

        }

        protected function set_parent_properties() {

            $this->parent_x          = '-----------------------------------------------------------------------------------------------';
            $this->parent_y          = '---------------------------------  C O R E   :   P A R E N T  ---------------------------------';
            $this->parent_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_parent = new CORE_Parent();
    $data = get_object_vars( $core_parent );

    $core_parent->dump( $data );
