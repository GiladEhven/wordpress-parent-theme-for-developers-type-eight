<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Image extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_image_properties();

        }

        public function ah_image_entry_article_begin()     { do_action( 'ah_image_entry_article_begin' );     }
        public function ah_image_entry_article_end()       { do_action( 'ah_image_entry_article_end' );       }
        public function ah_image_entry_content()           { do_action( 'ah_image_entry_content' );           }
        public function ah_image_entry_content_after()     { do_action( 'ah_image_entry_content_after' );     }
        public function ah_image_entry_content_before()    { do_action( 'ah_image_entry_content_before' );    }
        public function ah_image_entry_footer()            { do_action( 'ah_image_entry_footer' );            }
        public function ah_image_entry_header()            { do_action( 'ah_image_entry_header' );            }

        protected function set_image_properties() {

            $this->image_x          = '-----------------------------------------------------------------------------------------------';
            $this->image_y          = '----------------------------------  C O R E   :   A U D I O  ----------------------------------';
            $this->image_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
