<?php
/**
 * Template Name: Home Page
 * Created by PhpStorm.
 * User: Donghui Huo
 * Date: 2018/4/23
 * Time: 13:24
 */
get_header();

$slider_args  = array(
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
				if ( $ps_file_link_id !== '' ) {
					$slider_img_src = wp_get_attachment_image_src( $ps_file_link_id, 'full' );
				}
				if ( $ps_file_link_id !== '' ) {
					?>
                    <div class="swiper-slide">
                        <div class="text-wrapper">
                            <h1><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
                            <a href="<?php the_permalink( $ps_meta['pageRelated'] ); ?>">Read More</a>
                        </div>
                        <img src="<?php echo $slider_img_src[0]; ?>" style="width: 100%"/>
                    </div>
					<?php
				}
				wp_reset_postdata();
			}
			?>
        </div>
        <!-- Add Arrows -->
        <div class="fa fa-3x swiper-button fa-chevron-right swiper-button-next">
        </div>
        <div class="fa fa-3x swiper-button fa-chevron-left swiper-button-prev">
        </div>
    </div>
	<?php
}

$feature_args  = array(
	'post_type'  => 'shanyue-p-sections',
	'meta_key'   => '_group_slug',
	'meta_value' => 'home-feature',
	'orderby'    => 'menu-order',
	'order'      => 'asc'
);
$feature_query = new   wp_Query( $feature_args );
if ( $feature_query->have_posts() ) {
	?>
    <ul class="container features home-features row">
		<?php
		while ( $feature_query->have_posts() ) {
			$feature_query->the_post();
			$ps_meta         = get_post_meta( $post->ID, '_shanyue_page_sections_data', true );
			$ps_file_link_id = ( ! empty( $ps_meta['fileLinkId'] ) ) ? $ps_meta['fileLinkId'] : '';
			$ps_icon_class   = ( ! empty( $ps_meta['iconClass'] ) ) ? $ps_meta['iconClass'] : '';
			// Get the image src
			if ( $ps_file_link_id !== '' ) {
				$feature_img_src = wp_get_attachment_image_src( $ps_file_link_id, 'full' );
			}
			?>
            <li class="column col-lg">
				<?php
				if ( $ps_file_link_id !== '' ) {
					?>
                    <img src="<?php echo $feature_img_src[0]; ?>"/>
					<?php
				} elseif ( isset( $ps_icon_class ) ) {
					echo '<i class="' . $ps_icon_class . '"></i>';
				}
				?>
                <h1><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>
            </li>
			<?php
			wp_reset_postdata();
		}
		?>
    </ul>
	<?php
}
?>
    <div class="contact-us">
        <div class="container row">
            <div class="column col-md-6">
                <h1><?php echo __( 'Contact Us', 'shanyue' ) ?></h1>
            </div>
            <div class="column col-md-6">
                <ul>
					<?php
					$shanyue_header_email_value = get_theme_mod( 'shanyue_header_email_value' );
					if ( $shanyue_header_email_value != '' ) {
						?>
                        <li>
                            <a href="mailto:<?php echo $shanyue_header_email_value ?>">
                                <i class="fa fa-envelope"></i>
                                <span><?php echo $shanyue_header_email_value ?></span></a>
                        </li>
					<?php } ?>
					<?php
					$shanyue_header_phone_value = get_theme_mod( 'shanyue_header_phone_value' );
					if ( $shanyue_header_phone_value != '' ) { ?>
                        <li>
                            <a href="tel:<?php echo $shanyue_header_phone_value ?>"><i
                                        class="fa fa-phone"></i>
                                <span><?php echo $shanyue_header_phone_value ?></span></a>
                        </li>
					<?php } ?>
					<?php
					$shanyue_header_facebook_value = get_theme_mod( 'shanyue_header_facebook_value' );
					if ( $shanyue_header_facebook_value != '' ) {
						?>
                        <li>
                            <a href="<?php echo $shanyue_header_facebook_value ?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                                <span><?php echo __( 'Access Facebook', 'shanyue' ) ?></span></a>
                        </li>
					<?php } ?>
                </ul>

				<?php
				$shanyue_header_wechat_value = get_theme_mod( 'shanyue_header_wechat_value' );
				if ( $shanyue_header_wechat_value != '' ) {
					?>
                    <div class="wechat-div">
                        <i class="fa fa-wechat"></i>
                        <span><?php echo __( 'Wechat', 'shanyue' ) ?></span>
                        <img class="wechat-qrcode" src="<?php echo $shanyue_header_wechat_value ?>"/>
                    </div>
				<?php } ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>