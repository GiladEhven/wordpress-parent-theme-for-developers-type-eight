<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '/tag.php' );

    class Template_Tag extends CORE_Tag {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_tag = new Template_Tag();
    $data = get_object_vars( $template_tag );

    $template_tag->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-tag.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<h1>This is a Tag page</h1>';
        echo '<h3>Generated by the <code>tag.php</code> template</h3>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
