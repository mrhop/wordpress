<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Erzen
 */
 get_header(); 
?>
 <!-- 23. blog_area -->
	<div class="blog_area sp">
		<div class="container">
			<div class="row">
			    <div class="col-md-8 post_col">
			        <div class="row">
                        <?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<article class="col-md-12">
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									    <?php get_template_part('content', get_post_format()); ?>
									</div>
								</article>
							<?php endwhile; ?>
							<article class="col-md-12 wow fadeInUp">
								<?php the_posts_pagination(
									array(
									'prev_text' => esc_html__('Prev','erzen'),
									'next_text' => esc_html__('Next','erzen')
									)
								); ?>
							</article>	
						<?php else : ?>
							<p><?php esc_html__('No Posts Found', 'erzen'); ?></p>
						 <?php endif; ?>
                     </div>
			    </div>
			    <aside class="col-md-4 widget_col">
                   
				        <?php get_sidebar(); ?>
			      
			    </aside>
			</div>
		</div>
	</div>
    <!-- 23. /blog_area -->
 <!-- 03. cta_area -->
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