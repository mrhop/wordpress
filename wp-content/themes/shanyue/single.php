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
					} elseif ( 'news' == $category->slug ) {
						$is_news = true;
						break;
					} elseif ( 'techs' == $category->slug ) {
						$is_tech = true;
						break;
					}
				}
			}
			if ( $is_product ) {
				get_template_part( 'template-parts/content', 'product' );
				the_post_navigation( array(
					'prev_text'    => __( '<span >Last Product</span><i class="fa fa-caret-left"></i>', 'shanyue' ),
					'next_text'    => __( '<i class="fa fa-caret-right"></i><span>Next Product</span>', 'shanyue' ),
					'in_same_term' => true
				) );
			} elseif ( $is_news ) {
				get_template_part( 'template-parts/content', 'news-single' );
				the_post_navigation( array(
					'prev_text'    => __( '<span >Last News</span><i class="fa fa-caret-left"></i>', 'shanyue' ),
					'next_text'    => __( '<i class="fa fa-caret-right"></i><span>Next News</span>', 'shanyue' ),
					'in_same_term' => true
				) );
			} elseif ( $is_tech ) {
				get_template_part( 'template-parts/content', 'tech' );
				the_post_navigation( array(
					'prev_text'    => __( '<span >%title</span><i class="fa fa-caret-left"></i>', 'shanyue' ),
					'next_text'    => __( '<i class="fa fa-caret-right"></i><span>%title</span>', 'shanyue' ),
					'in_same_term' => true
				) );
			} else {
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
