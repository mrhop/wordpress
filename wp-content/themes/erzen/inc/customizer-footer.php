<?php
 
// Footer Section
	
    $wp_customize->add_section('erzen-footer_info', array(
      'title'   => __('Footer Section', 'erzen'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 170
    ));
	
	$wp_customize->add_setting(
    'erzen_footer_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'erzen_footer_sanitize_select',
    )
    );
    $erzen_footer_section_hide_show_option = erzen_footer_section_option();
    $wp_customize->add_control(
    'erzen_footer_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Footer Option', 'erzen'),
        'description' => esc_html__('Show/hide option for Footer Section.', 'erzen'),
        'section' => 'erzen-footer_info',
        'choices' => $erzen_footer_section_hide_show_option,
        'priority' => 1
    )
    );
	
	
	$wp_customize->add_setting('erzen-footer_title', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'wp_kses_post'
    ));

    $wp_customize->add_control('erzen-footer_title', array(
      'label'   => __('Copyright', 'erzen'),
      'section' => 'erzen-footer_info',
	   'type'      => 'textarea',
      'priority'  => 1
    ));
	
?>	
	