<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/list.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Archive' ) ) {

        class Template_Archive extends TIE_List {

            public function __construct() {

                parent::__construct();

            }

        }

    }



    $archive = new Template_Archive();



    $archive->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'archive.php',
        'class'    => 'Template_Archive',
        'type'     => 'List',
        'parent'   => 'TIE_List',
    ));
