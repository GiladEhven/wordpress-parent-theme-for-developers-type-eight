<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Search extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_search_properties( $query_object );

        }

        protected function set_search_properties( $query_object ) {

            $search_query                          = get_search_query();

            $posts_in_search                       = array();
            $posts_in_search_counter               = 0;
            $posts_in_search_object                = new \WP_Query( array( 's' => $search_query, 'post_type' => array( 'any' ) ) );
            $posts_in_search_array_of_post_objects = $posts_in_search_object->posts;





            foreach ( $posts_in_search_array_of_post_objects as $post_object ) {

                $posts_in_search_counter++;

                $post_datetime_pub                                              = $post_object->post_date;
                $post_datetime_pub_arr                                          = explode( ' ', $post_datetime_pub );

                $post_datetime_upd                                              = $post_object->post_modified;
                $post_datetime_upd_arr                                          = explode( ' ', $post_datetime_upd );

                $posts_in_search[$posts_in_search_counter]['post_comments']     = $post_object->comment_count;
                $posts_in_search[$posts_in_search_counter]['post_content']      = preg_replace( '/(\r\n)+|\r+|\n+|\t+/i', '', preg_replace( '/<!--(.|s)*?-->/', '', $post_object->post_content ) );
                $posts_in_search[$posts_in_search_counter]['post_excerpt']      = $post_object->post_excerpt;
                $posts_in_search[$posts_in_search_counter]['post_id']           = $post_object->ID;
                $posts_in_search[$posts_in_search_counter]['post_datetime_pub'] = $post_datetime_pub;
                $posts_in_search[$posts_in_search_counter]['post_datetime_upd'] = $post_datetime_upd;
                $posts_in_search[$posts_in_search_counter]['post_date_publish'] = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                $posts_in_search[$posts_in_search_counter]['post_date_pub']     = trim( strstr( $posts_in_search[$posts_in_search_counter]['post_date_publish'], ' ' ) );
                $posts_in_search[$posts_in_search_counter]['post_date_update']  = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                $posts_in_search[$posts_in_search_counter]['post_date_upd']     = trim( strstr( $posts_in_search[$posts_in_search_counter]['post_date_update'], ' ' ) );
                $posts_in_search[$posts_in_search_counter]['post_slug']         = $post_object->post_name;
                $posts_in_search[$posts_in_search_counter]['post_time_publish'] = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                $posts_in_search[$posts_in_search_counter]['post_time_update']  = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                $posts_in_search[$posts_in_search_counter]['post_title']        = $post_object->post_title;
                $posts_in_search[$posts_in_search_counter]['post_type']         = $post_object->post_type;

                $posts_in_search[$posts_in_search_counter]['post_date_pub']     = trim( strstr( $posts_in_search[$posts_in_search_counter]['post_date_publish'], ' ' ) );

                $posts_in_search[$posts_in_search_counter]['post_date_upd']     = trim( strstr( $posts_in_search[$posts_in_search_counter]['post_date_update'], ' ' ) );

                if ( empty( $posts_in_search[$posts_in_search_counter]['post_excerpt'] ) ) $posts_in_search[$posts_in_search_counter]['post_excerpt'] = wp_trim_words( $posts_in_search[$posts_in_search_counter]['post_content'], 20, '...' );

            }

            $this->search_x          = '-----------------------------------------------------------------------------------------------';
            $this->search_y          = '---------------------------------  C O R E   :   S E A R C H  ---------------------------------';
            $this->search_z          = '-----------------------------------------------------------------------------------------------';

            $this->search_link       = get_search_link();
            $this->search_posts      = $posts_in_search;
            $this->search_query      = $search_query;

        }

    }
