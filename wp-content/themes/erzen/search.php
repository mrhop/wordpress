<?php
/**
 * The template for displaying search results pages.
 *
 * @package Erzen
 */
get_header();
?>
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ( have_posts() ) : ?>
					<h1 class="page-title">
						<?php 
						/* translators: %s: search term */
						printf( esc_html__( 'Search Results for: %s', 'erzen' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
				<?php else : ?>
					<h1 class="page-title"><?php
					/* translators: %s: nothing found term */
					printf( esc_html__( 'Nothing Found for: %s', 'erzen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- 15. /breadcrumb_area -->

<div class="blog_area sp">
	<div class="container">
		<div class="row">
			<div class="col-md-8 post_col">
				<div class="row">
					<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<article class="col-md-12 wow fadeInUp">
									<div class="article_inner">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										   <?php get_template_part('content'); ?>
										</div>
									</div>
								</article>
							<?php endwhile; ?>
							<article class="col-md-12 wow fadeInUp">
								<?php the_posts_pagination(
									array(
									'prev_text' => esc_html__('PREV','erzen'),
									'next_text' => esc_html__('NEXT','erzen')
									)
								); ?>
							</article>
						<?php else : ?>
						
							<h3><?php printf( esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'erzen' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
							 <div class="widget widget_search cc-search">
								 <?php get_search_form(); ?>
							</div>
					<?php endif; ?>		
				</div>
			 </div>
			<aside class="col-md-4 widget_col">
				<section class="wow fadeInUp">
				   <?php get_sidebar(); ?>
				</section>
			</aside>
		</div>
	</div>
</div>

<?php
$erzen_allpages_section_hideshow = get_theme_mod('erzen_allpages_section_hideshow');
if ($erzen_allpages_section_hideshow =='show') { ?>
<?php $ctah_btn_text2 = get_theme_mod('ctah_btn_text2'); ?>  
    <div class="cta_area wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cta">
                        <h2>
						<?php echo esc_html(get_theme_mod('ctah_heading2')); ?></h2>
                    </div>
                </div>
                <?php if (!empty($ctah_btn_text2)) { ?>
                <div class="col-md-3 text-right">
                    <a href="<?php echo esc_url(get_theme_mod('ctah_btn_url2')); ?>" class="button hvr-bounce-to-right pbg"><i class="fa fa-long-arrow-right"></i> 
					<?php echo esc_attr($ctah_btn_text2); ?></a>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
<?php } ?>	
    <!-- 03. /cta_area -->	
<?php get_footer(); ?>				