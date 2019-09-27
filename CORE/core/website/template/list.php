<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_TEMPLATE . '.php' );

    abstract class CORE_List extends CORE_Template {

        protected function __construct() {

            parent::__construct();

            if ( is_category() ) $this->set_categories_properties();

        }

        protected function set_categories_properties() {

            $categories_array = get_categories();
            $categories_counter = 0;
            $categories_all = array();

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
