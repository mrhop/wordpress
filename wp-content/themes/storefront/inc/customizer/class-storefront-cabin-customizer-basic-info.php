<?php
// basic info setting
$wp_customize->add_section( 'storefront-header_info', array(
	'title'       => __( 'Top Header Section', 'storefront' ),
	'description' => '',
	'priority'    => 10
) );



$wp_customize->add_setting( 'storefront_header_welcome', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'storefront_header_welcome', array(
	'label'    => __( 'Welcome Text', 'storefront' ),
	'section'  => 'storefront-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'storefront_header_welcome', array(
		'selector'        => '.top-info .welcome',
		'render_callback' => 'storefront_customize_partial_header_welcome',
	) );
}

function storefront_customize_partial_header_welcome() {
	echo get_theme_mod( 'storefront_header_welcome' );
}


$wp_customize->add_setting( 'storefront_header_email_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'storefront_header_email_value', array(
	'label'    => __( 'Email', 'storefront' ),
	'type'     => 'email',
	'section'  => 'storefront-header_info',
	'priority' => 1
) );
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'storefront_header_email_value', array(
		'selector'        => '.top-info .email',
		'render_callback' => 'storefront_customize_partial_header_email',
	) );
}

function storefront_customize_partial_header_email() {
	$email_value = get_theme_mod( 'storefront_header_email_value' );
	if ( $email_value != '' ) {
		echo '<i class="fa fa-envelope"></i><a href="mailto:' . $email_value . '">' . $email_value . '</a>';
	}
}


$wp_customize->add_setting( 'storefront_header_phone_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'storefront_header_phone_value', array(
	'label'    => __( 'Phone Number', 'storefront' ),
	'section'  => 'storefront-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'storefront_header_phone_value', array(
		'selector'        => '.top-info .phone',
		'render_callback' => 'storefront_customize_partial_header_phone',
	) );
}

function storefront_customize_partial_header_phone() {
	$phone_value = get_theme_mod( 'storefront_header_phone_value' );
	if ( $phone_value != '' ) {
		echo '<a href="tel:' . $phone_value . '"><i class="fa fa-phone"></i>' . $phone_value . '</a>';
	}
}

$wp_customize->add_setting( 'storefront_header_wechat_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( new WP_Customize_Image_Control(
	$wp_customize,
	'storefront_header_wechat_value',
	array(
		'label'    => __( 'Upload a wechat QRcode', 'storefront' ),
		'section'  => 'storefront-header_info',
		'settings' => 'storefront_header_wechat_value',
		'priority' => 1
	)
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'storefront_header_wechat_value', array(
		'selector'        => '.top-info .wechat',
		'render_callback' => 'storefront_customize_partial_header_wechat',
	) );
}

function storefront_customize_partial_header_wechat() {
	$wechat_value = get_theme_mod( 'storefront_header_wechat_value' );
	if ( $wechat_value != '' ) {
		echo '<a><i class="fa fa-wechat"></i>' . __( 'QRcode', 'storefront' ) . '<img src="' . $wechat_value . '"/>' . '</a>';
	}
}

$wp_customize->add_setting( 'storefront_header_facebook_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'storefront_header_facebook_value', array(
	'label'    => __( 'Facebook', 'storefront' ),
	'section'  => 'storefront-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'storefront_header_facebook_value', array(
		'selector'        => '.top-info .facebook',
		'render_callback' => 'storefront_customize_partial_header_facebook',
	) );
}

function storefront_customize_partial_header_facebook() {
	$facebook_value = get_theme_mod( 'storefront_header_facebook_value' );
	if ( $facebook_value != '' ) {
		echo '<a href="' . $facebook_value . '" target="_blank"><i class="fa fa-facebook"></i>' . __( 'Access Facebook', 'storefront' ) . '</a>';
	}
}

$wp_customize->add_setting( 'storefront_header_etsy_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'storefront_header_etsy_value', array(
	'label'    => __( 'Etsy Shop', 'storefront' ),
	'section'  => 'storefront-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'storefront_heade_etsy_value', array(
		'selector'        => '.top-info .etsy',
		'render_callback' => 'storefront_customize_partial_header_etsy',
	) );
}

function storefront_customize_partial_header_etsy() {
	$etsy_value = get_theme_mod( 'storefront_header_etsy_value' );
	if ( $etsy_value != '' ) {
		echo '<a href="' . $etsy_value . '" target="_blank"><i class="fa fa-etsy"></i>' . __( 'Shopping on Etsy ', 'storefront' ) . '</a>';
	}
}
?>