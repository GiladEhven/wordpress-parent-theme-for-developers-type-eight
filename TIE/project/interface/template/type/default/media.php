<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Media' ) ) {

        abstract class TIE_Media extends TIE_Default {

            public function __construct() {

                parent::__construct();

                $this->query_object = get_queried_object();

                $this->set_media_props();
                $this->set_image_props();

            }

            protected function set_media_props() {

                $query_object = get_queried_object();

                $this->media_x                = '-----------------------------------------------------------------------------------------------';
                $this->media_y                = '-----------------------------  T I E   M E D I A   :   M E D I A  -----------------------------';
                $this->media_z                = '-----------------------------------------------------------------------------------------------';

            }







            protected function set_image_props() {

                $query_object = get_queried_object();

                $this->image_x                = '-----------------------------------------------------------------------------------------------';
                $this->image_y                = '-----------------------------  T I E   M E D I A   :   I M A G E  -----------------------------';
                $this->image_z                = '-----------------------------------------------------------------------------------------------';

            }

        }

    }
