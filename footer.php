<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    class Template_Footer extends TIE_Partial {

        public function __construct() {

            parent::__construct();

            $this->build_footer();

        }

    }



    $footer = new Template_Footer();
