<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '/single.php' );

    class Template_Single extends CORE_Single {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_single = new Template_Single();
    $data = get_object_vars( $template_single );

    $template_single->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-single.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<h1>This is a Post page</h1>';
        echo '<h3>Generated by the <code>single.php</code> template</h3>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( comments_open() || get_comments_number() ) {

        comments_template();

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
