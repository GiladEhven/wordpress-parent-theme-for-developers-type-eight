<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

//          protected $template_data_for_view = array( 'error' => 'NO DATA PUSHED FROM TEMPLATE!' );

            protected $template_data_for_view = array
            (

                'error' => array
                (
                    'code'        => 'E0101',
                    'message'     => 'NO DATA PUSHED FROM TEMPLATE!',
                    'description' => 'Template [file] class has been instantiated, but no data captured or pushed in array via [set_template_data_for_view] to the [template_data_for_view] property. This means that the object representing this WordPress Template (type/role) contains no content for display on the front end. Note also that this error data is generated within the same [template_data_for_view] property in the form of default field value (overwritten/replaced automatically upon data push from template into [set_template_data_for_view] instance method.',
                    'resolution'  => 'At template file, any time after template class instantiation, call [set_template_data_for_view] and pass array of content data.',
                )
            );

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
