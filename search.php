<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Search' ) ) {

        class Template_Search extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $search = new Template_Search();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $search->set_data(array(
        'template' => 'search.php',
        'class'    => 'Template_Search',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));



    $search->get_shell( basename( __FILE__ ), 'Sitewide' );
