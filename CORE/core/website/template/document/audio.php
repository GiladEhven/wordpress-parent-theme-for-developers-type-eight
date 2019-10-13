<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Audio extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $this->set_audio_properties();

        }

        public function ah_audio_entry_article_begin()     { do_action( 'ah_audio_entry_article_begin' );     }
        public function ah_audio_entry_article_end()       { do_action( 'ah_audio_entry_article_end' );       }
        public function ah_audio_entry_content()           { do_action( 'ah_audio_entry_content' );           }
        public function ah_audio_entry_content_after()     { do_action( 'ah_audio_entry_content_after' );     }
        public function ah_audio_entry_content_before()    { do_action( 'ah_audio_entry_content_before' );    }
        public function ah_audio_entry_footer()            { do_action( 'ah_audio_entry_footer' );            }
        public function ah_audio_entry_header()            { do_action( 'ah_audio_entry_header' );            }

        protected function set_audio_properties() {

            $this->audio_x          = '-----------------------------------------------------------------------------------------------';
            $this->audio_y          = '----------------------------------  C O R E   :   A U D I O  ----------------------------------';
            $this->audio_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
