<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Document' ) ) {

        abstract class TIE_Document extends TIE_Default {

            public function __construct() {

                parent::__construct();

                $query_object = get_queried_object();

                if ( is_object( $query_object ) ) $this->set_document_props( $query_object );

                if ( is_front_page() ) $this->set_front_page_props( $query_object );
                if ( is_page() )       $this->set_page_props( $query_object );
                if ( is_single() )     $this->set_post_props( $query_object );

                $this->template_x = '-----------------------------------------------------------------------------------------------';
                $this->template_y = '---------------------------------  T H I S   T E M P L A T E  ---------------------------------';
                $this->template_z = '-----------------------------------------------------------------------------------------------';

            }

            protected function set_document_props( $query_object ) {

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

                    }

                } else {

                    // [have_posts] returned 0 or false...

                }

                $this->author_x              = '-----------------------------------------------------------------------------------------------';
                $this->author_y              = '-------------------------  T I E   D O C U M E N T   :   A U T H O R  -------------------------';
                $this->author_z              = '-----------------------------------------------------------------------------------------------';

                $this->author_id             = $query_object->post_author;

                $this->comments_x            = '-----------------------------------------------------------------------------------------------';
                $this->comments_y            = '-----------------------  T I E   D O C U M E N T   :   C O M M E N T S  -----------------------';
                $this->comments_z            = '-----------------------------------------------------------------------------------------------';

        //      $this->comments              = $discussion;
        //      $this->comments_count        = $query_object->comment_count;
        //      $this->comments_status       = $query_object->comment_status;

                $this->document_x            = '-----------------------------------------------------------------------------------------------';
                $this->document_y            = '-----------------------  T I E   D O C U M E N T   :   D O C U M E N T  -----------------------';
                $this->document_z            = '-----------------------------------------------------------------------------------------------';

                $this->document_content      = apply_filters( 'the_content', $query_object->post_content );
                $this->document_date_publish = get_the_date();
                $this->document_date_updated = get_the_modified_date();
                $this->document_delete_link  = $document_delete_link;
                $this->document_edit_link    = $document_edit_link;
                $this->document_excerpt      = $document_excerpt;
                $this->document_image_has    = $document_featured_image_has;
                $this->document_image_ID     = $document_featured_image_ID;
                $this->document_image_url    = $this->get_featured_image_urls();
                $this->document_id           = $query_object->ID;
                $this->document_last_edit_by = get_the_modified_author();

                // TODO: Refine with parameters at [https://developer.wordpress.org/reference/functions/get_previous_post_link/]

                $doc_next_any  = '';
                $doc_next_this = '';
                $doc_prev_any  = '';
                $doc_prev_this = '';

                if ( get_permalink() == get_permalink( get_adjacent_post( false, '', false )->ID ) ) {
                    $doc_next_any = 'javascript:;';
                } else {
                    $doc_next_any = get_permalink( get_adjacent_post( false, '', false )->ID );
                }

                if ( get_permalink() == get_permalink( get_adjacent_post( true, '', false )->ID ) ) {
                    $doc_next_this = 'javascript:;';
                } else {
                    $doc_next_this = get_permalink( get_adjacent_post( true, '', false )->ID );
                }

                if ( get_permalink() == get_permalink( get_adjacent_post( false, '', true )->ID ) ) {
                    $doc_prev_any = 'javascript:;';
                } else {
                    $doc_prev_any = get_permalink( get_adjacent_post( false, '', true )->ID );
                }

                if ( get_permalink() == get_permalink( get_adjacent_post( true, '', true )->ID ) ) {
                    $doc_prev_this = 'javascript:;';
                } else {
                    $doc_prev_this = get_permalink( get_adjacent_post( true, '', true )->ID );
                }

                $this->document_next_any       = $doc_next_any;  // get_permalink( get_adjacent_post( false, '', false )->ID ); // get_next_post_link();
                $this->document_next_this_term = $doc_next_this; // get_permalink( get_adjacent_post( true,  '', false )->ID ); // get_next_post_link();
                $this->document_prev_any       = $doc_prev_any;  // get_permalink( get_adjacent_post( false, '', true )->ID );  // get_previous_post_link();
                $this->document_prev_this_term = $doc_prev_this; // get_permalink( get_adjacent_post( true,  '', true )->ID );  // get_previous_post_link();
                $this->document_parent         = $query_object->post_parent;
                $this->document_position       = $query_object->menu_order;
                $this->document_slug           = $query_object->post_name;
                $this->document_status         = $query_object->post_status;
                $this->document_time_publish   = get_the_time();
                $this->document_time_updated   = get_the_modified_time();
                $this->document_title          = $query_object->post_title;
                $this->document_type           = $query_object->post_type;

            }

            protected function set_front_page_props( $query_object ) {

                $this->front_page_x          = '-----------------------------------------------------------------------------------------------';
                $this->front_page_y          = '---------------------  T I E   D O C U M E N T   :   F R O N T   P A G E  ---------------------';
                $this->front_page_z          = '-----------------------------------------------------------------------------------------------';

            }

            protected function set_page_props( $query_object ) {

                $this->page_x                = '-----------------------------------------------------------------------------------------------';
                $this->page_y                = '---------------------------  T I E   D O C U M E N T   :   P A G E  ---------------------------';
                $this->page_z                = '-----------------------------------------------------------------------------------------------';

            }

            protected function set_post_props( $query_object ) {

                $this->post_x                = '-----------------------------------------------------------------------------------------------';
                $this->post_y                = '---------------------------  T I E   D O C U M E N T   :   P O S T  ---------------------------';
                $this->post_z                = '-----------------------------------------------------------------------------------------------';

            }

        }

    }
