<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

            public $template_data_for_view;

            public function __construct() {

                parent::__construct();

            }

            public function package_template_data_for_view( $data ) {

                echo '<br>IF WE CAN SEE THIS, WE KNOW THAT [TIE_Template][package_template_data_for_view] IS FOUND AND WORKING...<br>';

                $this->template_data_for_view = $data;

                echo '<br>ALSO FROM [TIE_Template][package_template_data_for_view] THIS IS [$this->template_data_for_view]...<br>';
                print_r( $this->template_data_for_view );

            }

        }

    }
