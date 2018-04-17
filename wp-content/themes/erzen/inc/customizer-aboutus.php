<?php

//	About Us section
	$wp_customize->add_section('aboutus',             
	array('title' => __('Home About Section', 'erzen'),        
	'description' => '',            
	'panel' => 'frontpage',		 
	'priority' => 140,));
	
	$wp_customize->add_setting(
    'erzen_aboutus_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'erzen_aboutus_sanitize_select',
    )
    );
    $erzen_aboutus_section_hide_show_option = erzen_aboutus_section_option();
    $wp_customize->add_control(
    'erzen_aboutus_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('About Us Option', 'erzen'),
        'description' => esc_html__('Show/hide option for About Us Section.', 'erzen'),
        'section' => 'aboutus',
        'choices' => $erzen_aboutus_section_hide_show_option,
        'priority' => 1
    )
    );

	
// About Us title
    $wp_customize->add_setting('erzen-about_title', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen-about_title', array(
      'label'   => __('About Title', 'erzen'),
      'section' => 'aboutus',
      'priority'  => 1
    ));
	
	$wp_customize->add_setting('erzen-about_subtitle', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen-about_subtitle', array(
      'label'   => __('About description', 'erzen'),
      'section' => 'aboutus', 
	  'type'  => 'textarea',
      'priority'  => 4
    ));
	
$about_no = 1;
	for( $i = 1; $i <= $about_no; $i++ ) {
		$erzen_about_page = 'erzen_about_page_' .$i;
		
		$wp_customize->add_setting( $erzen_about_page,
			array(
				'default'           => 1,
				'sanitize_callback' => 'erzen_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $erzen_about_page,
			array(
				'label'    			=> esc_html__( 'About Page ', 'erzen' ) .$i,
				'section'  			=> 'aboutus',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);
		
		
  }
?>