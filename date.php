<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '/date.php' );

    class Template_Date extends CORE_Date {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_date = new Template_Date();
    $data = get_object_vars( $template_date );

    $template_date->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-date.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<div class="col-12">';
        echo '<h1>This is a Date page</h1>';
        echo '<h3>Generated by the <code>date.php</code> template</h3>';
        echo '</div>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
