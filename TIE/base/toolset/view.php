<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( '../toolset.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_View' ) ) {

        abstract class TIE_View extends TIE_Toolset {

            public function __construct() {

                parent::__construct();

                $this->render();

            }

            protected function render( $variable ) {

                //  TODO: Account for captured sub-arrays no longer called $data[]...

                if ( isset( $this->packaged_data[$variable] ) ) {

                    echo $this->packaged_data[$variable];

                } else {

                    echo '<span class="gilad-render-none">Not Found: [ ' . $variable . ' ]</span>';

                }

            }

        }

    }
