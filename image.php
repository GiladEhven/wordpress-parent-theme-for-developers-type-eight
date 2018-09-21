<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/media.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Image' ) ) {

        class Template_Image extends TIE_Media {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $image = new Template_Image();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $image->set_data(array(
        'template' => 'image.php',
        'class'    => 'Template_Image',
        'type'     => 'Media',
        'parent'   => 'TIE_Media',
    ));



    $image->get_shell( basename( __FILE__ ), 'Sitewide' );
