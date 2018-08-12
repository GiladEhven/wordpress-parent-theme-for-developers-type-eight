<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	function wordpress_query_posts( $args ) {

	    global $query_string;

		$defaults = array
		(
			'original_query'         => $query_string,

			'author'                 => 1,
			'author_name '           => '',
			'author__in'             => array(),
			'author__not_in'         => array(),
			'cat'                    => 0,
			'category_name'          => '',
			'category__and'          => array(),
			'category__in'           => array(),
			'category__not_in'       => array(),
			'comment_count'          => array( 'value' => 0, 'compare' => '!=' ),
			'has_password'           => null,
			'ignore_sticky_posts'    => false,
			'name'                   => '',
			'nopaging'               => false,
			'offset'                 => 0,
			'order'                  => 'DESC',
			'orderby'                => 'date',
			'p'                      => 0,
			'page'                   => 18,
			'page_id'                => 0,
			'paged'                  => 20,
			'pagename'               => '',
			'perm'                   => 'readable',
			'post_name__in'          => array(),
			'post_parent'            => 0,
			'post_parent__in'        => array(),
			'post_parent__not_in'    => array(),
			'post_password'          => '',
			'post_status'            => 'any',
			'post_type'              => 'any',
			'post__in'               => array(),
			'post__not_in'           => array(),
			'posts_per_page'         => 10,
			'posts_per_archive_page' => 26,
			's'                      => '',
			'tag'                    => '',
			'tag_id'                 => '',
			'tag__and'               => array(),
			'tag__in'                => array(),
			'tag__not_in'            => array(),
			'tag_slug__and'          => array(),
			'tag_slug__in'           => array(),
			'title'                  => ''
		);

		$args = wp_parse_args( $args, $defaults );

		//  TODO: LOOP THROUGH [$args] TO GENERATE SINGLE FLAT QUERYSTRING: [$query_string]

		$posts = query_posts( $query_string );

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

		wp_reset_query();

	}
