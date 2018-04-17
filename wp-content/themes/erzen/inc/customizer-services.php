<?php
//  Services section
	$wp_customize->add_section('services',              
	array('title' => __('Home Service Section', 'erzen'),          
	'description' => '',             
	'panel' => 'frontpage',		 
	'priority' => 140,));
	
	$wp_customize->add_setting(
    'erzen_services_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'erzen_services_sanitize_select',
    )
    );
    $erzen_services_section_hide_show_option = erzen_services_section_option();
    $wp_customize->add_control(
    'erzen_services_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Services Option', 'erzen'),
        'description' => esc_html__('Show/hide option Section.', 'erzen'),
        'section' => 'services',
        'choices' => $erzen_services_section_hide_show_option,
        'priority' => 1
    )
    );

// column layout
	$wp_customize->add_setting(
	'erzen_service_col_layout',
	array(
		'default' => 'three',
		'sanitize_callback' => 'erzen_col_layout_sanitize_select',
	)
	);
	$erzen_section_col_layout = erzen_col_layout_option();
	$wp_customize->add_control(
	'erzen_service_col_layout',
	array(
		'type' => 'radio',
		'label' => esc_html__('Column Layout option ', 'erzen'),
		'description' => '',
		'section' => 'services',
		'choices' => $erzen_section_col_layout,
		'priority' => 2
	)
	);
	
// Services title
    $wp_customize->add_setting('erzen-services_title', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen-services_title', array(
      'label'   => __('Services Section Title', 'erzen'),
      'section' => 'services',
      'priority'  => 3
    ));
	
	$wp_customize->add_setting('erzen-services_subtitle', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('erzen-services_subtitle', array(
      'label'   => __('Service Description', 'erzen'),
      'section' => 'services', 
	  'type'  => 'textarea',
      'priority'  => 4
    ));

$service_no = 6;
	for( $i = 1; $i <= $service_no; $i++ ) {
		$erzen_servicepage = 'erzen_service_page_' . $i;
		$erzen_serviceicon = 'erzen_page_service_icon_' . $i;
		
		// Setting - Feature Icon
		$wp_customize->add_setting( $erzen_serviceicon,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $erzen_serviceicon,
			array(
				'label'    			=> esc_html__( 'Service Icon ', 'erzen' ).$i,
				'description' =>  __('Select a icon in this list <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Font Awesome icons</a> and enter the class name','erzen'),
				'section'  			=> 'services',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( $erzen_servicepage,
			array(
				'default'           => 1,
				'sanitize_callback' => 'erzen_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $erzen_servicepage,
			array(
				'label'    			=> esc_html__( 'Service Page ', 'erzen' ) .$i,
				'section'  			=> 'services',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);
  }
	?>