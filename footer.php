<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/interface/public/template/default/partial.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Footer' ) ) {

        class Template_Footer extends TIE_Partial {

//          private $requested_resource;

            //  NOTICE? HERE OR IN HEADER?

//          public static $object_counter = 0;

            public function __construct() {

//              $this->set_requested_resource();

//              $data = $this->package_data_for_view();

//              require_once( get_stylesheet_directory() . '/public/php/views/class-view-footer.php' );
//              $view_footer = new View_Footer( $data );

//              self::$object_counter++;

                parent::__construct();

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function package_data_for_view() {

                	$data = array();

                	$data['copyright-level'] = 'All rights reserved';
                	$data['copyright-owner'] = 'Gilad Ehven';
                    $data['copyright-start'] = '2014';

                	return $data;

            }

        }

    }

            //gilad_main_end(); ?>

			</main>

			<footer>

			    <?php

                    //gilad_footer_begin();

                    $template_footer = new Template_Footer();

                    //gilad_footer_end();

                ?>

			</footer>

            <?php //gilad_wrapper_end(); ?>

		</div>

        <?php

            //gilad_body_end();

            wp_footer();

        ?>

	</body>

</html>
