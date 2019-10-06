<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_PARTIAL . '/header.php' );

    class Template_Header extends CORE_Header {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_header = new Template_Header();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<?php $template_header->ah_head_begin(); ?>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php $template_header->ah_head_add_meta_tags(); ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php $template_header->ah_head_add_link_tags(); ?>

		<?php wp_head(); ?>

		<?php $template_header->ah_head_end(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php $template_header->ah_body_begin(); ?>

		<header class="<?php $template_header->fh_body_header_classes(); ?>" id="body-header">

			<?php $template_header->ah_body_header(); ?>

		</header>

		<?php $template_header->ah_main_before(); ?>

		<main class="<?php $template_header->fh_body_main_classes(); ?>">

			<div class="<?php $template_header->fh_body_main_div_classes(); ?>">

				<?php $template_header->ah_main_begin();
