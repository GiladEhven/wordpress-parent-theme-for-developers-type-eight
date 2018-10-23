<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../interface.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Common' ) ) {

        abstract class TIE_Common extends TIE_Interface {

            public function __construct() {

                parent::__construct();

                $this->features();
                $this->menus();

            }

            protected function features() {

                add_action( 'after_setup_theme', function() {

                    add_theme_support( 'automatic-feed-links' );

                    add_theme_support(
                        'post-formats',
                        array(
                            'aside',
                            'audio',
                            'chat',
                            'gallery',
                            'image',
                            'link',
                            'quote',
                            'status',
                            'video',
                        )
                    );

                    add_theme_support(
                        'post-thumbnails',
                        array(
                            'gilad-cpt-faq',
                            'gilad-cpt-portfolio',
                            'gilad-cpt-recommend',
                            'gilad-cpt-resume',
                            'gilad-cpt-subscript',
                            'gilad-cpt-testimonia',
                            'page',
                            'post',
                        )
                    );

                    add_theme_support(
                        'html5',
                        array(
                            'caption',
                            'comment-form',
                            'comment-list',
                            'gallery',
                            'search-form',
                        )
                    );

                    add_theme_support( 'title-tag' );

                    add_editor_style( 'admin/css/editor.css' );

                    load_theme_textdomain( 'gilad-ehven', get_template_directory() . '/public/mo' );

                } );

                add_action( 'init', function() {

                    add_post_type_support( 'page', 'excerpt' );

                } );

            }

            protected function filter_title_tag() {

                // TODO: ?

            }

            protected function menus() {

                register_nav_menus
                (
                    array
                    (
                        'menu-1'  => 'Menu 1',
                        'menu-2'  => 'Menu 2',
                        'menu-3'  => 'Menu 3',
                        'menu-4'  => 'Menu 4',
                        'menu-5'  => 'Menu 5',
                        'menu-6'  => 'Menu 6',
                        'menu-7'  => 'Menu 7',
                        'menu-8'  => 'Menu 8',
                        'menu-9'  => 'Menu 9',
                        'menu-10' => 'Menu 10',
                    )
                );

            }

        }

    }
