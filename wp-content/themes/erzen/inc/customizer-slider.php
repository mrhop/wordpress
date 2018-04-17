<?php
/** Slider Section Settings starts **/
   

// Panel - Slider Section 1
    $wp_customize->add_section('sliderinfo', array(
      'title'   => esc_html__('Home Slider Section', 'erzen'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 130
    ));

	// hide show
	
	 $wp_customize->add_setting(
    'erzen_slider_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'erzen_slider_sanitize_select',
    )
   );
    $erzen_slider_section_hide_show_option = erzen_slider_section_option();
    $wp_customize->add_control(
    'erzen_slider_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Slider Option', 'erzen'),
        'description' => esc_html__('Show/hide option for Slider Section.', 'erzen'),
        'section' => 'sliderinfo',
        'choices' => $erzen_slider_section_hide_show_option,
        'priority' => 1
    )
  );
  
  $slider_no = 3;
	for( $i = 1; $i <= $slider_no; $i++ ) {
		$erzen_slider_page = 'erzen_slider_page_' .$i;
		$erzen_slider_btntxt = 'erzen_slider_btntxt_' . $i;
		$erzen_slider_btnurl = 'erzen_slider_btnurl_' .$i;

		$wp_customize->add_setting( $erzen_slider_page,
			array(
				'default'           => 1,
				'sanitize_callback' => 'erzen_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $erzen_slider_page,
			array(
				'label'    			=> esc_html__( 'Slider Page ', 'erzen' ) .$i,
				'section'  			=> 'sliderinfo',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);

		$wp_customize->add_setting( $erzen_slider_btntxt,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $erzen_slider_btntxt,
			array(
				'label'    			=> esc_html__( 'Slider Button Text ', 'erzen' ) .$i,
				'section'  			=> 'sliderinfo',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		$wp_customize->add_setting( $erzen_slider_btnurl,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $erzen_slider_btnurl,
			array(
				'label'    			=> esc_html__( 'Button URL', 'erzen' ) .$i,
				'section'  			=> 'sliderinfo',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
  }
/** Slider Section Settings end **/
?>