<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_List extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            if ( is_author() )   $this->set_authors_properties();

            if ( is_category() ) $this->set_categories_properties();

        }

        protected function set_authors_properties() {

            $authors_array         = get_users( array() );
            $authors_counter       = 0;
            $authors_all           = array();

            foreach ( $authors_array as $author ) {

                $authors_counter++;

                if ( in_array( 'subscriber', $author->roles ) ) continue;

                $authors_all[$authors_counter]['author_activation_key'] = $author->data->user_activation_key;
                $authors_all[$authors_counter]['author_display']        = $author->data->display_name;
                $authors_all[$authors_counter]['author_email']          = $author->data->user_email;
                $authors_all[$authors_counter]['author_id']             = $author->data->ID;
                $authors_all[$authors_counter]['author_nicename']       = $author->data->user_nicename;
                $authors_all[$authors_counter]['author_password']       = $author->data->user_pass;
                $authors_all[$authors_counter]['author_roles']          = $author->roles;
                $authors_all[$authors_counter]['author_since']          = $author->data->user_registered;
                $authors_all[$authors_counter]['author_status']         = $author->data->user_status;
                $authors_all[$authors_counter]['author_url']            = $author->data->user_url;
                $authors_all[$authors_counter]['author_username']       = $author->data->user_login;
            }

            $this->authors_x       = '-----------------------------------------------------------------------------------------------';
            $this->authors_y       = '-------------------------  C O R E   :   L I S T   :   A U T H O R S  -------------------------';
            $this->authors_z       = '-----------------------------------------------------------------------------------------------';

            $this->authors         = $authors_all;

        }

        protected function set_categories_properties() {

            $categories_array      = get_categories();
            $categories_counter    = 0;
            $categories_all        = array();

            foreach ( $categories_array as $category ) {

                $categories_counter++;

                $categories_all[$categories_counter]['description'] = $category->description;
                $categories_all[$categories_counter]['entries']     = $category->count;
                $categories_all[$categories_counter]['id']          = $category->term_id;
                $categories_all[$categories_counter]['name']        = $category->name;
                $categories_all[$categories_counter]['parent']      = $category->parent;
                $categories_all[$categories_counter]['slug']        = $category->slug;
                $categories_all[$categories_counter]['url']         = get_category_link( $category->term_id );

            }

            $this->list_x          = '-----------------------------------------------------------------------------------------------';
            $this->list_y          = '----------------------  C O R E   :   L I S T   :   C A T E G O R I E S  ----------------------';
            $this->list_z          = '-----------------------------------------------------------------------------------------------';
            $this->list_test_value = 'From CORE_List class...';

            $this->categories      = $categories_all;

        }

    }
