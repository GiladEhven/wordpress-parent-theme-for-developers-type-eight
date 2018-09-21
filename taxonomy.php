<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Taxonomy' ) ) {

        class Template_Taxonomy extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $taxonomy = new Template_Taxonomy();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $taxonomy->set_data(array(
        'template' => 'taxonomy.php',
        'class'    => 'Template_Taxonomy',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));



    $taxonomy->get_shell( basename( __FILE__ ), 'Sitewide' );
