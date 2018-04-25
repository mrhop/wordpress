<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shanyue
 */

?>

<div id="product-<?php the_ID(); ?>" class="column col-lg-3 col-md-4 col-sm-6">
    <!-- .entry-header -->
    <a class="product-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
		the_post_thumbnail( 'medium_large', [ 'class' => 'img-responsive', 'title' => get_the_title() ] );
		?>
    </a>
    <footer class="product-footer">
		<?php shanyue_product_footer(); ?>
    </footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
