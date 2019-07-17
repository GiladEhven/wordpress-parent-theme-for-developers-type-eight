<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( __DIR__ . '/../default.php' );

    if ( ! class_exists( __NAMESPACE__ . 'TIE_Partial' ) ) {

        abstract class TIE_Partial extends TIE_Default {

            public function __construct() {

                parent::__construct();

            }

            public function build_footer() {

                $this->gilad_main_end();

                ?>


                                <!--  ------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                --------------------------                                                                          --------------------------
                                --------------------------  START FOOTER: BASE / INTERFACE / PUBLIC / TEMPLATE / DEFAULT / Partial  --------------------------
                                --------------------------                                                                          --------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                -------------------------------------------------------------------------------------------------------------------------  -->

                                </main>

                                    <?php

                                        $this->gilad_between_main_and_footer();

                                    ?>

                                <footer id="body-footer">

                                    <?php

                                        $this->gilad_footer_begin();

                                        $this->gilad_footer_main();

                                        $this->gilad_footer_end();

                                    ?>

                                </footer><!-- #body-footer -->

                                <?php $this->gilad_wrapper_end(); ?>

                            </div><!-- #body-liner -->

                            <?php

                                $this->gilad_body_end();

                                wp_footer();

                            ?>

                        </body>

                    </html>

                    <!--  ------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    --------------------------                                                                          --------------------------
                    --------------------------                                END FOOTER                                --------------------------
                    --------------------------                                                                          --------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    -------------------------------------------------------------------------------------------------------------------------  -->

                <?php

            }

            public function build_header() {

                ?>

                    <!--  ------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    --------------------------                                                                          --------------------------
                    --------------------------  START HEADER: BASE / INTERFACE / PUBLIC / TEMPLATE / DEFAULT / Partial  --------------------------
                    --------------------------                                                                          --------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    ------------------------------------------------------------------------------------------------------------------------------
                    -------------------------------------------------------------------------------------------------------------------------  -->

                    <!DOCTYPE html>
                    <html <?php language_attributes(); ?>>

                        <head>

                            <?php

                                $this->gilad_gtm_before();

                                if ( GILAD_TGM != 'UNSPECIFIED_GTM_CONTAINER_ID' ) {

                            ?>

                            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                            })(window,document,'script','dataLayer','<?php echo GILAD_TGM; ?>');</script>

                            <?php 

                                }

                                $this->gilad_gtm_after();

                            ?>

                            <meta charset="<?php bloginfo( 'charset' ); ?>" />
                            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                            <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
                            <meta name="viewport" content="width=device-width, initial-scale=1" />
                            <?php $this->gilad_meta_add(); ?>

                            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
                            <link rel="profile" href="http://gmpg.org/xfn/11" />
                            <?php $this->gilad_link_add(); ?>

                            <?php // gravity_form_enqueue_scripts( 1, true );
                            wp_head(); ?>

                            <?php if ( is_page( array( 'contact', 'subscribe' ) ) ) { ?>
                            <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/0286cf1fb424f3f3c2e7172a6/95110b91138a4975e9042ee32.js");</script>
                            <?php } ?>

                        </head>

                        <body <?php body_class(); ?>>

                            <?php if ( GILAD_TGM != 'UNSPECIFIED_GTM_CONTAINER_ID' ) { ?>
                            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GILAD_TGM; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                            <?php } ?>

                            <?php $this->gilad_body_begin(); ?>

                            <div id="body-liner">

                                <?php $this->gilad_wrapper_begin(); ?>

                                <header id="body-header">

                                    <?php

                                        $this->gilad_header_begin();

                                        $this->gilad_header_main();

                                        $this->gilad_header_end();

                                    ?>

                                </header><!-- #body-header -->

                                    <?php

                                        $this->gilad_between_main_and_header();

                                    ?>

                                <main class="container">

                                <!--  ------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                --------------------------                                                                          --------------------------
                                --------------------------                                END HEADER                                --------------------------
                                --------------------------                                                                          --------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                ------------------------------------------------------------------------------------------------------------------------------
                                -------------------------------------------------------------------------------------------------------------------------  -->

                                    <?php

                                        $this->gilad_main_begin();

            }

        }

    }
