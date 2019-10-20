<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_Document extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_document_properties( $query_object );

        }

        protected function get_featured_image_urls( $post_id ) {

            $image_sizes_array = get_intermediate_image_sizes();

            $images_array = array();

            foreach( $image_sizes_array as $image_size ) {

                $current_pair = array( $image_size => get_the_post_thumbnail_url( $post_id, $image_size ) );
                $images_array = array_merge( $images_array, $current_pair );


            }

            return $images_array;

        }

    protected function set_document_properties( $query_object ) {


            $document_date_fetched_pub     = $query_object->post_date;
            $document_date_fetched_pub_gmt = $query_object->post_date_gmt;
            $document_date_fetched_upd     = $query_object->post_modified;
            $document_date_fetched_upd_gmt = $query_object->post_modified_gmt;

            if ( have_posts() ) {

                while ( have_posts() ) {

                    the_post();

                    if ( get_comments_number() ) {

                        $comments_query = new \WP_Comment_Query;

                        $comments_query_results = $comments_query->query( array( 'status' => 'approve' ) );

                        $comment_counter = 1;

                        $discussion = '';

                        $discussion_array = array();

                        if ( $comments_query_results ) {

                            foreach ( $comments_query_results as $comment ) {

                                $comment_counter_key                                        = 'comment-number-' . $comment_counter;

                                $discussion_array[$comment_counter_key]['author-email']     = $comment->comment_author_email;
                                $discussion_array[$comment_counter_key]['author-ip']        = $comment->comment_author_IP;
                                $discussion_array[$comment_counter_key]['author-name']      = $comment->comment_author;
                                $discussion_array[$comment_counter_key]['author-url']       = $comment->comment_author_url;
                                $discussion_array[$comment_counter_key]['author-user']      = $comment->user_id;
                                $discussion_array[$comment_counter_key]['comment-approved'] = $comment->comment_approved;
                                $discussion_array[$comment_counter_key]['comment-browser']  = $comment->comment_agent;
                                $discussion_array[$comment_counter_key]['comment-content']  = $comment->comment_content;
                                $discussion_array[$comment_counter_key]['comment-date']     = $comment->comment_date;
                                $discussion_array[$comment_counter_key]['comment-id']       = $comment->comment_ID;
                                $discussion_array[$comment_counter_key]['comment-type']     = $comment->comment_type;
                                $discussion_array[$comment_counter_key]['comment-parent']   = $comment->comment_parent;
                                $discussion_array[$comment_counter_key]['post_id']          = $comment->comment_post_ID;

                                $comment_counter++;

                            }

                            $discussion = $discussion_array; // $this->document_comments

                        } else {  //  $comments_query_results == 0

                            $discussion = 'Comments query returned no results.'; // $this->document_comments

                        }

                    } else {  //  get_comments_number() == 0

                        $discussion = '{get_comments_number} returned 0 or false.'; // $this->document_comments

                    }

                    $document_delete_link        = get_delete_post_link();
                    $document_edit_link          = get_edit_post_link();
                    $document_excerpt            = get_the_excerpt();
                    $document_featured_image_has = has_post_thumbnail();
                    $document_featured_image_ID  = get_post_thumbnail_id();
                    $document_featured_image_alt = get_post_meta( $document_featured_image_ID, '_wp_attachment_image_alt', true );

                }

            } else {

                // [have_posts] returned 0 or false...

            }

            $doc_cat_counter             = 0;
            $doc_cats_array              = array();
            $document_categories         = get_the_category();

            foreach ( $document_categories as $doc_cat ) {

                $doc_cat_counter++;

                $doc_cats_array[$doc_cat_counter]['count'] = $doc_cat->count;
                $doc_cats_array[$doc_cat_counter]['desc']  = $doc_cat->description;
                $doc_cats_array[$doc_cat_counter]['ID']    = $doc_cat->term_id;
                $doc_cats_array[$doc_cat_counter]['name']  = $doc_cat->name;
                $doc_cats_array[$doc_cat_counter]['slug']  = $doc_cat->slug;
                $doc_cats_array[$doc_cat_counter]['url']   = get_category_link( $doc_cat->term_id );

            }

            $doc_tag_counter             = 0;
            $doc_tags_array              = array();
            $document_tags               = get_the_tags();

            if ( $document_tags ) {

                foreach ( $document_tags as $doc_tag ) {

                    $doc_tag_counter++;

                    $doc_tags_array[$doc_tag_counter]['count'] = $doc_tag->count;
                    $doc_tags_array[$doc_tag_counter]['desc']  = $doc_tag->description;
                    $doc_tags_array[$doc_tag_counter]['ID']    = $doc_tag->term_id;
                    $doc_tags_array[$doc_tag_counter]['name']  = $doc_tag->name;
                    $doc_tags_array[$doc_tag_counter]['slug']  = $doc_tag->slug;
                    $doc_tags_array[$doc_tag_counter]['url']   = get_tag_link( $doc_tag->term_id );

                }

            }

            $this->document_x                     = '-----------------------------------------------------------------------------------------------';
            $this->document_y                     = '-------------------------------  C O R E   :   D O C U M E N T  -------------------------------';
            $this->document_z                     = '-----------------------------------------------------------------------------------------------';

            $this->document_admin_delete_link     = $document_delete_link;
            $this->document_admin_edit_link       = $document_edit_link;
            $this->document_author_id             = $query_object->post_author;
            $this->document_author_name_display   = get_the_author_meta( 'display_name' );
            $this->document_author_name_first     = get_the_author_meta( 'first_name' );
            $this->document_author_name_last      = get_the_author_meta( 'last_name' );
            $this->document_author_name_nickname  = get_the_author_meta( 'nickname' );
            $this->document_categories            = $doc_cats_array;
        //  $this->document_content               = preg_replace( '/(\r\n)+|\r+|\n+|\t+/i', '', preg_replace( '/<!--(.|s)*?-->/', '', $query_object->post_content ) );
            $this->document_content_full          = preg_replace( '/(\r\n)+|\r+|\n+|\t+/i', '', preg_replace( '/<!--(.|s)*?-->/', '', apply_filters( 'the_content', $query_object->post_content ) ) );
            $this->document_content_excerpt       = $document_excerpt;
            $this->document_date_publish          = get_the_date();
            $this->document_date_updated          = get_the_modified_date();
            $this->document_image_alt             = $document_featured_image_alt;
            $this->document_image_has             = $document_featured_image_has;
            $this->document_image_ID              = $document_featured_image_ID;
            $this->document_image_list            = $this->get_featured_image_urls( $post_id );
            $this->document_id                    = $query_object->ID;
            $this->document_last_edit_by          = get_the_modified_author();
            $this->document_tags                  = $doc_tags_array;

            $this->document_parent                = $query_object->post_parent;
            $this->document_position              = $query_object->menu_order;
            $this->document_slug                  = $query_object->post_name;
            $this->document_status                = $query_object->post_status;
            $this->document_time_publish          = get_the_time();
            $this->document_time_updated          = get_the_modified_time();
            $this->document_title                 = $query_object->post_title;
            $this->document_type                  = $query_object->post_type;

            if ( $this->document_type == 'page' ) {
                $this->document_template          = 'page';
            } elseif ( $this->document_type == 'post' ) {
                $this->document_template          = 'single';
            }

        }

    }
