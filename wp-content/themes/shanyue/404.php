<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package shanyue
 */

get_header();
?>
    <main id="main" class="site-main container">
        <section class="error-404 not-found">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/404.jpg' ?>"
                 title="404 error,page not found"/>
        </section><!-- .error-404 -->
    </main><!-- #main -->
<?php
get_footer();
