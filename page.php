<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '/page.php' );

    class Template_Page extends CORE_Page {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_page = new Template_Page();
    $data = get_object_vars( $template_page );

    $template_page->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-page.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<h1>This is a Page page</h1>';
        echo '<h3>Generated by the <code>page.php</code> template</h3>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( comments_open() || get_comments_number() ) {

        comments_template();

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
