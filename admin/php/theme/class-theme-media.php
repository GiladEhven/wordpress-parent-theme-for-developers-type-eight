<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Media' ) ) {

        class Theme_Media {

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                $this->generate_images();

                self::$object_counter++;

            }

            private function generate_images() {

                add_image_size( 'tiny-natural',    300,  300        );
                add_image_size( 'tiny-square',     300,  300,  true );

                add_image_size( 'small-natural',   600,  600        );
                add_image_size( 'small-square',    600,  600,  true );

            //  add_image_size( 'medium-natural',  900,  900        );
                add_image_size( 'medium-square',   900,  900,  true );

            //  add_image_size( 'large-natural',  1200, 1200        );
                add_image_size( 'large-square',   1200, 1200,  true );

                add_image_size( 'giant-natural',  1500, 1500        );
                add_image_size( 'giant-square',   1500, 1500,  true );

            }

        }

    }
