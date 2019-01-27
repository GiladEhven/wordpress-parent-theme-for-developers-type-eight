<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Error' ) ) {

        abstract class TIE_Error extends TIE_Default {

            public function __construct() {

                parent::__construct();

                $this->set_error_props();
                $this->set_404_props();

                $this->this_template_x      = '-----------------------------------------------------------------------------------------------';
                $this->this_template_y      = '---------------------------------  T H I S   T E M P L A T E  ---------------------------------';
                $this->this_template_z      = '-----------------------------------------------------------------------------------------------';

            }

            protected function set_404_props() {

                $this->http_404_x           = '-----------------------------------------------------------------------------------------------';
                $this->http_404_y           = '-------------------------------  T I E   E R R O R   :   4 0 4  -------------------------------';
                $this->http_404_z           = '-----------------------------------------------------------------------------------------------';

                $error_page = get_posts(

                    array(
                        'name'      => 'zone-404-main',
                        'post_type' => 'page'
                    )

                );

                if ( $error_page ) {

                    $this->http_404_content = apply_filters( 'the_content', $error_page[0]->post_content );  //  $error_page[0]->post_content;
                    $this->http_404_excerpt = $error_page[0]->post_excerpt;
                    $this->http_404_id      = $error_page[0]->ID;
                    $this->http_404_slug    = $error_page[0]->post_name;
                    $this->http_404_title   = $error_page[0]->post_title;

                } else {

                    $this->http_404         = '404 content should be created in a page slugged "zone-404-main".';

                }

            }

            protected function set_error_props() {

                $query_object               = get_queried_object();

                $this->error_x              = '-----------------------------------------------------------------------------------------------';
                $this->error_y              = '-----------------------------  T I E   E R R O R   :   E R R O R  -----------------------------';
                $this->error_z              = '-----------------------------------------------------------------------------------------------';

            }

        }

    }

//print_r( $error_page );
