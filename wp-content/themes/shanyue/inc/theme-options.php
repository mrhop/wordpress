<?php
/**
 * Theme Option
 *
 * 
 */
if (!function_exists('shanyue_slider_section_option')) :
    function shanyue_slider_section_option()
    {
        $shanyue_slider_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_slider_section_option', $shanyue_slider_section_option);
    }
endif;

if (!function_exists('shanyue_services_section_option')) :
    function shanyue_services_section_option()
    {
        $shanyue_services_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_services_section_option', $shanyue_services_section_option);
    }
endif;

if (!function_exists('shanyue_col_layout_option')) :
    function shanyue_col_layout_option()
    {
        $shanyue_col_layout_option = array(
            '6' => esc_html__('2 Column Layout', 'shanyue'),
			'4' => esc_html__('3 Column Layout', 'shanyue'),
        );
        return apply_filters('shanyue_col_layout_option', $shanyue_col_layout_option);
    }
endif;

if (!function_exists('shanyue_aboutus_section_option')) :
    function shanyue_aboutus_section_option()
    {
        $shanyue_aboutus_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_aboutus_section_option', $shanyue_aboutus_section_option);
    }
endif;

if (!function_exists('shanyue_feature_section_option')) :
    function shanyue_feature_section_option()
    {
        $shanyue_feature_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_feature_section_option', $shanyue_feature_section_option);
    }
endif;



if (!function_exists('shanyue_header_section_option')) :
    function shanyue_header_section_option()
    {
        $shanyue_header_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_header_section_option', $shanyue_header_section_option);
    }
endif;

if (!function_exists('shanyue_footer_section_option')) :
    function shanyue_footer_section_option()
    {
        $shanyue_footer_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_footer_section_option', $shanyue_footer_section_option);
    }
endif;

if (!function_exists('shanyue_blog_section_option')) :
    function shanyue_blog_section_option()
    {
        $shanyue_blog_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_blog_section_option', $shanyue_blog_section_option);
    }
endif;

if (!function_exists('shanyue_contact1_section_option')) :
    function shanyue_contact1_section_option()
    {
        $shanyue_contact1_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_contact1_section_option', $shanyue_contact1_section_option);
    }
endif;

if (!function_exists('shanyue_contact2_section_option')) :
    function shanyue_contact2_section_option()
    {
        $shanyue_contact2_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_contact2_section_option', $shanyue_contact2_section_option);
    }
endif;

if (!function_exists('shanyue_pages_section_option')) :
    function shanyue_pages_section_option()
    {
        $shanyue_pages_section_option = array(
            'show' => esc_html__('Show', 'shanyue'),
            'hide' => esc_html__('Hide', 'shanyue')
        );
        return apply_filters('shanyue_pages_section_option', $shanyue_pages_section_option);
    }
endif;


?>

