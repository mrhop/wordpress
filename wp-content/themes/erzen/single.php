<?php
/**
 * The template for displaying all single posts.
 *
 * @package Erzen
 */
get_header(); ?>
 
<!-- breadcrumb_area -->
<div class="breadcrumb_area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1><?php wp_title(''); ?></h1>
				<ul class="brc">
					<li><?php erzen_breadcrumb(); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 15. /breadcrumb_area -->

<div class="blog_area sp single-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8 post_col">
				<div class="row">
					<article class="col-md-12">
						<?php if(have_posts()) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<?php  get_template_part( 'content', 'single' ); ?>
							<?php endwhile; ?>
						<?php else : ?>
							<p><?php esc_html__('No Posts Found', 'erzen'); ?></p>
						<?php endif; ?>
						 
					</article>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<?php if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif; ?> 
					</div>
				</div>
			</div>	
			<aside class="col-md-4 widget_col">
				
					<?php get_sidebar(); ?>
				
			</aside>
		</div>
	</div>
</div>
<!-- cta_area -->
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
