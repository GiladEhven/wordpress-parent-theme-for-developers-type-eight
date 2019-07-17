<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_List' ) ) {

        abstract class TIE_List extends TIE_Default {

            public function __construct() {

                parent::__construct();

                $query_object = get_queried_object();

                $this->set_list_props( $query_object );

                if ( is_author() )   $this->set_author_props( $query_object );
                if ( is_category() ) $this->set_category_props( $query_object );
                if ( is_date() )     $this->set_date_props( $query_object );
                if ( is_home() )     $this->set_home_props( $query_object );
                if ( is_search() )   $this->set_search_props( $query_object );
                if ( is_tag() )      $this->set_tag_props( $query_object );
                if
                (
                    ( ! is_post_type_archive( 'attachment' ) ) &&
                    ( ! is_post_type_archive( 'nav-menu-item' ) ) &&
                    ( ! is_post_type_archive( 'page' ) ) &&
                    ( ! is_post_type_archive( 'post' ) ) &&
                    ( ! is_post_type_archive( 'revision' ) ) &&

                    ( ! is_author() ) &&
                    ( ! is_category() ) &&
                    ( ! is_date() ) &&
                    ( ! is_home() ) &&
                    ( ! is_search() ) &&
                    ( ! is_tag() )
                )
                {
                    $this->set_cpt_props( $query_object );
                }

                $this->this_template_x      = '-----------------------------------------------------------------------------------------------';
                $this->this_template_y      = '---------------------------------  T H I S   T E M P L A T E  ---------------------------------';
                $this->this_template_z      = '-----------------------------------------------------------------------------------------------';

            }

            protected function set_author_props( $query_object ) {

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

                $this->author_x             = '-----------------------------------------------------------------------------------------------';
                $this->author_y             = '-----------------------------  T I E   L I S T   :   A U T H O R  -----------------------------';
                $this->author_z             = '-----------------------------------------------------------------------------------------------';

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

            protected function set_category_props( $query_object ) {

                $category_id = $query_object->cat_ID;

                $categories_array = get_categories();
                $categories_counter = 0;
                $categories_all = array();

                $posts_in_category = array();
                $posts_counter = 0;
                $posts_query = new \WP_Query( array( 'cat' => $category_id ) );
                $posts_query_array = $posts_query->posts;

                foreach ( $categories_array as $category ) {

                    $categories_counter++;

                    $categories_all[$categories_counter]['count']       = $category->count;
                    $categories_all[$categories_counter]['description'] = $category->description;
                    $categories_all[$categories_counter]['id']          = $category->term_id;
                    $categories_all[$categories_counter]['name']        = $category->name;
                    $categories_all[$categories_counter]['parent']      = $category->parent;
                    $categories_all[$categories_counter]['slug']        = $category->slug;
                    $categories_all[$categories_counter]['url']         = get_category_link( $category->term_id );

                }

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

                $this->category_x           = '-----------------------------------------------------------------------------------------------';
                $this->category_y           = '---------------------------  T I E   L I S T   :   C A T E G O R Y  ---------------------------';
                $this->category_z           = '-----------------------------------------------------------------------------------------------';

                $this->categories           = $categories_all;
                $this->category_count       = $query_object->category_count;
                $this->category_description = $query_object->category_description;
                $this->category_entries     = $query_object->category_count;
                $this->category_id          = $category_id;
                $this->category_name        = $query_object->cat_name;
                $this->category_parent      = $query_object->category_parent;
                $this->category_posts       = $posts_in_category;
                $this->category_slug        = $query_object->slug;

            }

            protected function set_cpt_props( $query_object ) {

                $this->cpt_x                = '-----------------------------------------------------------------------------------------------';
                $this->cpt_y                = '-------------------  T I E   L I S T   :   C U S T O M   P O S T   T Y P E  -------------------';
                $this->cpt_z                = '-----------------------------------------------------------------------------------------------';

                $this->cpt_archives         = $query_object->labels->archives;
                $this->cpt_attributes       = $query_object->labels->attributes;
                $this->cpt_capability_type  = $query_object->capability_type;
                $this->cpt_description      = $query_object->description;
                $this->cpt_hierarchical     = $query_object->hierarchical;
                $this->cpt_icon             = $query_object->menu_icon;
                $this->cpt_name             = $query_object->name;
                $this->cpt_name_short       = $query_object->labels->menu_name;
                $this->cpt_plural           = $query_object->labels->name;
                $this->cpt_singular         = $query_object->labels->singular_name;
                $this->cpt_slug             = $query_object->has_archive;
                $this->cpt_title            = $query_object->label;

                // TODO: Add check to do the following for term archive only... Or move to separate into it's own method... And do checks in constructor...

                $this->term_x               = '-----------------------------------------------------------------------------------------------';
                $this->term_y               = '---------------------------  T I E   L I S T   :   C P T   T E R M  ---------------------------';
                $this->term_z               = '-----------------------------------------------------------------------------------------------';

                $this->term_id              = $query_object->term_id;

            }

            protected function set_date_props( $query_object ) {

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

                $posts_counter = 0;
                $posts_in_date = array();
                $posts_query = new \WP_Query( $date_query );
                $posts_query_array = $posts_query->posts;

                foreach ( $posts_query_array as $post_object ) {

                    $posts_counter++;

                    $post_datetime_pub                                    = $post_object->post_date;
                    $post_datetime_pub_arr                                = explode( ' ', $post_datetime_pub );

                    $post_datetime_upd                                    = $post_object->post_modified;
                    $post_datetime_upd_arr                                = explode( ' ', $post_datetime_upd );

                    $posts_in_date[$posts_counter]['post_comments']       = $post_object->comment_count;
                    $posts_in_date[$posts_counter]['post_excerpt']        = $post_object->post_excerpt;
                    $posts_in_date[$posts_counter]['post_id']             = $post_object->ID;
                    $posts_in_date[$posts_counter]['post_datetime_pub']   = $post_datetime_pub;
                    $posts_in_date[$posts_counter]['post_datetime_upd']   = $post_datetime_upd;
                    $posts_in_date[$posts_counter]['post_date_publish']   = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                    $posts_in_date[$posts_counter]['post_date_pub']       = trim( strstr( $posts_in_date[$posts_counter]['post_date_publish'], ' ' ) );
                    $posts_in_date[$posts_counter]['post_date_update']    = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                    $posts_in_date[$posts_counter]['post_date_upd']       = trim( strstr( $posts_in_date[$posts_counter]['post_date_update'], ' ' ) );
                    $posts_in_date[$posts_counter]['post_slug']           = $post_object->post_name;
                    $posts_in_date[$posts_counter]['post_time_publish']   = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                    $posts_in_date[$posts_counter]['post_time_update']    = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                    $posts_in_date[$posts_counter]['post_title']          = $post_object->post_title;
                    $posts_in_date[$posts_counter]['post_type']           = $post_object->post_type;

                }

                $this->date_x               = '-----------------------------------------------------------------------------------------------';
                $this->date_y               = '-------------------------------  T I E   L I S T   :   D A T E  -------------------------------';
                $this->date_z               = '-----------------------------------------------------------------------------------------------';

                $this->date_name       = $date_name;
                $this->date_get_day    = $date_num_day;
                $this->date_get_month  = $date_num_month;
                $this->date_get_year   = $date_num_year;
                $this->date_posts     = $posts_in_date;
                $this->date_query     = $date_query;

                $this->archive_controls_newer_posts = get_previous_posts_link();
                $this->archive_controls_older_posts = get_next_posts_link();

            }

            protected function set_home_props( $query_object ) {

                $home_datetime_pub          = $query_object->post_date;
                $home_datetime_pub_arr      = explode( ' ', $home_datetime_pub );

                $home_datetime_upd          = $query_object->post_modified;
                $home_datetime_upd_arr      = explode( ' ', $home_datetime_upd );

                $posts_counter = 0;
                $posts_in_home = array();
                $posts_query = new \WP_Query( array( 'post_type' => array( 'post' ) ) );
                $posts_query_array = $posts_query->posts;

                foreach ( $posts_query_array as $post_object ) {

                    $posts_counter++;

                    $post_id = $post_object->ID;

                    $post_in_home_datetime_pub                                    = $post_object->post_date;
                    $post_in_home_datetime_pub_arr                                = explode( ' ', $post_in_home_datetime_pub );

                    $post_in_home_datetime_upd                                    = $post_object->post_modified;
                    $post_in_home_datetime_upd_arr                                = explode( ' ', $post_in_home_datetime_upd );

                    $posts_in_home[$posts_counter]['post_comments']               = $post_object->comment_count;
                    $posts_in_home[$posts_counter]['post_content']                = $post_object->post_content;
                    $posts_in_home[$posts_counter]['post_excerpt']                = $post_object->post_excerpt;
                    $posts_in_home[$posts_counter]['post_image']                  = $this->get_featured_image_urls( $post_id );
                    $posts_in_home[$posts_counter]['post_image_alt']              = get_post_meta( $post_id, '_wp_attachment_image_alt', true );
                    $posts_in_home[$posts_counter]['post_id']                     = $post_id;
                    $posts_in_home[$posts_counter]['post_datetime_pub']           = $post_in_home_datetime_pub;
                    $posts_in_home[$posts_counter]['post_datetime_upd']           = $post_in_home_datetime_upd;
                    $posts_in_home[$posts_counter]['post_date_publish']           = date( $this->site_date_format, strtotime( $post_in_home_datetime_pub_arr[0] ) );
                    $posts_in_home[$posts_counter]['post_date_pub']               = trim( strstr( $posts_in_home[$posts_counter]['post_date_publish'], ' ' ) );
                    $posts_in_home[$posts_counter]['post_date_update']            = date( $this->site_date_format, strtotime( $post_in_home_datetime_upd_arr[0] ) );
                    $posts_in_home[$posts_counter]['post_date_upd']               = trim( strstr( $posts_in_home[$posts_counter]['post_date_update'], ' ' ) );
                    $posts_in_home[$posts_counter]['post_slug']                   = $post_object->post_name;
                    $posts_in_home[$posts_counter]['post_time_publish']           = date( $this->site_time_format, strtotime( $post_in_home_datetime_pub_arr[1] ) );
                    $posts_in_home[$posts_counter]['post_time_update']            = date( $this->site_time_format, strtotime( $post_in_home_datetime_upd_arr[1] ) );
                    $posts_in_home[$posts_counter]['post_title']                  = $post_object->post_title;
                    $posts_in_home[$posts_counter]['post_type']                   = $post_object->post_type;
                    $posts_in_home[$posts_counter]['post_url']                    = get_permalink( $post_object->ID );

                }

                $this->home_x               = '-----------------------------------------------------------------------------------------------';
                $this->home_y               = '-------------------------------  T I E   L I S T   :   H O M E  -------------------------------';
                $this->home_z               = '-----------------------------------------------------------------------------------------------';

                $this->home_content         = $query_object->post_content;
                $this->home_datetime_pub    = $home_datetime_pub;
                $this->home_datetime_upd    = $home_datetime_upd;
                $this->home_date_publish    = date( $this->site_date_format, strtotime( $home_datetime_pub_arr[0] ) );
                $this->home_date_update     = date( $this->site_date_format, strtotime( $home_datetime_upd_arr[0] ) );
                $this->home_excerpt         = $query_object->post_excerpt;
                $this->home_id              = $query_object->ID;
                $this->home_parent          = $query_object->post_parent;
                $this->home_position        = $query_object->menu_order;
                $this->home_posts           = $posts_in_home;
                $this->home_slug            = $query_object->post_name;
                $this->home_time_publish    = date( $this->site_time_format, strtotime( $home_datetime_pub_arr[1] ) );
                $this->home_time_update     = date( $this->site_time_format, strtotime( $home_datetime_upd_arr[1] ) );
                $this->home_title           = $query_object->post_title;

            }

            protected function set_list_props( $query_object ) {

                $this->list_x               = '-----------------------------------------------------------------------------------------------';
                $this->list_y               = '-------------------------------  T I E   L I S T   :   L I S T  -------------------------------';
                $this->list_z               = '-----------------------------------------------------------------------------------------------';

            }

            protected function set_search_props( $query_object ) {

                $search_query = get_search_query();

                $posts_counter = 0;
                $posts_in_search = array();
                $posts_query = new \WP_Query( array( 's' => $search_query, 'post_type' => array( 'any' ) ) );
                $posts_query_array = $posts_query->posts;

                foreach ( $posts_query_array as $post_object ) {

                    $posts_counter++;

                    $post_datetime_pub                                    = $post_object->post_date;
                    $post_datetime_pub_arr                                = explode( ' ', $post_datetime_pub );

                    $post_datetime_upd                                    = $post_object->post_modified;
                    $post_datetime_upd_arr                                = explode( ' ', $post_datetime_upd );

                    $posts_in_search[$posts_counter]['post_comments']     = $post_object->comment_count;
                    $posts_in_search[$posts_counter]['post_content']      = $post_object->post_content;
                    $posts_in_search[$posts_counter]['post_excerpt']      = $post_object->post_excerpt;
                    $posts_in_search[$posts_counter]['post_id']           = $post_object->ID;
                    $posts_in_search[$posts_counter]['post_datetime_pub'] = $post_datetime_pub;
                    $posts_in_search[$posts_counter]['post_datetime_upd'] = $post_datetime_upd;
                    $posts_in_search[$posts_counter]['post_date_publish'] = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                    $posts_in_search[$posts_counter]['post_date_pub']     = trim( strstr( $posts_in_search[$posts_counter]['post_date_publish'], ' ' ) );
                    $posts_in_search[$posts_counter]['post_date_update']  = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                    $posts_in_search[$posts_counter]['post_date_upd']     = trim( strstr( $posts_in_search[$posts_counter]['post_date_update'], ' ' ) );
                    $posts_in_search[$posts_counter]['post_slug']         = $post_object->post_name;
                    $posts_in_search[$posts_counter]['post_time_publish'] = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                    $posts_in_search[$posts_counter]['post_time_update']  = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                    $posts_in_search[$posts_counter]['post_title']        = $post_object->post_title;
                    $posts_in_search[$posts_counter]['post_type']         = $post_object->post_type;

                }

                $this->search_x             = '-----------------------------------------------------------------------------------------------';
                $this->search_y             = '-----------------------------  T I E   L I S T   :   S E A R C H  -----------------------------';
                $this->search_z             = '-----------------------------------------------------------------------------------------------';

                $this->search_link          = get_search_link();
                $this->search_posts         = $posts_in_search;
                $this->search_query         = $search_query;

            }

            protected function set_tag_props( $query_object ) {

                $tag_id = $query_object->term_id;

                $posts_in_tag = array();
                $posts_counter = 0;
                $posts_query = new \WP_Query( array( 'tag_id' => $tag_id ) );
                $posts_query_array = $posts_query->posts;

                $tags_array = get_tags();
                $tags_counter = 0;
                $tags_all = array();

                foreach ( $tags_array as $tag ) {

                    $tags_counter++;

                    $tags_all[$tags_counter]['count']       = $tag->count;
                    $tags_all[$tags_counter]['description'] = $tag->description;
                    $tags_all[$tags_counter]['id']          = $tag->term_id;
                    $tags_all[$tags_counter]['name']        = $tag->name;
                    $tags_all[$tags_counter]['slug']        = $tag->slug;
                    $tags_all[$tags_counter]['url']         = get_tag_link( $tag->term_id );

                }

                foreach ( $posts_query_array as $post_object ) {

                    $posts_counter++;

                    $post_datetime_pub                                    = $post_object->post_date;
                    $post_datetime_pub_arr                                = explode( ' ', $post_datetime_pub );

                    $post_datetime_upd                                    = $post_object->post_modified;
                    $post_datetime_upd_arr                                = explode( ' ', $post_datetime_upd );

                    $posts_in_tag[$posts_counter]['post_comments']     = $post_object->comment_count;
                    $posts_in_tag[$posts_counter]['post_content']      = $post_object->post_content;
                    $posts_in_tag[$posts_counter]['post_excerpt']      = $post_object->post_excerpt;
                    $posts_in_tag[$posts_counter]['post_id']           = $post_object->ID;
                    $posts_in_tag[$posts_counter]['post_datetime_pub'] = $post_datetime_pub;
                    $posts_in_tag[$posts_counter]['post_datetime_upd'] = $post_datetime_upd;
                    $posts_in_tag[$posts_counter]['post_date_publish'] = date( $this->site_date_format, strtotime( $post_datetime_pub_arr[0] ) );
                    $posts_in_tag[$posts_counter]['post_date_update']  = date( $this->site_date_format, strtotime( $post_datetime_upd_arr[0] ) );
                    $posts_in_tag[$posts_counter]['post_slug']         = $post_object->post_name;
                    $posts_in_tag[$posts_counter]['post_time_publish'] = date( $this->site_time_format, strtotime( $post_datetime_pub_arr[1] ) );
                    $posts_in_tag[$posts_counter]['post_time_update']  = date( $this->site_time_format, strtotime( $post_datetime_upd_arr[1] ) );
                    $posts_in_tag[$posts_counter]['post_title']        = $post_object->post_title;
                    $posts_in_tag[$posts_counter]['post_type']         = $post_object->post_type;

                    $posts_in_tag[$posts_counter]['post_date_pub']     = trim( strstr( $posts_in_tag[$posts_counter]['post_date_publish'], ' ' ) );

                    $posts_in_tag[$posts_counter]['post_date_upd']     = trim( strstr( $posts_in_tag[$posts_counter]['post_date_update'], ' ' ) );

                    if ( empty( $posts_in_tag[$posts_counter]['post_excerpt'] ) ) $posts_in_tag[$posts_counter]['post_excerpt'] = wp_trim_words( $posts_in_tag[$posts_counter]['post_content'], 20, '...' );

                }

                $this->tag_x                = '-----------------------------------------------------------------------------------------------';
                $this->tag_y                = '--------------------------------  T I E   L I S T   :   T A G  --------------------------------';
                $this->tag_z                = '-----------------------------------------------------------------------------------------------';

                $this->tags_all             = $tags_all;
                $this->tag_description      = $query_object->description;
                $this->tag_id               = $tag_id;
                $this->tag_name             = $query_object->name;
                $this->tag_posts            = $posts_in_tag;
                $this->tag_slug             = $query_object->slug;

            }

        }

    }
