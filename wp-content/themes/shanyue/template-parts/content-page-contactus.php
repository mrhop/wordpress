<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shanyue
 */

?>


<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->
<?php
the_post_thumbnail( 'post-thumbnail', [ 'class' => 'page-feature-img img-responsive' ] ); ?>
<div class="entry-content row contact-us">
    <div class="column col-lg-6">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shanyue' ),
			'after'  => '</div>',
		) );
		?>
    </div>
    <div class="column col-lg-6">
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
</div><!-- .entry-content -->

<?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'shanyue' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
    </footer><!-- .entry-footer -->
<?php endif; ?>
