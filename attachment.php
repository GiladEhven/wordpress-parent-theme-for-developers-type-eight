<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/media.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Attachment' ) ) {

        class Template_Attachment extends TIE_Media {

            public function __construct() {

                parent::__construct();

                // HOUSEKEEPING FIRST...
                $this->cleanup();

                // THEN RESOURCES...
                $this->update_jquery( '3.3.1', 'slim' );
                $this->enable_bootstrap( '4.1.3', 'both' );

            }

        }

    }



    $attachment = new Template_Attachment();



    $attachment->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'attachment.php',
        'class'    => 'Template_Attachment',
        'type'     => 'Media',
        'parent'   => 'TIE_Media',
    ));
