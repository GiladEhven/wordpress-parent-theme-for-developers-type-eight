<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Date' ) ) {

        class Template_Date extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $date = new Template_Date();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $date->set_data(array(
        'template' => 'date.php',
        'class'    => 'Template_Date',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));



    $date->get_shell( basename( __FILE__ ), 'Sitewide' );
