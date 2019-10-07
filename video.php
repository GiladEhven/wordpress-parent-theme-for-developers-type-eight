<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '/video.php' );

    class Template_Video extends CORE_Video {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_video = new Template_Video();
    $data = get_object_vars( $template_video );

    $template_video->dump( $data );

    get_header();

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    $view_file = get_stylesheet_directory() . '/view-video.php';

    if ( file_exists( $view_file ) ) {

        require_once( $view_file );

    } else {

        echo '<h1>This is a Video page</h1>';
        echo '<h3>Generated by the <code>video.php</code> template</h3>';

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    get_footer();
