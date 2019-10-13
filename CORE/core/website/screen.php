<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    abstract class CORE_Screen extends CORE_Website {

        protected function __construct() {

            parent::__construct();

            $this->set_screen_properties();

        }

        protected function set_screen_properties() {

            $this->screen_x          = '-----------------------------------------------------------------------------------------------';
            $this->screen_y          = '---------------------------------  C O R E   :   S C R E E N  ---------------------------------';
            $this->screen_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
