<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '/footer.php' );

    class Template_Footer extends CORE_Footer {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_footer = new Template_Footer();

    $template_footer->ah_main_end(); ?>



            </div>

        </main>

        <?php $template_footer->ah_main_after(); ?>

        <footer class="<?php $template_footer->fh_body_footer_classes(); ?>" id="body-footer">

            <?php $template_footer->ah_body_footer(); ?>

        </footer>

        <?php

            $template_footer->ah_body_end();

            wp_footer();

        ?>

    </body>

</html>
