<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    abstract class CORE_Core {

        public function dump( $data ) {

            if ( current_user_can( 'manage_options' ) ) {

                echo "\n\r" . '<!--' . "\n\r" . 'Content ($data) '; print_r( $data ); echo 'End Array' . "\n\r" . '-->' . "\n\r";

            }

        }

        public function view() {

            //

        }

    }
