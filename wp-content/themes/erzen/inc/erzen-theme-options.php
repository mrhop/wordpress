<?php
/**
 * Theme Option
 *
 * 
 */
if (!function_exists('erzen_slider_section_option')) :
    function erzen_slider_section_option()
    {
        $erzen_slider_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_slider_section_option', $erzen_slider_section_option);
    }
endif;

if (!function_exists('erzen_services_section_option')) :
    function erzen_services_section_option()
    {
        $erzen_services_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_services_section_option', $erzen_services_section_option);
    }
endif;

if (!function_exists('erzen_col_layout_option')) :
    function erzen_col_layout_option()
    {
        $erzen_col_layout_option = array(
            '6' => esc_html__('2 Column Layout', 'erzen'),
			'4' => esc_html__('3 Column Layout', 'erzen'),
        );
        return apply_filters('erzen_col_layout_option', $erzen_col_layout_option);
    }
endif;

if (!function_exists('erzen_aboutus_section_option')) :
    function erzen_aboutus_section_option()
    {
        $erzen_aboutus_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_aboutus_section_option', $erzen_aboutus_section_option);
    }
endif;

if (!function_exists('erzen_feature_section_option')) :
    function erzen_feature_section_option()
    {
        $erzen_feature_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_feature_section_option', $erzen_feature_section_option);
    }
endif;



if (!function_exists('erzen_header_section_option')) :
    function erzen_header_section_option()
    {
        $erzen_header_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_header_section_option', $erzen_header_section_option);
    }
endif;

if (!function_exists('erzen_footer_section_option')) :
    function erzen_footer_section_option()
    {
        $erzen_footer_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_footer_section_option', $erzen_footer_section_option);
    }
endif;

if (!function_exists('erzen_blog_section_option')) :
    function erzen_blog_section_option()
    {
        $erzen_blog_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_blog_section_option', $erzen_blog_section_option);
    }
endif;

if (!function_exists('erzen_contact1_section_option')) :
    function erzen_contact1_section_option()
    {
        $erzen_contact1_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_contact1_section_option', $erzen_contact1_section_option);
    }
endif;

if (!function_exists('erzen_contact2_section_option')) :
    function erzen_contact2_section_option()
    {
        $erzen_contact2_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_contact2_section_option', $erzen_contact2_section_option);
    }
endif;

if (!function_exists('erzen_pages_section_option')) :
    function erzen_pages_section_option()
    {
        $erzen_pages_section_option = array(
            'show' => esc_html__('Show', 'erzen'),
            'hide' => esc_html__('Hide', 'erzen')
        );
        return apply_filters('erzen_pages_section_option', $erzen_pages_section_option);
    }
endif;


?>

