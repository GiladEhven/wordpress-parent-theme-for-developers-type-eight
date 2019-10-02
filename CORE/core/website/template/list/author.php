<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Author extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_author_properties( $query_object );

        }

        protected function set_author_properties( $query_object ) {

            $author_id = $query_object->ID;
            $posts_by_author = array();
            $posts_counter = 0;
            $posts_query = new \WP_Query( array( 'author' => $author_id, 'post_type' => array( 'any' ) ) );
            $posts_query_array = $posts_query->posts;

            foreach ( $posts_query_array as $post_object ) {

                if ( $post_object->post_name == 'http-404' ) continue;
                if ( $post_object->post_type != 'post' ) continue;

                $posts_counter++;

                $post_datetime_pub                                    = $post_object->post_date;
                $post_datetime_pub_arr                                = explode( ' ', $post_datetime_pub );

                $post_datetime_upd                                    = $post_object->post_modified;
                $post_datetime_upd_arr                                = explode( ' ', $post_datetime_upd );

                $posts_by_author[$posts_counter]['post_comments']     = $post_object->comment_count;
                $posts_by_author[$posts_counter]['post_content']      = $post_object->post_content;
                $posts_by_author[$posts_counter]['post_excerpt']      = $post_object->post_excerpt;
                $posts_by_author[$posts_counter]['post_id']           = $post_object->ID;
                $posts_by_author[$posts_counter]['post_datetime_pub'] = $post_datetime_pub;
                $posts_by_author[$posts_counter]['post_datetime_upd'] = $post_datetime_upd;
                $posts_by_author[$posts_counter]['post_date_publish'] = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                $posts_by_author[$posts_counter]['post_date_pub']     = trim( strstr( $posts_by_author[$posts_counter]['post_date_publish'], ' ' ) );
                $posts_by_author[$posts_counter]['post_date_update']  = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                $posts_by_author[$posts_counter]['post_date_upd']     = trim( strstr( $posts_by_author[$posts_counter]['post_date_update'], ' ' ) );
                $posts_by_author[$posts_counter]['post_slug']         = $post_object->post_name;
                $posts_by_author[$posts_counter]['post_time_publish'] = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                $posts_by_author[$posts_counter]['post_time_update']  = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                $posts_by_author[$posts_counter]['post_title']        = $post_object->post_title;
                $posts_by_author[$posts_counter]['post_type']         = $post_object->post_type;
                $posts_by_author[$posts_counter]['post_url']          = get_permalink( $post_object->ID );

            }

            $this->author_x          = '-----------------------------------------------------------------------------------------------';
            $this->author_y          = '---------------------------------  C O R E   :   A U T H O R  ---------------------------------';
            $this->author_z          = '-----------------------------------------------------------------------------------------------';
            $this->author_test_value = 'From CORE_Author class...';

            $this->author_bio           = get_the_author_meta( 'description' );
            $this->author_email         = $query_object->data->user_email;
            $this->author_id            = $author_id;
            $this->author_name          = $query_object->data->display_name;
            $this->author_name_first    = get_the_author_meta( 'first_name' );
            $this->author_name_last     = get_the_author_meta( 'last_name' );
            $this->author_name_nick     = get_the_author_meta( 'nickname' );
            $this->author_password      = $query_object->data->user_pass;
            $this->author_posts         = $posts_by_author;
            $this->author_posts_count   = count_user_posts( $this->author_id );
            $this->author_registered    = $query_object->data->user_registered;
            $this->author_roles         = $query_object->roles;
            $this->author_slug          = $query_object->data->user_nicename;
            $this->author_url           = $query_object->data->user_url;
            $this->author_username      = $query_object->data->user_login;

        }

    }
