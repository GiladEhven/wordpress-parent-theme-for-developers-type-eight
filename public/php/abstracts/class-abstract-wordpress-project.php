<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Abstract_WordPress_Project' ) ) {

        //  TODO: THEME INFO

        //  TODO: PLUGIJN INFO

        //  TODO: HOSTING INFO, SERVER INFO, SUBSTRAIGHT INFO

        //  TODO: REGISTRAR AND DNS INFO

        //  TODO: LICENSING INFO

        //  TODO: PM AND OTHER BI PANEL INFO

        abstract class Abstract_WordPress_Project {

            //  ------------------------------  PROPERTIES  -----------------------------  //

            protected $object_counter                  = 0;

            protected $project_prop_fqdn               = '';

            protected $project_prop_server_os          = '';
            protected $project_prop_server_type        = '';
            protected $project_prop_server_version     = '';

            protected $project_prop_social_facebook    = '';
            protected $project_prop_social_github      = '';
            protected $project_prop_social_instagram   = '';
            protected $project_prop_social_linkedin    = '';
            protected $project_prop_social_pinterest   = '';
            protected $project_prop_social_twitter     = '';

            protected $project_prop_theme_author       = '';
            protected $project_prop_theme_author_uri   = '';
            protected $project_prop_theme_contributors = '';
            protected $project_prop_theme_description  = '';
            protected $project_prop_theme_domain_path  = '';
            protected $project_prop_theme_license      = '';
            protected $project_prop_theme_license_uri  = '';
            protected $project_prop_theme_name         = '';
            protected $project_prop_theme_template     = '';
            protected $project_prop_theme_text_domain  = '';
            protected $project_prop_theme_uri          = '';
            protected $project_prop_theme_version      = '';

            //  ----------------------------  HOUSEKEEPING  -----------------------------  //

            public function __construct() {

                //  TODO: KEEP HERE OR MOVE ELSEWHERE?
//                      $this->packaged_data = $this->package_data_for_page_view();

                $this->set_theme_props();

                $this->object_counter++;
            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //



            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function set_theme_props() {
                $theme_object = wp_get_theme();
                $this->project_prop_theme_author       .= $theme_object->get( 'Author' );
                $this->project_prop_theme_author_uri   .= $theme_object->get( 'AuthorURI' );
            //  $this->project_prop_theme_contributors .= $theme_object->get( '' );
                $this->project_prop_theme_description  .= $theme_object->get( 'Description' );
                $this->project_prop_theme_domain_path  .= $theme_object->get( 'DomainPath' );
            //  $this->project_prop_theme_license      .= $theme_object->get( '' );
            //  $this->project_prop_theme_license_uri  .= $theme_object->get( '' );
                $this->project_prop_theme_name         .= $theme_object->get( 'Name' );
                $this->project_prop_theme_template     .= $theme_object->get( 'Template' );
                $this->project_prop_theme_text_domain  .= $theme_object->get( 'TextDomain' );
                $this->project_prop_theme_uri          .= $theme_object->get( 'ThemeURI' );
                $this->project_prop_theme_version      .= $theme_object->get( 'Version' );
            }

            //  ------------------------------  ABSTRACTS  ------------------------------  //



        }

    }
