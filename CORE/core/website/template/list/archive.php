<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Archive extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $this->set_archive_properties();

        }

        protected function set_archive_properties() {

            $this->archive_x          = '-----------------------------------------------------------------------------------------------';
            $this->archive_y          = '--------------------------------  C O R E   :   A R C H I V E  --------------------------------';
            $this->archive_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
