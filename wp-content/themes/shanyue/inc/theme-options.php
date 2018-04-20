<?php
/**
 * Theme Option
 *
 * 
 */
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
?>

