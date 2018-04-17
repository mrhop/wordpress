<?php	
	
	// Blog section
	$wp_customize->add_section('erzen-blog_info', array(
      'title'   => __('Home Blog Section', 'erzen'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 160
    ));
	
	$wp_customize->add_setting(
    'erzen_blog_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'erzen_blog_sanitize_select',
    )
    );
    $erzen_blog_section_hide_show_option = erzen_blog_section_option();
    $wp_customize->add_control(
    'erzen_blog_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Blog Option', 'erzen'),
        'description' => esc_html__('Show/hide option for Blog Section.', 'erzen'),
        'section' => 'erzen-blog_info',
        'choices' => $erzen_blog_section_hide_show_option,
        'priority' => 1
    )
    );
	
	 $wp_customize->add_setting('erzen_blog_title', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen_blog_title', array(
      'label'   => __('Blog Title', 'erzen'),
      'section' => 'erzen-blog_info',
      'priority'  => 1
    ));
	
	$wp_customize->add_setting('erzen_blog_subtitle', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen_blog_subtitle', array(
      'label'   => __('Blog Subheading', 'erzen'),
      'section' => 'erzen-blog_info', 
	  'type'  => 'textarea',
      'priority'  => 4
    ));
?>	