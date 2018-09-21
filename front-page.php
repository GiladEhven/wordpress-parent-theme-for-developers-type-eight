<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/front.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Front_Page' ) ) {

        class Template_Front_Page extends TIE_Front {

            public function __construct() {

                parent::__construct();

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



    $front_page->get_shell( basename( __FILE__ ), 'Sitewide' );
