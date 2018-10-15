<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/front.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Index' ) ) {

        class Template_Index extends TIE_Front {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $index = new Template_Index();



    $index->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'index.php',
        'class'    => 'Template_Index',
        'type'     => 'Front',
        'parent'   => 'TIE_Front',
    ));
