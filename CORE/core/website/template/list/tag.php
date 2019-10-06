<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '.php' );

    abstract class CORE_Tag extends CORE_List {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_tag_properties( $query_object );

        }

        protected function set_tag_properties( $query_object ) {

            $tag_id = $query_object->term_id;

            $posts_in_tag = array();
            $posts_in_tag_counter = 0;
            $posts_in_tag_object = new \WP_Query( array( 'tag_id' => $tag_id ) );
            $posts_in_tag_array_of_post_objects = $posts_in_tag_object->posts;

            foreach ( $posts_in_tag_array_of_post_objects as $post_object ) {

                $posts_in_tag_counter++;

                $post_datetime_pub                                        = $post_object->post_date;
                $post_datetime_pub_arr                                    = explode( ' ', $post_datetime_pub );

                $post_datetime_upd                                        = $post_object->post_modified;
                $post_datetime_upd_arr                                    = explode( ' ', $post_datetime_upd );

                $posts_in_tag[$posts_in_tag_counter]['post_comments']     = $post_object->comment_count;
                $posts_in_tag[$posts_in_tag_counter]['post_content']      = $post_object->post_content;
                $posts_in_tag[$posts_in_tag_counter]['post_excerpt']      = $post_object->post_excerpt;
                $posts_in_tag[$posts_in_tag_counter]['post_id']           = $post_object->ID;
                $posts_in_tag[$posts_in_tag_counter]['post_datetime_pub'] = $post_datetime_pub;
                $posts_in_tag[$posts_in_tag_counter]['post_datetime_upd'] = $post_datetime_upd;
                $posts_in_tag[$posts_in_tag_counter]['post_date_publish'] = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                $posts_in_tag[$posts_in_tag_counter]['post_date_update']  = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                $posts_in_tag[$posts_in_tag_counter]['post_slug']         = $post_object->post_name;
                $posts_in_tag[$posts_in_tag_counter]['post_time_publish'] = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                $posts_in_tag[$posts_in_tag_counter]['post_time_update']  = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                $posts_in_tag[$posts_in_tag_counter]['post_title']        = $post_object->post_title;
                $posts_in_tag[$posts_in_tag_counter]['post_type']         = $post_object->post_type;

                $posts_in_tag[$posts_in_tag_counter]['post_date_pub']     = trim( strstr( $posts_in_tag[$posts_in_tag_counter]['post_date_publish'], ' ' ) );

                $posts_in_tag[$posts_in_tag_counter]['post_date_upd']     = trim( strstr( $posts_in_tag[$posts_in_tag_counter]['post_date_update'], ' ' ) );

                if ( empty( $posts_in_tag[$posts_in_tag_counter]['post_excerpt'] ) ) $posts_in_tag[$posts_in_tag_counter]['post_excerpt'] = wp_trim_words( $posts_in_tag[$posts_in_tag_counter]['post_content'], 20, '...' );

            }

            $this->tag_x           = '-----------------------------------------------------------------------------------------------';
            $this->tag_y           = '------------------------------------  C O R E   :   T A G  ------------------------------------';
            $this->tag_z           = '-----------------------------------------------------------------------------------------------';

            $this->tag_description = $query_object->description;
            $this->tag_id          = $tag_id;
            $this->tag_name        = $query_object->name;
            $this->tag_posts       = $posts_in_tag;
            $this->tag_slug        = $query_object->slug;

        }

    }
