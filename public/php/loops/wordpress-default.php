<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	if ( have_posts() ) {

		gilad_if_posts_begin();

		while ( have_posts() ) {

			gilad_while_posts_begin();

			the_post();

			gilad_while_posts_end();

		}

		gilad_if_posts_end();

	} else {

		gilad_else_posts_begin();

		gilad_else_posts_end();

	}
