<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '.php' );

    abstract class CORE_Comments extends CORE_Partial {

        protected function __construct() {

            parent::__construct();

            $this->set_comments_properties();

        }

        protected function set_comments_properties() {

            $this->comments_x          = '-----------------------------------------------------------------------------------------------';
            $this->comments_y          = '-------------------------------  C O R E   :   C O M M E N T S  -------------------------------';
            $this->comments_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
