<?php


function shanyue_page_sections_init() {

	//register the products custom post type
	$labels = array(
		'name'               => __( 'Page Section', 'shanyue' ),
		'singular_name'      => __( 'Page Section', 'shanyue' ),
		'add_new'            => __( 'Add New', 'shanyue' ),
		'add_new_item'       => __( 'Add New Page Section', 'shanyue' ),
		'edit_item'          => __( 'Edit Page Section', 'shanyue' ),
		'new_item'           => __( 'New Page Section', 'shanyue' ),
		'all_items'          => __( 'All Page Section', 'shanyue' ),
		'view_item'          => __( 'View Page Section', 'shanyue' ),
		'search_items'       => __( 'Search Page Sections', 'shanyue' ),
		'not_found'          => __( 'No Page Sections found', 'shanyue' ),
		'not_found_in_trash' => __( 'No Page Sections found in Trash', 'shanyue' ),
		'menu_name'          => __( 'Page Sections', 'shanyue' )
	);

	$args = array(
		'labels'              => $labels,
		'description'         => __( 'Sections in each pages for flexible mastery ', 'shanyue' ),
		'public'              => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'show_ui'             => true,
		'show_in_nav_menus'   => false,
		'show_in_menu'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'menu_position'       => null,
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', 'page-attributes' )
	);

	register_post_type( 'shanyue-p-sections', $args );

}

add_action( 'after_setup_theme', 'shanyue_page_sections_init' );


function shanyue_page_sections_meta_box( $post ) {

	// retrieve our custom meta box values
	$ps_meta = get_post_meta( $post->ID, '_shanyue_page_sections_data', true );

	$ps_type         = ( ! empty( $ps_meta['type'] ) ) ? $ps_meta['type'] : '';
	$ps_page_belong  = ( ! empty( $ps_meta['pageBelong'] ) ) ? $ps_meta['pageBelong'] : '';
	$ps_file_link    = ( ! empty( $ps_meta['fileLink'] ) ) ? $ps_meta['fileLink'] : '';
	$ps_page_related = ( ! empty( $ps_meta['pageRelated'] ) ) ? $ps_meta['pageRelated'] : '';
	$ps_group_slug   = ( ! empty( $ps_meta['groupSlug'] ) ) ? $ps_meta['groupSlug'] : '';

	//nonce field for security
	wp_nonce_field( 'meta-box-save', 'shanyue' );

	// display meta box form
	echo '<table class="shanyue-page-sections">';
	echo '<tr>';
	echo '<td>' . __( 'Type', 'shanyue' ) . ':</td><td><select name="shanyue_page_sections[type]" id="shanyue_page_sections[type]">
            <option value="slider"' . selected( $ps_type, 'slider', false ) . '>' . __( 'Slider', 'shanyue' ) . '</option>
            <option value="features"' . selected( $ps_type, 'features', false ) . '>' . __( 'Features', 'shanyue' ) . '</option>
        </select></td>';
	echo '</tr><tr>';
	echo '<td>' . __( 'Page Belong', 'shanyue' ) . ':</td><td>';
	wp_dropdown_pages( array(
		'selected' => $ps_page_belong,
		'name'     => 'shanyue_page_sections[pageBelong]'
	) );
	echo '</td>';
	echo '</tr><tr>';
	echo '<td>' . __( 'File Link', 'shanyue' ) . ':</td><td><input type="text" name="shanyue_page_sections[fileLink]" value="' . esc_attr( $ps_file_link ) . '" ></td>';
	echo '</tr><tr>';
	echo '<td>' . __( 'Page Related', 'shanyue' ) . ':</td><td>';
	wp_dropdown_pages( array(
		'selected' => $ps_page_related,
		'name'     => 'shanyue_page_sections[pageRelated]'
	) );
	echo '</td>';
	echo '</tr><tr>';
	echo '<td>' . __( 'Group Slug', 'shanyue' ) . ':</td><td><input type="text" name="shanyue_page_sections[groupSlug]" value="' . esc_attr( $ps_group_slug ) . '" size="50"></td>';
	echo '</tr>';
	echo '</table>';
}

function shanyue_page_sections_register_meta_box() {
	add_meta_box( 'shanyue-page-sections-meta', __( 'Section Info', 'shanyue' ), 'shanyue_page_sections_meta_box', 'shanyue-p-sections', 'side', 'default' );
}

add_action( 'add_meta_boxes', 'shanyue_page_sections_register_meta_box' );

function shanyue_page_sections_save_meta_box( $post_id ) {

	//verify the post type is for Halloween Products and metadata has been posted
	if ( get_post_type( $post_id ) == 'shanyue-page-sections' && isset( $_POST['shanyue_page_sections'] ) ) {

		//if autosave skip saving data
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		//check nonce for security
		wp_verify_nonce( 'meta-box-save', 'shanyue' );

		//store option values in a variable
		$shanyue_page_sections = $_POST['shanyue_page_sections'];

		//use array map function to sanitize option values
		$shanyue_page_sections = array_map( 'sanitize_text_field', $shanyue_page_sections );

		// save the meta box data as post metadata
		update_post_meta( $post_id, '_shanyue_page_sections_data', $shanyue_page_sections );

	}

}

add_action( 'save_post', 'shanyue_page_sections_save_meta_box' );

?>