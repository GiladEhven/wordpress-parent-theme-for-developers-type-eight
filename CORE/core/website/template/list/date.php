<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Date extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_date_properties( $query_object );

        }

        protected function set_date_properties( $query_object ) {

            $date_num_day   = get_query_var('day');
            $date_num_month = get_query_var('monthnum');
            $date_num_year  = get_query_var('year');

            $date_query = array();
            $date_query['year'] = $date_num_year;
            if ( $date_num_month > 0 ) $date_query['monthnum'] = $date_num_month;
            if ( $date_num_day > 0 )   $date_query['day'] = $date_num_day;

            $date_name = '';
            if ( $date_num_day > 0 ) {
                $date_name = date( $this->site_date_format, mktime( 0, 0, 0, $date_num_month, $date_num_day, $date_num_year ) );
            } elseif ( $date_num_month > 0 ) {
                $date_name = date( 'F', mktime(0, 0, 0, $date_num_month, 1, 1 ) ) . ' ' . $date_num_year;
            } else {
                $date_name = $date_num_year;
            }

            $posts_in_date = array();
            $posts_in_date_counter = 0;
            $posts_in_date_object = new \WP_Query( $date_query );
            $posts_in_date_array_of_post_objects = $posts_in_date_object->posts;

            foreach ( $posts_in_date_array_of_post_objects as $post_object ) {

                $posts_in_date_counter++;

                $post_datetime_pub                                            = $post_object->post_date;
                $post_datetime_pub_arr                                        = explode( ' ', $post_datetime_pub );

                $post_datetime_upd                                            = $post_object->post_modified;
                $post_datetime_upd_arr                                        = explode( ' ', $post_datetime_upd );

                $posts_in_date[$posts_in_date_counter]['post_comments']       = $post_object->comment_count;
                $posts_in_date[$posts_in_date_counter]['post_content']        = preg_replace( '/(\r\n)+|\r+|\n+|\t+/i', '', preg_replace( '/<!--(.|s)*?-->/', '', $post_object->post_content ) );
                $posts_in_date[$posts_in_date_counter]['post_excerpt']        = $post_object->post_excerpt;
                $posts_in_date[$posts_in_date_counter]['post_id']             = $post_object->ID;
                $posts_in_date[$posts_in_date_counter]['post_datetime_pub']   = $post_datetime_pub;
                $posts_in_date[$posts_in_date_counter]['post_datetime_upd']   = $post_datetime_upd;
                $posts_in_date[$posts_in_date_counter]['post_date_publish']   = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                $posts_in_date[$posts_in_date_counter]['post_date_pub']       = trim( strstr( $posts_in_date[$posts_in_date_counter]['post_date_publish'], ' ' ) );
                $posts_in_date[$posts_in_date_counter]['post_date_update']    = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                $posts_in_date[$posts_in_date_counter]['post_date_upd']       = trim( strstr( $posts_in_date[$posts_in_date_counter]['post_date_update'], ' ' ) );
                $posts_in_date[$posts_in_date_counter]['post_slug']           = $post_object->post_name;
                $posts_in_date[$posts_in_date_counter]['post_time_publish']   = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                $posts_in_date[$posts_in_date_counter]['post_time_update']    = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                $posts_in_date[$posts_in_date_counter]['post_title']          = $post_object->post_title;
                $posts_in_date[$posts_in_date_counter]['post_type']           = $post_object->post_type;

            }

            $this->date_x          = '-----------------------------------------------------------------------------------------------';
            $this->date_y          = '-----------------------------------  C O R E   :   D A T E  -----------------------------------';
            $this->date_z          = '-----------------------------------------------------------------------------------------------';
            $this->date_test_value = 'From CORE_Date class...';

            $this->date_name       = $date_name;
            $this->date_get_day    = $date_num_day;
            $this->date_get_month  = $date_num_month;
            $this->date_get_year   = $date_num_year;
            $this->date_posts      = $posts_in_date;
            $this->date_query      = $date_query;

            $this->archive_controls_newer_posts = get_previous_posts_link();
            $this->archive_controls_older_posts = get_next_posts_link();

        }

    }
