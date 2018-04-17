<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Use this page template to remove the sidebar from any page.
 * 
 */
?>
<?php
 get_header(); ?>

  <!-- 15. breadcrumb_area -->
    <div class="breadcrumb_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><?php wp_title(''); ?></h1>
				</div>
            </div>
        </div>
    </div>
    <!-- 15. /breadcrumb_area -->
	<div class="blog_area sp">
		<div class="container">
			<div class="row">
			    <div class="col-md-12 post_col">
			        <div class="row">
                         <article class="col-md-12">
                            <?php if(have_posts()) : ?>
								<?php while(have_posts()) : the_post(); ?>
									<div class="article_inner">
									    <div class="page_content wow fadeInUp">
									       <p><?php the_content(); ?></p>
									    </div>
										<?php edit_post_link( esc_html__( 'Edit', 'erzen' ), '<span class="edit-link">', '</span>' ); ?>
									</div>
							    <?php endwhile; ?>
							<?php else : ?>
							    <p><?php esc_html__('No Posts Found', 'erzen'); ?></p>
							<?php endif; ?>
                        </article>
			        </div>
                </div>
			   
			</div>
		</div>
	</div>
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
<?php 
 get_footer(); ?>
