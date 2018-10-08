<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/front.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Front_Page' ) ) {

        class Template_Front_Page extends TIE_Front {

            public function __construct() {

                parent::__construct();

                    // HOUSEKEEPING FIRST...
                    $this->cleanup();

                    // THEN RESOURCES...
                    $this->update_jquery( '3.3.1', 'slim' );
                    $this->enable_bootstrap( '4.1.2', 'both' );

                    // AND THEN BUILD AND RENDER...
                    $this->build_and_render( basename( __FILE__ ), 'Sitewide' );

            }

        }

    }



    $front_page = new Template_Front_Page();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $front_page->set_data(array(
        'template' => 'front-page.php',
        'class'    => 'Template_Front_Page',
        'type'     => 'Front',
        'parent'   => 'TIE_Front',
    ));
