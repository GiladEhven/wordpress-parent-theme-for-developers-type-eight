<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/document.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Single' ) ) {

        class Template_Single extends TIE_Document {

            public function __construct() {

                parent::__construct();

            }

        }

    }

    /*

    if ( comments_open() || get_comments_number() ) {

        comments_template();

    }

    */

    $single = new Template_Single();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $single->set_data(array(
        'template' => 'single.php',
        'class'    => 'Template_Single',
        'type'     => 'Document',
        'parent'   => 'TIE_Document',
    ));



    $single->get_shell( basename( __FILE__ ), 'Sitewide' );
