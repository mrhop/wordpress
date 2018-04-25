<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shanyue
 */

?>

<article id="product-<?php the_ID(); ?>" class="product-wrapper">
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		$categories = get_the_category();

			foreach ( $categories as $category ) {
				if ( 'products' == $category->slug ) {
					$is_product = true;
					break;
				}
			}
		if ( $categories ) {
		    // 遍历li，并给出链接
			/* translators: 1: list of categories. */
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'shanyue' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
		$tags = get_the_tags();
		if ( $tags_list ) {
		    // 遍历li，并给出最终的结果，然后是后续处理
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'shanyue' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
		?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_post_thumbnail( 'medium_large', [ 'class' => 'img-responsive', 'title' => get_the_title() ] ); ?>
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shanyue' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php shanyue_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
