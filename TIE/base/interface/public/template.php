<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

            protected $template_data_for_view = array( 'error' => 'NO DATA PUSHED FROM TEMPLATE!' );

            public function __construct() {

                parent::__construct();

            }

            public function get_template_data_for_view() {

                return $this->template_data_for_view;

            }

            public function set_template_data_for_view( $data ) {

                $this->template_data_for_view = $data;

            }

            public function view_template() {

                print_r( $this->template_data_for_view );

            }

        }

    }
