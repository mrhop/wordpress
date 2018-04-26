<?php
/**
 * The template for displaying products pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shanyue
 */

get_header();
?>

    <main id="main" class="container site-main">

		<?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php single_cat_title( '', true ) ?></h1>
            </header><!-- .page-header -->
            <ul id="main-content" class="news-content">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'news' );

				endwhile;
				?>
            </ul>
		<?php
//			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    </main><!-- #main -->

<?php
get_footer();
