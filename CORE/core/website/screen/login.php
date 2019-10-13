<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '.php' );

    class CORE_Login extends CORE_Screen {

        public function __construct() {

            parent::__construct();

            $this->set_login_properties();

        }

        protected function set_login_properties() {

            $this->login_x          = '-----------------------------------------------------------------------------------------------';
            $this->login_y          = '----------------------------------  C O R E   :   L O G I N  ----------------------------------';
            $this->login_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_login = new CORE_Login();
    $data = get_object_vars( $core_login );

    $core_login->dump( $data );
