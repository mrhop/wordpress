<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shanyue
 */

?>

<div id="tech-<?php the_ID(); ?>" class="column col-lg-3 col-md-4 col-sm-6">
    <!-- .entry-header -->
    <a href="<?php the_permalink() ?>">
        <div class="tech-content">
            <h3 class="product-title">
				<?php
				the_title();
				?>
            </h3>
            <p>
				<?php
				the_excerpt();
				?>
            </p>
        </div>
    </a>
    <footer class="tech-footer">
		<?php
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'shanyue' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'shanyue' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
		?>
		<?php shanyue_techs_footer(); ?>
    </footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
