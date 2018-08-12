<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Support' ) ) {

        class Theme_Support {

            public static $object_counter = 0;

            public function __construct() {

                $this->features();

                self::$object_counter++;

            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function features() {

                add_action( 'after_setup_theme', function() {

                    add_theme_support( 'automatic-feed-links' );

                    add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

                    add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );

                    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

                    add_theme_support( 'title-tag' );

                    add_editor_style( 'admin/css/editor.css' );

                    load_theme_textdomain( 'theme-starter-type-eight', get_template_directory() . '/public/mo' );

                } );

            }

        }

    }
