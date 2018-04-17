<?php
/**
 * Erzen Theme Customizer
 *
 */

function erzen_customize_register( $wp_customize ) {
	
	 /*default variable used in setting*/
        //$default = erzen_get_default_theme_options();
	
	/*** Slider Setting ***/
	require get_template_directory() . '/inc/erzen-theme-options.php';
    require get_template_directory() . '/inc/erzen-sanitize.php';
	
	
/** Front Page Section Settings starts **/	

$wp_customize->add_panel('frontpage', 
             array('title' => esc_html__('Erzen Options', 'erzen'),        
			 'description' => '',                                        
			 'priority' => 3,));
	
    require get_template_directory() . '/inc/customizer-header-sectioninfo.php';	
    require get_template_directory() . '/inc/customizer-slider.php';	
    require get_template_directory() . '/inc/customizer-header-callout.php';	
	require get_template_directory() . '/inc/customizer-aboutus.php';
	require get_template_directory() . '/inc/customizer-services.php';
	require get_template_directory() . '/inc/customizer-blogpost.php';
    require get_template_directory() . '/inc/customizer-footer-callout.php';	
    require get_template_directory() . '/inc/customizer-footer.php';	
	

/** Front Page Section Settings end **/	


}
add_action( 'customize_register', 'erzen_customize_register' );

