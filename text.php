<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '/text.php' );

    class Template_Text extends CORE_Text {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_text = new Template_Text();
    $data = get_object_vars( $template_text );

    $template_text->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-text.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<h1>This is a Text page</h1>';
        echo '<h3>Generated by the <code>text.php</code> template</h3>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( comments_open() || get_comments_number() ) {

        comments_template();

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
