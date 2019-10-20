<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '.php' );

    abstract class CORE_Comments extends CORE_Partial {

        protected function __construct() {

            parent::__construct();

            $this->set_comments_properties();

        }

        public function ah_comments_after()                 { do_action( 'ah_comments_after' );           }
        public function ah_comments_before()                { do_action( 'ah_comments_before' );          }
        public function ah_comments_begin()                 { do_action( 'ah_comments_begin' );           }
        public function ah_comments_else_begin()            { do_action( 'ah_comments_else_begin' );      }
        public function ah_comments_else_end()              { do_action( 'ah_comments_else_end' );        }
        public function ah_comments_else_header()           { do_action( 'ah_comments_else_header' );     }
        public function ah_comments_else_section()          { do_action( 'ah_comments_else_section' );    }
        public function ah_comments_footer_begin()          { do_action( 'ah_comments_footer_begin' );    }
        public function ah_comments_footer_end()            { do_action( 'ah_comments_footer_end' );      }
        public function ah_comments_header_begin()          { do_action( 'ah_comments_header_begin' );    }
        public function ah_comments_header_end()            { do_action( 'ah_comments_header_end' );      }
        public function ah_comments_if_begin()              { do_action( 'ah_comments_if_begin' );        }
        public function ah_comments_if_end()                { do_action( 'ah_comments_if_end' );          }
        public function ah_comments_list_begin()            { do_action( 'ah_comments_list_begin' );      }
        public function ah_comments_list_end()              { do_action( 'ah_comments_list_end' );        }

        public function fh_comments_classes()               { echo apply_filters( 'fh_comments_classes',                'col-12' );    }
        public function fh_comments_footer_classes()        { echo apply_filters( 'fh_comments_footer_classes',         'row' );       }
        public function fh_comments_footer_div_classes()    { echo apply_filters( 'fh_comments_footer_div_classes',     'col-12' );    }
        public function fh_comments_header_classes()        { echo apply_filters( 'fh_comments_header_classes',         'row' );       }
        public function fh_comments_header_div_classes()    { echo apply_filters( 'fh_comments_header_div_classes',     'col-12' );    }
        public function fh_comments_list_classes()          { echo apply_filters( 'fh_comments_list_classes',           'row' );       }
        public function fh_comments_list_div_classes()      { echo apply_filters( 'fh_comments_list_div_classes',       'col-12' );    }

        protected function set_comments_properties() {

            $this->comments_x          = '-----------------------------------------------------------------------------------------------';
            $this->comments_y          = '-------------------------------  C O R E   :   C O M M E N T S  -------------------------------';
            $this->comments_z          = '-----------------------------------------------------------------------------------------------';

        }

    }
