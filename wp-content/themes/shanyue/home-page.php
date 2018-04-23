<?php
/**
 * Template Name: Home Page
 * Created by PhpStorm.
 * User: Donghui Huo
 * Date: 2018/4/23
 * Time: 13:24
 */
get_header();

$slider_args = array(
	'post_type'  => 'shanyue-p-sections',
	'meta_key'   => '_group_slug',
	'meta_value' => 'home-slider',
	'orderby'    => 'menu-order',
	'order'      => 'asc'
);

$slider_query = new   wp_Query( $slider_args );
if ( $slider_query->have_posts() ) {
	?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
			<?php
			while ( $slider_query->have_posts() ) {
				$slider_query->the_post();
				$ps_meta         = get_post_meta( $post->ID, '_shanyue_page_sections_data', true );
				$ps_file_link_id = ( ! empty( $ps_meta['fileLinkId'] ) ) ? $ps_meta['fileLinkId'] : '';
				// Get the image src
				$slider_img_src = wp_get_attachment_image_src( $ps_file_link_id, 'full' );
				if ( isset( $slider_img_src ) && count( $slider_img_src ) > 0 ) {
					?>
                    <div class="swiper-slide">
                        <h1><?php the_title(); ?></h1>
                        <img src="<?php echo $slider_img_src[0]; ?>" style="width: 100%"/>
                    </div>
					<?php
				}
				wp_reset_postdata();
			}
			?>
        </div>
    </div>
	<?php
}
get_footer(); ?>