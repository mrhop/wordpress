<?php 
// Header Section
   $wp_customize->add_section('erzen-header_info', array(
      'title'   => __('Top Header Section', 'erzen'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 130
    ));
	
	$wp_customize->add_setting(
    'erzen_header_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'erzen_header_sanitize_select',
    )
    );
    $erzen_header_section_hide_show_option = erzen_header_section_option();
    $wp_customize->add_control(
    'erzen_header_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Header Option', 'erzen'),
        'description' => esc_html__('Show/hide option for Header Section.', 'erzen'),
        'section' => 'erzen-header_info',
        'choices' => $erzen_header_section_hide_show_option,
        'priority' => 1
    )
    );
	
	$wp_customize->add_setting('erzen-header_year', array(
    'default'   =>'',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen-header_year', array(
      'label'   => __('Plain Header Text', 'erzen'),
      'section' => 'erzen-header_info',
      'priority'  => 1
    ));
	
	
   
   $wp_customize->add_setting('erzen_header_email_value', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen_header_email_value', array(
      'label'   => __('Email', 'erzen'),
      'section' => 'erzen-header_info',
      'priority'  => 1
    ));
	
	
	
	$wp_customize->add_setting('erzen_header_phone_value', array(
      'default'   =>'',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen_header_phone_value', array(
      'label'   => __('Contact', 'erzen'),
      'section' => 'erzen-header_info',
      'priority'  => 1
    ));
	
	
	
	$wp_customize->add_setting('erzen_header_time_value', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen_header_time_value', array(
      'label'   => __('Opening Hours', 'erzen'),
      'section' => 'erzen-header_info',
      'priority'  => 1
    ));
?>