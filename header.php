<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Header' ) ) {

        class Template_Header extends TIE_Partial {

            public function __construct() {

            	$this->get_view( basename( __FILE__ ) );

        	  	$this->build_header();

            }

//            protected function package_data_for_view() {
  //              	$data = array();
    //            	$data['announcement-bar'] = '';
      //          	return $data;
        //    }



//  CREATE BUILD METHOD THAT IS CALLED BY CONSTRUCTOR - EVERYTHING MUST BE WITHIN THE CLASS; HANDLE VIEW THE SAME WAY AS IN INDEX.PHP!
			public function build_view() {

				//

			}

        }

    }



	$template_header = new Template_Header();
