<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    abstract class CORE_Screen extends CORE_Website {

        protected function __construct() {

            parent::__construct();

            $this->enqueue_for_admin();

            $this->set_screen_properties();

        }

        protected function enqueue_for_admin() {

            $admin_style_child_path  = get_stylesheet_directory()     . '/statics/css/admin.css';
            $admin_style_child_url   = get_stylesheet_directory_uri() . '/statics/css/admin.css';
            $admin_style_parent_url  = get_template_directory_uri()   . '/CORE/defaults/css/admin.css';

            $admin_style_to_enqueue = ( file_exists( $admin_style_child_path ) ) ? $admin_style_child_url : $admin_style_parent_url;

            add_action( 'admin_enqueue_scripts', function() use ( $admin_style_to_enqueue ) {

                wp_enqueue_style(  'custom-admin-style', $admin_style_to_enqueue, array(), null, 'all' );

            });

        }

        protected function set_screen_properties() {

            $this->screen_x          = '-----------------------------------------------------------------------------------------------';
            $this->screen_y          = '---------------------------------  C O R E   :   S C R E E N  ---------------------------------';
            $this->screen_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
