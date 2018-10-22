<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    class Public_Resources {

        public function __construct() {

            $this->enqueue();

        }

        protected function enqueue() {

            add_action( 'wp_enqueue_scripts', function(){

                wp_enqueue_style( 'google-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500', array(), null, 'all' );
                wp_enqueue_style( 'google-open-sans',  'https://fonts.googleapis.com/css?family=Open+Sans',          array(), null, 'all' );

                wp_enqueue_style( 'main', GILAD_URL_PARENT . '/public/styles/main.css', array( 'bootstrap', 'font-awesome-all' ), null, 'all' );

                wp_enqueue_style( 'design-and-dev', GILAD_URL_PARENT . '/public/styles/design-and-development.css', array( 'main' ), null, 'all' );

            });

        }

	}

	$public_resources = new Public_Resources();
