<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Tag' ) ) {

        class Template_Tag extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $tag = new Template_Tag();



    // WITHOUT THIS CALL, THE DEFAULT ERROR MESSAGE/ARRAY REMAINS AVAILABLE:
    $tag->set_data(array(
        'template' => 'tag.php',
        'class'    => 'Template_Tag',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));



    $tag->get_shell( basename( __FILE__ ), 'Sitewide' );
