<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../public.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Template' ) ) {

        abstract class TIE_Template extends TIE_Public {

            protected $data = array
            (
                'error' => array
                (
                    'code'        => 'E0101',
                    'message'     => 'NO DATA PUSHED FROM TEMPLATE!',
                    'description' => 'Template [file] class has been instantiated, but no data captured or pushed in array via [set_data] to the [data] property. This means that the object representing this WordPress Template (type/role) contains no content for display on the front end. Note also that this error data is generated within the same [data] property in the form of default field value (overwritten/replaced automatically upon data push from template into [set_data] instance method.',
                    'resolution'  => 'At template file, any time after template class instantiation, call [set_data] and pass array of content data.',
                )
            );

            protected $view;

            public function __construct() {

                parent::__construct();

            }

            public function get_data() {

                return $this->data;

            }

            public function get_shell( $view, $shell ) {

                $public_shell = get_stylesheet_directory() . '/public/shells/class-shell-' . $shell . '.php';
                $tie_shell    = GILAD_TIE . '/app/shells/class-shell-' . strtolower( $shell ) . '.php';

                if ( file_exists( $public_shell ) ) {
                    require_once( $public_shell );
                } else {
                    require_once( $tie_shell );
                }

                $shell_class = __NAMESPACE__ . '\Shell_' . $shell;

                $shell_object = new $shell_class( $view );

            }

            public function set_data( $data ) {

                $this->data = $data;

            }

            protected function render( $variable ) {

                //  TODO: Account for captured sub-arrays no longer called $data[]...

                if ( isset( $this->packaged_data[$variable] ) ) {

                    echo $this->packaged_data[$variable];

                } else {

                    echo '<span class="gilad-render-none">Not Found: [ ' . $variable . ' ]</span>';

                }

            }

            //  UGLY!

            //  -------------------------------------  BEGIN AND END : TEMPLATES  -------------------------------------  //

            public function gilad_body_begin()           { do_action( 'gilad_body_begin' );           }

            public function gilad_body_end()             { do_action( 'gilad_body_end' );             }

            public function gilad_footer_begin()         { do_action( 'gilad_footer_begin' );         }

            public function gilad_footer_end()           { do_action( 'gilad_footer_end' );           }

            public function gilad_header_begin()         { do_action( 'gilad_header_begin' );         }

            public function gilad_header_end()           { do_action( 'gilad_header_end' );           }

            public function gilad_main_begin()           { do_action( 'gilad_main_begin' );           }

            public function gilad_main_end()             { do_action( 'gilad_main_end' );             }

            public function gilad_wrapper_begin()        { do_action( 'gilad_wrapper_begin' );        }

            public function gilad_wrapper_end()          { do_action( 'gilad_wrapper_end' );          }

            //  -----------------------------------  BEGIN AND END : DEFAULT LOOPS  -----------------------------------  //

            public function gilad_else_posts_begin()     { do_action( 'gilad_else_posts_begin' );     }

            public function gilad_else_posts_end()       { do_action( 'gilad_else_posts_end' );       }

            public function gilad_if_posts_begin()       { do_action( 'gilad_if_posts_begin' );       }

            public function gilad_if_posts_end()         { do_action( 'gilad_if_posts_end' );         }

            public function gilad_while_posts_begin()    { do_action( 'gilad_while_posts_begin' );    }

            public function gilad_while_posts_end()      { do_action( 'gilad_while_posts_end' );      }

            //  ------------------------------------------  BEFORE AND AFTER  -----------------------------------------  //

            public function gilad_gtm_after()            { do_action( 'gilad_gtm_after' );            }

            public function gilad_gtm_before()           { do_action( 'gilad_gtm_before' );           }

            //  --------------------------------------------  ADD ANOTHER  --------------------------------------------  //

            public function gilad_link_add()             { do_action( 'gilad_link_add' );             }

            public function gilad_meta_add()             { do_action( 'gilad_meta_add' );             }

            //  -------------------------------------------------------------------------------------------------------  //

        }

    }
