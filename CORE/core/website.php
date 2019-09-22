<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_CORE . '.php' );

    abstract class CORE_Website extends CORE_Core {

        protected function __construct() {

            $this->set_site_properties();
            $this->set_theme_properties();

        }

        protected function set_site_properties() {

            $this->site_x                 = '-----------------------------------------------------------------------------------------------';
            $this->site_y                 = '-----------------------------------  C O R E   :   S I T E  -----------------------------------';
            $this->site_z                 = '-----------------------------------------------------------------------------------------------';
            $this->site_active_plugins    = get_option( 'active_plugins' );
            $this->site_address_base      = get_home_url();
            $this->site_address_wp        = get_site_url();
            $this->site_admin_email       = get_bloginfo( 'admin_email' );
            $this->site_admin_url         = get_admin_url();
            $this->site_charset           = get_bloginfo( 'charset' );
            $this->site_date_format       = get_option( 'date_format' );
            $this->site_html_type         = get_bloginfo( 'html_type' );
            $this->site_id                = get_current_blog_id();
            $this->site_language          = get_bloginfo( 'language' );
            $this->site_name              = get_bloginfo( 'name' );
            $this->site_path_style_dir    = get_bloginfo( 'stylesheet_directory' );
            $this->site_path_style_file   = get_bloginfo( 'stylesheet_url' );
            $this->site_path_template_url = get_bloginfo( 'template_url' );
            $this->site_path_template_dir = get_bloginfo( 'template_directory' );
            $this->site_rss2_content      = get_bloginfo( 'rss2_url' );
            $this->site_rss2_comments     = get_bloginfo( 'comments_rss2_url' );
            $this->site_tagline           = get_bloginfo( 'description' );
            $this->site_time_format       = get_option( 'time_format' );
            $this->site_timezone_offset   = get_option( 'gmt_offset' );
            $this->site_timezone_string   = get_option( 'timezone_string' );
            $this->site_upload_paths      = wp_upload_dir( null, false, false );
            $this->site_wp_version        = get_bloginfo( 'version' );

        }

        protected function set_theme_properties() {

            $theme_object = wp_get_theme();

            $this->theme_x                = '-----------------------------------------------------------------------------------------------';
            $this->theme_y                = '----------------------------------  C O R E   :   T H E M E  ----------------------------------';
            $this->theme_z                = '-----------------------------------------------------------------------------------------------';
            $this->theme_author_name      = $theme_object->get( 'Author' );
            $this->theme_author_uri       = $theme_object->get( 'AuthorURI' );
            $this->theme_description      = $theme_object->get( 'Description' );
            $this->theme_languages_dir    = $theme_object->get( 'DomainPath' );
            $this->theme_name             = $theme_object->get( 'Name' );
            $this->theme_parent           = $theme_object->get( 'Template' );
            $this->theme_tags             = $theme_object->get( 'Tags' );
            $this->theme_text_domain      = $theme_object->get( 'TextDomain' );
            $this->theme_uri              = $theme_object->get( 'ThemeURI' );
            $this->theme_version          = $theme_object->get( 'Version' );

        }

    }
