<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-wordpress-project.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Abstract_WordPress_Page' ) ) {

        abstract class Abstract_WordPress_Page extends Abstract_WordPress_Project {
//      abstract class Abstract_WordPress_Page {

            //  ------------------------------  PROPERTIES  -----------------------------  //

            protected $requested_resource_type;

            protected $requested_resource_value;

            protected $requesting_referer;

            protected $object_counter = 0;

            //  ----------------------------  HOUSEKEEPING  -----------------------------  //

            public function __construct() {

//                parent::__construct();

                $this->set_requested_resource_type();
                $this->set_requested_resource_value();
                $this->set_requesting_referer();

                $this->packaged_data = $this->package_data_for_page_view();

                $this->scaffold();

                $this->object_counter++;
            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            protected function get_requested_resource_type() {
                return $this->requested_resource_type;
            }

            protected function get_requested_resource_value() {
                return $this->requested_resource_value;
            }

            protected function get_requesting_referer() {
                return $this->requesting_referer;
            }

            protected function set_requested_resource_type() {

                global $wp_query;

                $type = null;

                if ( $wp_query->is_404 )            { $type = '404';          }

                elseif ( $wp_query->is_archive )    {

                    if     ( $wp_query->is_author ) { $type = 'author';       }

                    elseif ( $wp_query->is_day )    { $type = 'day';          }

                    elseif ( $wp_query->is_month )  { $type = 'month';        }

                    elseif ( $wp_query->is_year )   { $type = 'year';         }

                    else                            { $type = 'archive';      }

                }

                elseif ( $wp_query->is_category )   { $type = 'category';     }

                elseif ( $wp_query->is_home )       { $type = 'home';         }

                elseif ( $wp_query->is_page )       {

                    if ( $wp_query->is_front_page ) { $type = 'front-page';   }

                    else                            { $type = 'page';         }

                }

                elseif ( $wp_query->is_search )     { $type = 'search';       }

                elseif ( $wp_query->is_single )     {

                    if ( $wp_query->is_attachment ) { $type = 'attachment';   }

                    else                            { $type = 'single';       }

            //      global $post;
            //      $id = $post->ID;
            //      $check = get_post_type( $id );
            //      if ( $check ) $type = $check;

                }

                elseif ( $wp_query->is_tag )        { $type = 'tag';          }

                elseif ( $wp_query->is_tax )        { $type = 'tax';          }

                else                                { $type = 'undetermined'; }

                $this->requested_resource_type = $type;

            }

            protected function set_requested_resource_value() {

                if ( is_404() ) {

                } elseif ( is_archive() ) {

                } elseif ( is_tax() ) {

                } else {

                    global $post;
                    $id = $post->ID;
                    $this->requested_resource_value = $id;

                }

            }

            protected function set_requesting_referer() {
                $referer = wp_get_referer();
                $this->requesting_referer = $referer ? $referer : 'none';
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function package_data_for_page_view() {

                $req   = $this->get_requesting_referer();
                $type  = $this->get_requested_resource_type();
                $value = $this->get_requested_resource_value();

                $data = array();

                $data['requested-resource-type']  = $type;
                $data['requested-resource-value'] = $value;
                $data['requesting-referer']       = $req;

                return $data;

            }

/*
            public static function render( $variable ) {

                if ( isset( self::packaged_data[$variable] ) ) {

                    echo $data[$variable];

                } else {

                    echo '<span class="gilad-render-none">[' . $variable . '] Not Found!</span>';

                }

            }
*/

            protected function scaffold() {

                get_header();
                $this->build();
                get_footer();

            }

            //  ------------------------------  ABSTRACTS  ------------------------------  //

            abstract protected function build();

        }

    }
