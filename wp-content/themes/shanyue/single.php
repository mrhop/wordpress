<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shanyue
 */

get_header();
?>

    <main id="main" class="container site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			$categories = get_the_category();
			if ( is_array( $categories ) ) {
				foreach ( $categories as $category ) {
					if ( 'products' == $category->slug ) {
						$is_product = true;
						break;
					}
				}
			}
			if($is_product){
				get_template_part( 'template-parts/content', 'product' );
			}else{
				get_template_part( 'template-parts/content', get_post_type() );
				the_post_navigation();
            }


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </main><!-- #main -->

<?php
get_footer();
