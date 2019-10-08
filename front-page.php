<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_FRONT . '/front-page.php' );

    class Template_Front_Page extends CORE_Front_Page {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_front_page = new Template_Front_Page();
    $data = get_object_vars( $template_front_page );

    $template_front_page->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-front-page.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<h1>This is the Front Page page</h1>';
        echo '<h3>Generated by the <code>front-page.php</code> template</h3>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();