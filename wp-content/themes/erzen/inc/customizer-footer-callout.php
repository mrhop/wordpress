<?php

    $wp_customize->add_section('erzen_footer_contact', array(
      'title'   => __('Footer Callout Section', 'erzen'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 170
    ));
	
	$wp_customize->add_setting(
    'erzen_contact2_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'erzen_contact2_sanitize_select',
    )
    );
    $erzen_contact2_s_hideshow = erzen_contact2_section_option();
    $wp_customize->add_control(
    'erzen_contact2_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Footer Callout', 'erzen'),
        'description' => esc_html__('Show/hide option for Footer Callout Section.', 'erzen'),
        'section' => 'erzen_footer_contact',
        'choices' => $erzen_contact2_s_hideshow,
        'priority' => 5
    )
    );
	
	$wp_customize->add_setting(
    'erzen_allpages_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'erzen_pagecallout_sanitize_select',
    )
    );
    $erzen_pages_section_hide = erzen_pages_section_option();
    $wp_customize->add_control(
    'erzen_allpages_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Show Callout on All Pages/posts', 'erzen'),
        'description' =>'',
        'section' => 'erzen_footer_contact',
        'choices' => $erzen_pages_section_hide ,
        'priority' => 6
    )
    );
	
	$wp_customize->add_setting('ctah_heading2', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('ctah_heading2', array(
      'label'   => __('Footer Callout Text', 'erzen'),
      'section' => 'erzen_footer_contact',
      'priority'  => 8
    ));

    $wp_customize->add_setting('ctah_btn_url2', array(
     'default'   =>'',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'esc_url_raw'
    ));

    $wp_customize->add_control('ctah_btn_url2', array(
      'label'   => __('Footer Button URL', 'erzen'),
      'section' => 'erzen_footer_contact',
      'priority'  => 10
    ));

    $wp_customize->add_setting('ctah_btn_text2', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('ctah_btn_text2', array(
      'label'   => __('Footer Button Text', 'erzen'),
      'section' => 'erzen_footer_contact',
      'priority'  => 12
    ));
?>