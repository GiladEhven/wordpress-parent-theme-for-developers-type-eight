<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/public/php/abstracts/class-abstract-wordpress-fragment.php' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Header' ) ) {

        class Template_Header extends Abstract_WordPress_Fragment {

//          private $requested_resource;

            //  GET REFERRER? HERE OR IN TEMPLATE?

            //  PACKAGE DATA: BLOGINFO, NETINFO

            //  NOTICE? HERE OR IN FOOTER?

//          public static $object_counter = 0;

            public function __construct() {

//              $this->set_requested_resource();

//          	$data = $this->package_data_for_view();

//              require_once( get_stylesheet_directory() . '/public/php/views/class-view-header.php' );
//              $view_header = new View_Header( $data );

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

                	$data['announcement-bar'] = '';

                	return $data;

            }

        }

    }

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<?php

			gilad_gtm_before();

			if ( GILAD_TGM_CONTAINER_ID != 'UNSPECIFIED_GTM_CONTAINER_ID' ) {

		?>

		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','<?php echo GILAD_TGM_CONTAINER_ID; ?>');</script>

		<?php 

			}

			gilad_gtm_after();

		?>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php gilad_meta_add(); ?>

		<title><?php
			bloginfo( 'name' );
			echo ' | ';
			is_front_page() ? bloginfo( 'description' ) : wp_title( '' );
		?></title>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php gilad_link_add(); ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php if ( GILAD_TGM_CONTAINER_ID != 'UNSPECIFIED_GTM_CONTAINER_ID' ) { ?>
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GILAD_TGM_CONTAINER_ID; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<?php } ?>

		<?php gilad_body_begin(); ?>

		<div id="body">

			<?php gilad_wrapper_begin(); ?>

			<header>

				<?php

					gilad_header_begin();

					$template_header = new Template_Header();

					gilad_header_end();

				?>

			</header>

			<main class="container">

				<?php

					gilad_main_begin();
