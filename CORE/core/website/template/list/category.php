<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Category extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_category_properties( $query_object );

        }

        protected function set_category_properties( $query_object ) {

            $category_id = $query_object->cat_ID;

            $posts_in_category = array();
            $posts_counter = 0;
            $posts_query = new \WP_Query( array( 'cat' => $category_id ) );
            $posts_query_array = $posts_query->posts;

            foreach ( $posts_query_array as $post_object ) {

                $posts_counter++;

                $post_datetime_pub                                      = $post_object->post_date;
                $post_datetime_pub_arr                                  = explode( ' ', $post_datetime_pub );

                $post_datetime_upd                                      = $post_object->post_modified;
                $post_datetime_upd_arr                                  = explode( ' ', $post_datetime_upd );

                $posts_in_category[$posts_counter]['post_comments']     = $post_object->comment_count;
                $posts_in_category[$posts_counter]['post_content']      = $post_object->post_content;
                $posts_in_category[$posts_counter]['post_excerpt']      = $post_object->post_excerpt;
                $posts_in_category[$posts_counter]['post_id']           = $post_object->ID;
                $posts_in_category[$posts_counter]['post_datetime_pub'] = $post_datetime_pub;
                $posts_in_category[$posts_counter]['post_datetime_upd'] = $post_datetime_upd;
                $posts_in_category[$posts_counter]['post_date_publish'] = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                $posts_in_category[$posts_counter]['post_date_pub']     = trim( strstr( $posts_in_category[$posts_counter]['post_date_publish'], ' ' ) );
                $posts_in_category[$posts_counter]['post_date_update']  = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                $posts_in_category[$posts_counter]['post_date_upd']     = trim( strstr( $posts_in_category[$posts_counter]['post_date_update'], ' ' ) );
                $posts_in_category[$posts_counter]['post_slug']         = $post_object->post_name;
                $posts_in_category[$posts_counter]['post_time_publish'] = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                $posts_in_category[$posts_counter]['post_time_update']  = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                $posts_in_category[$posts_counter]['post_title']        = $post_object->post_title;
                $posts_in_category[$posts_counter]['post_type']         = $post_object->post_type;
                $posts_in_category[$posts_counter]['post_url']          = get_permalink( $post_object->ID );

                if ( empty( $posts_in_category[$posts_counter]['post_excerpt'] ) ) $posts_in_category[$posts_counter]['post_excerpt'] = wp_trim_words( $posts_in_category[$posts_counter]['post_content'], 20, '...' );

            }

            $this->category_x          = '-----------------------------------------------------------------------------------------------';
            $this->category_y          = '-------------------------------  C O R E   :   C A T E G O R Y  -------------------------------';
            $this->category_z          = '-----------------------------------------------------------------------------------------------';
            $this->category_test_value = 'From CORE_Category class...';

            $this->category_description = $query_object->category_description;
            $this->category_entries     = $query_object->category_count;
            $this->category_id          = $category_id;
            $this->category_name        = $query_object->cat_name;
            $this->category_parent      = $query_object->category_parent;
            $this->category_posts       = $posts_in_category;
            $this->category_slug        = $query_object->slug;

        }

    }
