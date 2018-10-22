<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    class Theme_Settings {

        public function __construct() {

            $this->add_image_sizes();

        }

        protected function add_image_sizes() {

		//  add_image_size( 'thumbnail',        180,  180,  true );

			add_image_size( 'size-b-natural',   300              );
			add_image_size( 'size-b-square',    300,  300,  true );

			add_image_size( 'size-c-natural',   600              );
			add_image_size( 'size-c-square',    600,  600,  true );

		//  add_image_size( 'medium',           900,  9999       );
			add_image_size( 'size-d-square',    900,  900,  true );

		//  add_image_size( 'large',           1200, 9999        );
			add_image_size( 'size-e-square',   1200, 1200,  true );

			add_image_size( 'size-f-natural',  1500              );
			add_image_size( 'size-f-square',   1500, 1500,  true );

			add_image_size( 'size-g-natural',  1920              );
			add_image_size( 'size-g-square',   1920, 1920,  true );



		    add_filter( 'image_size_names_choose', function( $sizes ) {

		        global $_wp_additional_image_sizes;

		        if ( empty( $_wp_additional_image_sizes ) ) {
		            return $sizes;
		        }

		    //  foreach ( $_wp_additional_image_sizes as $id => $data ) {
		    //      if ( ! isset( $sizes[$id] ) ) {
		    //          $sizes[$id] = ucwords( str_replace( '-', ' ', $id ) );
		    //      }
		    //  }

		    //  return $sizes;

				return array_merge( $sizes, array(

					'size-b-natural' => __( 'Size B Natural: 300 x Any' ),
					'size-b-square'  => __( 'Size B Square: 300 x 300' ),

					'size-c-natural' => __( 'Size C Natural: 600 x Any' ),
					'size-c-square'  => __( 'Size C Square: 600 x 600' ),

					'size-d-square'  => __( 'Size D Square: 900 x 900' ),

					'size-e-square'  => __( 'Size E Square: 1200 x 1200' ),

					'size-f-natural' => __( 'Size F Natural: 1500 x Any' ),
					'size-f-square'  => __( 'Size F Square: 1500 x 1500' ),

					'size-g-natural' => __( 'Size G Natural: 1920 x Any' ),
					'size-g-square'  => __( 'Size G Square: 1920 x 1920' ),

				));

		    });

		}

	}

	$theme_settings = new Theme_Settings();
