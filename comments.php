<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    class Template_Comments extends TIE_Discussion {

        public function __construct() {

            parent::__construct();

            //  CANNED COMMENT FORM BLURBS
            //  Thank you for joining the conversation!
            //  All comments are moderated in accordance with our [privacy policy]...
            //  All links are nofollow...
            //  Do NOT use keywords in the name field (or any other field, please)... Let's have a real and meaningful conversation...

        }

    }



    $comments = new Template_Comments();



    $comments->build_and_render( 'Sitewide', basename( __FILE__ ), array(
        'template' => 'comments.php',
        'class'    => 'Template_Comments',
        'type'     => 'Partial',
        'parent'   => 'TIE_Partial',
    ));
