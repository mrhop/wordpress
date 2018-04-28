<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package shanyue
 */

get_header();
?>

    <main id="main" class="site-main container">

		<?php if ( have_posts() ) : ?>

        <header class="page-header">
				<?php
				/* translators: %s: search query. */
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
        </header><!-- .page-header -->

        <div class="page-content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'tag' );

			endwhile;


			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
        </div>
    </main><!-- #main -->

<?php
get_footer();
