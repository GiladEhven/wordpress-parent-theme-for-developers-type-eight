<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/error.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_404' ) ) {

        class Template_404 extends TIE_Error {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $four_oh_four = new Template_404();



    $four_oh_four->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => '404.php',
        'class'    => 'Template_404',
        'type'     => 'Error',
        'parent'   => 'TIE_Error',
    ));
