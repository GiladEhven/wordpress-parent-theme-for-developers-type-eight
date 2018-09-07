<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-wordpress-project.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Abstract_View' ) ) {

        abstract class Abstract_View extends Abstract_WordPress_Project {

            //  ------------------------------  PROPERTIES  -----------------------------  //

        	protected $packaged_data;

            protected $object_counter = 0;

            //  ----------------------------  HOUSEKEEPING  -----------------------------  //

            public function __construct() {

            	$this->render();

                $this->object_counter++;
            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function render( $variable ) {

                //  TODO: Account for captured sub-arrays no longer called $data[]...

                if ( isset( $this->packaged_data[$variable] ) ) {

                    echo $this->packaged_data[$variable];

                } else {

                    echo '<span class="gilad-render-none">Not Found: [ ' . $variable . ' ]</span>';

                }

            }

            //  ------------------------------  ABSTRACTS  ------------------------------  //

        }

    }

