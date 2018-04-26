<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package shanyue
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function shanyue_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main-content',
		'render'    => 'shanyue_infinite_scroll_render',
		'footer'    => 'page',
		'wrapper'   => false
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'shanyue-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive' => true,
			'post'    => true,
			'page'    => true,
		),
	) );
}

add_action( 'after_setup_theme', 'shanyue_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function shanyue_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		$categories = get_the_category();
		if ( is_array( $categories ) ) {
			foreach ( $categories as $category ) {
				if ( 'products' == $category->slug ) {
					$is_product = true;
					break;
				} else if ( 'news' == $category->slug ) {
					$is_news = true;
					break;
				}
			}
		}
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		elseif ( $is_product ):
			get_template_part( 'template-parts/content', 'products' );
		elseif ( $is_news ):
			get_template_part( 'template-parts/content', 'news' );
		else :
			get_template_part( 'template-parts/content', get_post_type() );
		endif;
	}
}
