<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '.php' );

    class CORE_Other extends CORE_Screen {

        public function __construct() {

            parent::__construct();

            $this->add_dashboard_widgets();

            $this->set_other_properties();

        }

        protected function add_dashboard_widgets() {

            add_action( 'wp_dashboard_setup', function() {

                wp_add_dashboard_widget( 'prepare_graphics_widget', 'Prepare Graphics', function() {

                    $dash_widget_child  = get_stylesheet_directory() . '/statics/php/prepare-graphics.php';
                    $dash_widget_parent = get_template_directory()   . '/CORE/defaults/php/prepare-graphics.php';

                    $admin_widget_to_require = ( file_exists( $dash_widget_child ) ) ? $dash_widget_child : $dash_widget_parent;

                    require_once( $admin_widget_to_require );

                });

            });

        }

        protected function set_other_properties() {

            $this->other_x          = '-----------------------------------------------------------------------------------------------';
            $this->other_y          = '----------------------------------  C O R E   :   O T H E R  ----------------------------------';
            $this->other_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_other = new CORE_Other();
    $data = get_object_vars( $core_other );

    $core_other->dump( $data );
