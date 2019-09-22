<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Author extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_author_properties();

        }

        protected function set_author_properties() {

            $this->author_x          = '-----------------------------------------------------------------------------------------------';
            $this->author_y          = '---------------------------------  C O R E   :   A U T H O R  ---------------------------------';
            $this->author_z          = '-----------------------------------------------------------------------------------------------';
            $this->author_test_value = 'From CORE_Author class...';

        }

    }
