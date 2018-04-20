<?php
/**
 * shanyue Theme Customizer
 *
 * @package shanyue
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shanyue_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'shanyue_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'shanyue_customize_partial_blogdescription',
		) );
	}
	// sub customizer
	$wp_customize->add_panel('frontpage',
		array('title' => esc_html__('Shanyue Options', 'shanyue'),
		      'description' => '',
		      'priority' => 3,));
	require get_template_directory() . '/inc/theme-options.php';
	require get_template_directory() . '/inc/sanitize.php';
	require get_template_directory() . '/inc/customizer-basic-info.php';
}

add_action( 'customize_register', 'shanyue_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function shanyue_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function shanyue_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shanyue_customize_preview_js() {
	wp_enqueue_script( 'shanyue-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', 'shanyue_customize_preview_js' );
