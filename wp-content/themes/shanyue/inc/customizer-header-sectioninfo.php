<?php
// Header Section
$wp_customize->add_section( 'shanyue-header_info', array(
	'title'       => __( 'Top Header Section', 'shanyue' ),
	'description' => '',
	'panel'       => 'frontpage',
	'priority'    => 130
) );

$wp_customize->add_setting(
	'shanyue_header_section_hideshow',
	array(
		'default'           => 'hide',
		'sanitize_callback' => 'shanyue_header_sanitize_select',
	)
);
$shanyue_header_section_hide_show_option = shanyue_header_section_option();
$wp_customize->add_control(
	'shanyue_header_section_hideshow',
	array(
		'type'        => 'radio',
		'label'       => esc_html__( 'Header Option', 'shanyue' ),
		'description' => esc_html__( 'Show/hide option for Header Section.', 'shanyue' ),
		'section'     => 'shanyue-header_info',
		'choices'     => $shanyue_header_section_hide_show_option,
		'priority'    => 1
	)
);

$wp_customize->add_setting( 'shanyue_header_welcome', array(
	'default'           => '',
	'transport'         => 'postMessage',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'shanyue_header_welcome', array(
	'label'    => __( 'Welcome Text', 'shanyue' ),
	'section'  => 'shanyue-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'shanyue_header_welcome', array(
		'selector'        => '.top-info .welcome',
		'render_callback' => 'shanyue_customize_partial_header_welcome',
	) );
}

function shanyue_customize_partial_header_welcome() {
	echo get_theme_mod( 'shanyue_header_welcome' );
}


$wp_customize->add_setting( 'shanyue_header_email_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'shanyue_header_email_value', array(
	'label'    => __( 'Email', 'shanyue' ),
	'type'     => 'email',
	'section'  => 'shanyue-header_info',
	'priority' => 1
) );
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'shanyue_header_email_value', array(
		'selector'        => '.top-info .email',
		'render_callback' => 'shanyue_customize_partial_header_email',
	) );
}

function shanyue_customize_partial_header_email() {
	$email_value = get_theme_mod( 'shanyue_header_email_value' );
	if ( $email_value != '' ) {
		echo '<i class="fa fa-envelope"></i><a href="mailto:' . $email_value . '">' . $email_value . '</a>';
	}
}


$wp_customize->add_setting( 'shanyue_header_phone_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'shanyue_header_phone_value', array(
	'label'    => __( 'Phone Number', 'shanyue' ),
	'section'  => 'shanyue-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'shanyue_header_phone_value', array(
		'selector'        => '.top-info .phone',
		'render_callback' => 'shanyue_customize_partial_header_phone',
	) );
}

function shanyue_customize_partial_header_phone() {
	$phone_value = get_theme_mod( 'shanyue_header_phone_value' );
	if ( $phone_value != '' ) {
		echo '<i class="fa fa-phone"></i>' . '<a href="tel:' . $phone_value . '">' . $phone_value . '</a>';
	}
}

$wp_customize->add_setting( 'shanyue_header_wechat_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( new WP_Customize_Image_Control(
	$wp_customize,
	'shanyue_header_wechat_value',
	array(
		'label'    => __( 'Upload a wechat QRcode', 'shanyue' ),
		'section'  => 'shanyue-header_info',
		'settings' => 'shanyue_header_wechat_value',
		'priority' => 1
	)
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'shanyue_header_wechat_value', array(
		'selector'        => '.top-info .wechat',
		'render_callback' => 'shanyue_customize_partial_header_wechat',
	) );
}

function shanyue_customize_partial_header_wechat() {
	$wechat_value = get_theme_mod( 'shanyue_header_wechat_value' );
	if ( $wechat_value != '' ) {
		echo '<i class="fa fa-wechat"></i>' . __( 'QRcode', 'shanyue' ) . '<img src="' . $wechat_value . '"/>';
	}
}

$wp_customize->add_setting( 'shanyue_header_facebook_value', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( 'shanyue_header_facebook_value', array(
	'label'    => __( 'Facebook', 'shanyue' ),
	'section'  => 'shanyue-header_info',
	'priority' => 1
) );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'shanyue_header_facebook_value', array(
		'selector'        => '.top-info .facebook',
		'render_callback' => 'shanyue_customize_partial_header_facebook',
	) );
}

function shanyue_customize_partial_header_facebook() {
	$facebook_value = get_theme_mod( 'shanyue_header_facebook_value' );
	if ( $facebook_value != '' ) {
		echo '<i class="fa fa-facebook"></i>' . '<a href="' . $facebook_value . '" target="_blank">' . __( 'Access Facebook', 'shanyue' ) . '</a>';
	}
}
?>