<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    class Template_Sidebar extends TIE_Partial {

        public function __construct() {

            parent::__construct();

        }

    }



    $sidebar = new Template_Sidebar();



    $sidebar->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'sidebar.php',
        'class'    => 'Template_Sidebar',
        'type'     => 'Partial',
        'parent'   => 'TIE_Partial',
    ));
