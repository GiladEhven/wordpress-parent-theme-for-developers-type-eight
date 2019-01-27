<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../base.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Project' ) ) {

        abstract class TIE_Project extends TIE_Base {

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

        protected $requested_resource_type;

        protected $requested_resource_value;

        protected $requesting_referer;

            public function __construct() {

                parent::__construct();

            }

        }

    }
