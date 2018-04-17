<?php 	
// Callout Section

  $wp_customize->add_section('erzen-contact', array(
      'title'   => __('Home Header Callout Section', 'erzen'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 140
    ));
	
	$wp_customize->add_setting(
    'erzen_contact1_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'erzen_contact1_sanitize_select',
    )
    );
    $erzen_contact1_s_hideshow = erzen_contact1_section_option();
    $wp_customize->add_control(
    'erzen_contact1_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Header Callout', 'erzen'),
        'description' => esc_html__('Show/hide option for Header Callout Section.', 'erzen'),
        'section' => 'erzen-contact',
        'choices' => $erzen_contact1_s_hideshow,
        'priority' => 1
    )
    );
	
	$wp_customize->add_setting('ctah_heading1', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('ctah_heading1', array(
      'label'   => __('Header Callout Text', 'erzen'),
      'section' => 'erzen-contact',
      'priority'  => 2
    ));

    $wp_customize->add_setting('ctah_btn_url1', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'esc_url_raw'
    ));

    $wp_customize->add_control('ctah_btn_url1', array(
      'label'   => __('Button URL', 'erzen'),
      'section' => 'erzen-contact',
      'priority'  => 3
    ));

    $wp_customize->add_setting('ctah_btn_text1', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('ctah_btn_text1', array(
      'label'   => __('Button Text', 'erzen'),
      'section' => 'erzen-contact',
      'priority'  => 4
    ));
?>	