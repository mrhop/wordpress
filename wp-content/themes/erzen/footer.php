<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Erzen
 */
   
$erzen_footer_section = get_theme_mod('erzen_footer_section_hideshow','show');
if ($erzen_footer_section =='show') { 
?>
 
 <!-- 14. footer -->
    <footer class="footer">
		<?php if (is_active_sidebar('erzen-footer-widget-area-1') || is_active_sidebar('erzen-footer-widget-area-2') || is_active_sidebar('erzen-footer-widget-area-3') || is_active_sidebar('erzen-footer-widget-area-4')) {
		?>
			<div class="footer_top sp">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 wow fadeInUp" >
							<section class="widget widget_text">
								<?php dynamic_sidebar('erzen-footer-widget-area-1'); ?>
							</section>
						</div>
						<div class="col-md-3 col-sm-6 wow fadeInUp">
							<section class="widget widget_text">
								<?php dynamic_sidebar('erzen-footer-widget-area-2'); ?>
							</section>
						</div>
						<div class="col-md-3 col-sm-6 wow fadeInUp">
							<section class="widget widget_text">
								<?php dynamic_sidebar('erzen-footer-widget-area-3'); ?>
							</section>
						</div>
						<div class="col-md-3 col-sm-6 wow fadeInUp">
							<section class="widget widget_text">
							   <?php dynamic_sidebar('erzen-footer-widget-area-4'); ?>
							</section>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		
					
        <div class="footer_btm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12" style="text-align : center;">                     
						
						<?php if( get_theme_mod('erzen-footer_title') ) : ?>
							<span><?php echo wp_kses_post( html_entity_decode(get_theme_mod('erzen-footer_title'))); ?></span>
						<?php else : 
								/* translators: %1$s: Powered by term */
								printf( __('<span>Powered by <a href="%1$s" target="_blank">WordPress</a>', 'erzen'), esc_url( 'http://wordpress.org/') );
								printf( '' );
								/* translators: %1$s: Theme: Erzen by term */	
								printf( __( ' Theme: Erzen by <a href="%1$s" target="_blank" rel="designer">Wpshopmart</a></span>', 'erzen' ), esc_url('https://wpshopmart.com/') );
					 endif;  ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>
    <!-- 14. /footer -->
<?php wp_footer(); ?>
</div>
</body>
</html>
