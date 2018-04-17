<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Erzen
 */
$de_page_no = get_template_directory_uri().'/images/404.png'; 
get_header(); ?>

<!-- error_area -->
<div class="error_area sp">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center error_col wow fadeInUp">
				<!-- <h1>404</h1>-->
				<!-- you can use text or image -->
				<div class="error_img">
					<img src="<?php echo esc_url( $de_page_no ); ?>" />
				</div>
				<h4>
				<?php echo esc_html__('Page Not Found', 'erzen' ); ?></h4>
				<br>
				 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button-2"><i class="fa fa-angle-left"></i>
				 <?php echo esc_html__( 'Back to Home', 'erzen' ); ?></a>
			</div>
		</div>
	</div>
</div>

<!-- callout_area -->
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
<!--  /cta_area -->	
<!-- error_area -->
<?php get_footer(); ?>	