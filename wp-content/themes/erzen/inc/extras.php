<?php
/**
 * Functions hooked to core hooks.
 *
 */

if ( ! function_exists( 'erzen_customize_search_form' ) ) :

	/** Customize search form.
	 **/
	function erzen_customize_search_form() {

		$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
			<label>
			<span class="screen-reader-text">' . esc_html( '', 'label', 'erzen' ) . '</span>
			<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Type to search here...', 'placeholder', 'erzen' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label', 'erzen' ) . '" />
			</label>
			<input type="submit" class="search-submit" value="&#xf002;" /></form>';

		return $form;

	}
	
	endif;

add_filter( 'get_search_form', 'erzen_customize_search_form', 15 );
