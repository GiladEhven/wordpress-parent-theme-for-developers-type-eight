<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Comments' ) ) {

        class Template_Comments extends TIE_Discussion {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $comments = new Template_Comments();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $comments->set_data(array(
        'template' => 'comments.php',
        'class'    => 'Template_Comments',
        'type'     => 'Partial',
        'parent'   => 'TIE_Partial',
    ));



    $comments->get_shell( basename( __FILE__ ), 'Comments' );
