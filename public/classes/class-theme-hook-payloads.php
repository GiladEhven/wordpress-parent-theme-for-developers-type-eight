<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    class Theme_Hook_Payloads {

        public function __construct() {

            $this->inject_into_header_hooks();

        }

        protected function inject_into_header_hooks() {

			add_action( 'gilad_header_main', function() {


			});

        }

	}

//	$theme_hook_payloads = new Theme_Hook_Payloads();
