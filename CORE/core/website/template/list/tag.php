<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Tag extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_tag_properties();

        }

        protected function set_tag_properties() {

            $this->tag_x          = '-----------------------------------------------------------------------------------------------';
            $this->tag_y          = '------------------------------------  C O R E   :   T A G  ------------------------------------';
            $this->tag_z          = '-----------------------------------------------------------------------------------------------';
            $this->tag_test_value = 'From CORE_Tag class...';

        }

    }
