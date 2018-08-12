<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Taxonomy_CPT_Tax' ) ) {

        class Template_Taxonomy_CPT_Tax {

        	private $taxonomy_terms;

            private $taxonomy_term_description;

            private $taxonomy_term_name;

            //  GET META

            //  GET REFERRER

            //  PACKAGE DATA: CONTENT, EXCERPT, FIELDS, GET's

            public static $object_counter = 0;

            public function __construct() {

				$this->set_taxonomy_term_meta();

            	$data = $this->package_data_for_view();

                self::$object_counter++;

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-taxonomy-gilad-faq-tax-topic.php' );
                $view_taxonomy_faq_topic = new View_Taxonomy_FAQ_Topic( $data );

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            protected function set_taxonomy_term_meta() {
            	$taxonomy_term_object = get_queried_object();
                $this->taxonomy_term_description = $taxonomy_term_object->description;
                $this->taxonomy_term_name = $taxonomy_term_object->name;
            }

            public function get_taxonomy_term_description() {
                return $this->taxonomy_term_description;
            }

            public function get_taxonomy_term_name() {
                return $this->taxonomy_term_name;
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function package_data_for_view() {

                	$data = array();

                	$data['tax-term-description'] = $this->taxonomy_term_description;
                	$data['tax-term-name']   = $this->taxonomy_term_name;

                	return $data;

            }

        }

    }

    get_header(); ?>

                <div id="main">

                    <?php

                        $template_taxonomy_faq_topic = new Template_Taxonomy_FAQ_Topic();

                    ?>

                </div><!-- / # main -->

    <?php get_footer();
