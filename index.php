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



    $template_index = new Template_Index();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $template_index->set_template_data_for_view(array(
        'one' => 'first',
        'two' => 'second',
    ));



    $template_index->view_template();



    // get_header(); ?>

                <div id="main">

                    <?php // $template_index = new Template_Index(); ?>

                </div><!-- / # main -->

    <?php // get_footer();
