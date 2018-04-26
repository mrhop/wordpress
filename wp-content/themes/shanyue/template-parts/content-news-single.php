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
		the_title( '<h1 class="entry-title"><span class="title" title="' . get_the_title() . '"> ', '</span></h1>' );
		echo '<div class="entry-meta">';
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date( 'Y-m-d H:i' ) )
		);
		echo '<span>' . __( 'Post on ', 'shanyue' ) . $time_string . '</span>';
		$categories_list = get_the_category_list( esc_html__( ', ', 'shanyue' ) );
		if ( $categories_list ) {
			printf( '<span class="cat-links">' . esc_html__( 'Categories: %1$s', 'shanyue' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'shanyue' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged: %1$s', 'shanyue' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
		echo '</div>';
		?>
    </header><!-- .entry-header -->
    <div class="entry-content">
		<?php the_post_thumbnail( 'medium', [
			'class' => 'img-responsive img-thumbnail',
			'title' => get_the_title()
		] ); ?>
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
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
