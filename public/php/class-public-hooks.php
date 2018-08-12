<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Public_Hooks' ) ) {

        class Public_Hooks {

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                //  UGLY!

                //  -------------------------------------  BEGIN AND END : TEMPLATES  -------------------------------------  //

                function gilad_body_begin()           { do_action( 'gilad_body_begin' );           }

                function gilad_body_end()             { do_action( 'gilad_body_end' );             }

                function gilad_footer_begin()         { do_action( 'gilad_footer_begin' );         }

                function gilad_footer_end()           { do_action( 'gilad_footer_end' );           }

                function gilad_header_begin()         { do_action( 'gilad_header_begin' );         }

                function gilad_header_end()           { do_action( 'gilad_header_end' );           }

                function gilad_main_begin()           { do_action( 'gilad_main_begin' );           }

                function gilad_main_end()             { do_action( 'gilad_main_end' );             }

                function gilad_wrapper_begin()        { do_action( 'gilad_wrapper_begin' );        }

                function gilad_wrapper_end()          { do_action( 'gilad_wrapper_end' );          }

                //  -----------------------------------  BEGIN AND END : DEFAULT LOOPS  -----------------------------------  //

                function gilad_else_posts_begin()     { do_action( 'gilad_else_posts_begin' );     }

                function gilad_else_posts_end()       { do_action( 'gilad_else_posts_end' );       }

                function gilad_if_posts_begin()       { do_action( 'gilad_if_posts_begin' );       }

                function gilad_if_posts_end()         { do_action( 'gilad_if_posts_end' );         }

                function gilad_while_posts_begin()    { do_action( 'gilad_while_posts_begin' );    }

                function gilad_while_posts_end()      { do_action( 'gilad_while_posts_end' );      }

                //  ------------------------------------------  BEFORE AND AFTER  -----------------------------------------  //

                function gilad_gtm_after()            { do_action( 'gilad_gtm_after' );            }

                function gilad_gtm_before()           { do_action( 'gilad_gtm_before' );           }

                //  --------------------------------------------  ADD ANOTHER  --------------------------------------------  //

                function gilad_link_add()             { do_action( 'gilad_link_add' );             }

                function gilad_meta_add()             { do_action( 'gilad_meta_add' );             }

                //  -------------------------------------------------------------------------------------------------------  //

                self::$object_counter++;

            }

        }

    }
